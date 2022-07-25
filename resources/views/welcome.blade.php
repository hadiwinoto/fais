@extends('layouts.welcome')
@section('content')
<nav class="navbar navbar-expand-md shadow-sm mb-4" style="background-color: #9E1E21;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color:#FFFFFF;">
                    <h6>OJK</h6>
                </a>
                <a class="navbar-brand" href="{{ url('/') }}" style="color:#FFFFFF;">
                    <h6>REGULASI</h6>
                </a>
                <a class="navbar-brand" href="{{ url('/') }}" style="color:#FFFFFF;">
                    <h6>OJK</h6>
                </a>
                <a class="navbar-brand" href="{{ url('/') }}" style="color:#FFFFFF;">
                    <h6>DATA DAN STATISTIK</h6>
                </a>
                <a class="navbar-brand" href="{{ url('/') }}" style="color:#FFFFFF;">
                    <h6>BERITA DAN KEGIATAN</h6>
                </a>
                <a class="navbar-brand" href="{{ url('/') }}" style="color:#FFFFFF;">
                    <h6>#VISITOJK</h6>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                         <!-- <a class="navbar-brand" href="{{ url('/') }}">
                            PTA
                         </a> -->
                    </ul>

                    <!-- Right Side Of Navbar -->
                </div>
            </div>
            </nav>
            <welcome-page-component></welcome-page-component>

@endsection
<style>
    .navbar-brand{
    font-size: 18px;
    }   
</style>