<?php
class ViewNotice {

	public function render($datas)
	{
		$data = $GLOBALS['DATA'];

		include(VIEW.'/header.php');
		include(VIEW.'/banner.php');
		$html =<<<HTML
		<div class="container"><div class="row-fluid"><div class = "span12">
		<div class='well'>
		<p><h2>Anna Yuan Selected 代购须知</h2></p>
		<br/>
		<br/>
		<p>Anna Yuan Selected 所有商品都来自韩国东大门市场，绝对保证韩国原单</p>
		<br>
		<p>商品订购可选择接受预订或只要现货，现货一般到货时间为7-10日；预订商品一般7-15天，特殊情况可能更长</p>
		<br>
		<p>商品到国内后我们会先检查一遍，有质量问题我们将负责退换，退换周期一般30-40天</p>
		<br>
		<p>出质量问题外，色差、大小、款式等均不能作为退换货理由</p>
		<br>
		<p>关于运费具体参见 <a style="color:#2980b9;" href="/delivery">运费计算</a></p>
		<br/>
		</div></div></div></div>
HTML;
		echo $html;
		include(VIEW.'/footer.php');
	}


}
?>
