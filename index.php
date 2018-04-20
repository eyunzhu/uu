<!DOCTYPE html>
<html>
<head>
	<?	include 'comm/include.php'; ?>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?echo WEB_PATH;?>css/public.css" />
	<link rel="stylesheet" href="<?echo WEB_PATH;?>css/message.css" />
	<script type="text/javascript" src="<?echo WEB_PATH;?>js/kitLite.js"></script>
	<script type="text/javascript" src="<?echo WEB_PATH;?>js/jquery1.7.2.js"></script>
	<title>忆云竹</title>
	<script type="text/javascript">
		adaptForMobile(1080);
	</script>
	<script> 
		
$(document).ready(function(){
  	//显示设置面板
  	$("#setting-panel-btn").click(function(){
  		var f=$('#setting-panel').width();
	  	//alert(f);
	  	if(f=='0'){
	  		$("#before-content").attr("style","position:fixed"); 
	  		$("#setting-panel").animate({      
	      		width:'8.58rem'
	    	});
	    	$("#before-content").animate({
	    		left: '8.58rem',
	    	});    
	    	$("#before-content-cover").attr("style","display:block");	
	    	
	  	}
//	  	else{
//	  		
//	  		$("#setting-panel").animate({      
//	      		width:'0rem'
//	    	},"fast",function(){
//	    		$("#before-content").attr("style","position:static");  
//	    	});
//	    	
//	  	}
  	});
  	//隐藏设置面板
  	$("#before-content-cover").click(function(){
  		$("#before-content-cover").attr("style","display:none");	
		$("#setting-panel").animate({      
      		width:'0rem'
    	},"fast",function(){
    		$("#before-content").attr("style","position:static");  
    	});    	
  	});
  	
  	//显示indexadd
  	$("#comm-header-add").click(function(){
  		$("#index-add-before").toggle();
  		$("#index-add").toggle("slow");
  	});
  	
  	//隐藏indexadd
  	$("#index-add-before").click(function(){
  		$("#index-add-before").hide();
  		$("#index-add").hide();
  	});
  	
    
    
    
 
});
</script> 
</head>

<body>
	
	<? include 'comm/panel.php' ?>
	
<div id="before-content">
	<div id="before-content-cover" class="before-content-cover" ></div>
	
	
<content >
	<? include 'comm/header.php' ?>
	<? include 'pages/indexadd.php' ?>
	<? include 'comm/search.php' ?>
	<div class="message-main">
		<div class="message-li">
			<img src="img/tx/1036795373.jpg" />			
			<div class="message-li-text">
				<div class="message-li-text-time">星期五</div>
				<div class="message-li-text-title">
					玛朵布莎·辞
				</div>				
				<div class="message-li-text-content">
					[图片]
				</div>
			</div>			
		</div>
		<div class="message-li">
			<img src="img/tx/1036795373.jpg" />			
			<div class="message-li-text">
				<div class="message-li-text-time">14:12</div>
				<div class="message-li-text-title">
					Ti Amo
				</div>				
				<div class="message-li-text-content">
					博客：eyunzhu.com
				</div>
			</div>			
		</div>
		
	</div>
	<? include 'comm/footer.php' ?>
</content>
</div>
</body>
</html>
