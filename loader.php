<!DOCTYPE html>
<html>
<head>

	<title>Loader</title>

	<script  src="https://code.jquery.com/jquery-3.4.1.js"  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="  crossorigin="anonymous"></script>

	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/materia/bootstrap.min.css" rel="stylesheet" integrity="sha384-SYbiks6VdZNAKT8DNoXQZwXAiuUo5/quw6nMKtFlGO/4WwxW86BSTMtgdzzB9JJl" crossorigin="anonymous">

	<style type="text/css">

		.lds-spinner {
		  color: official;
		  display: inline-block;
		  position: relative;
		  width: 64px;
		  height: 64px;
		}
		.lds-spinner div {
		  transform-origin: 32px 32px;
		  animation: lds-spinner 1.2s linear infinite;
		}
		.lds-spinner div:after {
		  content: " ";
		  display: block;
		  position: absolute;
		  top: 3px;
		  left: 29px;
		  width: 5px;
		  height: 14px;
		  border-radius: 20%;
		  background: black;
		}
		.lds-spinner div:nth-child(1) {
		  transform: rotate(0deg);
		  animation-delay: -1.1s;
		}
		.lds-spinner div:nth-child(2) {
		  transform: rotate(30deg);
		  animation-delay: -1s;
		}
		.lds-spinner div:nth-child(3) {
		  transform: rotate(60deg);
		  animation-delay: -0.9s;
		}
		.lds-spinner div:nth-child(4) {
		  transform: rotate(90deg);
		  animation-delay: -0.8s;
		}
		.lds-spinner div:nth-child(5) {
		  transform: rotate(120deg);
		  animation-delay: -0.7s;
		}
		.lds-spinner div:nth-child(6) {
		  transform: rotate(150deg);
		  animation-delay: -0.6s;
		}
		.lds-spinner div:nth-child(7) {
		  transform: rotate(180deg);
		  animation-delay: -0.5s;
		}
		.lds-spinner div:nth-child(8) {
		  transform: rotate(210deg);
		  animation-delay: -0.4s;
		}
		.lds-spinner div:nth-child(9) {
		  transform: rotate(240deg);
		  animation-delay: -0.3s;
		}
		.lds-spinner div:nth-child(10) {
		  transform: rotate(270deg);
		  animation-delay: -0.2s;
		}
		.lds-spinner div:nth-child(11) {
		  transform: rotate(300deg);
		  animation-delay: -0.1s;
		}
		.lds-spinner div:nth-child(12) {
		  transform: rotate(330deg);
		  animation-delay: 0s;
		}
		@keyframes lds-spinner {
		  0% {
		    opacity: 1;
		  }
		  100% {
		    opacity: 0;
		  }
		}


	</style>


</head>
<body>

	<div id="Spinner-loader" >
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>

	<button type="button" class="btn btn-outline-warning add-remove">Warning</button>

	<script type="text/javascript">		

		$(document).ready(function(){
    
			$('.add-remove').click(function () {
			
			$('#Spinner-loader').toggleClass("lds-spinner");

			});


		});

	</script>

</body>
</html>