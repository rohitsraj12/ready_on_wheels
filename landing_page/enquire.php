<?php

    if(isset($_POST['submit'])){
        $name           = $_POST['name'];
        $email          = $_POST['email'];
        $phone          = $_POST['phone'];
        $booking_type   = $_POST['booking_type'];
        $vehicle        = $_POST['vehicle'];
        $round_trip     = $_POST['round_trip'];
        $source_add     = $_POST['source_add'];
        $destination    = $_POST['destination'];
        $date           = $_POST['date'];
        $time           = $_POST['time'];

        //send email to
        $to         = "rohitwebco@gmail.com";
        $to1        = "readyonwheels@gmail.com";

        $subject    = "Enquiry form | Ready On Wheels Landing Page";

        $message    = "<p>Enquiry</p></br>";
        $message    .= "<p> name: <strong>". $name ."</strong></p></br>";
        $message    .= "<p> phone number: <strong>". $phone ."</strong></p></br>";
        $message    .= "<p> email: <strong>". $email ."</strong></p></br>";
        $message    .= "<p> Booking type: <strong>". $booking_type ."</strong></p></br>";
        $message    .= "<p> Vehical: <strong>". $vehicle ."</strong></p></br>";
        $message    .= "<p> Round Trip: <strong>". $round_trip ."</strong></p></br>";
        $message    .= "<p> Source Add: <strong>". $source_add ."</strong></p></br>";
        $message    .= "<p> Destination: <strong>". $destination ."</strong></p></br>";
        $message    .= "<p> Date: <strong>". $date ."</strong></p></br>";
        $message    .= "<p> Time: <strong>". $time ."</strong></p></br>";

        $headers    = "From:" . $name . " <" . $email . ">\r\n";
        $headers    .= "Reply-To: " . $email . "\r\n";
        $headers    .= "Content-type: text/html\r\n";

        mail($to, $subject, $message, $headers);
        mail($to1, $subject, $message, $headers);

        header("location:thank-you.html?status=success");

        // echo $message;

    }
