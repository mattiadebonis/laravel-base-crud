<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        @foreach($comics as $item)
        <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->brand }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="{{ route("beers.show", $item->id) }}" class="btn btn-success">
                            SHOW
                        </a>
                    </td>
                    
                    
                </tr> 
        @endforeach 
    
    </body>
</html>
