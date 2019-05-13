<?php 	$colors = $data['theme_colors']; ?>
<style>	

#politica-privacidade, #politica-reembolso{
	margin-top: 50px;
	margin-bottom: 150px;
}
#politica-privacidade p, #politica-reembolso p{
	color: #444;
}

#politica-privacidade ul, #politica-reembolso ul{
	list-style-type: none;
	color: #555;
	font-size: 16px;	 
}

#politica-privacidade ul li, #politica-reembolso ul li{
	position: relative;
}
#politica-privacidade ul li::before, #politica-reembolso ul li::before{
	content:  "→";
	color:  #0077c8;
	font-size: 18px;
	font-weight: bold;
	/* 
	position: absolute;
	width: 8px;
	height: 8px;
	left: -10px; top: 7px;
	background: #0077c8;
	-webkit-clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%); */
}

@media all and (min-width:991px) and (max-width:1199px){
	
}

</style>