<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard</title>

    <link rel="stylesheet" href="css/app.css">
</head>
<body>
@javascript(compact('pusherKey', 'clientConnectionPath', 'environment'))
<div id="dashboard">
    <dashboard>
        <google-analytics></google-analytics>
        <instagram></instagram>
    </dashboard>
</div>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>