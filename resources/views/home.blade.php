@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="card">
        <h1>Welcome to Simple POS</h1>
        <p>This is the landing page of the Point of Sale application, rebuilt in Laravel.</p>
        <p>Use the navigation bar above to view the <a href="{{ route('customers') }}">Customer Accounts</a>
           and <a href="{{ route('users') }}">User Accounts</a> pages, or learn more on the
           <a href="{{ route('about') }}">About</a> page.</p>
    </div>
@endsection