<?php
/**
 * Created by PhpStorm.
 * User: ProDigy SML
 * Date: 8/16/2015
 * Time: 6:39 AM
 */

//error_reporting(-1);
//ini_set('display_errors', 'On');

?>

<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>
        $("a").on("click", function () {
            alert("CliCKED!!!");
        })
    </script>
</head>

<body>
<script src="https://togetherjs.com/togetherjs-min.js"></script>
<a onclick="TogetherJS(this); return false;"><img src="https://togetherjs.com/images/start-togetherjs-blue.png" style="width: 135px" /></a>

<iframe id="iframe" src="http://www.w3schools.com" style="width: 50%; height: 50%"></iframe>
<script>
    var iframe = document.getElementById('iframe');
    
    console.log(iframe.contentDocument || iframe.contentWindow.document);
</script>


<script>

    TogetherJS.hub.on('togetherjs.hello', function () {
        TogetherJS.send({
            type: 'init'
        });
        return false;
    });

    TogetherJS.hub.on('init', function () {
        console.log("HELLO!!!");
        return false;
    });
    
</script>
