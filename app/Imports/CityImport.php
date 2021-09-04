<?php

namespace App\Imports;

use App\City;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\SkipsFailures;

class CityImport implements ToModel,SkipsEmptyRows,WithHeadingRow,WithValidation,SkipsOnFailure
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    use Importable,SkipsFailures;

    public function model(array $row)
    {
        return new City([
            'name'    => $row['name'],
            'slug'    => $row['slug'],
            'status'  => 1,
        ]);
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'slug' => Rule::unique('cities', 'slug'),
        ];
    }
}
