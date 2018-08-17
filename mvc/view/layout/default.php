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
            .header .nanbar-icon {
                height: 100%;
                text-align: center;
                padding: 40px;
            }
            .header .nanbar-icon p {
                color: white;
                font-family: cursive;
                font-size: 20px;
            }
            .footer {
                height: 70px;
                overflow: hidden;
                background-image: url(/static/pic/hugescreen.png);
            }
            .footer .nanbar-icon {
                text-align: center;
                padding: 15px;
            }
            .footer .nanbar-icon p {
                color: white;
                font-family: monospace;
                font-size: 12px;
            }
            .content {
                min-height: 450px;
                height: 80%;
            }
        </style>
    </head>
    <body>
        <?php require __DIR__ . '/header.php'; ?>
        <div class="content">
        <?php require $file; ?>
        </div>
        <?php require __DIR__ . '/footer.php'; ?>
    </body>
</html>
