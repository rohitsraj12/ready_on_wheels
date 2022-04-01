<?php
if(isset($_POST["vehicle"])){
    // Capture selected vehicle
    $vehicle = $_POST["vehicle"];

    // Define vehicle and name of vehicle array
    $vehicleArr = array(
                    "Passenger Vehicle" => array(
                      "Select Vehicle" => "",
                      "Tata Indica" => "Tata-Indica",
                      "Nissan Micro" => "Nissan-Micro",
                      "Swift Dzire" => "Swift-Dzire",
                      "Swift" => "Swift",
                      "Indigo" => "Indigo",
                      "Xcent" => "Xcent",
                      "Honda City" => "Honda-City",
                      "SwiftEtios accent" => "Etios-accent",
                      "Verito" => "Verito",
                      "Innova" => "Innova",
                      "Innova Crysta" => "Innova-Crysta",
                      "Xylo" => "Xylo",
                      "Mahindra Scorpio" => "Mahindra-Scorpio",
                      "Ertiga" => "Ertiga",
                      "Chevrolet Enjoy" => "Chevrolet-Enjoy",
                      "Tempo Traveler" => "Tempo-Traveler",
                      "Mini Bus" => "Mini-Bus",
                      "Bus" => "Bus"
                    ),

                    "Goods Vehicle" => array(
                      "Select Vehicle" => "",
                      "Tata Ace" => "Tata-Ace",
                      "Tata 407" => "Tata-407",
                      "Mahindra Maximo" => "Mahindra-Maximo",
                      "Dost" => "Dost",
                      "Eicher 14 ft" => "Eicher-14-ft",
                      "Eicher 17 ft" => "Eicher-17-ft",
                      "Eicher 19 ft" => "Eicher-19-ft",
                      "20ft Container" => "20ft-Container",
                      "Tata Truck" => "Tata-Truck",
                      "Temp Truck" => "Temp-Truck",
                      "Mahindra Champion" => "Mahindra-Champion",
                      "Mahindra Pickup" => "Mahindra-Pickup",
                      "32 ft container" => "32-ft-Container",
                      "Taurus" => "Taurus",
                      "Piaggio Ape Xtra LDX HT" => "Piaggio-Ape-Xtra-LDX-HT",
                      "Mahindra Supro Profit Truck Mini" => "Mahindra-Supro-Profit-Truck-Mini",
                      "Mahindra Jeeto" => "Mahindra-Jeeto",
                      "Ashok Leyland Dost+" => "Ashok-Leyland-Dost+",
                      "Ashok Leyland BADA DOST" => "Ashok-Leyland-BADA-DOST",
                      "Tata Intra V10" => "Tata-Intra-V10",
                      "Mahindra Bolero Pickup CNG" => "Mahindra-Bolero-Pickup-CNG",
                      "Eicher Pro 2049" => "Eicher-Pro-2049",
                      "Eicher Pro 2095XP" => "Eicher-Pro-2095XP",
                      "Eicher Pro 3015" => "Eicher-Pro-3015",
                      "Tata 709g" => "Tata-709g"
                      )
                );

    // Display city dropdown based on vehicle name
    if($vehicle !== 'Select'){
        // echo "<label>City:</label>";
        // echo "<select>";
        foreach($vehicleArr[$vehicle] as $value => $k){
            echo "<option value=". $k . ">". $value . "</option>";
        }
        // echo "</select>";
    }
// } else {
//   $value = "captured";
//   echo "<option>". $value . "</option>";

}
?>
