<?php
class Rumah {
    //properti
    public $warna = "hitam";
    public $jumlahkamar = "4";
    public $alamat = "Jl.jakarta";

    //kostruktor
    public function __construct($warnabaru, $kamarbaru){
        $this->warna = $warnabaru;
        $this->jumlahkamar = $kamarbaru;
    }
    //method
    public function kuncipintu()
    {
        return "Pintu Terkunci!!!";
    }

    public function gantiwarna($warnabaru)
    {
        $this->warna = $warnabaru;
        return 'Rumah ini berwana' . $this->warna;
    }
}


function pasanglistrik($rumah){
    return "rumah yang berwarna " . $rumah->warna . " ini dipasang listrik";
}

// Rumah1
$rumahsaya = new Rumah('kuning', 9);
echo pasanglistrik($rumahsaya);
// $rumahsaya->gantiwarna("hijau");
// echo "Rumah saya" . $rumahsaya->kuncipintu();
// echo "<br>";
//  echo "Rumah saya berwarna $rumahsaya->warna";
//  echo "<br>";
//  echo "Rumah saya $rumahsaya->jumlahkamar";
//  echo "<br>";


// Rumah2
$rumahagus = new Rumah('merah', 7);
// echo "rumah agus berwarna  $rumahagus->warna";
//  echo "<br>";
//  echo "rumah agus $rumahagus->jumlahkamar";
// ?>