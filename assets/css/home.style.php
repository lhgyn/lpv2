<?php 	$colors = $data['theme_colors']; ?>
<style>	

/* font-family: 'Yellowtail', cursive;
font-family: 'Marck Script', cursive;
font-family: 'Nothing You Could Do', cursive; */

#main {
    background-image: linear-gradient(to right, rgba(255,255,255,0) 0%,rgba(255,255,255,0) 24%,rgba(255,255,255,0) 25%,rgba(255,255,255,1) 40%,rgba(255,255,255,1) 100%), url('assets/img/bg-home-3.jpg');
    background-size: contain;
    background-position: left center;
    background-repeat: no-repeat;
}


#section-one{
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
	padding-bottom: 25px;
}
#section-one #main .container .center .title{
	margin-top: 30px;
}

#section-one #main .container .center h2{
	margin: 0; 
	line-height: 1.3;
	text-align: left;
}
#section-one #main .container .center h2 strong{
	font-size: 42px;
}
#section-one #main .container .center h2 big{
	font-size: 42px;
}
#section-one #main .container .center h3{
	margin-top: 0;
	color: #333;
}
#section-one #main .container .center hr{
	margin-top: 10px;
	margin-bottom: 10px;
}
#section-one #main .container .center .benefit-list{
	margin-top: 25px;
}
#section-one #main .container .center .benefit-list p {
    position: relative;
    line-height: 2.4;
    z-index: 0;
}
#section-one #main .container .center .benefit-list p span{
	position: relative;
	z-index: 999;
    color: <?=$colors['primary']?>;
    display: flex;
    align-items: center;
    font-size: 18px;
    text-transform: uppercase;
}
#section-one #main .container .center .benefit-list p::after {
	content:  "";
    position: absolute;
    background: #999;
    width: 60%;
    height: 80%;
    right: -3px;
    bottom: -3px;
    transform: rotate(2deg);
    z-index: 1;
}

#section-one #main .container .center .benefit-list p::before {
	content:  "";
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0; top: 0;    
    background-image: linear-gradient(to right, rgba(255,255,255,0) 0%,rgba(255,255,255,1) 42%,rgba(239,239,239,1) 100%);
    z-index: 10;
}



#section-one #main .container .center .benefit-list i{
	position: relative;
	display: flex;
	width: 40px; height: 40px;
	margin-right: 10px;
	color: <?=$colors['primary']?>;
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
    top: -1px;
    left: -1px;
    margin: 0;
    width: 100%;
    height: 100%;
    border: 1px solid #eee;
    background: #fff;
    border-radius: 20px;
    box-shadow: #999 2px 2px 2px;
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
	background: <?=$colors['primary']?>;
	padding-top: 25px;
	padding-bottom: 25px;
}
#cta-block .container{
	display: flex;
}

#cta-block p{
    font-size: 25px;
    font-weight: normal;
    color: #fff;
    text-align: center;
}

#cta-block .right{
	display: flex;
	align-items: center;
	justify-content: center;
}

@media only screen and (max-width:991px){
	#main{
		background: #fff;
		padding-top: 40px;
		padding-bottom: 40px;
	}
	#section-one #main .container{
		flex-direction: column;
	}
	#section-one #main .container .center .benefit-list .row{
		flex-direction: column;
		align-items: flex-start !important;
	}

	#section-one #main .title h2{ font-size: 24px; }
	#section-one #main .title h2 strong{ font-size: 24px !important; }
	#section-one #main .title h2 > br{ display: none; }


	#section-one #main .container .center .benefit-list p span{
		font-size: 14px;
		padding-right: 10px;
	}
	.selos img{
		max-width: 70px !important;
	}

	#cta-block .container{
		flex-direction: column;
	}
	
	.mockup{
		margin-top: 30px;
	}
	.mockup > img{
		max-width: 200px !important;
	}
}




/* SEÇÃO 2 - PRODUTO NATURAL, RESULTADO -- modelo 1*/
#section-two{
	padding-top: 50px;
	padding-bottom: 50px;
	background: #f9f9f9 
}
#figure-card{
	position: relative;
	display: block;
	background: #fbfbfb;
	padding: 16px; padding-bottom: 30px;
	box-shadow: #999 2px 2px 5px;
	width: 300px; height: 300px;
	transform: rotate(-10deg);
	z-index: 0;
}
#figure-card::before{
	content:  "";
	position: absolute;
	top: 0px; left: 0px;
	display: block;
	background: #fbfbfb;
	padding: 15px; padding-bottom: 30px;
	box-shadow: #999 2px 2px 5px;
	width: 300px; height: 300px;
	transform: rotate(10deg);
	z-index: 1;
}
#figure-card img{
	position: relative;
	width: 100%; height: 100%;
	object-fit: cover;
	transform: rotate(10deg);
	z-index: 10;
}

