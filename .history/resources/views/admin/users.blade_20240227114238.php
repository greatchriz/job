@extends('layouts.dashboard.layout')

@section('upper-title')

<div class="upper-title-box">
    <h3>List of all Users</h3>

</div>

@endsection

@section('content')
    <x-admin-content :users="$users"/>
@endsection
