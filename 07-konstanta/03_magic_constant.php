<?php

// Magic Constants
// Konstanta yang nilainya berubah tergantung di mana mereka digunakan

echo "<h3>Magic Constants</h3>";

echo "File ini berada di: " . __FILE__;
echo "<br>";

echo "Direktori file ini adalah: " . __DIR__;
echo "<br>";

echo "Baris kode ini ada di baris ke: " . __LINE__;
echo "<br>";

function myFunction() {
    echo "Nama fungsi ini adalah: " . __FUNCTION__;
}
myFunction();
echo "<br>";

class MyClass {
    public function getClassName() {
        echo "Nama class ini adalah: " . __CLASS__;
    }
}
$obj = new MyClass();
$obj->getClassName();
echo "<br>";

// Ada juga __METHOD__, __NAMESPACE__, dan __TRAIT__

?>