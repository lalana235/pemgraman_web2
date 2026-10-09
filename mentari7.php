<html>
<head>
<title>Penggunaan In Array</title>
</head>
<body>
<?php
$program = array("HTML", "PHP", "CSS", "JavaScript");
print_r($program);
$scari = "HTML";
if (in_array($scari, $program)) {
    echo "Program Basis Web $scari ada di dalam array";
} else {
    echo "Program Basis Web $scari tidak ada di dalam array";
}
?>
</body>
</html>
