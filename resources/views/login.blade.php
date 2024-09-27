<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Import Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #f3f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            width: 60%;
            max-width: 1000px;
            margin: auto;
            background-color: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            overflow: hidden;
        }

        .left-side {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            width: 50%;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: #fff;
        }

        .left-side h1 {
            font-size: 2.5rem;
            margin: 0 0 10px;
        }

        .left-side p {
            font-size: 1.1rem;
            margin: 0;
        }

        .right-side {
            padding: 50px 40px;
            width: 50%;
        }

        .right-side h2 {
            margin-bottom: 20px;
            font-size: 1.8rem;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .form-options a {
            text-decoration: none;
            color: #4facfe;
        }

        .form-options input[type="checkbox"] {
            margin-right: 10px;
        }

        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #1a73e8;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #1664c4;
        }

        .sign-up {
            text-align: center;
            margin-top: 20px;
        }

        .sign-up a {
            text-decoration: none;
            color: #4facfe;
        }

        /* Responsive */
        @media screen and (max-width: 768px) {
            .container {
                flex-direction: column;
                width: 90%;
            }

            .left-side {
                width: 100%;
                padding: 20px;
            }

            .right-side {
                width: 100%;
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-side">
            <h1>Welcome Back!</h1>
            <p>To organize your semester, log in with IRIS</p>
        </div>
        <div class="right-side">
            <h2>Login</h2>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $item)
                    <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ url('/') }}" method="POST" novalidate>
                @csrf
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" id="email" value="{{old('email')}}" name="email" placeholder="E-mail/Username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="submit-btn">Sign in</button>
            </form>
        </div>
    </div>
</body>
</html>
