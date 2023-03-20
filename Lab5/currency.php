<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <p><?php
    
        $post_args = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $server_args = filter_input_array(INPUT_SERVER, FILTER_SANITIZE_STRING);

        if ($server_args['REQUEST_METHOD'] == 'POST') {
        echo "<p>This is a POST request.</p>\n";
        $usDollars = $post_args['dollars'];
        $gbPounds = $post_args['pounds'];
        }

        if($usDollars == true && $gbPounds == true){
            $calculations = round($gbPounds / 0.84, 2);
            echo "<p>USD: </p>\n";
            echo "<p>GBP: $gbPounds </p>\n";
            echo "<p>Result (GBP to USD): $$calculations</p>\n";
        }
        else if($usDollars == true || $usDollars == "0"){
            $calculations = round($usDollars * 0.84, 2);
            echo "<p>USD: $usDollars</p>\n";
            echo "<p>GBP: $gbPounds</p>\n";
            echo "<p>Result (USD to GBP): &pound$calculations</p>\n";   
        }
        else if($gbPounds == true || $gbPounds == "0"){
            $calculations = round($gbPounds / 0.84, 2);
            echo "<p>USD: $usDollars</p>\n";
            echo "<p>GBP: $gbPounds</p>\n";
            echo "<p>Result (GBP to USD): $$calculations</p>\n";   

        }
        else if($usDollars == false && $gbPounds == false){
            echo '<script>alert("Please enter a value in Fahrenheit or Celsius!")</script>';
            
        }

    ?></p>

<p>Click <a href="index.html">here</a> to return to the homepage!</p>
</body>

</html>