<?php

// Tria Yunita
// Pengurutan dilakukan secara Ascending (Bilangan terkecil ke terbesar)

// Array awal
$bilangan = array(33, 12, 45, 6, 78, 23, 90, 1, 8, 56, 72);

//Fungsi Bubble Shor
function BubbleSort($data)
{
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
    }
    // Mengembalikan array yang telah diurutkan
    return $data;
}

// Fungsi Selection Sort
function SelectionSort($data)
{
    // Digunakan untuk mengambil atau mendapatkan jumlah elemen dalam array
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
        // Elemen akan ditukar, jika menemukan elemen minumum
        $posisi = $data[$i];
        $data[$i] = $data[$minIndex];
        $data[$minIndex] = $posisi;
    }
    // Mengembalikan array yang telah diurutkan
    return $data;
}

// Fungsi Insertion Sort
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
    }
    // Mengembalikan array yang telah diurutkan
    return $data;
}

// Fungsi Quick Shor
function QuickSort($data)
{
    // Digunakan untuk mengambil atau mendapatkan jumlah elemen dalam array
    $b = count($data);
    // Jika array memiliki satu elemen atau kurang, berarti array sudah terurut
    if ($b <= 1) {
        return $data;
    } else {
        // Memilih elemen pertama sebagai pivot
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
        return array_merge(QuickSort($kiri), array($pivot), QuickSort($kanan));
    }
}

echo "Array Awal: " . implode(", ", $bilangan) . "\n \n";

// Menampilkan hasil sorting menggunakan Bubble Sort
echo "Bubble Sort: " . implode(", ", BubbleSort($bilangan)) . "\n";

// Menampilkan hasil sorting menggunakan Selection Sort
echo "Selection Sort: " . implode(", ", SelectionSort($bilangan)) . "\n";

// Menampilkan hasil sorting menggunakan Insertion Sort
echo "Insertion Sort: " . implode(", ", InsertionSort($bilangan)) . "\n";

// Menampilkan hasil sorting menggunakan Quick Sort
echo "Quick Sort: " . implode(", ", QuickSort($bilangan)) . "\n \n";

// Pengukuran waktu untuk Bubble Sort
$start_time = microtime(true);
BubbleSort($bilangan);
$end_time = microtime(true);
$execution_time_bubble = $end_time - $start_time;

// Pengukuran waktu untuk Selection Sort
$start_time = microtime(true);
SelectionSort($bilangan);
$end_time = microtime(true);
$execution_time_selection = $end_time - $start_time;

// Pengukuran waktu untuk Insertion Sort
$start_time = microtime(true);
InsertionSort($bilangan);
$end_time = microtime(true);
$execution_time_insertion = $end_time - $start_time;

// Pengukuran waktu untuk Quick Sort
$start_time = microtime(true);
QuickSort($bilangan);
$end_time = microtime(true);
$execution_time_quick = $end_time - $start_time;

// Menampilkan waktu eksekusi masing-masing algoritma
echo "Waktu eksekusi Bubble Sort: " . $execution_time_bubble . " detik\n";
echo "Waktu eksekusi Selection Sort: " . $execution_time_selection . " detik\n";
echo "Waktu eksekusi Insertion Sort: " . $execution_time_insertion . " detik\n";
echo "Waktu eksekusi Quick Sort: " . $execution_time_quick . " detik\n";
?>