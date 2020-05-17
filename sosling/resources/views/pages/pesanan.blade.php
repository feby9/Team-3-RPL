@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="Viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="css/pesanan.css">
        <style>
            div.a {
                text-align:center;
                font-size = 200px
            }
            .b {
                text-align:left;
                font-size = 200px
            }
            p.c {
                word-spacing: 5cm;
            }
            * {
                box-sizing: border-box;
            }

            .box {
                float: left;
                width: 33.33%;
                padding: 50px;
            }
            .bix {
                float: center;
                width: 33.33%;
                padding: 40px;
            }

            .clearfix::after {
                content: "";
                clear: both;
                display: table;
            }
            .text {
                background-color: rgb(248, 248, 248);
                color: black;
                font-size: 14; 
                font-weight: bold;
                margin-top: 0 auto;
                padding: 5px;
                width: 90%;
                position: top;
                top: 0%;
                text-align: center;
                left: 20%;
                transform: translate(0%, 0%);
                mix-blend-mode: screen;
            }
            
        </style>
    </head>
    <body>
        <div class="bubu">
            <section class="top">                
                <div class="a">
                <h2  style="color:rgb(0, 0, 0);" > Trip Anda</h2>
                <h1 style="color: rgb(4, 82, 4)">Pantai Kelagian</h1>
            </div>
            </div>
            <div class="clearfix">
                <div class="box" style="background-image: url('../img/image(2).jpg'); background-size:100% 100%;position: relative">
                    <div class="text"><a href="#">Buat Pesanan untuk Pantai Kelagian</a>
                    <p>Paket 1 Rp.3.000.000</p>
                </div>
                </div>
                <div class="box" style="background-image: url('../img/image(1).jpg'); background-size:100% 100%; position: relative">
                    <div class="text"><a href="#">Buat Pesanan untuk Pantai Kelagian</a>
                    <p>Paket 2 Rp.5.000.000</p>
                    </div>
                </div>
                    <div class="box" style="background-image: url('../img/image(3).jpg'); background-size:100% 100%;position: relative"> 
                        <div class="text"><a href="#">Buat Pesanan untuk Pantai Kelagian</a>
                        <p>Paket 3 Rp.7.000.000</p>
                    </div>
                    </div>

        <div class="a">
        <section style="text-align: center">
            <h1 class="a">RINCIAN PAKET WISATA</h1>
        </section>
    </div>
            <h2>Rincian Jadwal </h2>
            <p>
                Day 01: Airport – Check in Hotel – Tanah Lot (D)
                
                Penjemputan di bandara Ngurah Rai Bali (siang / sore).
                Check In Hotel (paling cepat jam 2 sore).
                Mengunjungi Pura Tanah Lot, Icon Bali yang terkenal.
                Makan malam di local resto sebelum diantar kembali Hotel.
            </p>
            <p>
                Day 02: Tarian Barong– Kintamani – Dinner Jimbaran (B, L, D)
                
                Penjemputan di bandara Ngurah Rai Bali (siang / sore).
                Check In Hotel (paling cepat jam 2 sore).
                Mengunjungi Pura Tanah Lot, Icon Bali yang terkenal.
                Makan malam di local resto sebelum diantar kembali Hotel.
            </p>
            <p>
                Day 03: C/O Hotel – Pantai Pandawa – Kuta – Bandara  (B, L)
                
                Penjemputan di bandara Ngurah Rai Bali (siang / sore).
                Check In Hotel (paling cepat jam 2 sore).
                Mengunjungi Pura Tanah Lot, Icon Bali yang terkenal.
                Makan malam di local resto sebelum diantar kembali Hotel.
            </p>
            <h2>Rincian Kegiatan </h2>
            <p>
                Day 01: Airport – Check in Hotel – Tanah Lot (D)
                
                Penjemputan di bandara Ngurah Rai Bali (siang / sore).
                Check In Hotel (paling cepat jam 2 sore).
                Mengunjungi Pura Tanah Lot, Icon Bali yang terkenal.
                Makan malam di local resto sebelum diantar kembali Hotel.
            </p>
            <p>
                Day 02: Tarian Barong– Kintamani – Dinner Jimbaran (B, L, D)
                
                Penjemputan di bandara Ngurah Rai Bali (siang / sore).
                Check In Hotel (paling cepat jam 2 sore).
                Mengunjungi Pura Tanah Lot, Icon Bali yang terkenal.
                Makan malam di local resto sebelum diantar kembali Hotel.
            </p>
            <p>
                Day 03: C/O Hotel – Pantai Pandawa – Kuta – Bandara  (B, L)
                
                Penjemputan di bandara Ngurah Rai Bali (siang / sore).
                Check In Hotel (paling cepat jam 2 sore).
                Mengunjungi Pura Tanah Lot, Icon Bali yang terkenal.
                Makan malam di local resto sebelum diantar kembali Hotel.
            </p>

            <div class="baba">
                <section class="top">
                    <div class="b">
                        <div class="clearfix">
                            <div class="bix" style="background-image: url('../img/images (8).jpeg'); background-size:100% 100%;position: relative">
                                </div>
                        <h2  style="color:rgb(0, 0, 0);" > Data Diri Tourguide</h2>
                        <p style="color: rgb(0, 0, 0)">Nama : Feby Marcha Dean</p>
                        <p> "Saya adalah seorang pemandu wisata yang sudah berpengalaman. Saya sudah mempunyai banyak pengalaman menjadi pemandu wisata. Beberapa sertifikat dan tanda pengesahan sebagai tourguide sudah saya lampirkan di data diri saya"</p>
                    </div>
                    </section>
                    </div>
                   
    </html>

@endsection
