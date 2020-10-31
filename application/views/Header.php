<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">

	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UFA88-Reward</title>
	<?php
    
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
    ?>

	<!-- Favicon -->
	<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="icon" type="image/ico" href="https://uppic.cc/d/5dte" />
	<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200;400;500&display=swap" rel="stylesheet">
	<!-- Nucleo Icons -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>./assets/css/nucleo-icons.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>./assets/css/nucleo-svg.css">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>./assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>./assets/css/nucleo-svg.css">
	<!-- CSS Files -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>./assets/css/argon-design-system.css?v=1.2.0">
	<script src="https://cdn.tiny.cloud/1/dbk87huv68ffs2kkiqeagexb90lhn81tsmnkc2yr92jcx37u/tinymce/5/tinymce.min.js"
		referrerpolicy="origin"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>./assets/simply-toast.css">
</head>
<style class="INLINE_PEN_STYLESHEET_ID">
    @import url("https://fonts.googleapis.com/css?family=Dax:400,900");

.middle {
  width: 100%;
  text-align: center;
  /* Made by */
}
.middle input[type="radio"] {
  display: none;
}
.middle input[type="radio"]:checked + .box {
  background-color: #e50914;
}
.middle input[type="radio"]:checked + .box span {
  color: white;
  transform: translateY(70px);
}
.middle input[type="radio"]:checked + .box span:before {
  transform: translateY(0px);
  opacity: 1;
}
.middle .box {
  width: 200px;
  height: 200px;
  background-color: #fff;
  transition: all 250ms ease;
  will-change: transition;
  display: inline-block;
  text-align: center;
  cursor: pointer;
  position: relative;
  font-family: "Dax", sans-serif;
  font-weight: 900;
}
.middle .box:active {
  transform: translateY(10px);
}
.middle .box span {
  position: absolute;
  transform: translate(0, 60px);
  left: 0;
  right: 0;
  transition: all 300ms ease;
  font-size: 1.5em;
  user-select: none;
  color: #e50914;
}
.middle .box span:before {
  font-size: 1.2em;
  font-family: FontAwesome;
  display: block;
  transform: translateY(-80px);
  opacity: 0;
  transition: all 300ms ease-in-out;
  font-weight: normal;
  color: white;
}
.middle .front-end span:before {
  content: "\f007";
}
.middle .back-end span:before {
  content: "\f234";
}
.middle .group-end span:before {
  content: "\f0c0";
}
.middle p {
  color: #fff;
  font-family: "Dax", sans-serif;
  font-weight: 400;
}
.middle p a {
  text-decoration: underline;
  font-weight: bold;
  color: #fff;
}
.middle p span:after {
  content: "\f0e7";
  font-family: FontAwesome;
  color: yellow;
}

  </style>
<style>
	body,
	span,
	h1,
	h2,
	h3,
	h4,
	h5,
	.tooltip,
	h6,
	a,
	p,
	button {
		font-family: 'Prompt', 'sans-serif !important';
	}

	.swal-footer {
		background-color: rgb(245, 248, 250);
		margin-top: 32px;
		border-top: 1px solid #E9EEF1;
		overflow: hidden;

	}

	body {
		font-family: "Lato", sans-serif;
	}

	.navbar .navbar-header,
	.navbar-collapse {
		float: none;
		display: inline-block;
		vertical-align: top;
		padding-left: 0;
		padding-right: 0;
	}

	@media (max-width: 768px) {
		.navbar-collapse {
			display: block;
		}
	}


	/* Dropdown Button */
	.dropbtn {
		background-color: #c5211c;
		color: white;
		padding: 16px;
		font-size: 16px;
		border: none;
	}

	/* The container <div> - needed to position the dropdown content */
	.dropdown {
		position: relative;
		display: inline-block;
	}

	/* Dropdown Content (Hidden by Default) */
	.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f1f1f1;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
		z-index: 1;
	}

	/* Links inside the dropdown */
	.dropdown-content a {
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
	}

	/* Change color of dropdown links on hover */
	.dropdown-content a:hover {
		background-color: #ddd;
	}

	/* Show the dropdown menu on hover */
	.dropdown:hover .dropdown-content {
		display: block;
	}

	/* Change the background color of the dropdown button when the dropdown content is shown */
	.dropdown:hover .dropbtn {}
	*,
