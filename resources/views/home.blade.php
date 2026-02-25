@extends('layouts.app')

@section('content')

<div class="kategori-container">

    <div class="kategori-box" style="background-image: url('{{ asset('bilder/bil_blocket.jpg') }}')">
        Bil
    </div>

    <div class="kategori-box" style="background-image: url('{{ asset('bilder/mobler.png') }}')">
        Möbler
    </div>

    <div class="kategori-box" style="background-image: url('{{ asset('bilder/troja.jpg') }}')">
        Kläder
    </div>

    <div class="kategori-box" style="background-image: url('{{ asset('bilder/bat.jpg') }}')">
        Båt
    </div>

    <div class="kategori-box" style="background-image: url('{{ asset('bilder/elektronik.jpg') }}')">
        Elektronik
    </div>

    <div class="kategori-box" style="background-image: url('{{ asset('bilder/mc.jpg') }}')">
        MC
    </div>

    <div class="kategori-box" style="background-image: url('{{ asset('bilder/bostad.jpg') }}')">
        Hyr Bostad
    </div>

    <div class="kategori-box" style="background-image: url('{{ asset('bilder/lantbruksmaskin.webp') }}')">
        Lantbruksmaskin
    </div>

</div>

@endsection