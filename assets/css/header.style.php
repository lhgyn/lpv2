<?php 	$colors = $data['theme_colors']; ?>
<style>	

body, html{
	font-family: 'Roboto Slab', serif !important;
	color: #0077c8;
}
body P{
	font-size: 16px;
}

	

#site-header{
	border-top: 3px solid <?=$colors['primary']?>
}
#site-header .main-header .container{
	display: flex;
	align-items: center;
	margin-top: 20px;
	margin-bottom: 20px;
}

#site-header .main-header .branding h1{
	margin: 0;
}
#site-header .main-header .branding h1 img{
	max-width: 200px;
}


#navbar1.navbar{
	margin-bottom: 0; 
}
#navbar1.navbar-default{
	background: #fff;
	border-radius: 0;
	background-image: linear-gradient(to bottom,#fff 0,#eee 100%);
	border: 0;
	box-shadow: 0; 
	/* border-bottom: 2px solid <?=$colors['primary']?> */
}
#navbar1.navbar-default .navbar-header .navbar-brand{
	padding: 9px 15px;
}
#navbar1.navbar-default .navbar-header .navbar-brand img{
	max-width: 160px !important;
}

#navbar1.navbar-default .navbar-nav>li>a{
	padding-top: 15px;
	padding-bottom: 15px;
	padding-left: 25px;
	padding-right: 25px;
	background-image: linear-gradient(to bottom,#fff 0,#eee 100%);
	border-top: 2px solid #fff;
	border-left: 1px solid #eee;
	transition: ease-in-out .3s;
}
#navbar1.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.open>a{
	background: transparent;
	background-image: linear-gradient(to bottom,#fff 0,#eee 100%);
	border-top: 2px solid <?=$colors['primary']?>;
	color: <?=$colors['primary']?>
}
#navbar1.navbar-default .navbar-nav>li>a:hover{
	/* background: <?=$colors['primary']?> !important; */
	border-top: 2px solid <?=$colors['primary']?>;
	color: <?=$colors['primary']?>;
	transition: ease-in-out .3s;
}

#navbar1.navbar-default .navbar-nav>li:last-child{
	float: right;
}
#navbar1.navbar-default .navbar-nav>li:last-child > a{
	background-image: linear-gradient(to bottom,#f0ad4e 0,#eb9316 100%);
	border-top: 2px solid #eb9316;
    color: #fff;
}

@media only screen and (max-width:991px){
	#navbar1.navbar-default .navbar-header .navbar-brand{
		padding: 0 !important;
	}
}
@media all and (min-width:991px) and (max-width:1199px){
	#navbar1.navbar-default .navbar-nav>li>a {
	    padding-left: 16px;
	    padding-right: 16px;
	    font-size: 13px;
	}
}


#mobile-nav .mobile-header{
	height: 25px;
	background: blue;
}
#mobile-nav #gn-menu{
}
#mobile-nav #gn-menu > li{
	border: 0;
}




#cta .left{
 border-right: 1px solid #fff;
 padding-right: 15px;
 font-size: 30px;
}
#cta .right{
	display: flex;
	flex-direction: column;
}

#cta-button{
	text-decoration: none;
    background-image: linear-gradient(to bottom,#FFC107 0,#FB8C00 100%);
    display: flex;
    align-items: center;
    border: 1px solid;
    border-color: #f0ad4e;
    border-bottom-width: 2px;
    border-radius: 6px;
    color: #404040;
    box-shadow: #888 -1px -1px 2px;
    max-width: 380px;
    transition:  ease-in-out .4s;
}
#cta-button div:first-child{
	display: flex;
	flex: 10;
	flex-direction: column;
	padding: 10px 10px 10px 15px;
	text-align: center;
}
#cta-button div:first-child > span{ font-weight: 600; }
#cta-button div:last-child{
	display: flex;
	flex:  0;
	padding: 10px 20px 10px 20px;
}

#cta-button i{
	position: relative;
	width: 100%;
	font-size: 24px;
	text-align: center;
}
#cta-button i::after{
	content:  "";
	position: absolute;
	left: -15px; top: -8px;
	height: 40px;
	width: 1px;
	background-image: linear-gradient(to bottom,#FB8C00 100%, #FFC107 0);
}

#cta-button:hover{		
    background-image: linear-gradient(to bottom,#FB8C00 0, #FFC107 100%);
    border-color: #FFC107;
    transition:  ease-in-out .4s;
}
#cta-button:hover i::after{
	background-image: linear-gradient(to bottom, #FFC107 0, #FB8C00 100%);
}

@media only screen and (max-width: 768px){
	#cta-button div:first-child{
		padding: 8px 8px 8px 8px;
	}
	#cta-button div:last-child{
		padding: 8px 8px 8px 8px;
	}
	#cta-button i::after{ left: -8px; }
}


/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: transparent; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #0077c8; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #0077c8; 
}


</style>