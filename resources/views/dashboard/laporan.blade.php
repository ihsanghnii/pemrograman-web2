<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>{{ $title }}</title>
</head>

<body>
    <h1>{{ $title }}</h1>
    <h2>Tahun {{ $tahun }}</h2>

    <table>
        <tr>
            <th>Program Studi</th>
            <th>Jumlah Mahasiswa</th>
        </tr>
        @foreach ($data_mhs as $item)
            <tr>
                <td>{{ $item['prodi'] }}</td>
                <td>{{ $item['jumlah'] }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
