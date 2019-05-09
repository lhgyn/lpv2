<?php 	$colors = $data['theme_colors']; ?>
<style>	


#page-contato{
	padding-top: 50px;
	padding-bottom: 250px;
	background-image:
	    linear-gradient(to right, rgba(255,255,255,1) 0%,rgba(255,255,255,1) 50%,rgba(255,255,255,0) 100%),
	    linear-gradient(to bottom, rgba(255,255,255,1) 0%,rgba(255,255,255,1) 55%,rgba(255,255,255,0) 100%),
	    url('./assets/img/calcenter.jpg');
	background-repeat: no-repeat;
	background-position: center center, center center, right bottom -150px;
	background-size: cover, cover, auto 550px;
}

#page-contato .form-control{
	border-radius: 0;
	color: #444;
	border: 1px solid #f1f1f1;
	/* border-bottom: 2px solid #999; */
	background: #fff;
	box-shadow: #999 2px 2px 1px;
	min-height: 40px;
}
#page-contato .form-control::placeholder {
  color: <?=$colors['primary']?>;
  font-size: 14px;
  text-transform: uppercase;
}
#page-contato form{
	margin-top: 25px;
}
#page-contato form label{
	color: #444;
}

#page-contato .info{
	position: relative;
	background-image: linear-gradient(to left, #f2f2f2, rgba(255,255,255,1));
	margin-top: 16px;
	z-index: 999;
}
#page-contato .info::before{
	content: "";
	position: absolute;
	width: 60%; height: 90%;
	bottom: -4px; right: -4px;
	background-image: linear-gradient(to left, #bbb, rgba(255,255,255,.1));
	z-index: -1;

}

#page-contato .info p{
	color:  #444;
}


#page-contato #cta-button{
	text-transform: uppercase;
	text-align: center;
	padding-top: 0;
	padding-bottom: 0;
}


@media all and (min-width:991px){
	
}

</style>