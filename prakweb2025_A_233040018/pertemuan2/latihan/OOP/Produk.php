<?php
   // == PARENT CLASS (CLASS INDUK) ==
// Class ini berisi semua properti/method umum
// yang dimiliki oleh SEMUA produk.

class Produk {

    // Properti umum
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    // Constructor milik Parent
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Method milik Parent
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

class komik extends Produk {
    public $jumlahhalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jumlahhalaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jumalahhalaman = $jumlahhalaman;

    }

    public function getinfoproduk()
    {
        $info = "komik: ". parent::getLabel() ." |harga: " . $this->harga . " | halaman:" . $this->jumlahhalaman;
        return $info;
    }

}

//komik1
$komik1 = new komik('naruto', 'penulis naruto', '2004', '25.000', '100');
echo $komik1->getinfoproduk();
?>