#section-two p{
	color: #333;
	font-size: 18px;
}

#section-two #stamp-guarantee{
	max-width: 260px !important;
}

@media only screen and (max-width: 991px){
	#section-two h2, #section-two p{
		text-align: center;
	}
	#section-two #figure-card{
		margin: 25px auto;
	}

	.items_1{
		flex-direction: column;
	}

	#ciencia .first {
	    background: url('./assets/img/bg-bloco-3.jpg') bottom left -100px no-repeat !important;
	    background-size: auto 260px !important;
	    padding-bottom: 30px !important;
	    padding-top: 0 !important;
	}
	#ciencia .first ul li{
		padding: 0 20px !important;

	}
	#ciencia .first .container .row{
		flex-direction: column-reverse;
	}
	#ciencia .first .right{
		width: 100%;
	}
	#ciencia .first .left{
		margin-bottom: 45px;
	}
	#ciencia .items_1 .col-md-5{
		flex-direction: column;
		width: 100% !important;
		text-align: center;
		margin-bottom: 40px;
	}
	#ciencia .items_1 .col-md-5 p{
		text-align: center;
	}
	#ciencia .items_1 .col-md-5 figure{
		margin-bottom: 15px;
	} 

	#figure-card{
		width: 250px !important; height: 250px !important;
	}
	#figure-card::before{
		width: 250px !important; height: 250px !important;
	}

	#section-two {
		max-width: 100% !important; 
	}
}


/* SEÇÃO 3 - CIÊNCIA -- modelo 1*/

#ciencia .first{
	position: relative;
	background: url('./assets/img/bg-bloco-3.jpg') left -50px center no-repeat;
	background-size: cover;
	margin-bottom: 50px;
    padding-top: 50px;
    padding-bottom: 50px;
	border-top: 2px solid #ddd;
	border-bottom: 2px solid #ddd;
}
#ciencia .first .divisor{
	position: absolute;
	bottom: -25px; left: calc(50% - 25px);
	-webkit-clip-path: polygon(50% 100%, 0 0, 100% 0);
	clip-path: polygon(50% 100%, 0 0, 100% 0);
	background: #ddd;
	width: 50px;
	height: 25px;
	display: block;
}
#ciencia .first .container .row{
	display: flex;
	align-items: center;
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

#ciencia .first .right{
	display: flex;
	align-items: center;
	justify-content: flex-end;
}
#ciencia .first ul li{
	position: relative;
	padding: 10px 25px;
	margin-bottom: 15px;
	background: transparent;
	font-size: 18px;
	text-transform: uppercase;
	z-index: 10;
}
#ciencia .first ul li::before{
	content: "";
	position: absolute;
	bottom: -3px; right: -3px;
	width: 50%;
	height: 90%;
	background: linear-gradient(to right, rgba(238,238,238,0) 0%,rgba(213,213,213,1) 50%,rgba(187,187,187,1) 100%);
	transform: rotate(2deg);
	z-index: -2;
}
#ciencia .first ul li::after{	
	content: "";
	position: absolute;
	top: 0; left: 0;
	width: 100%;
	height: 100%;
	background: linear-gradient(to right, rgba(238,238,238,0) 0%,rgba(238,238,238,0) 25%,rgba(238,238,238,1) 50%,rgba(238,238,238,1) 100%);
	z-index: -1;
}

#ciencia .right img{
	-moz-transform: scaleX(-1);
    -o-transform: scaleX(-1);
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
    filter: FlipH;
    -ms-filter: "FlipH";
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

#ciencia .items_1 .col-md-5{
	display: flex;
	align-items: center;
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
	box-shadow: #ccc 0 0 5px;
	z-index: 0;

}
#ciencia .items_1 figure img{
	position: relative;
	width: 150px;
	height: 150px;
	border-radius: 50%;
	z-index: 2;
}
#ciencia .items_1 h3{ margin: 5px 0;  }
#ciencia .items_1 p{
	text-align: justify;
	color: #333;
	margin: 0; 
}

@media only screen and (max-width:991px){
	#ciencia .items_1 figure{
		margin: 0;
	}
}


