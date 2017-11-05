<!DOCTYPE HTML>

<html>
	<head>
		<title>Alumni</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/in.css" />
	</head>
	
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="inner">
					<h1>Your Treasure!</h1>
					<img src="images/st.png" height="100px">
					<p>珍藏与铭记</a></p>
				</div>
			</header>

			

			
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Banner -->
					<section id="intro" class="main">
						<span class="icon fa-diamond major"></span>
						<h2>添加同学信息</h2>
						<p>我们天各一方的时候，没有谁会想到这个结局。可是大家或者沉默，或者忽略，用结束一顿快餐一杯咖啡的时间，消化了这个事实。然后用一辈子努力让它显得没什么大不了。瞧，我们都笑笑就过去了。这也许是成熟。我这样告诉自己，审视自己的时候宽容自己，只是因为难以启齿。我无法说，在这样大的天地，我再也找不到一个人，告诉她，我亲爱的同学啊，我曾经多么喜欢你，多么的爱你。你不要再次刻意用爱情或者亲情、友谊清晰划分，因为在我的心里，你曾经就是这个世界爱过我的全部证据。
    多年之前，我是你的同学。
    多年之后，我是你的同学。
    我轰轰烈烈地制造自以为是的传奇，觉得太阳都在崇拜我，是因为你那么动人的样子，就这样让我的年少晕眩起来</p>
						<ul class="actions">
							<li><button onclick="document.getElementById('hi').style.display='block'">ADD</button></li>
						</ul>

					</section>

					<div style="width:70%;text-align:center;padding-left:30%;display:none;" id = "hi" >
<h2>请添加同学信息</h2>
<form action = "add.php" method = "post" enctype="multipart/form-data">
	<input type="text" name="stu_name" placeholder="姓名 ">
	<input type="text" name="stu_addr" placeholder="住址">
	<input type="text" name="stu_tellnum" placeholder="电话">
	<input type="text" name="stu_email" placeholder="邮箱">
	<input type="text" name="stu_wechat" placeholder="微信">
	<input type="text" name="stu_qq" placeholder="QQ">
	<input type="text" name="stu_word" placeholder="个性签名">
	<span>上传头像</span><input type="file" name="file" />
	<input type="submit" value="添加" >
</form>
</div>
					
					<section id="cta" class="main special">
						<h2>快来看看你的同学录吧</h2>
						<p>浊酒一杯入愁肠，却化作千丝万缕相思泪。此去经年，虽明月常向别时圆，却已相逢无期。安知再聚之时不满头华发，又或作古，此岂非“此时一别成永诀”？</p>
					</section>
				<!-- Items -->
					<section class="main items">
					
					<?php
						require_once 'Stu_Service.php';
						$c = new Stu_Service();
						$res = $c->get_student_info();
						//var_dump($res);
						$i = 0;
						for($i=1;$i<=$res['num'];++$i)
						{
							$img = "images/stu/".$res[$i]['stu_tellnum'].".jpg";
							//echo $img;
							$dele = "delete.php?tellnum=".$res[$i]['stu_tellnum'];
							echo "
							<article class='item'>
							<header>
								<a href='#'><img src='$img' /></a>
						<h3>{$res[$i]['stu_name']}</h3>
						
							</header>
							<p>Addr:{$res[$i]['stu_addr']}
							电话:{$res[$i]['stu_tellnum']}
							微信:{$res[$i]['stu_wechat']}
							Email:{$res[$i]['stu_email']}
							QQ:{$res[$i]['stu_qq']}
							</p>
							<p>签名:{$res[$i]['stu_word']}</p>
		
							<ul class='actions'>
								<li><a href='$dele' class='button'>Delete</a></li>
							</ul>
						</article>
							
							
							";
						}
					?>
						
					</section>

				<!-- CTA -->
					<section id="cta" class="main special">
						<h2>Downlaod to Excel</h2>
						<p>曾经有人说过：你如果想记住什么，就一定要忘记什么．可我想记住你呀</p>
						<ul class="actions">
							<li><a href="excell.php" class="button big">Excel</a></li>
						</ul>
					</section>
				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
							<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<p class="copyright">&copy; Untitled. Design: <a href="#">603</a>. Images: <a href="">Unsplash</a>.</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>