@extends('_layouts.master')

@section('pageID', '404')

@section('navbar-classes', 'navbar-light')

@section('navbarLogo', 'internxt_icon_xcloud.svg')

@section('pageTitle', 'Page Not Found')

@section('body')

    <div style="height: calc(100vh - 180px)" class="d-flex text-center justify-content-center align-content-center flex-column">
        <h1>Page Not Found</h1>
        <p>The page you were trying to view does not exist.</p>
    </div>

@endsection
