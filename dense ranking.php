<?php

function denseRanking($skor_leader, $gits_leader) {
    $rankings = []; // nampung ranking
    $unique_skor = array_values(array_unique($skor_leader)); // hapus nilai duplikat
    rsort($unique_skor); // desc sort

    foreach ($gits_leader as $skor) {
        $posisi = 1;
        $index = 0;

        while ($index < count($unique_skor) && $skor < $unique_skor[$index]) {
            $posisi++;
            $index++;
        }

        $rankings[] = $posisi;
    }

    return $rankings;
}

// ambil input dari user
echo "Masukkan jumlah skor leaderboard:\n";
$jumlah_skor = (int)trim(fgets(STDIN));

echo "Masukkan nilai skor leaderboard (pisahkan dengan spasi):\n";
$skor_leader = explode(' ', trim(fgets(STDIN)));

echo "Masukkan jumlah skor GITS:\n";
$jumlah_gits = (int)trim(fgets(STDIN));

echo "Masukkan nilai skor GITS (pisahkan dengan spasi):\n";
$gits_leader = explode(' ', trim(fgets(STDIN)));

$skor_leader = array_map('intval', $skor_leader);
$gits_leader = array_map('intval', $gits_leader);

if ($jumlah_skor !== count($skor_leader) || $jumlah_gits !== count($gits_leader)) {
    echo "Jumlah skor tidak sesuai dengan nilai yang dimasukkan.\n";
    echo "Permainan usai.\n";
    exit;
}

$result = denseRanking($skor_leader, $gits_leader);

echo "Ranking GITS:\n";
echo implode(' ', $result) . "\n";
?>
