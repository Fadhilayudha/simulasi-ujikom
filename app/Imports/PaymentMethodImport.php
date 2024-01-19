<?php

namespace App\Imports;

use App\Models\PaymentMethod;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class PaymentMethodImport implements ToModel, WithStartRow, WithCustomCsvSettings
{
    public function startRow(): int
    {
        return 2;
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ','
        ];
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PaymentMethod([
            'name'          => $row[0],
            'type'          => $row[1],
            'code'          => $row[2],
            'payment_fee'   => $row[3],
            'icon'          => $row[4],
        ]);
    }
}
