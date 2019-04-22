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
#footer-menu ul{
	list-style: none;
	margin: 0; padding: 0;
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
	margin-top: 5px;
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