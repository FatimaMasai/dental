<?php

namespace App\Exports;

use App\Models\CategoriaServicio;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class CategoriaServicioExportar implements FromCollection, WithCustomStartCell, WithMapping, WithHeadings, ShouldAutoSize, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CategoriaServicio::all();
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
        ];
    }

    public function map($categoriaServicio): array
    {
        //mostramos solo los campos que quremos mostrar en el excel
        return [
            $categoriaServicio->nombre, 


        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->setTitle('Categoria Servicios');
        $sheet->getStyle('A2')->applyFromArray([
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


        $sheet->getStyle('A2:A100')->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => 'thin'
                ],
            ],
        ]);

    }


}
