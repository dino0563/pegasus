<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\BlogFormRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog', compact('blogs'));
    }

    public function create()
    {
        return view('admin.create-blog');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:250',
            'penulis' => 'required|max:250',
            'tanggal' => 'required|date',
            'deskripsi' => 'required|max:250',
            'gambar' => 'nullable|file|image|mimes:jpg,jpeg,png|max:2048', // maksimum 2MB
        ]);

        $blog = new Blog();
        $blog->judul = $validatedData['judul'];
        $blog->penulis = $validatedData['penulis'];
        $blog->tanggal = $validatedData['tanggal'];
        $blog->deskripsi = $validatedData['deskripsi'];

        // Handle image upload
        if ($request->file('gambar')) {
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $gambarName = 'blog-' . now()->timestamp . '.' . $extension;
            $request->file('gambar')->storeAs('storage/blog/gambar', $gambarName);
            $blog->gambar = $gambarName;
        }

        $blog->save();

        return redirect()->route('blog.index')->with('status', 'New Blog Added Successfully!');
    }

    public function destroy($blog_id)
    {
        $blog = Blog::findOrFail((int)$blog_id); // Ensure $portfolio_id is cast to an integer
        if($blog->gambar) {
            $destination = 'storage/blog/gambar/' . $blog->gambar;
            if(File::exists($destination)){
                File::delete($destination);
            }
        }
        $blog->delete();
        return redirect(route('blog.index'))->with('status', 'Blog Deleted Successfully');
    }

    public function edit(Request $request, $blog_id)
    {
        $blog = Blog::findOrFail($blog_id);
        return view('admin.edit-blog', compact('blog'));
    }

    public function update(BlogRequest $request, $blog_id)
    {
        $data = $request->validated();

        $blog = Blog::findOrFail($blog_id);
        $this->authorize('update', $blog);

        $blog->judul = $data['judul'];
        $blog->penulis = $data['penulis'];
        $blog->tanggal = $data['tanggal'];
        $blog->deskripsi = $data['deskripsi'];

        if ($request->hasFile('gambar')) {
            $destination = 'public/blog/gambar/' . $blog->gambar;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('public/blog/gambar/', $filename);
            $blog->gambar = $filename;
        }

        $blog->save();

        return redirect(route('blog.index'))->with('success', 'Blog item updated successfully.');
    }
}
