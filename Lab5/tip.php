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
        $bill = intval($post_args['bill']);
        $percent = intval($post_args['percent']);
        $people =  intval($post_args['people']);
    }
    if($bill.is_int() == true && $percent.is_int() == true && $people.is_int() == true){
        $calculations = round((($bill * ($percent / 100)) + $bill)/ $people, 2); 
        echo "<p>Total Bill: $bill</p>\n";
        echo "<p>Percentage: $percent</p>\n";
        echo "<p>Number of People: $people</p>\n";
        echo "<p>Result (cost per person): $calculations</p>\n";
    }
    else {
        echo '<script>alert("Please enter a value in all 3 fields and do not put any zeros")</script>';
    }
    ?></p>

<p>Click <a href="index.html">here</a> to return to the homepage!</p>
</body>

</html>