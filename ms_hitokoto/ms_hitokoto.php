<?php
/*
Plugin Name: 一言
Version: 2.0
Plugin URL: https://github.com/moeshadows
Description: 在站点底部添加一句随机的话
Author: MoeShadow
Author Email: 10277263@qq.com
Author aURL: https://github.com/moeshadows
For: all
*/

function ms_hitokoto_foot()
{
    echo <<<EOT
	<p id="hitokoto" class="hitokoto">:D 获取中...</p>
	<script>
		fetch('https://v1.hitokoto.cn')
			.then(response => response.json())
			.then(data => {
			const hitokoto = document.getElementById('hitokoto');
			hitokoto.innerText = '『'+ data.hitokoto + '』';
			})
			.catch(err => console.error(err));
	</script>
	<style>
	.hitokoto {
	color: #f35626;
	font-family: 微软雅黑;
	background-image: -webkit-linear-gradient(92deg, #f35626, #feab3a);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
	-webkit-animation: hue 10s infinite linear;
	}	
	@-webkit-keyframes hue {
	from {
	-webkit-filter: hue-rotate(0deg);
	-moz-filter: hue-rotate(0deg);
	}
	to {
	-webkit-filter: hue-rotate(-360deg);
	-moz-filter: hue-rotate(-360deg);
	}
	}
	</style>
EOT;
}
addAction('footer', 'ms_hitokoto_foot');
?>
