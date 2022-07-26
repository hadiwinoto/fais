<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SI-KAJI</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <ul class="navbar-nav ms-auto">
                    <img
                        class="mt-1"
                        width="30px" height="30" 
                        src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.6MEn1wZkViQK-XUfpCl4ogHaHv%26pid%3DApi&f=1">
                    </img>
                    <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <!-- <span class="text-bold">Tri Kartika</span> -->
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/profile">
                                        Tri Kartika
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </div>
                    </li>
                </ul>
                <!-- <el-menu :default-active="activeIndex" class="el-menu-demo" mode="horizontal" @select="handleSelect"   active-text-color="#9E1E21">
                    <el-menu-item index="1">
                        <span class="bold">Beranda</span>
                    </el-menu-item>
                    <el-menu-item index="2">Standar Akuntansi</el-menu-item>
                    <el-menu-item index="3">Standar Pedoman Pemeriksaan</el-menu-item>
                    <el-menu-item index="4">Tata Kelola</el-menu-item>
                    <el-menu-item index="4">Panduan</el-menu-item>
                </el-menu> -->
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home">Beranda</a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link" href="#">Standar Akuntansi</a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link" data-mdb-toggle="tooltip" title="Standar Pedoman Pemeriksaan" href="/spp">SPP</a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link" href="#">Tata Kelola</a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link" href="#">Panduan</a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link" href="#"></a>
                        </li>
                        
                    </ul>
                    <div class="input-group w-auto my-auto d-none d-sm-flex">
                         <input type="text" class="form-control" placeholder="Search"/>
                    </div>

                    </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                         <img
                            class="mt-1"
                            width="120px" height="44" 
                            src="https://www.ojk.go.id/SiteAssets/logo2.png">
                        </img>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- @yield('subheader') -->
        <div class="subheader_nav" style="background-color: #9E1E21;">
            <nav class="navbar navbar-expand-md shadow-sm" style="border-top: 1px outset; ">
                @yield('subheader')
            </nav>
        </div>
       
        <main class="py-4">
            @yield('content')
        </main>
        <footer class="main-footer">
            <div class="text-left p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2022 Copyright:
                <a class="text-reset fw-bold" href="#">SI-KAJI x OJK</a>
                <span> | </span>&nbsp;&nbsp;
                <span>Alamat</span>&nbsp;&nbsp;
                <span>Telepon</span>&nbsp;&nbsp;
                <span>Fax</span>&nbsp;&nbsp;
                <span>Email</span>&nbsp;&nbsp;
            </div>
            <!-- Copyright -->
       </footer>

    </div>
</body>
<script>
  export default {
    data() {
      return {
        activeIndex: '1',
        activeIndex2: '1'
      };
    },
    methods: {
      handleSelect(key, keyPath) {
        console.log(key, keyPath);
      }
    }
  }
</script>

<style>
        .main-footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>

</html>

