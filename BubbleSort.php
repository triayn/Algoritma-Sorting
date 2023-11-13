<?php

// Tria Yunita
// Pengurutan dilakukan secara Ascending (Bilangan terkecil ke terbesar)

// Array awal
$bilangan = array(33, 12, 45, 6, 78, 23, 90, 1, 8, 56, 72);

function bubbleSort($data)
{
    $iterasi = 0;
    // Melakukan iterasi melalui setiap elemen erray
    $b = count($data);
    for ($i = 0; $i < $b - 1; $i++) {
        for ($j = 0; $j < $b - $i - 1; $j++) {
            // Melakukan perbandingan antar elemen saat ini dengan elemen berikutnya
            if ($data[$j] > $data[$j + 1]) {
                // Elemen akan ditukar, jika elemen saat ini lebih besar
                $posisi = $data[$j];
                $data[$j] = $data[$j + 1];
                $data[$j + 1] = $posisi;
            }
        }

        $iterasi++;
        // Menampilkan array pada setiap iterasi
        echo $iterasi . ": " . implode(", ",$data) . "\n";
    }
    // Mengembalikan array yang telah diurutkan
    return $data;
}

echo 'Array Awal : ' . implode(", ", $bilangan) . "\n";
echo 'Bubble Sort :' . "\n";
BubbleSort($bilangan);
?>
