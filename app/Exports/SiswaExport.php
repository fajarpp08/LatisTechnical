<?php

namespace App\Exports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SiswaExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    
    // protected $keyword;

    // public function __construct($keyword)
    // {
    //     $this->keyword = $keyword;
    // }

    public function collection()
    {
        // return Siswa::where(function ($query) {
        //     $query->where('nis', 'like', '%' . $this->keyword . '%')
        //         ->orWhere('nama_siswa', 'like', '%' . $this->keyword . '%')
        //         ->orWhere('email', 'like', '%' . $this->keyword . '%')
        //         ->orWhere('lembaga_id', 'like', '%' . $this->keyword . '%');
        // })->get();
        return Siswa::with('lembaga')->get()->map(function ($item) {
            return [
                'nis' => $item->nis,
                'nama_siswa' => $item->nama_siswa,
                'email' => $item->email,
                'lembaga_id' => $item->lembaga->nama_lembaga,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'NIS',
            'Nama',
            'Email',
            'Lembaga',
        ];
    }
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     //
    // }
}
