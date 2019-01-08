<?php
/**
 * Created by PhpStorm.
 * User: Rifqi AI
 * Date: 05/01/2019
 * Time: 20:15
 */
?>
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{ route('test') }}">
        {{csrf_field()}}
        {{-- coba: saya merasa pusing disertai kelelahan juga demam terkadang mimisan kalo malam lemas di siang hari ngantuk--}}
        <textarea name="symptoms"></textarea>
        <input type="submit" value="send">
    </form>
</body>
</html>
