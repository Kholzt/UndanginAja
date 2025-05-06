<?php

class Helpers
{
    static private $hariIndonesia = [
        'Sunday' => 'Minggu',
        'Monday' => 'Senin',
        'Tuesday' => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday' => 'Kamis',
        'Friday' => 'Jumat',
        'Saturday' => 'Sabtu'
    ];

    static private $bulanIndonesia = [
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember'
    ];

    static public function getHari($tanggal)
    {
        $hariInggris = date('l', strtotime($tanggal));
        return self::$hariIndonesia[$hariInggris] ?? $hariInggris;
    }
    static public function getJam($tanggal)
    {
        $jam = date('h:i A', strtotime($tanggal));
        return $jam;
    }

    static public function getTanggal($tanggal)
    {
        return date('d', strtotime($tanggal));
    }

    static public function getBulan($tanggal)
    {
        $bulanAngka = date('m', strtotime($tanggal));
        return self::$bulanIndonesia[$bulanAngka] ?? $bulanAngka;
    }

    static public function getTahun($tanggal)
    {
        return date('Y', strtotime($tanggal));
    }
    static public function getFormatTanggal($tanggal)
    {
        return self::getHari($tanggal) . "," . self::getTanggal($tanggal) . " " . self::getBulan($tanggal) . " " . self::getTahun($tanggal);
    }
}
