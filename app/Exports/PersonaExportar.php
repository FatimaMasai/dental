<?php

namespace App\Exports;

use App\Models\Persona;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PersonaExportar implements FromCollection, WithCustomStartCell, WithMapping, WithHeadings, ShouldAutoSize, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Persona::all();
    }

    public function startCell(): string
    {
        //el A2 indicamos dq fila quiero q inice en el excel
        return 'A2';
    }

    public function headings(): array
    {
        return [
            'Nombre',
            'Apellido Paterno',
            'Apellido Materno',
            'Carnet',
            'Fecha Nac',
            'Sexo',
            'Celular',
            'Email',
        ];
    }

    public function map($persona): array
    {
        //mostramos solo los campos que quremos mostrar en el excel
        return [
            $persona->nombres,
            $persona->apellido_paterno,
            $persona->apellido_materno,
            $persona->carnet_identidad,
            $persona->fecha_nac,
            $persona->sexo,
            $persona->celular,
            $persona->email,


        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->setTitle('Personas');
        $sheet->getStyle('A2:H2')->applyFromArray([
            'font' => [
                'bold' => true,
                'name' => 'Arial',

            ],

            'alignment' => [
                'horizontal' => 'center',
            ],
            'fill' => [
                'fillType' => 'solid',
                'startColor' => [
                    'argb' => 'E0EF0F',
                ],
            ],
        ]);


        $sheet->getStyle('A2:H97')->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => 'thin'
                ],
            ],
        ]);

    }



}
