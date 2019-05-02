<?php 	$colors = $data['theme_colors']; ?>
<style>	


#the_science{
	background-image:;
	background-position: right;
	background-repeat: no-repeat;
	background-size: contain;
	padding-top: 40px;
	padding-bottom: 40px;
	border-bottom: 1px solid #ddd;
}
#the_science .row{
	display: flex;
	align-items: center;
	justify-content: center;
}
#the_science p{
	color: #555
}

#the_science img{
	border: 6px solid #ddd;
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
	background: #f6f6f6;
	padding-top: 50px;
	padding-bottom: 50px;
}
	

@media all and (min-width:991px) and (max-width:1199px){
	
}

</style>