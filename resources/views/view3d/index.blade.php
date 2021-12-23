<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="antialiased">
<table border="1">
    <thead>
    <tr>
        <th>id</th>
        <th>date</th>
        <th>playerid</th>
        <th>agentid</th>
        <th>currency</th>
        <th>bet</th>
        <th>win</th>
        <th>rake</th>
        <th>tournament</th>
        <th>net</th>
        <th>fin</th>
        <th>aams_ticket</th>
        <th>aams_table</th>
    </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->date }}</td>
            <td>{{ $item->playerid }}</td>
            <td>{{ $item->agentid }}</td>
            <td>{{ $item->currency }}</td>
            <td>{{ $item->bet }}</td>
            <td>{{ $item->win }}</td>
            <td>{{ $item->rake }}</td>
            <td>{{ $item->tournament }}</td>
            <td>{{ $item->net }}</td>
            <td>{{ $item->fin }}</td>
            <td>{{ $item->aams_ticket }}</td>
            <td>{{ $item->aams_table }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
