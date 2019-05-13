<?php 	$colors = $data['theme_colors']; ?>
<style>	


#payment{
	position: relative;
	padding-top: 50px;
	padding-bottom: 50px;
}
#payment::before{
	content: "";
	position: absolute;
	top: 0; left:  0;
	width: 100%; height: 100%;
	background: #f9f9f9;
	-webkit-clip-path: polygon(0 0, 10% 0, 40% 100%, 0% 100%);
	clip-path: polygon(0 0, 10% 0, 40% 100%, 0% 100%);
}
#payment figure img{
	border: 8px solid #f9f9f9;
	box-shadow: #ccc 0px 0px 4px;
}

#payment .col-md-7 .row{
	margin-top: 25px;
}
#payment .col-md-6{
	margin-bottom: 15px;
	color:  #333;
}
#payment .col-md-6 span{
	font-size: 18px;
}
#payment h4{
	color:  #333;
}

#payment i{
	position: relative;
	border: 1px solid #0077c8;
    text-align: center;
    margin: 0; margin-right: 20px;
    padding: 5px;
    font-size: 24px;
    line-height: 1;
}
#payment i::before{
	margin: 0;
	font-size: 40px;
	color: #0077c8;
}


@media all and (max-width: 991px){	
	#payment::before{
		clip-path: none;
		background-image:
	    linear-gradient(to bottom, rgba(255,255,255,1) 0%,rgba(248,248,248,1) 100%);
	}
}

</style>


		