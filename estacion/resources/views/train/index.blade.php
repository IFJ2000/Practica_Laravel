<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Pasajeros</th>
                <th>Año del tren</th>
                <th>Id del tipo del tren</th>
                
            </tr>

        </thead>

        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->name }}</td>
                    <td>{{ $train->passengers }}</td>
                    <td>{{ $train->year }}</td>
                    <td>{{$train->train_type_id}}</td>
                        

                   

                </tr>
            @endforeach
            
</body>
</html>