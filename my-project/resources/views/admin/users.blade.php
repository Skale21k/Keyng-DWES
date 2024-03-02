<!-- resources/views/admin/users.blade.php -->
@extends('layouts.plantilla')
@section('content')
@include('layouts._partials.admin')
@component('admin._components.usuarios')
@slot('users', $users)
@endcomponent
@endsection
