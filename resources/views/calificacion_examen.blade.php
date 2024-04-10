<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificación del Examen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <h1 class="title has-text-centered">Calificación del Examen</h1>
            <div class="card">
                <div class="card-content">
                    <div class="content">
                        {!! $mensaje !!}
                    </div>
                </div>
                <footer class="card-footer">
                    <form action="http://127.0.0.1:8000/cursos/inscribirse" method="GET">
                        <button type="submit" class="button is-success card-footer-item">Volver</button>
                    </form>
                </footer>
            </div>
        </div>
    </section>
</body>
</html>