*:before,
*:after { box-sizing: border-box; }

.again {
  text-align: center;
  width: 200px;
  border: 2px solid #ffffff;
  color: #ffffff;
  padding: 10px;
  position: absolute;
  bottom: 10px;
  left: 10px;
  background-color: #404040;
  cursor: pointer;
}

.pull {
	position: fixed;
	top: 0px;
	right: 0px;
  margin-top: 50px;
  width: 100%;
  -webkit-perspective: 250px;
  perspective: 250px;
  -webkit-perspective-origin: right center;
  perspective-origin: right center;
  -webkit-transition: -webkit-perspective .1s ease;
  transition: perspective .1s ease;
}

.pull.open {
  -webkit-perspective: 500px;
  perspective: 500px;
}

.notification {
  z-index: 4;
  opacity: 0;
  visibility: hidden;
  width: 100px;
  min-height: 42px;
  margin: 20px auto 70px;
  box-shadow: 0 0 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  -webkit-transition: opacity .5s ease-out, -webkit-transform .35s ease, width .5s ease;
  transition: opacity .5s ease-out, transform .35s ease, width .5s ease;
  white-space: nowrap;
}

.notification.show { visibility: visible; }

.notification.negative .impact,
.notification.warning .impact { height: 81px; }

.notification.positive {
  -webkit-transform: translate3d(0, 0, -60px) rotateY(-40deg);
  transform: translate3d(0, 0, -60px) rotateY(-40deg);
}

.notification.positive .fa {  }

.notification.open--rot {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0) rotateY(0deg);
  transform: translate3d(0, 0, 0) rotateY(0deg);
  width: 100px;
}

.notification.open--rot.open--width { width: 360px; }

.notification.open--rot.open--width .message-container { width: 260px; }

.notification.open--rot h1 img { display: inline-block; }

.notification .flex-container {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-direction: row;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-flex-wrap: no-wrap;
  -ms-flex-wrap: no-wrap;
  flex-wrap: no-wrap;
  -webkit-box-align: stretch;
  -webkit-align-items: stretch;
  -ms-flex-align: stretch;
  align-items: stretch;
  -webkit-transition: -webkit-transform .35s ease;
  transition: transform .35s ease;
  -webkit-transform: translate3d(0, 45px, 0);
  transform: translate3d(0, 45px, 0);
}

.notification .flex-container.drop-down {
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}

.notification .impact {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  z-index: 2;
  width: 100px;
  height: 88px;
  background-color: #e50914;
}

.notification .impact .icon { margin: auto; }

.notification .impact .fa {
  color: #ffffff;
  text-align: center;
  font-size: 46px;
}

.notification .message-container {
  background-color: #ffffff;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  width: 0;
  overflow: hidden;
  -webkit-transition: width .5s ease;
  transition: width .5s ease;
}

.notification .message {
  padding: 15px 10px 13px;
  margin: auto;
  white-space: nowrap;
}

.notification .message p {
  font-size: 12px;
  line-height: 145%;
  margin-bottom: 0;
  color: #404040;
}

.notification .message strong {
  font-weight: bold;
  text-align: center;
  margin-bottom: 0;
  color:#000;
}

.notification h6 {
  background-color: #ad020b;
  color: #ffffff;
  text-align: center;
  cursor: pointer;
  height: 45px;
  padding: 10px;
  position: relative;
  z-index: -1;
  overflow: hidden;
  -webkit-transition: background .25s ease;
  transition: background .25s ease;
}

.notification h1 img {
  height: 25px;
  width: 25px;
  margin: 0 5px;
  vertical-align: middle;
  display: none;
}

