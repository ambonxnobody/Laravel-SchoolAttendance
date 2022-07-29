<?php

namespace App\Imports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Siswa([
            'nis' => $row[1],
            'nama' => $row[2],
            'tmp_lahir' => $row[3],
            'tgl_lahir' => $row[4],
            'jns_kelamin' => $row[5],
            'alamat' => $row[6],
            'phone' => $row[7],
            'email' => $row[8],
            'kelas_id' => $row[9]
        ]);
    }
}