<?php 	$colors = $data['theme_colors']; ?>
<style>	


#the_science{
	position: relative;
	padding-top: 40px;
	padding-bottom: 40px;
	border-bottom: 2px solid #f7f7f7;
}
#the_science::before{
	content: "";
	position: absolute;
	top: 0; right: 0;
	width: 100%;
	height: 100%;
	background: #f7f7f7;
	-webkit-clip-path: polygon(90% 0, 100% 0%, 100% 100%, 60% 100%);
	clip-path: polygon(90% 0, 100% 0%, 100% 100%, 60% 100%);
}

#the_science .row{
	display: flex;
	align-items: center;
	justify-content: center;
}

#the_science p{
	color: #333;
	font-size: 16px;
	text-align: justify;
}

#the_science img{
	border: 6px solid #f7f7f7;
	box-shadow: #bbb 2px 2px 5px;


}




#ingredients{
	margin-top: 50px;
	margin-bottom: 50px;
}

#ingredients .container .row{
	display: flex;
	align-items: center;
}

#ingredients .ingredient{
	align-items: center;
	position: relative;
	width: 100%;
	margin-bottom: 15px;
}
#ingredients .ingredient p{
	color: #555
}

#ingredients .center{
	display: flex;
	align-items: center;
	width: 100%;
	padding-left: 25px;
	padding-right: 25px;
} 

#ingredients .center  .left,
#ingredients .center  .right{
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
}

#ingredients .center  .left > img,
#ingredients .center  .right > img{
	width: 120px;
	height: 120px;
	object-fit: cover;
	object-position: center;
	border: 8px solid #eee;
	margin: 0 auto;
	border-radius: 50%;
	margin-top: 15px;
	margin-bottom: 15px;
}
#ingredients .center .center{
}
#ingredients .center .center img{
	max-width: 250px;
}



#start-your-transformation{
	background-image:
	    linear-gradient(to right, rgba(255,255,255,1) 0%,rgba(255,255,255,1) 50%,rgba(255,255,255,0) 100%),
	    url('./assets/img/parallax.jpg');
	background-position: right top;
	background-repeat: no-repeat;
	background-attachment: fixed;
	padding-top: 50px;
	padding-bottom: 50px;
	border-top: 2px solid #ddd;
}
#start-your-transformation p{
	font-size: 16px;
	color: #333;
}
	

@media all and (min-width:991px) and (max-width:1199px){
	
}

</style>