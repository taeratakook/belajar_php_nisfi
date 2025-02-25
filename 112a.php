<html>

<head>
    <title>
        Nisfi Belajar PHP
    </title>
    <style>
    .nisfi {
        color: purple;
    }
    </style>
</head>

<body>
    Hii
    <?php
    $walkes = "Park Jongseong";
    echo "<br> Perkenalkan Aku Nisfi";
    echo '<br> Aku Bersekolah di SMKn 08 Kota Semarang';
    echo "<div class='nisfi'>Wali Kelas: ". $walkes ."</div>";
        //ini komentar tapi satu baris
        # ini juga komentar
        /* ini komentar (bisa beberapa line)
        berbaris
        baris */
    $angka1 = 5;
    $angka2 = 10;
    $penjumlahan = $angka1 + $angka2;
    $x = $angka1 *  $angka2;

    echo "<br> $angka1 = $angka2 =". $penjumlahan; //untuk hasil dulu, baru cara
    echo "<br>"; 
    echo $x ." = $angka1 x $angka2"; //untuk cara dulu baru hasil
    echo "<br> $angka1<sup>$angka2</sup> ="; //sup buat lihat pangkatnya
    echo number_format(pow($angka1,$angka2), 2, '.', '.'); //(pow) melihat hasilnya 
    /*number_format(
    angkanya, 
    jumlah angka di belakang koma, 
    'tanda koma/titik paling belakang'.
    'tanda koma/titik di antara angka')
    contoh = 1000 jadi 1.000,00 
    */
    ?>
</body>

</html>