.notification h1:hover { background-color: #4e3380; }

.notification-hidden { display: none; }
/* customizable snowflake styling */
.snowflake {
  color: #fff;
  font-size: 1em;
  font-family: Arial, sans-serif;
  text-shadow: 0 0 5px #000;
}

@-webkit-keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@-webkit-keyframes snowflakes-shake{0%,100%{-webkit-transform:translateX(0);transform:translateX(0)}50%{-webkit-transform:translateX(80px);transform:translateX(80px)}}@keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@keyframes snowflakes-shake{0%,100%{transform:translateX(0)}50%{transform:translateX(80px)}}.snowflake{position:fixed;top:-10%;z-index:9999;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:default;-webkit-animation-name:snowflakes-fall,snowflakes-shake;-webkit-animation-duration:10s,3s;-webkit-animation-timing-function:linear,ease-in-out;-webkit-animation-iteration-count:infinite,infinite;-webkit-animation-play-state:running,running;animation-name:snowflakes-fall,snowflakes-shake;animation-duration:10s,3s;animation-timing-function:linear,ease-in-out;animation-iteration-count:infinite,infinite;animation-play-state:running,running}.snowflake:nth-of-type(0){left:1%;-webkit-animation-delay:0s,0s;animation-delay:0s,0s}.snowflake:nth-of-type(1){left:10%;-webkit-animation-delay:1s,1s;animation-delay:1s,1s}.snowflake:nth-of-type(2){left:20%;-webkit-animation-delay:6s,.5s;animation-delay:6s,.5s}.snowflake:nth-of-type(3){left:30%;-webkit-animation-delay:4s,2s;animation-delay:4s,2s}.snowflake:nth-of-type(4){left:40%;-webkit-animation-delay:2s,2s;animation-delay:2s,2s}.snowflake:nth-of-type(5){left:50%;-webkit-animation-delay:8s,3s;animation-delay:8s,3s}.snowflake:nth-of-type(6){left:60%;-webkit-animation-delay:6s,2s;animation-delay:6s,2s}.snowflake:nth-of-type(7){left:70%;-webkit-animation-delay:2.5s,1s;animation-delay:2.5s,1s}.snowflake:nth-of-type(8){left:80%;-webkit-animation-delay:1s,0s;animation-delay:1s,0s}.snowflake:nth-of-type(9){left:90%;-webkit-animation-delay:3s,1.5s;animation-delay:3s,1.5s}.snowflake:nth-of-type(10){left:25%;-webkit-animation-delay:2s,0s;animation-delay:2s,0s}.snowflake:nth-of-type(11){left:65%;-webkit-animation-delay:4s,2.5s;animation-delay:4s,2.5s}
</style>
<div class="snowflakes" aria-hidden="true">
  <div class="snowflake">
  🎃
  </div>
  <div class="snowflake">
  🎃
  </div>
  <div class="snowflake">
  🎃
  </div>
  <div class="snowflake">
  🎃
  </div>
  <div class="snowflake">
  🎃
  </div>
  <div class="snowflake">
  🎃
  </div>
  <div class="snowflake">
  🎃
  </div>
  <div class="snowflake">
  🎃
  </div>
  <div class="snowflake">
  🎃
  </div>
  <div class="snowflake">
  🎃
  </div>
  <div class="snowflake">
  🎃
  </div>
  <div class="snowflake">
    
  </div>
</div>

<body style="background-image: url('<?php echo base_url("bg.png") ?>')">
	<nav class="navbar navbar-expand-lg navbar-dark" style="padding: 2rem 3rem; align-items: center; backgound: #222;">
		<a class="navbar-brand navbar-left" href="#" style=""><img
					src="https://scontent.fbkk8-4.fna.fbcdn.net/v/t1.15752-9/123214812_1738356732993868_1285651539230212634_n.png?_nc_cat=100&ccb=2&_nc_sid=ae9488&_nc_ohc=ML5YxV3k2AoAX8bS4iy&_nc_oc=AQlf-ThUQ9C9COkn6Cgcx3VPgA-fbsWAs6JIiDYghkjWCdYibCL_WsR9OKXe-B2byvwXd-jOljSf8wpQC0Vg6cTQ&_nc_ht=scontent.fbkk8-4.fna&oh=9bf6ab214e90b6455cd3b910f44f3e14&oe=5FC2BE8C"
					alt="" style="width: 120px !important; height: 120px !important; "></a>
	</nav>
