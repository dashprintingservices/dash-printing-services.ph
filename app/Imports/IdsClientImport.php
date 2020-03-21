<?php

namespace App\Imports;

use App\IdData;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class IdsClientImport implements ToModel, WithBatchInserts
{
    /**
    * @param array $row
    *   
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (!isset($row[0])) {
            return null;
        }
    
        return new IdData([
            'id_no'             => $row[0],
            'full_name'         => $row[1], 
            'position'          => $row[2], 
            'address'           => $row[3], 
            'contact_number'    => $row[4], 
            'date_of_birth'     => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[5]), 
            'ptc_name'          => $row[6], 
            'ptc_address'       => $row[7], 
            'ptc_relationship'  => $row[8], 
            'ptc_contact_number'=> $row[9], 
        ]);
    }

    public function batchSize(): int
    {
        return 200;
    }
}
