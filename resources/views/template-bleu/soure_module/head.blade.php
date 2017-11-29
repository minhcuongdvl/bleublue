<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>4004-submit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="{{ asset('public/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        
        <?php
        if (!class_exists('lessc')) {
            include ('public/libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('public/less/style_bleu.less', 'public/css/style_bleu.css');
        ?>

        <link href="{{ asset('public/css/style_bleu.css') }}" rel="stylesheet" type="text/css"/>
        <script src="{{ asset('public/js/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('public/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('public/js/bleu.js')}}" type="text/javascript"></script>
    </head>

    <body>