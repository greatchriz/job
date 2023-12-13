@extends('normal-layout')
    @section('header')
        @include('normal-header')
    @endsection

    @section('page-title')
        @include('page-title', ['pageTitle' => 'Terms & Conditions'])
    @endsection

    @section('content')
        <x-main-pages.contact-us.map-section />

        <x-main-pages.contact-us.contact-section />

        <x-main-pages.contact-us.call-to-action />
    @endsection

