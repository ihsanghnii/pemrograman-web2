<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    @php
    $username = "ihsan";
    $role = "admin";
    @endphp

    @if ($role == "admin")
        <h1>Hello {{ $username }} </h1>
        <p>Role anda adalah admin</p>
    @elseif($role == "kasir")
        <h1>Hello {{ $username }}</h1>
        <p>Role anda adalah kasir</p>
    @else
        <h1>Hello {{ $username }}</h1>
        <p>Role anda tidak diketahui</p>
    @endif
</body>
</html>