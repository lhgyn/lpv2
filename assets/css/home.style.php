<?php 	$colors = $data['theme_colors']; ?>
<style>	

/* font-family: 'Yellowtail', cursive;
font-family: 'Marck Script', cursive;
font-family: 'Nothing You Could Do', cursive; */

#section-one{
	margin-top: 40px;
}
#section-one #main .container{
	display: flex;
	align-items: stretch;
	justify-content: center;
}
#section-one #main .container .left{
	display: flex;
	align-items: center; 
}
#section-one #main .container .center{
	display: flex;
	flex-direction: column;
	justify-content: space-between;
}
#section-one #main .container .center h2{
	margin: 0; 
	line-height: 1.3;
}
#section-one #main .container .center h2 big{
	font-size: 3.2vw;
}
#section-one #main .container .center h3{
	margin-top: 0;
	color: dimgray;
}
#section-one #main .container .center hr{
	margin-top: 10px;
	margin-bottom: 10px;
}
#section-one #main .container .center .benefit-list p{
	position: relative;
	color: dimgray;
	display: flex;
	align-items: center;
	font-size: 16px;
}
#section-one #main .container .center .benefit-list p span{
	display: flex;
	align-items: center;
	border-radius: 50px; 
	padding-right: 25px;
	border: 1px solid #0077c8;
	border-bottom: none;

}

#section-one #main .container .center .benefit-list i{
	position: relative;
	display: flex;
	width: 40px; height: 40px;
	margin-right: 10px;
	color: #fff;
}
#section-one #main .container .center .benefit-list i::before{
	margin: 0;margin: 0;
    width: 40px;
    height: 40px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1; 
}
#section-one #main .container .center .benefit-list i::after{
	content: "";
	position: absolute;
	top: -1px; left: -1px;
	margin: 0;
	width: 100%;
	height: 100%;
	border: 1px solid <?=$colors['primary']?>;
	background: <?=$colors['primary']?>;
	border-radius: 20px; 
	z-index: 0;
}

#section-one #main .container .right{
	display: flex;
	align-items: center;
	justify-content: flex-end; 
}
#section-one #main .container .right img{
	max-height: 470px;

        -moz-transform: scaleX(-1);
        -o-transform: scaleX(-1);
        -webkit-transform: scaleX(-1);
        transform: scaleX(-1);
        filter: FlipH;
        -ms-filter: "FlipH";
}

#cta-block{
	background: #f7f7f7;
	padding-top: 25px;
	padding-bottom: 25px;
}

#cta-block p{
    font-size: 25px;
    font-weight: bold;
    color: dimgray;
    text-align: center;
}

#cta-block .right{
	display: flex;
	align-items: center;
	justify-content: center;
}


#cta{
	display: flex;
	align-items: center;
	background-image: linear-gradient(to bottom,#f0ad4e 0,#eb9316 100%);
	background-repeat: repeat-x;
    border-color: #e38d13;
    border-radius: 5px;
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

@media only screen and (max-width:768px){
	#section-one #main .container{
		flex-direction: column;
	}
	#section-one #main .container .right{ justify-content: flex-start; }
	#section-one #main .container .right img{
		max-height: 470px;

        -moz-transform: scaleX(1);
        -o-transform: scaleX(1);
        -webkit-transform: scaleX(1);
        transform: scaleX(-);
        filter: FlipH;
        -ms-filter: "FlipH";
	}
}



/* SEÇÃO 2 - CIÊNCIA -- modelo 1*/
#ciencia{
	margin-top: 40px;
}

#ciencia .first{
	margin-top: 25px;
	margin-bottom: 50px;
}
#ciencia .first p{
	color: #333;
}
#ciencia .first p strong{
	color:  #0077c8;
}
#ciencia .first ul{
	list-style: none;
	margin: 0; padding: 0; 
}





#ciencia .items_1{
	display: flex;
	align-items: center;
	justify-content: center;
}
#ciencia .items_1 .col-md-2{
	max-width: 50px;
}
#ciencia .items_1 .col-md-5{
	width: calc(50% - 25px);
}
#ciencia .items_1:first-child .col-md-2{ align-self: flex-end; }
#ciencia .items_1 .col-md-12 hr{
	display: block;
	width: 100%;
	border-bottom: 1px solid #333;
}

#ciencia .items_1 figure{
	position: relative;
	float: left;
	margin-right: 25px;
	width: 150px;
	height: 150px;
	z-index: 1;
}
#ciencia .items_1 figure::before{
	position: absolute;
	content: "";
	width: 170px;
	height: 170px;
	background: #fff;
	top: -10px; left: -10px;
	border-radius: 50%;
	box-shadow: #999 0 0 5px;
	z-index: 0;

}
#ciencia .items_1 figure img{
	position: relative;
	width: 150px;
	height: 150px;
	border-radius: 50%;
	z-index: 2;
}
#ciencia .items_1 p{
	text-align: justify;
	color: #333
}



#ciencia .last span{
    position: relative;
    font-size: 24px;
    border: 1px solid;
    border-radius: 100px;
    padding-left: 48px;
    padding-right: 40px;
    border-bottom: 0;
    left: -50px;
}


</style>