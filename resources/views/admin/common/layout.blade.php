<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>后台管理-@yield('title')</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="{{ asset('admin/static/css/style.css') }}">
@section('style')

@show
<!--[if lt IE 9]>
<script src="{{ asset('admin/static/js/html5.js') }}"></script>
<![endif]-->
<script src="{{  asset('admin/static/js/jquery.js') }}"></script>
<script src="{{ asset('admin/static/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script>

	(function($){
		$(window).load(function(){
			
			$("a[rel='load-content']").click(function(e){
				e.preventDefault();
				var url=$(this).attr("href");
				$.get(url,function(data){
					$(".content .mCSB_container").append(data); //load new content inside .mCSB_container
					//scroll-to appended content 
					$(".content").mCustomScrollbar("scrollTo","h2:last");
				});
			});
			
			$(".content").delegate("a[href='top']","click",function(e){
				e.preventDefault();
				$(".content").mCustomScrollbar("scrollTo",$(this).attr("href"));
			});
			
		});
	})(jQuery);
</script>

</head>
<body>
<!--header-->
@section('header')
  <header>
   <h1><img src="{{ asset('admin/static/images/admin_logo.png') }}"/></h1>
   <ul class="rt_nav">
    <li><a href="/laravel/public/home/index" target="_blank" class="website_icon">站点首页</a></li>
    <li><a href="#" class="clear_icon">清除缓存</a></li>
    <li><a href="#" class="admin_icon">{{ Session::get('nickname') ? Session::get('nickname') : Session::get('username') }}</a></li>
    <li><a href="#" class="set_icon">账号设置</a></li>
    <li><a href="{{ url('admin/logout') }}" class="quit_icon">安全退出</a></li>
   </ul>
  </header>
@show
<!--aside nav-->
<!--aside nav-->
@section('leftmenu')
<aside class="lt_aside_nav content mCustomScrollbar">
 <h2><a href="{{ url('admin/index') }}">系统首页</a></h2>
 <ul>
  <li>
   <dl>
    <dt>商品管理</dt>
    <!--当前链接则添加class:active-->
    <dd><a href="{{ url('admin/product/list') }}" class="{{ Request::getPathInfo() == '/admin/product/list' ? 'active' : '' }}">商品列表</a></dd>
    <dd><a href="{{ url('admin/product/detail') }}" class="{{ Request::getPathInfo() == '/admin/product/detail' ? 'active' : '' }}">商品详情</a></dd>
    <dd><a href="{{ url('admin/product/recycle') }}" class="{{ Request::getPathInfo() == '/admin/product/recycle' ? 'active' : '' }}">商品回收站</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>订单信息</dt>
    <dd><a href="order_list.html">订单列表</a></dd>
    <dd><a href="order_detail.html">订单详情</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>会员管理</dt>
    <dd><a href="user_list.html">会员列表</a></dd>
    <dd><a href="user_detail.html">添加会员（详情）</a></dd>
    <dd><a href="user_rank.html">会员等级</a></dd>
    <dd><a href="adjust_funding.html">会员资金管理</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>基础设置</dt>
    <dd><a href="setting.html">站点基础设置</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>配送与支付设置</dt>
    <dd><a href="express_list.html">配送方式</a></dd>
    <dd><a href="pay_list.html">支付方式</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>在线统计</dt>
    <dd><a href="discharge_statistic.html">流量统计</a></dd>
    <dd><a href="sales_volume.html">销售额统计</a></dd>
   </dl>
  </li>
 </ul>
</aside>
@show

<section class="rt_wrap content mCustomScrollbar">

  @yield('content')

</section>
@section('footer')

@show
@section('javascript')

@show
</body>
</html>
