<?php 
    function sloane($n) {
        return $n * ($n+1)/2 + 1;
    }

    $number_list = []; // menampung angka

    $input_user = fopen("php://stdin", "r"); // mengambil data dari inputan user terminal
    $input = fgets($input_user);
    $input = intval($input);

    for ($i=0; $i < $input; $i++) { 
        $number_list[] = sloane($i); // push return sloane ke list
    }

    echo implode('-', $number_list) . "\n"; // jika tidak ditambahkan "\n" maka akan ada % di akhir number
?>
