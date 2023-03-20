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
        $fahrenheit = $post_args['fahrenheit'];
        $celsius = $post_args['celsius'];
        }

        if($fahrenheit == true && $celsius == true){
            $calculations = round((5/9) * ($fahrenheit - 32), 2);
            echo "<p>Fahrenheit: $fahrenheit</p>\n";
            echo "<p>Celsius: </p>\n";
            echo "<p>Result (Fahrenheit to Celsius): $calculations</p>\n";
        }
        else if($fahrenheit == true || $fahrenheit == "0"){
            $calculations = round((5/9) * ($fahrenheit - 32), 2);
            echo "<p>Fahrenheit: $fahrenheit</p>\n";
            echo "<p>Celsius: $celsius</p>\n";
            echo "<p>Result (Fahrenheit to Celsius): $calculations</p>\n";   
        }
        else if($celsius == true || $celsius == "0"){
            $calculations = round(((9/5) * $celsius) + 32, 2);
            echo "<p>Fahrenheit: $fahrenheit</p>\n";
            echo "<p>Celsius: $celsius</p>\n";
            echo "<p>Result (Celsius to Fahrenheit): $calculations</p>\n";   

        }

    ?></p>

<p>Click <a href="index.html">here</a> to return to the homepage!</p>
</body>

</html>