<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolio.home', compact('portfolios'));
    }
    public function show()
    {
        $portfolios = Portfolio::paginate(5);
        return view('user.home', compact('portfolios'));
    }
    // public function show_details($slug)
    // {
    //     $portfolios = Portfolio::where('slug', $slug)->first();
    //     return view('user.portfolio-detail', compact('portfolios'));
    // }

    public function detailPortfolio($slug)
    {
        $portfolios = Portfolio::where('slug', $slug)->first();
        return view('user.portfolio-detail', compact('portfolios'));
    }

    public function display()
    {
        $portfolios = Portfolio::all();
        return view('user.portfolio', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolio.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'nullable|integer',
            'nama' => 'required|max:250',
            'gambar' => 'required|file|image|mimes:jpg,jpeg,png|max:10240',
            'lokasi' => 'required|max:250',
            'kategori' => 'required|max:250',
            'tanggalProyek' => 'required|date',
            'client' => 'nullable|max:250',
            'deskripsi' => 'required|max:250',
        ]);

        $portfolio = new Portfolio();
        $portfolio->nama = $validatedData['nama'];
        $portfolio->lokasi = $validatedData['lokasi'];
        $portfolio->kategori = $validatedData['kategori'];
        $portfolio->tanggalProyek = $validatedData['tanggalProyek'];
        $portfolio->client = $validatedData['client'];
        $portfolio->deskripsi = $validatedData['deskripsi'];

        if ($request->file('gambar')) {
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $gambarName = '-portfolio-' . now()->timestamp . '.' . $extension;
            $request->file('gambar')->storeAs('public/portfolio/gambar', $gambarName);
            $portfolio->gambar = $gambarName; // Menyimpan nama file background
        }

        $portfolio->save();

        return redirect()->route('portfolio.index')->with('success', 'Portfolio created successfully!');
    }

    // public function show(Portfolio $portfolio)
    // {
    //     return view('portfolio.show', compact('portfolio'));
    // }

    public function edit(Request $request, $portfolio_id)
    {
        $portfolio = Portfolio::findOrFail($portfolio_id);
        return view('admin.portfolio.edit', compact('portfolio'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $portfolio_id)
    {
        $portfolio = Portfolio::find($portfolio_id);
        $portfolio->nama = $request['nama'];
        $portfolio->lokasi = $request['lokasi'];
        $portfolio->kategori = $request['kategori'];
        $portfolio->tanggalProyek = $request['tanggalProyek'];
        $portfolio->client = $request['client'];
        $portfolio->deskripsi = $request['deskripsi'];

        if ($request->hasFile('gambar')) {
            $destination = 'storage/portfolio/gambar/' . $portfolio->gambar;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = '-portfolio-' . now()->timestamp . '.' . $extension;
            $file->storeAs('public/portfolio/gambar/', $filename);
            $portfolio->gambar = $filename;
        }

        $portfolio->update();

        return redirect(route('portfolio.index'))->with('success', 'Portfolio item updated successfully.');
    }

    public function destroy($portfolio_id)
    {
        $portfolio = Portfolio::findOrFail((int) $portfolio_id); // Ensure $portfolio_id is cast to an integer
        if ($portfolio->gambar) {
            $destination = 'storage/portfolio/gambar/' . $portfolio->gambar;
            if (File::exists($destination)) {
                File::delete($destination);
            }
        }
        $portfolio->delete();
        return redirect(route('portfolio.index'))->with('status', 'Portfolio Deleted Successfully');
    }
}
