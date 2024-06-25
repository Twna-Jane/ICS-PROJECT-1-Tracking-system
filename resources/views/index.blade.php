<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @csrf
    <h1> Track & Trace </h1>
    <form action="{{ route('cargo.search') }}" method="GET">   
        <input type="text" name="search" placeholder="Enter AWB Number">
        <button type="submit">Submit</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>AWBNo</th>
                <th>From</th>
                <th>To</th>
                <th>Weight</th>
                <th>Pieces</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cargos as $cargo)
            <tr>
                <td>{{$cargo->awbno}}</td>
                <td>{{$cargo->from}}</td>
                <td>{{$cargo->to}}</td>
                <td>{{$cargo->weight}}</td>
                <td>{{$cargo->created_at}}</td>
            </tr>   
            @endforeach
        </tbody>
    </table>

</body>
</html>