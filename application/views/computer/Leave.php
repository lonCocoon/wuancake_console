<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>请假申请</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link rel="stylesheet" href="/public/computer/css/base.css" />
    <link rel="stylesheet" href="/public/computer/css/public.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>




<body>
    <!--左边-->
  	<div class="sidebar">
  		
  		<!--导航上层-->
  		<div  class="sidebar-top">
  		<!--午安icon-->
				<div class="media logo">
				</div>
				
				<!--我的信息-->
				<div class="media myinfo">
  				<div class="media-left">
  				   <a href="#"><img class="media-object portrait" src="/public/computer/img/logo.png" alt="我的头像"></a>
  				</div>
 					 <div class="media-body">
   				 <h4 class="media-heading">二马</h4>
    				产品经理组
  				</div>
  				<div class="media-right">
  				   <a href="#">
  				   	<span class="glyphicon iconfont icon-fenxiang"></span>
  				   </a>
  				</div>
				</div>
				
				<!--导航-->
  			<ul class="nav nav-pills nav-stacked">
 					<li role="presentation" class="active">
 							<a href="/index.php/viewer/index" class="text-center"><span class="glyphicon iconfont icon-shouye"></span>首页</a>
 					</li>
 					<li role="presentation">
 							<a href="/index.php/viewer/show_weekly" class="text-center"><span class="glyphicon iconfont icon-wo"></span>我的周报</a>
 					</li>
 					<li role="presentation">
 							<a href="/index.php/viewer/change_psd" class="text-center"><span class="glyphicon iconfont icon-icon28"></span>修改密码</a>
 					</li>
				</ul>
				</div>
				
				
			<!--导航底层-->
			<div class="sidebar-bottom"></div>
		</div>



    <!-- 右边 -->
    <div class="right-part">
        <div class="title-bar">
            <h2>请假申请</h2>
        </div>
        <form class="box">
            <div class="column-leave-1">
                <div class="user-info">
                    <span class="user-group">
                        产品经理组
                    </span>
                    <span class="user-id">
                        二马
                    </span>
                </div>
                <div class="user-holiday">
                    <span class="holiday-state">请假状态</span>
                    <span class="holiday-flag">未请假</span>
                </div>
            </div>
            <div class="column-leave-2">
                <span class="holiday-duration">
                    请假周数
                </span>
                <div class="holiday-btn">
                    <a role="button"  class="btn btn-default active" value="1" id="one">一周</a>
               		<a role="button" class="btn btn-default" value="2" id="two">二周</a>
                	<a role="button" class="btn btn-default" value="3" id="three">三周</a>
                </div>
            </div>
            <div class="column-leave-3">
                <span class="leave-reason">请假理由（必填）</span>
                <textarea rows="10" cols="70" placeholder="请在这里输入请假理由，没有理由不能提交请假申请哟"></textarea>
            </div>
            
            <div class="btn-leave">
            <a class="btn btn-primary" href="#" role="button">提交请假申请</a>
        	</div>
        </form>

    </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
        
<script>	
 $("#one").bind("click", function () {
       $.post("/api/test.php",{week:$("#one").val()});
  });
 $("#two").bind("click", function () {
       $.post("/api/test.php",{week:$("#two").val()});
  });
 $("#three").bind("click", function () {
       $.post("/api/test.php",{week:$("#three").val()});
  });
</script>
</body>

</html>