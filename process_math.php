<?php
$input1 = $_POST['input1'];
$input2 = $_POST['input2'];
$operation = $_POST['operation'];

$command = escapeshellcmd("python3 math_operations.py $input1 $input2 $operation");
$output = shell_exec($command);
echo $output;
?>
