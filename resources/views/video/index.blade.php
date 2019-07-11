<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>视频播放</title>
</head>
<body>

    @foreach($response as $k=>$v)
    <video src="/storage/{{$v['video_path']}}" controls="controls" style="width: 600px;height: 600px"></video>
    @endforeach

</body>
</html>
