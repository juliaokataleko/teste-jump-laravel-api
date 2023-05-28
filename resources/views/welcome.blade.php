<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Service Orders API</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: #333
        }

        .header {
            background: #444;
            color: #fff;
            padding: 90px 50px;
            text-align: center;
            font-size: 40px;
        }

        .content {
            padding: 70px 30px;
            max-width: 900px;
            margin: 0 auto;
        }

        .border {
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        .p-5 {
            padding: 15px;
        }

        .mb-5 {
            margin-bottom: 25px;
        }

        .getMethod {
            background: #0ab30a;
            padding: 10px;
            color: #fff;
        }
    </style>
</head>
<body>

    <div class="header">
        Service Orders API Documentation
    </div>

    <div class="content">
        <h1>Endpoints</h1>

        <h2>Ordens de Serviços</h2>

        <div class="border p-5 mb-5">
            <h3>Listar ordens de serviços</h3>
            <p class="getMethod">Method: GET</p>
            <div class="link"><a target="_blank" href="{{ route("service-orders.index") }}">{{ route("service-orders.index") }}</a></div>
        </div>

        <div class="border p-5 mb-5">
            <h3>Adicionar ordem de serviço</h3>
        </div>

        <div class="border p-5 mb-5">
            <h3>Atualizar ordem de serviço</h3>
        </div>

    </div>
    
</body>
</html>