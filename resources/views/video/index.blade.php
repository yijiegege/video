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
    <div style="background-color: #0d6aad;width: 125px;height: 20px"><h5>视频名称：{{$response[0]['video_name']}}</h5></div>
    <video src="/storage/{{$response[0]['video_path']}}" controls="controls" style="width: 500px;height: 500px"></video>
</body>
</html>
