<?php

namespace App\Exports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
// use Maatwebsite\Excel\Concerns\WithMapping;

class SiswaExport implements FromCollection, WithHeadings
{
    protected $siswa;

    public function __construct($siswa)
    {
        $this->siswa = $siswa;
    }

    public function collection()
    {
        // return $this->siswa;
        // return Siswa::with('lembaga')->get()->map(function ($item) {
        //     return [
        //         'nis' => $item->nis,
        //         'nama_siswa' => $item->nama_siswa,
        //         'email' => $item->email,
        //         'lembaga_id' => $item->lembaga->nama_lembaga,
        //     ];
        // });
        return $this->siswa->map(function ($siswa) {
            return [
                'nis' => $siswa->nis,
                'nama_siswa' => $siswa->nama_siswa,
                'email' => $siswa->email,
                'nama_lembaga' => $siswa->lembaga->nama_lembaga,
            ];
        });
    }

    public function headings(): array
    {
        return [
            // 'ID',
            'NIS',
            'Nama Siswa',
            'Email',
            'Nama Lembaga',
        ];
    }
}
