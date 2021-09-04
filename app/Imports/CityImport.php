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
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithBatchInserts;

class CityImport implements ToModel,SkipsEmptyRows,WithHeadingRow,WithValidation,SkipsOnFailure,WithChunkReading,ShouldQueue,WithBatchInserts
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
    public function chunkSize(): int
    {
        return 1000;
    }
    public function batchSize(): int
    {
        return 1000;
    }
}
