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
@admin('editor')
<h1>this for editor</h1>
@endadmin

@admin('publiser')
<h1>this for publiser</h1>
@endadmin
@admin('publiser,editor,super')
<h1>this for all</h1>
@endadmin
</body>
</html>
