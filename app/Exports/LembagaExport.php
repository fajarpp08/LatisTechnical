<?php

namespace App\Exports;

use App\Models\Lembaga;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;

class LembagaExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // return Lembaga::all();
        return Lembaga::get()->map(function ($item) {
            return [
                'id' => $item->id, // Ganti dengan nama kolom aktual
                'nama_lembaga' => $item->nama_lembaga, // Ganti dengan nama kolom aktual
            ];
        });
    }

    public function headings(): array
    {
        return [
            'ID Lembaga ',
            'Nama Lembaga',
        ];
    }
}
