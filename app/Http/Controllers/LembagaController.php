<?php

namespace App\Http\Controllers;

use App\Exports\LembagaExport;
use App\Models\Lembaga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class LembagaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { {
            $lembagas = Lembaga::paginate(10); // 10 items per page

            return view('admin.lembaga.index', compact('lembagas'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.lembaga.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { {
            $validator = Validator::make($request->all(), [
                'nama_lembaga' => 'required',

            ], [
                'nama_lembaga.required' => 'Kolom ini harus diisi!',
            ]);

            if ($validator->fails()) {
                return redirect('/lembaga/create')->withErrors($validator)->withInput();
            }
            $lembagas = $validator->valid();

            $lembagas = new Lembaga();
            $lembagas->nama_lembaga = $request->nama_lembaga;

            $lembagas->save();

            return redirect('/lembaga')->with('pesan', 'Data berhasil ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.lembaga.edit', [
            'lembagas' => Lembaga::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lembagas = Lembaga::findOrFail($id);

        $validatedData = $request->validate([
            'nama_lembaga' => 'required',

        ], [

            'nama_lembaga.required' => 'kolom ini harus diisi',
        ]);

        $lembagas->nama_lembaga = $validatedData['nama_lembaga'];

        $lembagas->save();

        return redirect('/lembaga')->with('pesan', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Lembaga::destroy($id);
        return redirect('/lembaga')->with('pesan', 'Data berhasil dihapus');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');


        $lembagas = Lembaga::where(function ($query) use ($keyword) {
            $query->where('nama_lembaga', 'like', "%$keyword%");
            // ->orWhere('model', 'like', "%$keyword%")
            // ->orWhere('noplat', 'like', "%$keyword%");
        })->paginate(10);

        return view('admin.lembaga.index', compact('lembagas', 'keyword'));
    }

    public function exportExcelLembaga()
    {
        // Panggil view dan simpan hasilnya ke dalam variabel
        // $view = view('admin.lembaga.index');

        return Excel::download(new LembagaExport, 'lembaga.xlsx');
    }
}
