<?php

namespace App\Exports;

use App\peminjaman_sarana;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class peminjaman_sarana_export implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return peminjaman_sarana::all();
    }

    public function headings(): array
    {
        return [
            'Nama Pengaju',
            'Status Pengaju',
            'No. Telepon Pengaju',
            'Status Pengaju',
            'Tanggal Peminjaman',
            'Tanggal kembali',
            'Status Pengajuan',
            'Status Peminjaman',
        ];
    }

    public function map($peminjaman_sarana): array
    {
        return [
            $peminjaman_sarana->nama_pengaju,
            $peminjaman_sarana->status_pengaju,
            $peminjaman_sarana->no_telp_pengaju,
            $peminjaman_sarana->status_pengaju,
            $peminjaman_sarana->tanggal_peminjaman,
            $peminjaman_sarana->tanggal_kembali,
            $peminjaman_sarana->status_pengajuan,
            $peminjaman_sarana->status_peminjaman,
        ];
    }
}
