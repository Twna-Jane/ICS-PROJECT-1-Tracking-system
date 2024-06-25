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
    <form id="searchForm" action="{{ route('tracktrace.search') }}" method="GET">   
        <input type="text" name="search" placeholder="Enter AWB Number">
        <button type="submit">Submit</button>
    </form>

    <div id="searchResults">
    <table class="cargo">
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
                <td>{{$cargo->pieces}}</td>
            </tr>   
            @endforeach
        </tbody>
    </table>
    <table class="tcargo">
        <thead>
            <tr>
                <th>Flight</th>
                <th>Status</th>
                <th>Location</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tcargos as $tcargo)
            <tr>
                <td>{{$tcargo->flight}}</td>
                <td>{{$tcargo->status}}</td>
                <td>{{$tcargo->location}}</td>
                <td>{{$tcargo->created_at}}</td>
            </tr>   
            @endforeach
        </tbody>
    </table>
    </div>

</body>
</html>