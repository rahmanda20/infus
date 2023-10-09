@extends('admin.master')
@section('content')
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <br>
    <br>
    <form action="/tambahwifi" method="POST">
        @csrf
        <label for="ssid">SSID:</label>
        <input type="text" name="ssid" id="ssid" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection
