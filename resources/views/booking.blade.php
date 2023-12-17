
<!-- resources/views/booking.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Pemesanan</h1>

        <!-- Pemesanan Pesawat Form -->
        <form action="/pesawat/search" method="post">
            @csrf
            <label for="destination">Tujuan:</label>
            <input type="text" name="tujuan_terbang" id="tujuan_terbang" required>

            <label for="destination">Asal Terbang:</label>
            <input type="text" name="asal_terbang" id="asal_terbang" required>

            <label for="date">Tanggal:</label>
            <input type="datetime" name="waktu_berangkat" id="waktu_berangkat" required>

            <button type="submit">Cari Pesawat</button>
        </form>

        <!-- Pemesanan Hotel Form -->
        <form action="/hotel/search" method="post">
            @csrf
            <label for="city">Nama Hotel:</label>
            <input type="text" name="nama_hotel" id="nama_hotel" required>

            <label for="city">Lokasi:</label>
            <input type="text" name="lokasi" id="lokasi" required>

            <label for="check_in">Check-in:</label>
            <input type="datetime" name="check_in" id="check_in" required>

            <label for="check_out">Check-out:</label>
            <input type="datetime" name="check_out" id="check_out" required>

            <!-- Tambahkan elemen formulir hotel sesuai kebutuhan -->

            <button type="submit">Cari Hotel</button>
        </form>
    </div>
@endsection
