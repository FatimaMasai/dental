<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte Personas</title>

    <style>
        table{
            font-size: 12px;
            font-family: sans-serif !important; 
            border-collapse:collapse;
            
        }
        table thead tr th{
            text-align: left;
            /* background-color: rgb(7, 7, 159);
            color: white; */
            border:1px solid black;
            padding: 5px; 
            font-size: 14px;
        }
        table tbody tr td{
            text-align: left; 
            padding-bottom: 8px; 
            padding-left:5px; 
            padding-right:5px;  
        }

        table, td {
        border:1px solid black;
      }
      h2{
          text-align: center;
          
      }

    </style>


</head>
<body>

    <div class="container">
        <h2>REPORTE PERSONA</h2>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th colspan="2">Nombre Completo</th>
                        <th>Edad</th>
                        <th>Celular</th>
                        <th>Email</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personas as $item)
                        <tr> 
                            <td>{{ $loop->iteration}} </td> 
                            <td colspan="2"> {{ $item->nombres }} {{ $item->apellido_paterno }} {{ $item->apellido_materno }}</td>
                            <td> {{ $item->fecha_nac }}</td>
                            <td> {{ $item->celular }}</td>
                            <td> {{ $item->email }}</td>
                            
                        </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>