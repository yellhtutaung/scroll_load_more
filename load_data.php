<?php 


	$con = mysqli_connect("localhost","root","","bill");


	function related_cat_data_limit ($LIMIT_DATA,$DATA_OFFSET)
        {
            global $con;
            //$get_all_sql = "SELECT * FROM token WHERE t_status=1 AND t_id BETWEEN $DATA_OFFSET AND $LIMIT_DATA ORDER BY t_id DESC";
            $get_all_sql = "SELECT q.* FROM (SELECT * FROM token LIMIT $DATA_OFFSET,$LIMIT_DATA) q ORDER BY t_id DESC";
            $get_all_query = mysqli_query($con,$get_all_sql);
            $get_all_data = array();
            while( $out_get_all = mysqli_fetch_assoc($get_all_query) ){
                array_push($get_all_data,$out_get_all);
            }
            return $get_all_data;
        }


 	if ( isset($_POST['P_want_data']) ) { 		

        $want = $_POST['P_want_data'];

        $Data_offset = $_POST['P_Offset'];        


		$all_out = related_cat_data_limit($want,$Data_offset);
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

		

	<?php } ?>