/* SEÇÃO 4 - DEPOIMENTOS -- modelo 1*/
#depoiments{
	background-image:
	    linear-gradient(rgba(255,255,255, 0.85), rgba(210,210,210, 0.65)),
	    url('assets/img//parallax3.jpg');
	background-size: cover;
	background-repeat: no-repeat;
    background-position: left center;
    background-attachment: fixed;
	padding-top: 50px;
	padding-bottom: 50px;
}
#depoiments .container .col-md-4{
	position: relative;
	padding: 15px;
	z-index: 1;
}
#depoiments .container .left,
#depoiments .container .right{
	padding-top: 50px;
	padding-bottom: 50px;
}
#depoiments .container figure{
	position: relative;
}

#depoiments .container figure > img:last-child{
	position: absolute;
	top: 60px;
}

#depoiments .container .left figure,
#depoiments .container .right figure{
	box-shadow: #bbb 0 0 10px;
}

#depoiments .container .center figure{
	position: relative;
	z-index: 999;
	box-shadow: #bbb 0 0 10px;
}

#depoiments .thumb{
	position: absolute;
	top: 18px; left: 10px;
	display: flex;
	align-items: center;
	color: #777;

}
#depoiments .thumb img{
	max-width: 30px;
	margin-right: 10px;
}

#depoiments .tip{
	position: relative;
	margin-top: 50px;
	border: 0;
	padding: 15px;
	font-size: 16px;
	color: #eee;
	background: #0077c8;
	box-shadow: #bbb 2px 2px 5px;
}
#depoiments .tip::before{
	content: "";
	position: absolute;
	width: 40px; height: 20px;
	top: -20px; left: calc(50% - 18px);
	background: #bbb;
	-webkit-clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
}

#depoiments .tip::after{
	content: "";
	position: absolute;
	width: 40px; height: 20px;
	top: -19px; left: calc(50% - 20px);
	background: #0077c8;
	-webkit-clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
}

@media only screen and (max-width: 991px){
	#depoiments figure{
		max-width: 300px;
	}
	#depoiments .container figure > img:last-child{
		top: 50px;
		z-index: -1;
	}
	#depoiments .tip{
		width: 350px;
	}
}
@media only screen and (max-width: 430px){
	#depoiments figure{
		
	}
	#depoiments .tip{
		width: 100%;
	}
}


/*//////////////////////////////////////////////////////
////////////// INSPIRACIONAL
////////////////////////////////////*/
#inspiracional{
	position: relative;
	min-height: 400px;
	padding-top: 50px;
	padding-bottom: 100px;
	background-image:
	    linear-gradient(rgba(255,255,255,.1), rgba(255,255,255,1)),
	    url('./assets/img/bg/old_wall.png');
	background-repeat: repeat;
	background-size: ;
}

#inspiracional::before{
	content: "";
	position: absolute;
	top: 0; left: 0;
	width: 100%; height: 50%;
	background: #0077c8;
	-webkit-clip-path: polygon(100% 0, 100% 70%, 50% 100%, 0 70%, 0 0);
clip-path: polygon(100% 0, 100% 70%, 50% 100%, 0 70%, 0 0);
box-shadow: #bbb 3px 3px 5px;
}

#inspiracional .top{
	margin-bottom: 50px;
}

#inspiracional .content h2{
	color: #fff;
	text-align: center;
}

#inspiracional .content h3{
	color: #0077c8;
	text-align: center;
}

#inspiracional figure{
	text-align: center;
}

#inspiracional figure img{
	width: 100%;
	height: 100%;
	object-fit: cover;
	object-position: center;
}
#inspiracional figure figcaption{
	font-size: 18px;
	text-align: center;
}


@media only screen and (max-width:991px){
	#inspiracional::before{
		clip-path: initial;
		height: 25%;
		box-shadow: none;
	}
	#inspiracional #figure-card{
		margin: 0 auto;
	}
	#inspiracional .content .col-md-4{
		margin-bottom: 50px;
	}
}



/* /////////////////////////////////////////////////
////////// AUTORIDADE MÉDICA
//////////////////////////// */
#autoridade-medica{
	position: relative;
	background-image:
	    url('assets/img/img-doctor.png'),
	    linear-gradient(135deg, rgba(255,255,255,0.7) 0%,rgba(254,254,254,0.7) 2%,rgba(243,243,243,1) 46%,rgba(255,255,255,1) 100%);
	background-repeat: no-repeat;
	background-size: auto;
	background-position: bottom right; 
	padding-top: 30px;
	padding-bottom: 50px;
	border-top: 1px solid #bbb;
	z-index: 99;
}

#autoridade-medica p{
	color: #333;
	text-align: justify;

}

