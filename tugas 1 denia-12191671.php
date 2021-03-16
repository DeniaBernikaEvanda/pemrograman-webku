<?php
//12191671_Denia Bernika Evanda
$ikanku = array("teri", "lele", "bawal", "tuna");
$angkringan = array("ikan teri sering dijumpai di nasi kucing angkringan dan saya konsumsi pas tanggal tua.");
$tanggal = array("kalau tanggal muda sering kuliner Lele, Bawal, dan Tuna.");

echo $converted_string = implode(",",$ikanku);
echo "<br>";
echo $converted_string = implode (",",$angkringan);
echo "<br>";
echo $converted_string = implode (",",$tanggal);
echo "<br>";
?>

<?php
$date = "2017-03-14";
echo date ("d-m-y", strtotime ($date));
?>