<h3>Aplikasi Iterasi</h3>
<hr>
<form method="post" action="coba-iterasi.php">
    Iterasi angka dari <input type="text" name="awal">
    sampai <input type="text" name="akhir"><br>
    kelipatan <input type="text" name="kelipatan"><br>
    <input type="submit" value="Jalankan">
</form>

<?php
if(array_key_exists("awal", $_POST) && 
        array_key_exists("akhir", $_POST) ) {
    if(array_key_exists("kelipatan", $_POST) ) {
        $angka = $_POST["awal"];
        while($angka <= $_POST["akhir"]) {
            if($_POST["kelipatan"] == null) return;
            $kelipatan = $_POST["kelipatan"];
            if(($angka % $kelipatan) == 0) {
                echo $angka++ . "<br>";
            }
            $angka++;
        }
    } else {
        for($counter=$_POST["awal"]; $counter <= $_POST["akhir"]; 
                $counter++) {
            echo $counter . "<br>";
        }
    }
} else {
    echo "Maaf, nilai awal dan akhir belum ditentukan";
}
?>