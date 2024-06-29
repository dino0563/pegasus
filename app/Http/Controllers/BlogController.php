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
        // dd($blogs);
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
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
            $request->file('gambar')->storeAs('public/blog/gambar', $gambarName);
            $blog->gambar = $gambarName;
        }

        $blog->save();

        return redirect()->route('blog.index')->with('status', 'New Blog Added Successfully!');
    }

    public function destroy($blog_id)
    {
        $blog = Blog::findOrFail((int)$blog_id); // Ensure $portfolio_id is cast to an integer
        if ($blog->gambar) {
            $destination = 'public/blog/gambar/' . $blog->gambar;
            if (File::exists($destination)) {
                File::delete($destination);
            }
        }
        $blog->delete();
        return redirect(route('blog.index'))->with('status', 'Blog Deleted Successfully');
    }

    public function edit(Request $request, $blog_id)
    {
        $blog = Blog::findOrFail($blog_id);
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $blog_id)
    {
        $blog = Blog::find($blog_id);
        $blog->judul = $request['judul'];
        $blog->penulis = $request['penulis'];
        $blog->tanggal = $request['tanggalProyek'];
        $blog->deskripsi = $request['deskripsi'];

        if ($request->hasFile('gambar')) {
            $destination = 'storage/blog/gambar/' . $blog->gambar;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = 'blog-' . now()->timestamp . '.' . $extension;
            $file->storeAs('public/blog/gambar/', $filename);
            $blog->gambar = $filename;
        }

        $blog->update();

        return redirect(route('blog.index'))->with('success', 'Blog item updated successfully.');
    }
}
