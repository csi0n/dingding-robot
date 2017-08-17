# DingDingRobot WebHook
发送消息到钉钉中
## 安装
```
composer require csi0n/dingding-robot
```
##使用
###普通
```
use csi0n\DingDingRobot\Foundation\Application;

$options=[
     'webhook_token'=>'https://oapi.dingtalk.com/robot/send?spm=a219a.7629140.0.0.N7nYh8&access_token=xxxxxxxx'
];
$application=new Application($options);

//发送Text消息
$application->text
        ->content('我是测试内容')
        ->send();

//发送Link消息
$application->link
        ->title('我是一个标题')
		->text('我是内容')
		->picUrl('http://imgsrc.baidu.com/imgad/pic/item/267f9e2f07082838b5168c32b299a9014c08f1f9.jpg')
		->messageUrl('https://mp.weixin.qq.com/s?spm=a219a.7629140.0.0.uV0Ng4&__biz=MzA4NjMwMTA2Ng==&mid=2650316842&idx=1&sn=60da3ea2b29f1dcc43a7c8e4a7c97a16&scene=2&srcid=09189AnRJEdIiWVaKltFzNTw&from=timeline&isappinstalled=0&key=&ascene=2&uin=&devicetype=android-23&version=26031933&nettype=WIFI')
		->send();
		
//发送Markdown消息
$application->markdown
->title( '标题' )
		->text( '#### 杭州天气 @156xxxx8827\n" +
                 "> 9度，西北风1级，空气良89，相对温度73%\n\n" +
                 "> ![screenshot](http://image.jpg)\n"  +
                 "> ###### 10点20分发布 [天气](http://www.thinkpage.cn/) \n' )
		->send()
		
//发送ActionCard消息
$application->actioncard
		->title( '标题' )
		->text( '内容' )
		->hideAvatar( '0' )
		->btnOrientation( '0' )
		->singleTitle( '阅读全文' )
		->singleURL( 'https://www.baidu.com/' )
		->send()
		
//发送FeedCard消息
$application->->feedcard
        ->links( [
              			[
              				"title"      => "时代的火车向前开",
              				"messageURL" => "https://mp.weixin.qq.com/s?__biz=MzA4NjMwMTA2Ng==&mid=2650316842&idx=1&sn=60da3ea2b29f1dcc43a7c8e4a7c97a16&scene=2&srcid=09189AnRJEdIiWVaKltFzNTw&from=timeline&isappinstalled=0&key=&ascene=2&uin=&devicetype=android-23&version=26031933&nettype=WIFI",
              				"picURL"     => "https://www.dingtalk.com/"
              			],
              			[
              				"title"      => "时代的火车向前开2",
              				"messageURL" => "https://mp.weixin.qq.com/s?__biz=MzA4NjMwMTA2Ng==&mid=2650316842&idx=1&sn=60da3ea2b29f1dcc43a7c8e4a7c97a16&scene=2&srcid=09189AnRJEdIiWVaKltFzNTw&from=timeline&isappinstalled=0&key=&ascene=2&uin=&devicetype=android-23&version=26031933&nettype=WIFI",
              				"picURL"     => "https://www.dingtalk.com/"
              			]
        ] )->send()
```
###Laravel中
在app.php providers中添加
```
csi0n\DingDingRobot\DingDingRobotServiceProvider::class,
```

在app.php alias中添加
```
'DingDingRobot'=>csi0n\DingDingRobot\Facades\DingDingRobotFacade::class
```

执行artisan 发布配置文件配置为config/dingding-robot.php
```
artisan vendor:publish --provider=csi0n\DingDingRobot\DingDingRobotServiceProvider::class
```


enjoy it :)