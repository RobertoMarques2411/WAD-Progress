<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Laundry</title>
    <style>
        body { font-family: Arial, sans-serif; background: #3368A0; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .box { background: #66A3BF; padding: 30px; border-radius: 8px; width: 300px; }
        h2 { color: #F2EFE7; text-align: center; }
        label { display: block; color: #F2EFE7; margin-top: 10px; font-size: 14px; }
        input { width: 100%; padding: 8px; margin-top: 5px; border: none; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; margin-top: 20px; padding: 10px; background: #1c2b4a; color: white; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; }
        .err { color: #cc0000; font-size: 12px; margin-top: 10px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Login Sistem Laundry</h2>
        <form method="POST" action="{{ url('/login') }}">
            @csrf
            <label>Email</label>
            <input type="email" name="email" required>
            
            <label>Password</label>
            <input type="password" name="password" required>
            
            <button type="submit">Masuk</button>
        </form>
        @if($errors->any()) <div class="err">{{ $errors->first() }}</div> @endif
    </div>
</body>
</html>