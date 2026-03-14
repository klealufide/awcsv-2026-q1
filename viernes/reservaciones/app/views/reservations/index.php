<!DOCTYPE html>
<html>

<head>

    <title>Reservas</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body class="container mt-5">

    <h2>Crear Reserva</h2>

    <form action="/awcsv-2026-q1/jueves/reservaciones/index.php" method="POST">

        <input
            class="form-control mb-2"
            name="name"
            id="name"
            placeholder="Nombre">

        <input
            type="date"
            class="form-control mb-2"
            name="reservation_date"
            id="date">

        <input
            type="number"
            class="form-control mb-2"
            name="people"
            id="people"
            placeholder="Cantidad de personas">

        <textarea
            class="form-control mb-2"
            name="comments"
            id="comments"
            placeholder="Comentarios"></textarea>
        <input type="hidden" name="option" value="store">
        <button class="btn btn-primary">
            Reservar
        </button>

    </form>

    <hr>

    <h3>Reservas</h3>

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Personas</th>
                <th>Comentarios</th>
            </tr>
        </thead>

        <tbody>

            <?php if (!empty($reservations)) {
                foreach ($reservations as $r): ?>

                    <tr>
                        <td><?= $r['name'] ?></td>
                        <td><?= $r['reservation_date'] ?></td>
                        <td><?= $r['people'] ?></td>
                        <td><?= $r['comments'] ?></td>
                    </tr>

            <?php endforeach;
            } ?>

        </tbody>

    </table>

    <script src="/js/validation.js"></script>

</body>

</html>