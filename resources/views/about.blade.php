@extends('layouts.app')

@section('title', 'About')

@section('content')
    <div class="card">
        <h1>About</h1>
        <p>This Point of Sale (POS) application was built for IT0049 (Web System Technologies),
           Technical Formative Assessment 5, using the Laravel framework and the MVC pattern.</p>
        <ul>
            <li><strong>Route</strong> &mdash; <code>routes/web.php</code> decides which controller method runs.</li>
            <li><strong>Controller</strong> &mdash; prepares the data (a static PHP array for now).</li>
            <li><strong>View</strong> &mdash; a Blade template renders the response as HTML.</li>
        </ul>
        <p><strong>Author:</strong> Thomas Cedric M. Smith (TB31)</p>
    </div>
@endsection