<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--<link href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css">-->

</head>
<body>
    <h2>Lista Libros</h2>

    <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        
										<th>Categoria</th>
										<th>Nombre</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($libros as $libro)
                                        <tr>
                                                                                       
											<td>

                                                {{ $libro->categoria->nombre }}

                                            </td>
											<td>{{ $libro->nombre }}</td>

                                          
                                        </tr>
                                    @endforeach
                                </tbody>
    </table>

</body>
</html>