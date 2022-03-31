<?php
if(isset($_POST["vehicle"])){
    // Capture selected vehicle
    $vehicle = $_POST["vehicle"];
     
    // Define vehicle and name of vehicle array
    $vehicleArr = array(
                    "Passenger Vehicle" => array("New Yourk", "Los Angeles", "California"),
                    "Goods Vehicle" => array("Mumbai", "New Delhi", "Bangalore")
                );
     
    // Display city dropdown based on vehicle name
    if($vehicle !== 'Select'){
        // echo "<label>City:</label>";
        // echo "<select>";
        foreach($vehicleArr[$vehicle] as $value){
            echo "<option>". $value . "</option>";
        }
        // echo "</select>";
    } 
}
?>