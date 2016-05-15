<?php
namespace tpl;

function base($title, $content) {
    $title .= ' - Password Manager';

    return <<<ENDTPL
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{$title}</title>

        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./css/passwords.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        {$content}
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="./js/jquery.min.js"><\/script>')</script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/passwords.js"></script>
    </body>
</html>
ENDTPL;
}
