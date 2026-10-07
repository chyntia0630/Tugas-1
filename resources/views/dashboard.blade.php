<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
            background: #fafafa;
        }
        .dashboard-box {
            border: 1px dashed #444;
            padding: 1.5rem;
            width: 380px;
            background: #fff;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px dashed #444;
            padding-bottom: 0.8rem;
            margin-bottom: 1rem;
        }
        .header h3 {
            margin: 0;
            font-size: 18px;
        }
        .btn-logout {
            background: none;
            border: none;
            color: #1a0dab;
            cursor: pointer;
            text-decoration: underline;
            font-size: 14px;
            padding: 0;
        }
        .content p {
            margin: 0.5rem 0;
            line-height: 1.4;
        }
    </style>
</head>
<body>
    <div class="dashboard-box">
        <div class="header">
            <h3>Dashboard</h3>
            <form method="POST" action="/logout" style="margin: 0;">
                @csrf
                <button type="submit" class="btn-logout">[ Logout ]</button>
            </form>
        </div>
        <div class="content">
            <p><strong>Selamat datang, {{ Auth::user()->nama_lengkap }}!</strong></p>
            <p>Halaman ini hanya bisa dibuka setelah login.</p>
            <p>Username: {{ Auth::user()->username }}</p>
        </div>
    </div>
</body>
</html>