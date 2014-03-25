<?php

class PostList extends control{


	public function checkPara(){
		
		$this->page =isset($GLOBALS['URL_PATH'][1]) ? intval($GLOBALS['URL_PATH'][1]) : 0;
		$this->cat = isset($_GET['cat']) ? trim($_GET['cat']) : '';
		$this->skey =isset($_GET['skey']) ? trim($_GET['skey']) : '';
		return true;

	}

	public function action(){
		$postModel = new PostModel();

		if($this->skey !='')
		{
			$arr = explode(' ',$this->skey,2);
			if(count($arr) == 1)
			{
				$where['$or'] = array(
						array('comments' => new MongoRegex("/{$arr[0]}/is")),
						array('title' => new MongoRegex("/{$arr[0]}/is")),
						array('id'=>$arr[0]),
				);
				
			}

			if(count($arr) == 2)
			{
				$where['$or'] = array(
					array('comments' => new MongoRegex("/({$arr[0]}.*?{$arr[1]}|{$arr[1]}.*?{$arr[0]})/")),
						array('title' => new MongoRegex("/({$arr[0]}.*?{$arr[1]}|{$arr[1]}.*?{$arr[0]})/")),
				);
			}

		}


		$datas['post'] = $postModel->getPostList($this->page,$where);
		$postNum = $postModel->getPostCount($where);
		if($postNum > POST_PAGE_NUM * ($this->page+1))
			$datas['hasNext'] = $this->page+1;

		if($this->page > 0)
			$datas['hasPrev'] = $this->page-1;
		foreach($datas['post'] as &$data)
		{
			$price = $data['price'];
			$price = intval(1.08*1.25*$price) +1;
			$data['myPrice'] = $price ;

			$title = $data['title'];
			if(preg_match("/(\s[^\s]*?女.*)₩/",$title,$m))
			{
				$title = $m[1];
			}
			else
			{
				$title = '';
			}
			$data['title'] = $title;

			$data['img'] = $this->getImg($data);
		}

		$this->format($datas);

	}

	public function getImg($data)
	{
		$fileDir = ROOT.'/../images/myblog/sys/';
		$file = $fileDir.$data['id'].'.jpg';
		if(!file_exists($file))
		{
			$img = file_get_contents($data['img']);
			$ret = file_put_contents($file,$img);
			if(!$ret)
				unlink($file);
		}
		return 'http://img.sleepwalker.pro/sys/'.$data['id'].'.jpg';


	}


	public function includeFiles()
	{

		include(VIEW.'/index.php');

	}

	public function format($datas)
	{
		$data['activeHome'] = 'class="active"';
		$data['activePhoto'] = '';
		$data['activeWeibo'] = '';
		$data['script'] = $this->getScript();
		$GLOBALS['DATA'] = $data;
		if($GLOBALS['UA_TYPE'] == 'phone')
		{
			ViewIndex::renderPhone($datas);
		}
		else
		{
			ViewIndex::render($datas);
		}



		//print_r($datas);
	}

	public function getScript()
	{
		$html =<<<HTML
			<script type="text/javascript">
			function postdata(num){                              //提交数据函数   
				var cms = $("#comment_"+num).val();
				var itemId = $("#item_"+num).val();
				var x=document.getElementsByName("class_check_"+num);
				var classchcek = ''
					for (var i=0;i<x.length;i++)
					{
						if(x[i].checked)
							classchcek +=x[i].value + ',';
					}
				if(cms && itemId && classchcek)
				{
					$.ajax({ 
type: "POST", 
url: "/addComment",  
data: "cms="+$("#comment_"+num).val()+"&item_id="+$("#item_"+num).val()+"&class="+classchcek, 
success: function(msg){         
var dataObj=eval("("+msg+")");
if(dataObj.code == 'ok')
{
document.getElementById("cms_"+num).innerHTML = cms;
}
else
{

}
}   
});
}
return false;
}   
</script>  
HTML;
return $html;

}

}

?>
