<html>
<head>
<title>Penggunaan Is Array</title>
</head>
<body>
<?php
$var = array(1,2,3,4,5,6,7);
$scan = is_array($var);
if ($scan == false) {
    $status = "bukan";
} else {
    $status = "benar";
}
echo '$var = array(' . implode(',', $var) . ')';
echo "<br>";
echo "Variable \$var \$status merupakan array";
?>
</body>
</html>