<?php

class Barang {

    public $namaBarang;
    public $jumlahBarang;
    public $stok;
    public $pembelian;

    public function __construct($namaBarang = '', $jumlahBarang = '', $stok = 0, $pembelian = 0) {
        $this->namaBarang = $namaBarang;
        $this->jumlahBarang = $jumlahBarang;
        $this->stok = $stok;
        $this->pembelian = $pembelian;
    }

    public function stokAkhir() {
        $this->stok = ($this->stok - $this->pembelian);
        return $this->stok;
    }

    
}

$hasilAkhir = null;

// Cek apakah form sudah di-submit
if (isset($_POST['submit'])) {
    // Ambil nilai dari form input
    $stok = $_POST['stok'];
    $pembelian = $_POST['pembelian'];

    // Inisialisasi objek Barang
    $panggil = new Barang();
    $panggil->stok = $stok;
    $panggil->pembelian = $pembelian;

    // Cetak stok akhir
    $hasilAkhir = $panggil->stokAkhir();

}

?>