#autoridade-medica #icones{
	display: flex;
	flex-direction: column;
}
#autoridade-medica #icones span{
    display: flex;
    flex: 10;
    align-items: center;
    font-size: 16px;
    color: #333;
    width: 100%;
}
#autoridade-medica #icones span b{ display: block; font-size: 16px; }
#autoridade-medica #icones span i{
	margin-right: 15px;
	font-size: 24px;
	color: #0077c8;
}
#autoridade-medica #icones span i::before{
	font-size: 32px;
}

#autoridade-medica #icones span.icon{
	
}

@media only screen and (max-width: 991px){
	#autoridade-medica{
		position: relative;
	    background-image: linear-gradient(135deg, rgba(255,255,255,0.7) 0%,rgba(254,254,254,0.7) 2%,rgba(243,243,243,1) 46%,rgba(255,255,255,1) 100%);
	    padding-bottom: 0;
	}
	#autoridade-medica p{
		text-align: left;
	}
}


/* ////////////////////////////////////////////////////////////////
///////////// BLOCO NA MIDIA
//////////////////////////////////// */
#na-midia{
	position: relative;
	padding-top: 40px;
	padding-bottom: 60px;
	background-image:
	    linear-gradient(rgba(255,255,255,.1), rgba(255,255,255,.1)),
	    url('./assets/img/bg/exclusive_paper.png');
	box-shadow: #ccc 0px 0px 5px;
	z-index: 999;
}

#na-midia .title{
	margin-bottom: 40px;

}

#na-midia figure{
	width: 150px;
	height: 150px;
	padding: 10px;
	background: #fff;
	border-radius: 50%;
	box-shadow: #ddd 0 0 5px;
}
#na-midia figure img{
	max-width: 100%;
	object-fit: contain;
	width: 100%; height: 100%;
	border-radius: 50%;
	background: #f9f9f9;
}
#na-midia .col-md-6{
	display: flex;
	align-items: center;
}
#na-midia .col-md-8 > div{
	position: relative;
	background: #f9f9f9;
	padding: 15px;
}
#na-midia .col-md-8 > div::before{
	position: absolute;
	content: "";
	width: 25px; height: 50px;
	background: #f9f9f9;
	top: calc(50% - 25px);
}


#na-midia .item-1 .col-md-8 > div,
#na-midia .item-2 .col-md-8 > div{
	box-shadow: #ddd 2px 2px 5px;
}

#na-midia .item-3 .col-md-8 > div,
#na-midia .item-4 .col-md-8 > div{
	box-shadow: #ddd -2px -2px 5px;
}

#na-midia .item-1 div::before,
#na-midia .item-2 div::before{
	left:  -20px;
	-webkit-clip-path: polygon(100% 100%, 0 50%, 100% 0);
	clip-path: polygon(100% 100%, 0 50%, 100% 0);
}
#na-midia .item-1 div::after,
#na-midia .item-2 div::after{
	left:  -22px;
	-webkit-clip-path: polygon(100% 100%, 0 50%, 100% 0);
	clip-path: polygon(100% 100%, 0 50%, 100% 0);
}
#na-midia .item-3 div::before,
#na-midia .item-4 div::before{
	right: -20px;
	-webkit-clip-path: polygon(0 100%, 100% 50%, 0 0);
	clip-path: polygon(0 100%, 100% 50%, 0 0);
}

@media only screen and (max-width: 991px){
	#na-midia .col-md-6.item-1,
	#na-midia .col-md-6.item-2{
		flex-direction: column;
	}
	#na-midia .col-md-6.item-3,
	#na-midia .col-md-6.item-4{
		flex-direction: column-reverse;
	}
	#na-midia .item-1 div::before,
	#na-midia .item-2 div::before,
	#na-midia .item-3 div::before,
	#na-midia .item-4 div::before{
		display: none;
	}
	#na-midia .col-md-6{
		margin-bottom: 25px;
	}
	#na-midia .col-md-6 figure{
		margin-bottom: 10px;
	}
}


/* ////////////////////////////////////////////////////////////////
///////////// BLOCO GARANTIA
//////////////////////////////////// */
#guarantee-block{
	position: relative;
	padding-top: 40px;
	padding-bottom: 40px;
}
#guarantee-block .bg-transparent{
	border: 1px solid #c7a742;
    background: rgb(49, 49, 49);
    border-radius: 10px;
    padding: 25px;
}
#guarantee-block .title{
	margin-bottom: 40px;
}
#guarantee-block .title p{
	color:  #333;
}
#guarantee-block p, #guarantee-block h3{
	color: #fff;
	font-weight: normal;
}



</style>