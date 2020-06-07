<?php
    // Customize Global Variable
	global $taxa;

    $classes = $fromCity = $toCity = $depart = $return = $adults = $child = $success = '';
    $errClasses = $errFromCity = $errToCity = $errDepart = $errReturn = $errAdults = $errChild = '';
	
	if(isset($_POST['submit'])){
		
		if(empty($_POST['classes'])){
			$errClasses = '<span style="color: red;">Class is required! </span>';
		}else{
			$classes = validate($_POST['classes']);
			$errClasses = '';
		}
		
		if(empty($_POST['fromCity'])){
			$errFromCity = '<span style="color: red;">From (City) is required! </span>';
		}else{
			$fromCity = validate($_POST['fromCity']);
			$errFromCity = '';
		}
		
		if(empty($_POST['toCity'])){
			$errToCity = '<span style="color: red;">To (City) is required! </span>';
		}else{
			$toCity = validate($_POST['toCity']);
			$errToCity = '';
		}
		
		if(empty($_POST['depart'])){
			$errDepart = '<span style="color: red;">Depart Date is required! </span>';
		}else{
			$depart = validate($_POST['depart']);
			$errDepart = '';
		}
		
		$return = 'Return Date: '. validate($_POST['return']);
		
		if(empty($_POST['adults'])){
			$errAdults = '<span style="color: red;">Please add at least one passenger! </span>';
		}else{
			$adults = 'Adults: '. validate($_POST['adults']) .' Person';
			$errAdults = '';
		}
		
		if(empty($_POST['adults']) and $_POST['child']){
			$errChild = '<span style="color: red;">Children must be accompanied by an adult during the flight.! </span>';
		}else{
			$child = 'Child: '. validate($_POST['child']) .' Person';
			$errChild = '';
		}
		
		if($errClasses == '' and $errFromCity == '' and $errToCity == '' and $errDepart == '' and $errReturn == '' and $errAdults == '' and $errChild == ''){
			$to = $taxa['bookTrip_form_receiver_email'];
			$subject = $taxa['bookTrip_form_subject'];
			$headers = $taxa['bookTrip_form_header'];
			$messageDetails =	"\nDetails: \n\n".
			                    "Class: $classes \n".
			                    "From (City): $fromCity \n".
								"To (City): $toCity \n".
								"Depart Date: $depart \n".
								"$return \n".
								"$adults \n".
								"$child \n";
			
			if(mail($to, $subject, $messageDetails, $headers)){
				$success = '<span style="color: green;">'. $taxa['bookTrip_form_success_message'] .'</span>';
			}
		}
	}
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>