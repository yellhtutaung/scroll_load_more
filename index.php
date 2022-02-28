<!DOCTYPE >
<html>
<head>

	<title>Scroll Load More</title>
    <meta charset="UTF-8">
    <meta name="description" content="Scroll Down">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Deveload By Yell Htut">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


	<script  src="https://code.jquery.com/jquery-3.4.1.js"  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="  crossorigin="anonymous"></script>
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/materia/bootstrap.min.css" rel="stylesheet" integrity="sha384-SYbiks6VdZNAKT8DNoXQZwXAiuUo5/quw6nMKtFlGO/4WwxW86BSTMtgdzzB9JJl" crossorigin="anonymous">
	<!--Animate css-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- Owl Carousel Themes  -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Green  -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css">

	<script type="text/javascript" src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- Ow carousel js -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

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
<body >
<?php


 	$con = mysqli_connect("localhost","root","","bill");


 	 function related_cat_data ()
        {
            global $con;
            $get_all_sql = "SELECT * FROM token WHERE t_status=1 ORDER BY t_id DESC LIMIT 10";
            $get_all_query = mysqli_query($con,$get_all_sql);
            $get_all_data = array();
            while( $out_get_all = mysqli_fetch_assoc($get_all_query) ){
                array_push($get_all_data,$out_get_all);
            }
            return $get_all_data;
        }



?>

<div class="container-fluid">

	<div class="col-md-4 offset-md-4 text-center">
		<h3 class="animated slideInUp" >This is load more contents</h3>
	</div>
	<div class="row first-products-out">

		<?php 

			$all_out = related_cat_data();
			$last_room = end($all_out);
			$final_room = $last_room['t_id'];

			for ($i=0; $i<count($all_out) ; $i++) { 

				?>

				<div class="col-md-6 animated  zoomIn ">

                    <input type="hidden" class="get-id" data-final-id="<?php echo $final_room; ?>" >
                    <div class="card text-white bg-dark mb-3 " style="height: 150px;" >
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $all_out[$i]['t_id']; ?></h4>
                            <p class="card-text"><?php echo $all_out[$i]['no']; ?></p>
                        </div>
                    </div>


				</div>
			
		<?php } ?>

	</div>

	<div class="row my-3 justify-content-center"> 
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
	</div>

    <div class="row return-div mt-2">

    </div>

</div>


    <script type="text/javascript">

        // console.log('This is Limit id  ---- >>>>'+ Limit_Data);
        // console.log('This is Offset id  ---- >>>>'+ Real_Offset);


        function scroll_load_more(Limit_Data,Real_Offset,Get_Last_data_id) {

            $('#Spinner-loader').addClass("lds-spinner");

                // console.log('This is want data '+real_want_data);
                console.log('This is real offset data -->> '+Real_Offset);

                $('.get-id').remove();

                 $.post("load_data.php",
                  {
                    P_want_data : Limit_Data,
                    P_Offset: Real_Offset
                  },
                  function(data){

                    $( ".first-products-out" ).append(data);

                    $('#Spinner-loader').removeClass("lds-spinner");


                  });


        }

        $(window).scroll(function () {

            let Limit_Data = 10;
            let Get_Last_data_id =  $('.get-id').attr('data-final-id');
            let Real_Offset = Get_Last_data_id - (Limit_Data+1);

            let up_data_out_height = $(".first-products-out").height();
            let window_height = window.innerHeight;
            let last_height = up_data_out_height - window_height;

            let Scroll_Top_Height = $(window).scrollTop();



                if( Scroll_Top_Height >= last_height && Get_Last_data_id > 1 ) {

                        scroll_load_more(Limit_Data,Real_Offset,Get_Last_data_id);

                }else if (Get_Last_data_id <= 1){

                    $('#Spinner-loader').removeClass("lds-spinner");
                    $(".return-div").html('<h3 class="text-center" >You have reached the end. Do a search to keep exploring!</h3>');
                }
            
        });




    </script>


</body>
</html>