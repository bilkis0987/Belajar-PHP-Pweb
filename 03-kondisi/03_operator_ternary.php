<?php

// 3. Operator Ternary (? :)
// Ini adalah cara singkat untuk menulis statement if-else.

// -- Bentuk if-else biasa --
$umur = 18;
if ($umur >= 17) {
    $status = "Dewasa";
} else {
    $status = "Anak-anak";
}
echo "Status Anda (via if-else): " . $status . "<br>";


// -- Bentuk Operator Ternary --
$status_ternary = ($umur >= 17) ? "Dewasa" : "Anak-anak";
//      (kondisi)      ?  "nilai jika true" : "nilai jika false";

echo "Status Anda (via ternary): " . $status_ternary . "<br>";

?>
