<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
            background: #fafafa;
        }
        .login-card {
            border: 1px solid #777;
            padding: 1.5rem 2rem;
            width: 280px;
            background: #fff;
        }
        .login-card h2 {
            margin: 0 0 0.5rem 0;
            font-size: 22px;
        }
        .subtitle {
            font-size: 13px;
            color: #555;
            margin-bottom: 1rem;
        }
        .error-box {
            color: #b91c1c;
            font-size: 13px;
            margin-bottom: 1rem;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        label {
            display: block;
            font-size: 14px;
            margin-bottom: 4px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 6px 8px;
            box-sizing: border-box;
            border: 1px solid #777;
            border-radius: 2px;
        }
        button {
            padding: 6px 16px;
            cursor: pointer;
            border: 1px solid #777;
            background: #e5e5e5;
            font-weight: normal;
        }
        button:hover {
            background: #d4d4d4;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>Login</h2>
        <div class="subtitle">Masuk untuk membuka dashboard</div>

        @if($errors->has('error'))
            <div class="error-box">[ {{ $errors->first('error') }} ]</div>
        @endif

        <form method="POST" action="/login">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="{{ old('username') }}" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Masuk</button>
        </form>
    </div>
</body>
</html>