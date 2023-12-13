@extends('normal-layout')
    @section('header')
        @include('normal-header')
    @endsection

    @section('page-title')
        @include('components.main-pages.page-title', ['pageTitle' => 'About Us'])
    @endsection

    @section('content')
        <h1>About Us</h1>
    @endsection


