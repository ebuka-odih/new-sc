<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }} </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>{{ env('APP_NAME') }}</h4>
                    </div>
                    <div class="card-body">
                        <p class="fw-bold">Your requested ATC Code is <span class="text-primary">{{ $data['wit']->admin_atc_code }}</span>.</p>
                        <p>If you did not request this code, kindly ignore this message or contact our support.</p>
                    </div>
                    <div class="card-footer text-center bg-light">
                        <small>&copy; {{ date('Y') }} {{ env('APP_NAME') }}. All rights reserved.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
