<?php
	include("Login.php");
	include("fb_files/fb_index_file/fb_SignUp_file/SignUp.php");
?>
<html>
<head>
	<title>ШУТИС-МХТС</title>
<?php	
include("fb_files/fb_index_file/fb_background_file/index_background.php");
?>
	<LINK REL="SHORTCUT ICON" HREF="fb_files/fb_title_icon/Faceback.ico" />
	<link href="fb_files/fb_index_file/fb_css_file/index_css.css" rel="stylesheet" type="text/css">
    <link href="fb_files/fb_font/font.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="fb_files/fb_index_file/fb_js_file/Registration_validation.js"> </script>
</head>
<script>
	function time_get()
	{
		d = new Date();
		mon = d.getMonth()+1;
		time = d.getDate()+"-"+mon+"-"+d.getFullYear()+" "+d.getHours()+":"+d.getMinutes();
		Reg.fb_join_time.value=time;
	}
</script>
<body>
	<!--login form-->
	<form  method="post">
		<div style="position:absolute; left:7.7%; top:22.2%; font-size:12px; color:#FFFFFF;">   Нэвтрэх нэр </div> 
		<div style="position:absolute; left:7.7%; top:25.18%; font-size:11px; "> <input type="text" name="username" style="width:149.5;"/> </div>
		<div style="position:absolute; left:7.4%; top:28.8%; font-size:12; color:#FFFFFF;">  <input type="checkbox" checked="checked">   Өөрийгөө сануулах </div>
		<div style="position:absolute;left:19.6%; top:22.2%; font-size:13px; color:#FFFFFF"> Нууц үг </div>
		<div style="position:absolute;left:19.6%; top:25.18%; font-size:13px; "> <input type="password" name="password" style="width:149.5;"> </div>
		  
		<div style="position:absolute;left:31.8%;top:25.2%; ">   <input type="submit" name="Login" value="Нэвтрэх" id="login_button" />  </div>
	</form>
	
	<!-- Faceback left part -->
	
		<!--Left part-->
		<!--Mobile Image--> 	
	<div style="position:absolute; left:5%; top:35%;"> <img src="fb_files/fb_index_file/fb_image_file/must_logo.PNG" width="700" height="275"> </div>
    
	
	
	<!-- Registration -->
	<form  method="post" onSubmit="return check();" name="Reg">
		<div style="position:absolute;left:58%; top:14.5%; color:#000066; font-size:25"> <h5> Бүртгүүлэх</h5> </div>
		<div style="position:absolute;left:58%; top:24.6%; color:#000000;"> </div>
		<div style="position:absolute;left:57.3%; top:29.1%; height:1; width:385; background-color:#FF00FF;"> </div>
        
		<div style="position:absolute;left:57.4%; top:34%; font-size:16px; color:#000000">  Овог: </div>
		<div style="position:absolute;left:65.2%;   top:32.8%; "> <input type="text" name="first_name" class="inputbox" maxlength="10"/> </div>
		<div style="position:absolute;left:57.4%; top:41%; font-size:16px; color:#000000">  Нэр: </div>
		<div style="position:absolute;left:65.2%;  top:39.8%;  "> <input type="text" name="last_name"  size="25" class="inputbox" maxlength="10" /> </div>
		<div style="position:absolute;left:57.4%; top:48%; font-size:16px; color:#000000">  Э-майл:  </div>
		<div style="position:absolute;left:65.2%;  top:46.8%; "> <input type="text" name="email"  size="25" class="inputbox" /> </div>
		<div style="position:absolute;left:57.4%; top:55%; font-size:16px; color:#000000">  Э-майл давтах:  </div>  
		<div style="position:absolute;left:65.2%; top:53.8%; "> <input type="text" name="remail"  size="25" class="inputbox" /> </div>
		<div style="position:absolute;left:57.4%; top:62%; font-size:16px; color:#000000"> Шинэ нууц үг:  </div>
		<div style="position:absolute;left:65.2%; top:60.8%; "> <input type="password" name="password" size="25" class="inputbox" /> </div>
		<div style="position:absolute;left:57.4%; top:68.5%; font-size:16px; color:#000000"> Хүйс:  </div>
		<div style="position:absolute;left:65.2% ;top:67.8%;">		  
		<select name="sex" style="width:120;height:35;font-size:18px;padding:3;">
			<option value="Select Sex:"> Сонгох: </option>
			<option value="Female"> Эмэгтэй </option>
			<option value="Male"> Эрэгтэй </option>
		</select>
		</div>
		
<div style="position:absolute;left:57.4%; top:74.8%; font-size:16px; color:#000000">  Төрсөн огноо:  </div>

	<div style="position:absolute;left:65.2%; top:74%;">
	<select name="month" style="width:80;font-size:18px;height:32;padding:3;">
	<option value="Day:"> Өдөр: </option>
	
	<script type="text/javascript">
	
		for(i=1;i<=31;i++)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}
		
	</script>
	
	</select>
	</div>
	
	<div style="position:absolute; left:72%; top:74%;">
	<select name="day" style="width:63;font-size:18px;height:32;padding:3;">
	<option value="Month:"> Сар: </option>
	
	<script type="text/javascript">
	
		var m=new Array("","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
		for(i=1;i<=m.length-1;i++)
		{
			document.write("<option value='"+i+"'>" + m[i] + "</option>");
		}	
	</script>
	
	</select>
	</div>


	<div style='position:absolute;left:77.5%;top:74%;'>
	<select name="year" style="width:70; font-size:18px; height:32; padding:3;">
	<option value="Year:"> Он: </option>
	
	<script type="text/javascript">
	
		for(i=1996;i>=1960;i--)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}
	
	</script>
	
	</select>
	</div>		
		<input type="hidden" name="fb_join_time">
		<div style="position:absolute;left:65.2%; top:82%; ">  <input type="submit" name="signup" value="Зөвшөөрөх" id="sign_button" / onClick="time_get()"> </div>
		</form>
		
		<div style="position:absolute;left:57.3%; top:90%; height:1; width:385; background-color:#FF00FF; "> </div> 
        
 <!--my_details -->  
    <div style="display:none;" id="my_details">
    <div style="position:absolute;left:12%;top:73%; height:30%; width:30%; z-index:2; background:#000; opacity:0.5; box-shadow:10px 0px 10px 1px rgb(0,0,0);">   </div>
    <div style="position:absolute;left:13%;top:75%; z-index:3;"> <img src="fb_files/fb_index_file/fb_background_file/Developer_details/my.jpg" height="165" width="150" style="box-shadow:0px 0px 10px 5px rgb(0,0,0);"> </div>
    <div style="position:absolute;left:26%;top:75%; z-index:3; color:#FFF;"> <h2> <?php echo base64_decode("QW1pdCBEb2RpeWEgKEFEKQ=="); ?> </h2> </div>
    <div style="position:absolute;left:26%;top:83%; z-index:3; color:#FFF;">  <h3><?php echo base64_decode("QW1pdC5hZDFpNEB5YWhvby5jb20="); ?> </h3> </div>
    <div style="position:absolute;left:26%;top:90%; z-index:3; color:#FFF;"> <h3> <?php echo base64_decode("NzYwMDg5ODIxMA=="); ?>  </h3> </div>
	</div>
    
		
<?php
	include("fb_files/fb_index_file/fb_erorr_file/fb_erorr.php");
?>					
</body>
</html>