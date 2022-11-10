<?php

namespace App\Exports;

use App\Models\Paciente;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PacienteExportar implements FromCollection, WithCustomStartCell, WithMapping, WithHeadings, ShouldAutoSize, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //php artisan make:export PacienteExportar--model=Paciente este ejecutar
        return Paciente::all();
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

            'alergia',
            'observacion',
            'recomendado',
            'responsable',
            'antecedentes',

            
        ];
    }

    public function map($paciente): array
    {
        //mostramos solo los campos que quremos mostrar en el excel
        return [
            $paciente->persona->nombres,
            $paciente->persona->apellido_paterno,
            $paciente->persona->apellido_materno,
            $paciente->persona->carnet_identidad,
            $paciente->persona->fecha_nac,
            $paciente->persona->sexo,
            $paciente->persona->celular,
            $paciente->persona->email,

            $paciente->alergia, 
            $paciente->observacion,
            $paciente->recomendado,
            $paciente->responsable,
            $paciente->antecedentes,


        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->setTitle('Pacientes');
        $sheet->getStyle('A2:M2')->applyFromArray([
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


        $sheet->getStyle('A2:M97')->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => 'thin'
                ],
            ],
        ]);

    }


}
