<?php

$data = file("post.txt");

echo "<h2>Daftar Laporan</h2>";

foreach($data as $d){

    $pecah = explode("|", $d);

    echo "<h3>".$pecah[0]."</h3>";
    echo "<p>".$pecah[1]."</p>";
    echo "<hr>";

}

?>