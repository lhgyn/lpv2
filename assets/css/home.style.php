<?php 	$colors = $data['theme_colors']; ?>
<style>	

#section-one .container{
	display: flex;
	align-items: stretch;
	justify-content: center;
}
#section-one .container .left{
	display: flex;
	align-items: center; 
}
#section-one .container .center{
	display: flex;
	flex-direction: column;
	justify-content: space-between;
}
#section-one .container .center h2{
	margin: 0; 
	line-height: 1.3;
}
#section-one .container .center h3{
	margin: 0;
}
#section-one .container .center hr{
	margin-top: 10px;
	margin-bottom: 10px;
}
#section-one .container .center .benefit-list p{
	position: relative;
	color: darkslategray;
	display: flex;
	align-items: center;
	font-size: 16px;
}
#section-one .container .center .benefit-list p::before{
	content: "";
	position: absolute;
	width: 150px;
	border-bottom: 1px solid;
	top: 3px;
	left: 0;
}
#section-one .container .center .benefit-list i{
	position: relative;
	display: flex;
	width: 40px; height: 40px;
	margin-right: 10px;
	color: <?=$colors['primary']?>
}
#section-one .container .center .benefit-list i::before{
	margin: 0;margin: 0;
    width: 40px;
    height: 40px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center; 
}
#section-one .container .center .benefit-list i::after{
	content: "";
	position: absolute;
	top: 0; left: 0;
	margin: 0;
	width: 100%;
	height: 100%;
	border: 2px solid <?=$colors['primary']?>;
	border-radius: 20px; 
}

#section-one .container .right{
	display: flex;
	align-items: center;
	justify-content: flex-end; 
}
#section-one .container .right img{
	max-height: 470px;
}

#cta-block{
	background: #f7f7f7;
	padding-top: 25px;
	padding-bottom: 25px;
}

@media only screen and(max-width:991px){
	#section-one .container{
		flex-direction: column-reverse !important;
	}
}

</style>