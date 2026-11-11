<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Simple POS</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: system-ui, -apple-system, "Segoe UI", sans-serif; background: #f4f6f8; color: #1f2933; }
        nav { background: #0b6b3a; padding: 0 24px; display: flex; align-items: center; gap: 8px; }
        nav .brand { color: #fff; font-weight: 700; margin-right: 24px; padding: 16px 0; }
        nav a { color: #d7f0e0; text-decoration: none; padding: 16px 14px; }
        nav a:hover { background: #09562e; color: #fff; }
        nav a.active { background: #09562e; color: #fff; font-weight: 600; }
        main { max-width: 960px; margin: 32px auto; padding: 0 24px; }
        h1 { margin-top: 0; }
        table { width: 100%; border-collapse: collapse; background: #fff; border-radius: 6px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,.1); }
        th, td { padding: 12px 14px; text-align: left; border-bottom: 1px solid #e4e7eb; }
        th { background: #e8f3ec; }
        .card { background: #fff; padding: 24px; border-radius: 6px; box-shadow: 0 1px 3px rgba(0,0,0,.1); }
        footer { text-align: center; color: #7b8794; padding: 24px; font-size: 14px; }
    </style>
</head>
<body>
    <nav>
        <span class="brand">Simple POS</span>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
        <a href="{{ route('customers') }}" class="{{ request()->routeIs('customers') ? 'active' : '' }}">Customer Accounts</a>
        <a href="{{ route('users') }}" class="{{ request()->routeIs('users') ? 'active' : '' }}">User Accounts</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>IT0049 TFA5 &mdash; Laravel POS Foundations</footer>
</body>
</html>
