<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Evento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        h2 {
            color: #343a40;
        }
        .form-label {
            color: #495057;
        }
        .form-control {
            border: 1px solid #ced4da;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registrar Nuevo Evento</h2>
        <form action="{{ route('eventos.store') }}" method="POST" id="eventoForm">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Evento</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>
            <div class="mb-3">
                <label for="hora" class="form-label">Hora</label>
                <input type="time" class="form-control" id="hora" name="hora" required>
            </div>
            <div class="mb-3">
                <label for="lugar" class="form-label">Lugar</label>
                <input type="text" class="form-control" id="lugar" name="lugar" required>
            </div>
            <div class="mb-3">
                <label for="tipo_evento" class="form-label">Tipo de Evento</label>
                <input type="text" class="form-control" id="tipo_evento" name="tipo_evento" required>
            </div>
            <div class="mb-3">
                <label for="capacidad_maxima" class="form-label">Capacidad Máxima</label>
                <input type="number" class="form-control" id="capacidad_maxima" name="capacidad_maxima" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrar Evento</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var form = document.getElementById('eventoForm');
            var csrfToken = '{{ csrf_token() }}';
            var csrfInput = document.createElement('input');
            csrfInput.setAttribute('type', 'hidden');
            csrfInput.setAttribute('name', '_token');
            csrfInput.setAttribute('value', csrfToken);
            form.appendChild(csrfInput);
        });
    </script>
</body>
</html>
