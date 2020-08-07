<?php

namespace App\Exports;

use App\Evento;
use Illuminate\Support\Facades\Date;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class EventosExport implements FromCollection,WithHeadings,WithMapping
{

    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array{
        return [
            'Numero Evento',
            'Actividad',
            'Distrito',
            'Institucion',
            'Nombre',
            'Genero',
            'Edad',
            'Ocupacion',
            'Observacion',
            'Fecha de creación',
        ];
    }
    public function collection()
    {
        return Evento::all();
    }
    public function map( $evento): array
    {
        return [
            $evento->num_evento,
            $evento->actividad->nombre,
            $evento->distrito,
            $evento->institucion,
            $evento->autor->name,
            $evento->genero,
            $evento->edad,
            $evento->ocupacion,
            $evento->observacion,
            $evento->created_at
        ];
    }

}
