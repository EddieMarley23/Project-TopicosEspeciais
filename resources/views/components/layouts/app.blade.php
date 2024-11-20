@php
    $nomeBreadCrumb = 'Interpretador de Sentimentos';
    if (auth()->check()) {
        $nomeBreadCrumb = 'Bem vindo, ' . auth()->user()->name;
    }
@endphp

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto Tópicos Especias I</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
</head>
<style>
    @font-face {
        font-family: 'KG Happy';
        src: url('{{ asset('KGHAPPYSolid.ttf') }}') format('truetype');
    }
    * {font-family: 'KG Happy', sans-serif; font-weight: 400 !important;}
</style>
<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <!-- Navbar -->
        <x-layout.top-navbar />
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-color: #ff5757">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">{{ $nomeBreadCrumb }}</h1>
                        </div><!-- /.col -->
{{--                        <div class="col-sm-6">--}}
{{--                            <ol class="breadcrumb float-sm-right">--}}
{{--                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>--}}
{{--                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Login</a></li>--}}
{{--                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Cadastro</a></li>--}}
{{--                            </ol>--}}
{{--                        </div><!-- /.col -->--}}
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    {{ $slot }}
                </div>
            </div>
            <!-- /.content -->
        </div>
    </div>
    <!-- ./wrapper -->

    <x-layout.scripts />
</body>
</html>
