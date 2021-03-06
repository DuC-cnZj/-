<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Laravel</title>
</head>
<body style="margin-top: 200px">
<div class="col-md-4 col-md-offset-4">
    <form action="/" method="post">
        <div class="form-group">
            <label for="name" class="control-label">User:</label>
            <input id="name" name="name" type="text" class="form-control">
        </div>
        {!! Geetest::render() !!}
        <br>
        <button type="submit" class="btn btn-success form-control">提交</button>
    </form>
</div>
</body>
</html>