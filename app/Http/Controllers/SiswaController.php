<?php

namespace App\Http\Controllers;

use App\Exports\SiswaExport;
use App\Models\Lembaga;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    { {

            $siswas = Siswa::paginate(10); // 10 items per page
            // $keyword = Siswa::paginate(10); // 10 items per page
            $keyword = $request->input('keyword');


            return view('admin.siswa.index', compact('siswas', 'keyword'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lembagas = Lembaga::all();

        return view('admin.siswa.create', compact('lembagas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { {
            $validator = Validator::make($request->all(), [
                'nis' => 'required|numeric|unique:siswas,nis',
                'nama_siswa' => 'required',
                'email' => 'required|email',
                'file' => 'nullable|mimes:jpg,png|max:100',
                'lembaga_id' => 'required|exists:lembagas,id',


            ], [
                'nis.required' => 'Kolom NIS harus diisi.',
                'nis.numeric' => 'Kolom NIS harus berupa angka.',
                'nis.unique' => 'NIS tersebut sudah digunakan, harap pilih NIS lain.',
                'nama_siswa' => 'kolom nama harus diisi',
                'email.required' => 'kolom email harus diisi',
                'email.email' => 'Format email tidak valid.',
                'file.mimes' => 'File harus berupa format JPG atau PNG.',
                'lembaga_id.required' => 'kolom lembaga harus diisi',
            ]);

            if ($validator->fails()) {
                return redirect('/siswa/create')->withErrors($validator)->withInput();
            }
            $siswaData = $validator->valid();

            $siswaData = new Siswa();
            $siswaData->nis = $request->nis;
            $siswaData->nama_siswa = $request->nama_siswa;
            $siswaData->email = $request->email;
            $siswaData->lembaga_id = $request->lembaga_id;

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('siswa', $fileName, 'public');
                $siswaData->file = $fileName;
            }

            $siswaData->save();

            return redirect('/siswa')->with('pesan', 'Data berhasil ditambahkan');
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
        return view('admin.siswa.edit', [
            'siswas' => Siswa::find($id),
            'lembagas' => Lembaga::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $siswas = Siswa::findOrFail($id);

        $validatedData = $request->validate([
            'nis' => 'required|numeric',
            'nama_siswa' => 'required',
            'email' => 'required|email',
            'file' => 'nullable|mimes:jpg,png|max:100',
            'lembaga_id' => 'required|exists:lembagas,id',
        ], [
            'nis.required' => 'Kolom NIS harus diisi.',
            'nis.numeric' => 'Kolom NIS harus berupa angka.',
            'nama_siswa' => 'kolom nama harus diisi',
            'email.required' => 'kolom email harus diisi',
            'email.email' => 'Format email tidak valid.',
            'file.mimes' => 'File harus berupa format JPG atau PNG.',
            'lembaga_id.required' => 'kolom lembaga harus diisi',
        ]);

        $siswas->nis = $validatedData['nis'];
        $siswas->nama_siswa = $validatedData['nama_siswa'];
        $siswas->email = $validatedData['email'];
        $siswas->lembaga_id = $validatedData['lembaga_id'];

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('siswa', $fileName, 'public');
            $siswas->file = $fileName;
        }

        $siswas->save();

        return redirect('/siswa')->with('pesan', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Siswa::destroy($id);
        return redirect('/siswa')->with('pesan', 'Data berhasil dihapus');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');


        $siswas = Siswa::where(function ($query) use ($keyword) {
            $query->where('nis', 'like', "%$keyword%")
                ->orWhere('nama_siswa', 'like', "%$keyword%")
                ->orWhere('email', 'like', "%$keyword%")
                ->orWhere('lembaga_id', 'like', "%$keyword%");
        })->paginate(10);

        return view('admin.siswa.index', compact('siswas', 'keyword'));
    }

    // public function SSSS(Request $request)
    // {
    //     $search = $request->input('search');

    //     $products = Siswa::when($search, function ($query) use ($search) {
    //         $query->where('name', 'like', '%' . $search . '%');
    //     })->get();

    //     return view('products.index', compact('products', 'search'));
    // }

    public function exportExcelSiswa()
    {
        // $keyword = $request->input('keyword');
        // return Excel::download(new SiswaExport($keyword), 'siswa.xlsx');

        return Excel::download(new SiswaExport, 'siswa.xlsx');
    }
}
