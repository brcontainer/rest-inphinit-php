<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Inphinit php framework</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">
    <style type="text/css">
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
    body {
        background: #F7F6F6;
        min-width: 210px;
    }
    .container {
        text-align: center;
    }
    .container h1 {
        font-size: 48pt;
        font-weight: 100;
        padding: 5px 0;
        margin: 0;
    }
    .container h2 {
        padding: 25px 0 30px 0;
        font-weight: normal;
        font-size: 18pt;
    }
    .container:before, .container::before {
        display: inline-block;
        vertical-align: middle;
        content: "";
        height: 100%;
        width: 0;
    }
    .rotas {
        text-align: left;
        display: inline-block;
        background: #343438;
        padding: 10px;
        color: #fff;
        min-width: 460px;
        margin: 10px;
        border-radius: 4px;
    }

    @media only screen and (max-width: 400px) {
        .container h1 {
            font-size: 36pt;
        }
    }
    </style>
</head>
<body>
    <div class="container">
        <h1>Teste com Rest</h1>

        <div class="rotas">
        <?php
            echo '
            <p>Acesse via GET: ', $host, $rootpath, 'photo/</p>
            <p>Acesse via GET: ', $host, $rootpath, 'photo/create</p>
            <p>Acesse via POST: ', $host, $rootpath, 'photo/</p>
            <p>Acesse via GET: ', $host, $rootpath, 'photo/{digite o nome ou ID}</p>
            <p>Acesse via GET: ', $host, $rootpath, 'photo/{digite o nome ou ID}/edit</p>
            <p>Acesse via PUT: ', $host, $rootpath, 'photo/{digite o nome ou ID}</p>
            <p>Acesse via DELETE: ', $host, $rootpath, 'photo/{digite o nome ou ID}</p>
            ';
        ?>
        </div>

        <div class="rotas">
        <?php
            echo '
            <p>Acesse via GET: ', $host, $rootpath, 'usuario/</p>
            <p>Acesse via GET: ', $host, $rootpath, 'usuario/create</p>
            <p>Acesse via POST: ', $host, $rootpath, 'usuario/</p>
            <p>Acesse via GET: ', $host, $rootpath, 'usuario/{digite o nome ou ID}</p>
            <p>Acesse via GET: ', $host, $rootpath, 'usuario/{digite o nome ou ID}/edit</p>
            <p>Acesse via PUT: ', $host, $rootpath, 'usuario/{digite o nome ou ID}</p>
            <p>Acesse via DELETE: ', $host, $rootpath, 'usuario/{digite o nome ou ID}</p>
            ';
        ?>
        </div>
    </div>
</body>
</html>
