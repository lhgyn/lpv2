<?php 	$colors = $data['theme_colors']; ?>

<style>	

#page-depoiments .title h2{
	color: ;
}
#page-depoiments .title p{
	color:  #555 !important;
}

#page-depoiments .item p{
	color: #333;
}
#page-depoiments .item h3{
	margin-top: 0;
}

#page-depoiments .relatos:nth-child(even){
	position: relative;
	background-image: linear-gradient(to right, rgba(227,242,253,1) 0%,rgba(248,248,248,1) 59%,rgba(255,255,255,0) 100%);
	padding: 15px;
	box-shadow: #ddd -2px 2px 2px;
}
#page-depoiments .relatos:nth-child(odd){
	position: relative;
	background-image: linear-gradient(to left, rgba(227,242,253,1) 0%,rgba(248,248,248,1) 59%,rgba(255,255,255,0) 100%);
	padding: 15px;
	box-shadow: #ddd 2px 2px 2px;
}
#page-depoiments .relatos h4{
	color: #555;
}
#page-depoiments .relatos p{
	color: #333;
}

#page-depoiments .item .text{
	background: #f6f6f6;
    padding: 15px;
    /* margin-left: 50px; */
    /* border-radius: 8px; */
}
#page-depoiments .item .text.left{ padding-left: 50px; }
#page-depoiments .item .text.right{ padding-right: 50px; }

.left-arrow::before{
	content: "";
	position: absolute;
	top: calc(50% - 20px); left: -20px;
	width: 20px; height: 50px;
	-webkit-clip-path: polygon(0 50%, 100% 0, 100% 100%);
	clip-path: polygon(0 50%, 100% 0, 100% 100%);
	background-color: #f6f6f6;
	z-index: 999;
}
.right-arrow::before{
	content: "";
	position: absolute;
	top: calc(50% - 20px); right: -20px;
	width: 20px; height: 50px;
	-webkit-clip-path: polygon(100% 50%, 0 0, 0 100%);
	clip-path: polygon(100% 50%, 0 0, 0 100%);
	background-color: #f6f6f6;
	z-index: 999;
}
.left-arrow::after{
	content: "";
	position: absolute;
	top: calc(50% - 22px); left: -20px;
	width: 20px; height: 50px;
	-webkit-clip-path: polygon(0 50%, 100% 0, 100% 100%);
	clip-path: polygon(0 50%, 100% 0, 100% 100%);
	background-color: #bbb;
}
.right-arrow::after{
	content: "";
	position: absolute;
	top: calc(50% - 22px); right: -20px;
	width: 20px; height: 50px;
	-webkit-clip-path: polygon(100% 50%, 0 0, 0 100%);
	clip-path: polygon(100% 50%, 0 0, 0 100%);
	background-color: #bbb;
}

@media only screen and (max-width: 991px){
	#page-depoiments{
		padding-top: 50px;
		padding-bottom: 50px;
	}
	#depoiment-cards .item{
		flex-direction: column;
		margin-bottom: 50px;
	}
	#depoiment-cards .item:nth-child(even){
		flex-direction: column-reverse;
	}
	#depoiment-cards .item figure{
		margin-bottom: -10px;
	}
	#page-depoiments .item .text.left{
		padding-left: 15px;
	}
	#depoiment-cards .item > .text{
		padding-top: 40px;
	}
	#relatos{
		margin-top: 0 !important;
		margin-bottom: 25px;
	}
	#relatos h2{
		text-align: center;
		margin-bottom: 15px;
	}
}





#relatos{
	margin-top: 100px;
	margin-bottom: 100px;
}

#aviso-legal{
	background-image:
	    linear-gradient(rgba(255,255,255, 0.1), rgba(210,210,210, 0.1)),
	    url('./assets/img/bg/naturalwhite.png');
	/* background: #0077c8; */
	background-repeat: repeat;
	background-size: contain;
	padding-bottom: 50px; 
	box-shadow: #ccc 0 0 5px 2px;
}

#aviso-legal .title{
	margin-bottom: 40px;
}
#aviso-legal #title-arow-down {
	position: relative;
	top: -15px;
}
#aviso-legal #title-arow-down h2{
position: relative;	
	top: -15px;
    left: calc(50% - 150px);
    background: #0077c8;
    display: inline-block;
    color: #fff;
    padding: 10px 25px;
    -webkit-clip-path: polygon(100% 0, 100% 70%, 50% 100%, 0 70%, 0 0);
    clip-path: polygon(100% 0, 100% 70%, 50% 100%, 0 70%, 0 0);
    width: 300px;
	margin: 0; padding: 25px;
	z-index: 10;
}
#aviso-legal #title-arow-down span.before{
	position: absolute;
	top: -15px; left: calc(50% - 170px);
	width: 340px; height: 30px;
	background: #555; 
	z-index: 10;
	-webkit-clip-path: polygon(6% 0, 94% 0, 100% 100%, 0% 100%);
	clip-path: polygon(6% 0, 94% 0, 100% 100%, 0% 100%);
	z-index: 1;
}

#aviso-legal .well{
	background: rgba(255,255,255,.75);
	border-radius: 0;
	color:  #636363;
	padding: 40px;
	border-color: ;
	border-style: ;
}
#aviso-legal .well p{
	font-size: 16px;
}

@media all and (min-width:991px) and (max-width:1199px){
	
}

</style>