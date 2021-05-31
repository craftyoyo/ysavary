<!DOCTYPE html>
<html>
    <head>
        <title>ysavary.fr | Maintenance</title>

        <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Karla';
                background-color: black;
                color: white;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            .info {
                font-family: Consolas,"courier new";
                color: crimson;
                background-color: black;
                font-size: 105%;
            }
        </style>
        
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title" title="Maintenance">Maintenance</div>
            </div>
                <div class="info"><?php print($_SERVER['SERVER_SOFTWARE']); ?></div>
        </div>
    </body>
</html>