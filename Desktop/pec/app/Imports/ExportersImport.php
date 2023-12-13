<?php

namespace App\Imports;

use App\Models\Exporter;
use Maatwebsite\Excel\Concerns\ToModel;

class ExportersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Exporter([
            "company_name" => $row[0],
            "contact_name" => $row[1],
            "address" => $row[2],
            "phone" => $row[3],
            "email" => $row[4],
            "website" => $row[5],
            "industry" => $row[6],
            "description" => $row[7],
        ]);
    }
}
