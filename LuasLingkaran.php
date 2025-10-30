<?php

class LuasLingkaran {
    public const phi = 3.14;
    public int $jari;

    public function tampil($nama = 'ban') {
        $rumus = LuasLingkaran::phi * ($this->jari * $this->jari);
        echo "Lingkaran {$nama} hasilnya adalaah: {$rumus}";
    }

    public static function testing () {
        echo "<br/>";
        echo "ini dari static";
    }
}

$lingkaran = new LuasLingkaran();
$lingkaran->jari = 12;
$lingkaran->tampil('roda'); //panggil method tampil

$rumus = LuasLingkaran::phi * ($lingkaran->jari * $lingkaran->jari);

echo "Hasilnya adalah: ".$rumus;

LuasLingkaran::testing(); //panggil static method