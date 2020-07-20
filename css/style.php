<style type="text/css">

html{
    scroll-behavior: smooth;
}

*{ margin: 0; padding: 0; box-sizing: border-box; font-family: 'Mulish', sans-serif; }

/*** In Bootstrap 4 .row class takes a margin by default. that is why the text or content
can not be fitted in the center. Because of this we have to set margin-left and margin-right to 0 */
.row{
    margin-left:0!important;
    margin-right:0!important;
}

.navbar .nav-item .nav-link:hover{
    color: blue;
}

.nav_style{
    background-color: #a29bfe!important;
}

.nav_style a{
    color: white;
}

.main_header{
    height: 450px;
    width: 100%;
}

.rightside h1{
    font-size: 3rem;
    color: darkslateblue;
}

.section_header h1{
    text-align: center;
    color: darkturquoise;
}

/***************** animation *************/

.corona_rotate img{
    animation: gocorona 3s linear infinite;
}

.leftside img{
    animation: heartbeat 5s linear infinite;
}

@keyframes gocorona{
    0% {transform: rotate(0);}
    100% {transform: rotate(360deg);}
}

@keyframes heartbeat{
    0% {transform: scale(.75);}
    20% {transform: scale(1);}
    40% {transform: scale(.75);}
    60% {transform: scale(1);}
    80% {transform: scale(.75);}
    100% {transform: scale(.75);}
}

/*********** corona update **********/

.corona_update{
    margin: 0 0 30px 0;
}

.corona_update h3{
    color: #ff7675;
}

.corona_update h1{
    font-size: 2rem; text-align: center;
}



/********** about section ***********/

.sub_section{
    background-color: #fbfafd;
}


/********** footer *********/

.footer_style{
    background-color: #a29bfe!important;
}

.footer_style p{
    margin-bottom: 0!important;
    margin-block-start: 0!important;
    margin-block-end: 0!important;
    margin-inline-start: 0!important;
    margin-inline-end: 0!important;
} 

.padding{
    padding: 0 !important;
}


/************* top scroll *************/

#myBtn{
    display: none; /* hidden by default */
    position: fixed; /* fixed/sticky position */
    bottom: 30px;
    right: 40px;
    z-index: 99; /* make sure it does not overlap */
    border: none; /* remove border */
    outline: none; /* remove outline */
    background-color: #00A8FF;
    color:white; /* text color */
    cursor: pointer; /* add a mouse pointer on hover */
    padding: 10px;
    border-radius: 10px; /* rounded corners */
}

#myBtn:hover{
    background: #606060; /* add a dark gray background on hover */
}


/*********** responsive *************/

@media(max-width:768px) {
    .main_header{ height: 700px; text-align: center; }
    .main_header .rightside h1{
        text-align: center;
        padding: 0;
        width: 100%;
        font-size: 34px;
    }

    .count_style{
        display: inline!important;
    }

    .count_style p{
        text-align: center;
    }

    .about_reponsive_image{
        margin-left: 0!important;
    }

    
}

</style>