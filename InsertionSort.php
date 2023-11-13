<?php
// Tria Yunita
// Pengurutan dilakukan secara Ascending (Bilangan terkecil ke terbesar)

// Array awal
$bilangan = array(33, 12, 45, 6, 78, 23, 90, 1, 8, 56, 72);

function InsertionSort($data)
{
    // Digunakan untuk mengambil atau mendapatkan jumlah elemen dalam array
    $b = count($data);
    for ($i = 1; $i < $b; $i++) {
        // Menampilkan elemen yang akan disisipkan sebagai kunci($nilai)
        $nilai = $data[$i];
        $j = $i - 1;
        // Memindahkan elemen-elemen yang lebih besar dibangdingkan dari 
        // kunci($nilai) ke posisi yang benar
        while ($j >= 0 && $data[$j] > $nilai) {
            $data[$j + 1] = $data[$j];
            $j = $j - 1;
        }
        // Menempatkan posisi kunci($nilai) yang benar
        $data[$j + 1] = $nilai;

        // Menampilkan array pada setiap iterasi
        echo implode(", ", $data) . "\n";
    }
    // Mengembalikan array yang telah diurutkan
    return $data;

}

echo "Array Awal : " . implode(", ", $bilangan) . "\n";
echo "Insertion Sort :\n";
InsertionSort($bilangan);
?>
