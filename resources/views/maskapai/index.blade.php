<!-- resources/views/maskapai/index.blade.php -->
<h1>Daftar Maskapai</h1>

<ul>
    @foreach($maskapais as $maskapai)
        <li><a href="{{ url('/maskapai/' . $maskapai->id_maskapai) }}">{{ $maskapai->nama_maskapai }}</a></li>
    @endforeach
</ul>
