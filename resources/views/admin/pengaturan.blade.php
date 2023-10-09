@extends('admin.master')

@section('content') 
@if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-6 col-lg-6 col-md-6" style="padding:0">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12" style="margin:0">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Pengaturan Smart Infus</h1>
                            </div>
                 
                  <form action="/tambahwifi" method="POST">
        @csrf
        <label for="ssid">SSID:</label>
        <input type="text" name="ssid" id="ssid" class="form-control form-control-user" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" class="form-control form-control-user" required>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>


                </div>
              </div>
            </div>
            @endsection