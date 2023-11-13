<?php
// Tria Yunita
// Pengurutan dilakukan secara Ascending (Bilangan terkecil ke terbesar)

// Array awal
$bilangan = array(33, 12, 45, 6, 78, 23, 90, 1, 8, 56, 72);

function QuickSort($data)
{
    // Jika array memiliki satu elemen atau kurang, berarti array sudah terurut
    if (count($data) <= 1) {
        return $data;
    } else {
        $pivot = $data[0];
        $kiri = $kanan = array();

        // Memisahkan elemen-elemen yang kurang dari pivot dan yang lebih besar dari pivot
        for ($i = 1; $i < count($data); $i++) {
            if ($data[$i] < $pivot) {
                $kiri[] = $data[$i];
            } else {
                $kanan[] = $data[$i];
            }
        }

        // Menggabungkan hasil pengurutan rekursif dari bagian kiri, pivot dan bagian kiri
        $result = array_merge(QuickSort($kiri), array($pivot), QuickSort($kanan));

        // Menampilkan array pada setiap iterasi
        echo implode(", ", $result) . "\n";

        return $result;
    }
}

echo "Array Awal : " . implode(", ", $bilangan) . "\n";
echo "Quick Sort:\n";
QuickSort($bilangan);
?>
