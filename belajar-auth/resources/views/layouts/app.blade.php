<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Don N Done')</title>
    <style>
        body { font-family: Arial, sans-serif; background: #3368A0; color: #C8DFDB; margin: 0; padding: 0; }
        header { background: #1c2b4a; color: #fff; padding: 16px 24px; margin-bottom: 24px; text-align: center; }
        header .brand { font-size: 20px; font-weight: bold; margin: 0 0 10px; }
        header nav a { color: #fff; text-decoration: none; margin-right: 18px; font-size: 14px; }
        header nav a:hover { text-decoration: underline; }
        header nav a.active { color: #00c2d1; font-weight: bold; }
        .box { background: #66A3BF; padding: 20px; max-width: 950px; margin: 0 auto 30px; border-radius: 8px; }
        h1 { color: #F2EFE7; text-align: center; margin-top: 0; }
        h3 { color: #F2EFE7; border-bottom: 1px solid #3368A0; padding-bottom: 4px; }
        label { display: block; margin-top: 8px; font-size: 13px; color: #F2EFE7; font-weight: bold; }
        select, input[type=text], input[type=number] { padding: 6px; width: 100%; box-sizing: border-box;
            border: 1px solid #3368A0; border-radius: 4px; margin-bottom: 8px; background: #fff; color: #1c2b4a; }
        button { background: #1c2b4a; color: #F2EFE7; padding: 8px 16px; border: none;
            border-radius: 4px; cursor: pointer; font-weight: bold; }
        button:hover { background: #3368A0; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; background: #fff; }
        th { background: #1c2b4a; color: #F2EFE7; padding: 8px; border: 1px solid #1c2b4a; font-size: 13px; }
        td { padding: 6px; border: 1px solid #66A3BF; color: #1c2b4a; text-align: center; font-size: 13px; }
        td input[type=number] { width: 70px; margin: 0; padding: 4px; text-align: center; }
        td select { width: 130px; margin: 0; padding: 4px; font-size: 12px; }
        td form { margin: 0; }
        .btn-small { padding: 4px 8px; font-size: 12px; }
        .btn-update { background: #3368A0; }
        .btn-update:hover { background: #1c2b4a; }
        .delete { color: #cc0000; text-decoration: none; font-weight: bold; font-size: 12px; }
        .delete:hover { text-decoration: underline; }
        .alert { padding: 10px; background: #1c2b4a; color: #F2EFE7; margin-bottom: 12px; border-radius: 4px; }
        .err { color: #cc0000; font-size: 12px; font-weight: bold; }
    </style>
</head>
<body>
<header>
    <p class="brand">Don N Done</p>
    <nav>
        <a href="/service.html">Service &amp; Rate Module</a>
        <a href="/machine2.php">Machinery &amp; Equipment Module</a>
        <a href="/customer.html">Customer Data Module</a>
        <a href="{{ route('materials.index') }}" class="active">Cleaning Material Module</a>
    </nav>
</header>

<div class="box">
    @if (session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif
    @yield('content')
</div>
</body>
</html>