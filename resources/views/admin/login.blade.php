<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login — Sudama Farsan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body class="admin-body admin-body--center">
    <div class="admin-login-card">
        <h1>SUDAMA FARSAN</h1>
        <p>Admin Panel Login</p>

        @if($errors->any())
            <div class="admin-alert admin-alert--error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.attempt') }}">
            @csrf
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus>

            <label>Password</label>
            <input type="password" name="password" required>

            <label class="admin-checkbox"><input type="checkbox" name="remember"> Remember me</label>

            <button type="submit">Log In</button>
        </form>
    </div>
</body>
</html>
