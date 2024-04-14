<?php

class About {
    public function index($nama = 'Sandhika', $pekerjaan = 'Dosen', $umur = 32)
    {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan. Saya berumur $umur tahun.";
    }
    public function page()
    {
        echo 'About/page';
    }
}