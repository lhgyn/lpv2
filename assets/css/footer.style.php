<?php 	$colors = $data['theme_colors']; ?>
<style>	
#site-newsletter{
	background: #333;
	padding-top: 25px;
	padding-bottom: 25px;
}
#site-newsletter .container{
	display: flex;
	align-items: center;
}
#site-newsletter .left {
	color:  #fff;
}
#site-newsletter .right{
	display: flex;
	justify-content: center;
}
#site-newsletter form .btn, #site-newsletter form .form-control{
	height: 45px;
	border-radius: 0;
}
#site-newsletter form .form-control{
	border: 0;
	border-bottom: 2px solid darkorange;
}
#site-newsletter form .btn{
	padding-left: 30px; padding-right: 30px;
	border-bottom: 2px solid darkorange;
	border-color: darkorange;
	background: darkorange;
	color: #fff;
	text-shadow: none;
}



#site-footer{
	background-image: linear-gradient(to bottom,#fff 0,#ddd 100%);
}
#footer-menu{
	padding-top: 25px;
	padding-bottom: 40px;
}
#footer-menu ul{
	list-style-type: none;
	margin: 0; padding: 0;
	color: #333
}
#footer-menu ul li{
	display: flex;
	align-items: center;
	padding-top: 4px;
	padding-bottom: 4px;
}
#footer-menu ul li a{
	margin: 0; padding: 0; 
}
#footer-menu ul li::before{
	content: "";	
	position: relative;
	width: 3px; height: 8px;
	background: #999;
	left: -6px;
}
#footer-menu ul li:first-child::before{
	display: none;
}

#footer-menu h3{
	color:  #333;
}
#footer-menu ul li p{
	font-size: 14px;
}
#footer-menu ul li a{
	display: block;
	color: #333;
	font-size: 16px;
}


#contact-menu li::before{
	display: none;
}
#contact-menu li{
	display: flex;
	align-items: center;
	justify-content: flex-start;
	margin-bottom: 10px;
}

#contact-menu li .icon{
	display: flex;
	align-items: center;
	justify-content: center;
	width: 35px; height: 35px;
	color: #333;
	margin-right: 10px;
	border: 1px solid #ddd;
}



#site-copy{
	background: #0077c8;
	padding-top: 15px;
	padding-bottom: 15px;
}
#site-copy p{
	color: #fff;
}



@media all and (min-width:991px) and (max-width:1199px){
	
}

</style>