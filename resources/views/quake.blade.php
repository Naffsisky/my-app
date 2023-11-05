@extends('layout.master')

@section('quake')
    <h1>INFO GEMPA TERBARU</h1>
    <p class="lead desc">
    Sumber Diperoleh Secara Resmi dari
    <a href="https://data.bmkg.go.id"
        >BMKG</a
    >
    Real Time.
    </p>
    <div class="line"></div>
    <table class="table-responsive">
        <tr>
            <th>Tanggal</th>
            <th>Wilayah</th>
            <th>Jam</th>
            <th>Magnitude</th>
            <th>Potensi</th>
        </tr>
        <tr>
            <td>{{ $quakeData['tanggal'] }}</td>
            <td>{{ $quakeData['wilayah'] }}</td>
            <td>{{ $quakeData['jam'] }}</td>
            <td>{{ $quakeData['magnitude'] }}</td>
            <td>{{ $quakeData['potensi'] }}</td>
        </tr>
    </table>  
    <div class="line"></div>
    <h2 class="align-center">Recently Earthquakes > 5 Magnitude</h2>
    <table class="table-responsive">
    <tr>
        <th>Tanggal</th>
        <th>Jam</th>
        <th>Wilayah</th>
        <th>Magnitude</th>
        <th>Potensi</th>
    </tr>
</table>
    <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
@endsection
