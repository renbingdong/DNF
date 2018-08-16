<html>
    <head>
        <title>平凡工作室</title>
        <link rel="stylesheet" href="/static/css/bootstrap.min.css">
        <link rel="icon" href="/static/pic/icon.ico">
        <style type="text/css">
            .header {
                height: 150px;
                overflow: hidden;
                background-image: url(/static/pic/hugescreen.png);
            }
            .header-icon {
                height: 100%;
            }
            .nanbar-icon {
                height: 100%;
                text-align: center;
                padding: 40px;
            }
            .nanbar-icon p {
                color: white;
                font-family: cursive;
                font-size: 20px;
            }

        </style>
    </head>
    <body>
        <?php require __DIR__ . '/header.php'; ?>
        <?php require $file; ?>
        <?php require __DIR__ . '/footer.php'; ?>
    </body>
</html>
