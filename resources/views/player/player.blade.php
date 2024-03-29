<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"   content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"/>
    <title>视频播放</title>
    <link rel="stylesheet" href="https://g.alicdn.com/de/prismplayer/2.8.2/skins/default/aliplayer-min.css" />
    <script charset="utf-8" type="text/javascript" src="https://g.alicdn.com/de/prismplayer/2.8.2/aliplayer-min.js"></script>
</head>
<body>
<div  class="prism-player" id="J_prismPlayer"></div>
<script>
    var player = new Aliplayer({
        id: 'J_prismPlayer',
        width: '60%',
        autoplay: true,
        //支持播放地址播放,此播放优先级最高
        source : 'rtmp://pull.cccute.top/xiaoxiong/xiaoxiong?auth_key=1562922329-0-0-f4234d1a8c1ed041f1d579926f3365e0',
        //播放方式二：点播用户推荐
        // vid : '1e067a2831b641db90d570b6480fbc40',
        // playauth : 'ddd',
        // cover: 'http://video.1809.com/storage//files/79b2553225ab91e10b9b89134e57aacc.mp4',
        // //播放方式三：仅MPS用户使用
        // vid : '1e067a2831b641db90d570b6480fbc40',
        // accId: 'dd',
        // accSecret: 'dd',
        // stsToken: 'dd',
        // domainRegion: 'dd',
        // authInfo: 'dd',
        // //播放方式四：使用STS方式播放
        // vid : '1e067a2831b641db90d570b6480fbc40',
        // accessKeyId: 'dd',
        // securityToken: 'dd',
        // accessKeySecret: 'dd',
        // region:'cn-shanghai',//eu-central-1,ap-southeast-1
    },function(player){
        console.log('播放器创建好了。')
    });
</script>
</body>
</html>
