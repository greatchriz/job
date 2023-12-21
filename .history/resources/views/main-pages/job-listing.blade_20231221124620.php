@extends('normal-layout')
    @section('header')
        @include('normal-header')
    @endsection

    @section('page-title')
        @include('page-title', ['pageTitle' => 'Job Listing'])
    @endsection

    @section('content')
        @include('job-list')
    @endsection
