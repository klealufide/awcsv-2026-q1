<!DOCTYPE html>
<html>

<head>

    <title>Login</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body class="container mt-5">

    <h2>Login</h2>

    <form action="/awcsv-2026-q1/viernes/reservaciones/index.php" method="POST">
        <input
            class="form-control mb-2"
            name="username"
            id="username"
            placeholder="Usuario">

        <input
            type="password"
            class="form-control mb-2"
            name="password"
            id="password"
            placeholder="Contraseña">

        <input type="hidden" value="login" name="option">

        <button class="btn btn-primary">
            Ingresar
        </button>

    </form>

    <script src="/js/auth.js"></script>

</body>

</html>