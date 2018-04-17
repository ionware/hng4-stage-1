<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Roboto and Lato GF -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i|Roboto:700" rel="stylesheet">
    <title>HNG Internship 4.0 - Stage 1</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-size: 16px;
            background: #000 url('assets/img/material.jpg');
            background-size: cover;
            color: #fff;
            font-family: Lato, sans-serif;
        }
        h1, h2, h3, h4, h5, h6 {
            margin: 2px 0;
            font-family: Roboto, sans-serif;
        }
        .content {
            text-align: right;
            padding: 10px 40px 40px 10px;
            position: absolute;
            bottom: 10px; right: 0;
        }
        .heading-text {
            font-size: 3em;
        }
    </style>
</head>
<body>
<div class="content">
    <h1 class="heading-text"><?php echo date('H:i') ?></h1>
    <h3><?php echo date("l, jS F Y") ?></h3>
    <span><i>You can't trust code that you did not totally create yourself.</i></span>
</div>
</body>
</html>