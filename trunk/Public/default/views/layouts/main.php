<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
                        
    <!-- BEGIN .styles -->
    <link rel="stylesheet" href="<?php echo  yii::app()->theme->baseUrl ?>/css/style.css" type="text/css" media="screen" />
    
    <!--[if IE]> 
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection" /> 
    <![endif]-->
    <!--[if IE 7]>
        <link rel="stylesheet" href="css/ie7.css" type="text/css" media="screen" />
    <![endif]-->
	  
    <link rel="stylesheet" href="<?php echo  yii::app()->theme->baseUrl ?>/css/colors/green.css" type="text/css" media="screen" />   <!-- COLOR -->                
	<!-- END .styles -->           

    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo  yii::app()->theme->baseUrl ?>/favicon.ico" />
    <link rel="icon" type="image/x-icon" href="<?php echo  yii::app()->theme->baseUrl ?>/favicon.ico" />  
    <!-- [favicon] end -->
      
    <script type="text/javascript">
        Cufon.replace('h1, h2, h3:not(#footer h3, .title-blog), h4, h5, h6, table th', {fontFamily: 'Waukegan'});
        //Cufon.replace('.sidebar-nav a', {fontFamily: 'Champagne', hover: true});       
       
    </script>             
    
</head>                   
        
<body class="no_js">
    <div id="top-space">
	    <div class="inner">
	   <?php $this->widget('zii.widgets.CMenu',array(
				'items'=>array(
					array('label'=>'首页', 'url'=>array('post/index')),
					array('label'=>'网站地图', 'url'=>array('site/page', 'view'=>'about')),
					array('label'=>'注册', 'url'=>array('site/register')),
					array('label'=>'登录', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'退出 ('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>!Yii::app()->user->isGuest)
				),'htmlOptions'=>array(
					'class' => 'top-nav'
				),'itemTemplate'=>'<i>{menu}</i>',
	   			'firstItemCssClass'=>'firstnav'
			)); ?>
	    </div>
	</div>
    <!-- START HEADER -->
    <div id="header">
        
        <div class="inner">
        
            <!-- START LOGO -->
            <div id="logo">
                <a href="index.php" title="Bolder Premium Wordpress Theme">Bolder Premium Wordpress Theme</a>
            </div>
            <!-- END LOGO -->
			
			<?php /* @var $this Controller */ ?>
			<?php $this->beginContent('//layouts/menu'); ?>
			<div id="content">
				<?php echo $content; ?>
			</div><!-- content -->
			<?php $this->endContent(); ?>
            
            <div class="clear"></div>
            
        </div>
            
    </div>
    <!-- END HEADER -->   

    
    <!-- START CONTENT -->
    <div id="content">
    
       <?php echo $content; ?>            
    
    	<div class="clear"></div>
    
    </div>
    <!-- END CONTENT -->  
    
	<!-- START FLASH NEWS -->
	<div class="news-home">
        
        <div class="inner">
            <h2>News</h2>
            
            <ul>
                <li><a href="#">Bolder, a new WordPress Theme – buy it on Theme Forest</a> | January 16, 2011</li>
                <li><a href="#">All right! Now the news are dynamics!</a> | January 16, 2011</li>
                <li><a href="#">Make your choice from 18 different skins</a> | January 16, 2011</li>
            </ul>
        </div>        
            
        <div class="clear"></div>
                      
    </div>
	<!-- END FLASH NEWS -->
    
	<!-- START FOOTER -->
    <div id="footer">
        <div class="inner five">
        
        	<!-- START COMPANY MENU -->
            <div class="section">
				<h3>Company</h3>
				
				<ul class="menu">
					<li><a href="about.html">About us</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="portfolio.html">Portfolio</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>            
        	<!-- END COMPANY MENU -->
			                         
        	<!-- START TWITTER -->
			<div class="section">
				<h3>Tweets</h3>   	              
				
				<div class="twitter-container"></div>
				
			</div>                
        	<!-- END TWITTER -->
			                         
        	<!-- START FLICKR -->
			<div class="section">
				<h3>Flickr</h3>
				
				<div class="flickr">    
				</div>
			</div>
        	<!-- END FLICKR -->
			                         
        	<!-- START SOCIALS -->
			<div class="section">
				<h3>Socials</h3>
				
				<ul class="menu">
					<li><a href="http://feeds.feedburner.com/yourinspirationweb/HuJt">Subscribe feed</a></li>
					<li><a href="http://www.facebook.com/YIWeb">Our Facebook page</a></li>
					<li><a href="http://twitter.com/YIW/">Follow us on twitter</a></li>
					<li><a href="#">Flickr</a></li>
					<li><a href="#">LinkedIn</a></li>
				</ul>
			</div>
        	<!-- END SOCIALS -->
			                         
        	<!-- START GET IN TOUCH -->
			<div class="section last">
				<h3>Get in touch</h3>			
				
				<div class="textwidget">
					<address>
					  	Bolder Theme,<br />
					  	115 Avenue street NY<br />
					
					  	<strong>Phone</strong>: + 39 347 8785621<br />
					</address>
                
					<a href="#" class="contact">
					   <strong>Have a question?</strong><br />
					    <span>Contact us</span>    
					</a>
				</div>
			</div>  
        	<!-- END GET IN TOUCH -->
    
            <div class="clear"></div>  
        
        </div> 
    </div>
    <!-- END FOOTER -->  
      
    
    <!-- START COPYRIGHT -->
    <p id="copyright">Copyright 2010 - Bolder Theme, theme by <a href="http://www.yourinspirationweb.com/en">Your Inspiration Web</a> | purchase it on <a href="http://themeforest.net/?ref=Sara_p">Theme Forest</a></p>
    <!-- END COPYRIGHT -->                                    
    
    <script type="text/javascript">
        //<![CDATA[
        Cufon.now();  //]]>   
    </script>
    <!-- BEGIN .scripts -->
	<script type='text/javascript' src='<?php echo  yii::app()->theme->baseUrl ?>/js/jquery.js'></script>
	<!-- END .scripts --> 
</body>
</html>
