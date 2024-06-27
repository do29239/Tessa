<?php

namespace App\Exports;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class GeneralExport implements FromCollection, WithHeadings
{
    protected $model;
    protected $columns;
    protected $headings;

    public function __construct(Model $model, array $columns, array $headings)
    {
        $this->model = $model;
        $this->columns = $columns;
        $this->headings = $headings;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return $this->model::select($this->columns)->get();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return $this->headings;
    }
}
