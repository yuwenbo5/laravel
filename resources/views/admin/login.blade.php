<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>后台登录</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="{{ asset('admin/static/css/style.css') }}" />
<style>
body{height:100%;background:#16a085;overflow:hidden;}
canvas{z-index:-1;position:absolute;}
</style>
<script src="{{ asset('admin/static/js/jquery.js') }}"></script>
<script src="{{ asset('admin/static/js/verificationNumbers.js') }}"></script>
<script src="{{ asset('admin/static/js/Particleground.js') }}"></script>
<script>
$(document).ready(function() {
  //粒子背景特效
  $('body').particleground({
    dotColor: '#5cbdaa',
    lineColor: '#5cbdaa'
  });
  //验证码
  createCode();
});
function checkForm(){
    $('#login_tip').html('login loading...');
    var username = $("#username").val();
    var password = $("#password").val();
    if(username == ''){
        $("#username").focus();
        $('#login_tip').html('username is not empty');
        return false;
    }
    if(password == ''){
        $("#password").focus();
        $('#login_tip').html('password is not empty');
        return false;
    }

    document.form.submit();
}
</script>
</head>
<body>
<form name="form" action="{{ url('admin/login') }}" method="post">
 {{ csrf_field() }}
<dl class="admin_login">
 <dt>
  <strong>站点后台管理系统</strong>
  <em>Management System</em>
 </dt>
 <dd class="user_icon">
  <input type="text" placeholder="账号" id="username" name="Admin[username]" class="login_txtbx"/>
 </dd>
 <dd class="pwd_icon">
  <input type="password" placeholder="密码" id="password" name="Admin[password]" class="login_txtbx"/>
 </dd>
 <dd class="val_icon">
  <div class="checkcode">
    <input type="text" id="J_codetext" placeholder="验证码" maxlength="4" class="login_txtbx">
    <canvas class="J_codeimg" id="myCanvas" onclick="createCode()">对不起，您的浏览器不支持canvas，请下载最新版浏览器!</canvas>
  </div>
  <input type="button" value="验证码核验" class="ver_btn" onClick="validate();">
 </dd>
 <dd>
  <input type="button" value="立即登录" onclick="checkForm();" class="submit_btn"/>
 </dd>
 <dd>
  <p id="login_tip" style="color:red;">{{ Session::get('errMsg') ? Session::get('errMsg') : '' }}</p>
 </dd>
</dl>
</form>
</body>
</html>
