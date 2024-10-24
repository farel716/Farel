<?php
    class Barang{
        public $nama;
        public $harga;
        public $stok;
        public $barcode;
        public $exp;
        public $pembelian;
        public $pelanggan;
        public $noHp;
        public $alamat;

        public  function __construct($nama = '', $harga = 0, $stok = 0, $barcode = '', $exp = '', $pembelian = 0, $pelanggan = '', $noHp = 0, $alamat = ''){

            $this ->nama = $nama;
            $this ->harga = $harga;
            $this  ->stok = $stok;
            $this ->barcode = $barcode;
            $this ->exp = $exp;
            $this  ->pembelian = $pembelian;
            $this  ->pelanggan = $pelanggan;
            $this  ->noHp = $noHp;
            $this  ->alamat = $alamat;

        }
        public function stokAkhirBarang(){
           $this -> stok = $this->stok - $this ->pembelian;
            return $this -> stok;


        }
    }

    $Stokakhir = null;

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $panggilBarang  = new Barang();
        $panggilBarang ->nama = $_POST['nama'];
        $panggilBarang ->harga = $_POST['harga'];
        $panggilBarang->stok = intval($_POST['stok']);
        $panggilBarang->barcode = intval($_POST['barcode']);
        $panggilBarang->exp = $_POST['exp'];
        $panggilBarang->pembelian = intval($_POST['pembelian']);
        $panggilBarang->pelanggan = $_POST['pelanggan'];
        $panggilBarang->noHp = $_POST['noHp'];
        $panggilBarang->alamat = $_POST['alamat'];

        $nama = $panggilBarang->nama;
        $harga = $panggilBarang->harga;
        $stok = $panggilBarang->stok;
        $barcode = $panggilBarang->barcode;
        $exp = $panggilBarang->exp;
        $pembelian = $panggilBarang->pembelian;
        $pelanggan = $panggilBarang->pelanggan;
        $noHp = $panggilBarang->noHp;
        $alamat = $panggilBarang->alamat;
        $Stokakhir  = $panggilBarang->stokAkhirBarang();
    }

?>