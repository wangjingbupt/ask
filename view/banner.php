	<?php
	
		if(empty($GLOBALS['LOGIN_DATA']))
		{
			$weibo_redirect_uri = urlencode(WB_CALLBACK_URL);
			$renren_redirect_uri = urlencode(RR_CALLBACK_URL);
			$instagram_redirect_uri= urlencode(IG_CALLBACK_URL);
			$login=<<<HTML
			<div class="offset11" style="width:30%">
			<div>
			<ul class="nav nav-pills">
			  <li class="dropdown">
				    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog icon-white"></i><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="/login"><i class="icon-user"></i><span style="color:#111111;font-weight:bold">&nbsp;&nbsp;Sign in</span></a></li>
							<li><a href='/callback/logout'><i class="icon-arrow-right"></i><span style="color:#111111;font-weight:bold">&nbsp;&nbsp;Sign up</span></a></li>
						</ul>
				</li>
			</ul></div></div>

HTML;
		}else if($GLOBALS['LOGIN_DATA']['is_admin']==1)
		{
			$login_data = $GLOBALS['LOGIN_DATA'];
			if(isset($_COOKIE['booking']))
			{
				$cart = count(explode(',',$_COOKIE['booking']));
			}
			else
				$cart = 0;
			$login = '<div class="offset10" style="width:30%">';
			$login .='
			<div>
			<ul class="nav nav-pills">
				<li id="cart" data-toggle="popover" data-placement="bottom" data-content="成功添加购物车" ><a href="/cart" >购物车('.$cart.')</a></li>
			  <li><a href="#"><img src="'.$login_data['profileImg'].'" style="margin:auto 3px;width:20px;b"> <span style="color:#DDDDDD;font-weight:bold">'.$login_data['nickName'].'</span></a></li>
			  <li class="dropdown">
				    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="icon-cog icon-white"></i><b class="caret"></b></a>
						<ul class="dropdown-menu">
						<li><a href="/callback/logout" style="font-weight:bold">登出</a></li>
						</ul>
				</li>
			</ul></div></div>';
			
		}
		else
		{

			$login_data = $GLOBALS['LOGIN_DATA'];
			$login = '<div class="offset10" style="width:30%">';
			$login .='
			<div>
			<ul class="nav nav-pills">
			  <li><a href="#"><img src="'.$login_data['profileImg'].'" style="margin:auto 3px;width:20px;b"> <span style="color:#DDDDDD;font-weight:bold">'.$login_data['nickName'].'</span></a></li>
			  <li class="dropdown">
				    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="icon-cog icon-white"></i><b class="caret"></b></a>
						<ul class="dropdown-menu">
						<li><a href="/callback/logout" style="font-weight:bold">登出</a></li>
						</ul>
				</li>
			</ul></div></div>';

		}

	
	?>
	
	<body style='font-family:Microsoft YaHei;'>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container"><div class="row-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <span class="brand" style='color:#ffffff;'> Erik's</span>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li <?php echo $data['activeHome'];?>  ><a href="/" >商品</a></li>
              <li <?php echo $data['activeNotice'];?>  ><a href="/notice" >购买须知</a></li>
              <li <?php echo $data['activeDelivery'];?>  ><a href="/delivery" >运费计算</a></li>
            </ul>
          </div><!--/.nav-collapse -->
					<?php echo $login; ?>
        </div>
      </div></div>
    </div>
