<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolio.home', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'nullable|integer',
            'nama' => 'required|max:250',
            'gambar' => 'required|file|image|mimes:jpg,jpeg,png',
            'lokasi' => 'required|max:250',
            'kategori' => 'required|max:250',
            'tanggalProyek' => 'required|date',
            'client' => 'nullable|max:250',
            'deskripsi' => 'required|max:250',
        ]);

        $data = $request->only(['id', 'nama', 'lokasi', 'kategori', 'tanggalProyek', 'client', 'deskripsi']); // Pastikan hanya mengambil data yang aman untuk disimpan

        if ($request->file('gambar')) {
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $gambarName = $request->nama . '-gambar-' . now()->timestamp . '.' . $extension;
            $request->file('gambar')->storeAs('public/portfolio/gambar', $gambarName);
            $data['gambar'] = $gambarName; // Menyimpan nama file background
        }

        $Portfolio = Portfolio::create($data);


        // if ($Portfolio) {
        //     Session::flash('status', 'success');
        //     Session::flash('message', 'Portfolio item created successfully!');
        // }

        return redirect()->route('portfolio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        return view('portfolio.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit($portfolio_id)
    {
        return view('portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $data = $request->only(['nama', 'lokasi', 'kategori', 'tanggalProyek', 'client', 'deskripsi']); // Pastikan hanya mengambil data yang aman untuk disimpan

        if ($request->file('gambar')) {
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $gambarName = $request->nama . '-gambar-' . now()->timestamp . '.' . $extension;
            $request->file('gambar')->storeAs('public/gambar', $gambarName);
            $data['gambar'] = $gambarName; // Menyimpan nama file background
        }

        $portfolio->update($data);

        return redirect()->route('portfolio.index')
            ->with('success', 'Portfolio item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($portfolio_id)
    {
        $portfolio = Portfolio::findOrFail((int)$portfolio_id); // Ensure $portfolio_id is cast to an integer
        if($portfolio->gambar) {
            $destination = 'storage/portfolio/gambar/' . $portfolio->gambar;
            if(File::exists($destination)){
                File::delete($destination);
            }
        }
        $portfolio->delete();
        return redirect(route('portfolio.index'))->with('status', 'Portfolio Deleted Successfully');
    }
}

