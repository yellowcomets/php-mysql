<?php
    define("TIREPRICE", 100);
    define("OILPRICE", 10);
    define("SPARKPRICE", 4);
    $tireqty = $_POST ['tireqty'];
    $oilqty = $_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];
?>

<html>
<head>
    <title>Bob's Auto Parts - Order Results</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Order Results</h2>
<?php 
    echo '<p>Order processed at '.date('H:i, jS F Y').'</p>';
    echo '<p>Your order is as follows:</p>';
    echo "$tireqty tires<br />";
    echo "$oilqty bottle of oil<br>";
    echo "$sparkqty spark plugs<br/>";

    echo <<<theEnd
        $tireqty tires<br />
        $oilqty bottle of oil<br>
        $sparkqty spark plugs<br/>
theEnd;
    PRiNT_TeST();
    echo '$CONST_TEST: '.CONST_TEST;
    //phpinfo();
?>

</body>
</html>
<?php
function print_test(){
    define("CONST_TEST", 1234);
    ECHO 'end<br>';
}
?>
