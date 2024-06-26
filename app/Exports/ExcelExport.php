<?php

namespace App\Exports;

use App\Models\Registration;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ExcelExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings():array{
        return [
            'id',
            'psa_id',
            'last_name',
            'first_name',
            'middle_name',
            'hospital_name',
            'hospital_address',
            'email',
            'contact_number',
            'gender',
            'membership',
            'senior_citizen',
            'proof_payment',
            'trainee_cert',
            'created_at',
            'updated_at',
        ];
    }

    public function collection()
    {
        return Registration::all();
    }
}
