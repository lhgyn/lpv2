<?php 	$colors = $data['theme_colors']; ?>
<style>	

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


/* Icones */
#site-header .main-header .container .icons ul{
	margin: 0; padding: 0;
	list-style: none;
	display: flex;
	align-items: center;
	justify-content: space-around;
}
#site-header .main-header .container .icons ul li{
	display: flex;
	align-items: center;
}
#site-header .main-header .container .icons ul li i{
	margin-right: 5px;
}
#site-header .main-header .container .icons ul li i::before{
	margin: 0;
}
#site-header .main-header .container .icons ul li span{
	color:  #888;
}

@media only screen and (max-width: 991px){
	#site-header .icons{ width:  100%; }
	#site-header .icons ul li:first-child{
		display: none !important;
	}
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
	padding-top: 25px;
	padding-bottom: 25px;
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


/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
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