<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum</title>
    <style>
        /* Reset de Estilos */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilos Gerais */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background: #333;
            color: #fff;
            padding: 20px 0;
        }

        header h1 {
            float: center;
        }

        nav ul {
            float: right;
        }

        nav ul li {
            display: inline;
            margin-left: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        .hero {
            background: url('background.jpg') center/cover;
            color: #fff;
            text-align: center;
            padding: 100px 0;
        }

        .hero h2 {
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            background: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background: #0056b3;
        }

        .topics {
            padding: 50px 0;
        }

        .topic {
            margin-bottom: 20px;
        }

        .topic h3 {
            margin-bottom: 10px;
        }

        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        table {
            width: 50%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            background-color: #B0C4DE;
        }

        th {
            background-color: #4682B4;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>@yield('header')</h1>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h2>@yield('section1')</h2>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Meu Fórum. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
