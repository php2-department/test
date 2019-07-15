<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


    <style>
        body img {
            width: 250px;
            height: 250px;
        }
    
    </style>
    
</head>
<body>
    <iframe src="../1806/img/development.png" frameborder="1"></iframe>
    <script>
            // $('iframe').contents().find('img').css({width: '400px;', height: '400px;'});
            // document.getElementByTagName('iframe').contentDocument.getElementByTagName('img').width = '100px';
            // $("#iframe").contents().find("img").css('background-color', 'black');
            $('iframe').contents().find('img').css({'max-width': '10%', 'height': 'auto','vertical-align': 'middle'});
        </script>
</body>
</html>