<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
        body {
            margin: 50px;
            align-items: center;
            display: flex;
            justify-content: center;
            text-align: center;
        }
        table{
            width: 50%;
            margin: auto;
            border: 1px solid black;
            padding: 10px;
            border-radius: 25px;
        }
        td, th{
            border: 1px solid black;
            padding: 10px;
          
        }
        h1 {
            margin-left:195px
        }
    </style>
</head>
<body>
    <h1>Anime List:</h1>
    <table>
        <tr>
            <th>Name of the Anime</th>
            <th>Genre</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['genre'] }}</td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>