<?php
// Tria Yunita
// Pengurutan dilakukan secara Ascending (Bilangan terkecil ke terbesar)

// Array awal
$bilangan = array(33, 12, 45, 6, 78, 23, 90, 1, 8, 56, 72);

function SelectionSort($data)
{
    $iterasi = 0;
    $b = count($data);

    // Melakukan iterasi melalui setiap elemen erray
    for ($i = 0; $i < $b - 1; $i++) {
        // Mencari indexs elemen minumum dalam sisa array yang ada
        $minIndex = $i;
        for ($j = $i + 1; $j < $b; $j++) {
            if ($data[$j] < $data[$minIndex]) {
                $minIndex = $j;
            }
        }
        $iterasi++;
        // Elemen akan ditukar, jika menemukan elemen minumum
        $posisi = $data[$i];
        $data[$i] = $data[$minIndex];
        $data[$minIndex] = $posisi;

        // Menampilkan array pada setiap iterasi
        echo $iterasi . ": " . implode(", ", $data) . "\n";
    }
    // Mengembalikan array yang telah diurutkan
    return $data;

}

echo 'Array Awal : ' . implode(", ", $bilangan) . "\n";
echo 'Selection Sort :' . "\n";
SelectionSort($bilangan);
?>
