<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App-FitnessTracker</title>
    <style>
        /* CSS untuk mengatur tampilan */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .form-group label {
            font-weight: bold;
            color: #555;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        /* Tombol utama */
        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            color: white;
            cursor: pointer;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Tombol sekunder */
        .btn-secondary {
            background-color: #6c757d;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            margin-left: 10px;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }

        /* Tombol tambah latihan dengan margin bawah */
        .btn-add {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border-radius: 4px;
            text-decoration: none;
            margin-bottom: 20px;
            display: inline-block;
        }
        .btn-add:hover {
            background-color: #0056b3;
        }

        /* Tabel dengan border */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        /* Header tabel */
        th {
            background-color: #f2f2f2;
        }

        /* Navigasi login/logout */
        .nav-auth {
            text-align: right;
            margin-bottom: 20px;
        }
        .nav-auth a, .nav-auth form {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        .nav-auth form {
            display: inline;
        }
        .nav-auth button {
            background-color: transparent;
            border: none;
            color: #007bff;
            cursor: pointer;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <nav class="nav-auth">
                @auth
                    <!-- Tampilkan jika user login -->
                    <span>Welcome, {{ auth()->user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                @else
                    <!-- Tampilkan jika user belum login -->
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </nav>
        </header>

        @yield('content')
    </div>
</body>
</html>
