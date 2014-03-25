<?php
class ViewDelivery {

	public function render($datas)
	{
		$data = $GLOBALS['DATA'];

		include(VIEW.'/header.php');
		include(VIEW.'/banner.php');
		$html =<<<HTML
		<div class="container"><div class="row-fluid"><div class = "span12">
		<div class='well'>
		<p><h2>Anna Yuan Selected 运费计算</h2></p>
		<br/>
		<br/>
		<p>运费分为国内运费和国外运费两部分</p>
		<br>
		<p>国外物流为顺丰，50元/公斤,不足一公斤按一公斤计算</p>
		<br>
		<p>国内物流可选择顺丰或圆通，具体价格可参考如下表格</p>
		<p>顺丰:</p>
		<table class="table" style="width:65%;">
			<tr><th style="width:45%;">目的地</th><th>首重</th><th>续重</th></tr>
			<tr><td>北京</td><td>13</td><td>2</td></tr>
			<tr><td>天津、北京郊区</td><td>15</td><td>13</td></tr>
			<tr><td>河北</td><td>14</td><td>2</td></tr>
			<tr><td>辽宁、山西、河南、山东</td><td>22</td><td>8</td></tr>
			<tr><td>吉林、黑龙江、宁夏、内蒙 古、甘肃、江浙沪、湖北、陕 西、江西、四川、安徽、重庆、 22 云南、贵州、西宁、福建、湖南</td><td>22</td><td>10</td></tr>
			<tr><td>广东、广西、海南</td><td>22</td><td>14</td></tr>
			<tr><td>新疆、西藏</td><td>22</td><td>20</td></tr>
		<br/>
		<br/>
		</table>
		<p>圆通(仅供参考):</p>
		<table class="table" style="width:65%;">
			<tr><th style="width:45%;">目的地</th><th>首重</th><th>续重</th></tr>
			<tr><td>北京</td><td>8</td><td>8</td></tr>
			<tr><td>天津、上海、河北、河南</td><td>11</td><td>8</td></tr>
			<tr><td>江西</td><td>13</td><td>8</td></tr>
			<tr><td>湖南、湖北、重庆、四川、福建、江苏、浙江、安徽、广东</td><td>13</td><td>10</td></tr>
			<tr><td>山西、陕西、吉林</td><td>18</td><td>10</td></tr>
			<tr><td>山东、辽宁</td><td>18</td><td>8</td></tr>
			<tr><td>云南、海南、黑龙江、广西、甘肃、青海、内蒙古、贵州</td><td>18</td><td>10</td></tr>
			<tr><td>西藏、新疆</td><td>20</td><td>20</td></tr>
		</table>
		<br>
		<br/>
		<br/>
		<p>运费会根据预订情况预估预先收取，最终根据实际运费多退少补。</p>
		<p>商品重量预估:</p>
		<p>注意:以下商品重量为预估重量，材质、面料及款式不同重量会有差异。</p>
		<table class="table" style="width:65%;">
			<tr><td>吊带、背心</td><td>0.2kg/件</td></tr>
			<tr><td>衬衫、打底衫、T恤</td><td>0.3kg/件</td></tr>
			<tr><td>针织衫、卫衣</td><td>0.4kg/件</td></tr>
			<tr><td>牛仔裤、休闲裤、休闲裤、裙裤</td><td>0.4kg/件</td></tr>
			<tr><td>打底裤</td><td>0.2kg/件</td></tr>
			<tr><td>短裤</td><td>0.3kg/件</td></tr>
			<tr><td>背带裤</td><td>0.5kg/件</td></tr>
			<tr><td>马甲</td><td>0.4kg/件</td></tr>
			<tr><td>大衣、风衣</td><td>0.6kg/件</td></tr>
			<tr><td>棉服、夹克、西装</td><td>0.5kg/件</td></tr>
			<tr><td>羽绒服</td><td>1.3kg/件</td></tr>
			<tr><td>短裙、半身裙、长裙</td><td>0.3kg/件</td></tr>
			<tr><td>连衣裙</td><td>0.4kg/件</td></tr>
		</table>
		<br>
		</div></div></div></div>
HTML;
		echo $html;
		include(VIEW.'/footer.php');
	}


}
?>
