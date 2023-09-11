<?php

namespace App\Imports;

use App\Models\bcsakhi;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BcsakhiImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new bcsakhi([
            'name'     => $row['name'],
            'designation'    => $row['designation'],
            'contact'    => $row['contact'], 
            'parent_shg'    => $row['parent_shg'],
            'village'    => $row['village'],
            'bank_name'    => $row['bank_name'],
            'branch_name'    => $row['branch_name'],
            'branch_code'    => $row['branch_code'],
            'block'    => $row['block'],
            'block_type'    => $row['block_type'],
            'district'    => $row['district'],
            'corporate_bc'    => $row['corporate_bc'],
            'agent_id'    => $row['agent_id'],
            'date_code_creation'    => $row['date_code_creation'],
            'iibf_certificate'    => $row['iibf_certificate'],
            'model'    => $row['model'],
            'machine_id'    => $row['machine_id'],
            'no_village'    => $row['no_village'],
            'no_shg'    => $row['no_shg'],
            'od_limit'    => $row['od_limit'],
            'settlement_account'    => $row['settlement_account'],
            'created_by'    => $row['created_by'],
            'date'    => $row['date'],
        ]);
    }
}
