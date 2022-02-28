<!DOCTYPE html>
<html>
<head>
	<title>Auto Select</title>
	<meta charset="UTF-8">
    <meta name="description" content="Scroll Down">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Deveload By Yell Htut">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script  src="https://code.jquery.com/jquery-3.4.1.js"  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="  crossorigin="anonymous"></script>
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/materia/bootstrap.min.css" rel="stylesheet" integrity="sha384-SYbiks6VdZNAKT8DNoXQZwXAiuUo5/quw6nMKtFlGO/4WwxW86BSTMtgdzzB9JJl" crossorigin="anonymous">
	<!--Animate css-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">

	<script type="text/javascript" src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- Ow carousel js -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


</head>
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
</style>

<body>


	<div class="container-fluid">
		<div class="row my-3">
			<div class="col-sm-12 col-md-6 offset-md-3">
				<div class="card border-dark mb-3 " >
				  <div class="card-header text-black">Auto Select</div>
				  <div class="card-body">

				    <div class="row">
				    	<div class="col-6">
				    		<div class="form-group">
	      						<label for="exampleSelect1">City</label>
		  						<select class="form-control country-option" id="exampleSelect1">
	    							
	  							</select>
							</div>
				    	</div>
				    	<div class="col-6">
				    		<div class="form-group">
	      						<label for="exampleSelect1">State</label>
		  						<select class="form-control city-option" id="exampleSelect1">
		    						
	  							</select>
							</div>
				    	</div>
				    </div>
				    
				    	

				  </div>
				</div>
			</div>
		</div>
	</div>


	<script type="text/javascript">


		var seletable_list = {

			Myanmar: ["Yangon","Mandalay","NayPyiTaw","PaGue"],

			India: ["Jaipur","Varanasi","Bangalore","Kolkata","Agra"],

			Japan: ["Tokyo","Kyoto","Sapporo","Osaka"],

			American: ["Newyork","San Fancisco","Los Angle","Austin"],

			Canada: ["Toronto","Montrol","Calgray","Victoria"],

			China: ["Shanghi","Guilin","Xian","Hon Kong"],

			Malaysia: ["Kuala Lumpa","Kuching","Miri","Shah Alam"]


		};


		let Obj_Lenght = Object.keys(seletable_list).length;
		let Obj_Key_only = Object.keys(seletable_list);
		for (var i =0; i<Obj_Key_only.length; i++) {			
			// console.log( Obj_Key_only[i] );
			$(".country-option").append('<option value='+Obj_Key_only[i]+' >'+Obj_Key_only[i]+'</option>');

		}

		$(".country-option").on('change', function() {

				$(".city-option").empty();
			let current_country = $(this).val();
			console.log(seletable_list[current_country]);

			let obo_city = seletable_list[current_country];

			for (var c=0; c<obo_city.length; c++) {
				
				console.log(obo_city[c]);
				$(".city-option").append('<option value='+c+' >'+obo_city[c]+'</option>');

			}


		});



	</script>	

</body>
</html>