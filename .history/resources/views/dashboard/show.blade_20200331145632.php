@extends('layouts.auth')
@section('content')
<h1>Dashboard</h1>
<a href="{{ route('logout') }}" class="dropdown-item">
    <i class="fas fa-power-off"></i>
    <span>Logout</span>
</a>
@endsection
