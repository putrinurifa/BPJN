<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Surat</title>

    <style>
    .clearfix:after {
        content: "";
        display: table;
        clear: both;

        left: 16px;
    }

    a {
        color: #5D6975;
        text-decoration: underline;
    }

    .topright {
        position: absolute;
        top: 8px;
        right: 16px;
        font-size: 18px;
        width: 15%;
    }

    .topleft {
        position: absolute;
        top: 8px;
        left: 16px;
        font-size: 18px;
        width: 15%;
    }

    body {
        position: relative;
        height: 29.7cm;
        width: 100%;
        margin: 0 auto;
        color: #001028;
        background: #FFFFFF;
        font-family: Arial, sans-serif;
        font-size: 14px;
        font-family: Arial;
    }

    header {
        width: 100%;
        text-align: center;
    }

    h1 {
        color: #5D6975;
        font-size: 2.0em;
        font-weight: normal;
        text-align: center;
    }

    h2 {
        border-bottom: 1px solid #5D6975;
        font-size: 1.5em;
        font-weight: normal;
        text-align: left;
    }

    h3 {
        border-top: 1px solid #5D6975;
        font-weight: normal;
        text-align: center;
    }

    #identity {
        display: flex;
    }

    #project {
        float: left;
    }

    #project span {
        color: #5D6975;
        text-align: right;
        margin-right: 10px;
        font-size: 0.9em;
    }

    #company {
        text-align: center;
    }

    #project div,
    #company div {
        white-space: nowrap;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 20px;
    }

    table th,
    table td {
        text-align: center;
    }

    table th {
        padding: 5px 20px;
        color: #5D6975;
        border: 1px solid #5D6975;
        font-weight: bold;
    }

    table .service,
    table .desc {
        text-align: left;
    }

    table td {
        padding: 5px;
        text-align: center;
        border: 1px solid #5D6975;
    }

    table td.service,
    table td.desc {
        vertical-align: top;
    }

    table td.qty {
        text-align: center;
    }

    table td.service,
    table td.unit,
    table td.qty,
    table td.total,
    table td.grand {
        font-size: 1.2em;
    }

    table td.grand {
        border-top: 1px solid #5D6975;
        font-weight: bold;
    }

    #notices .notice {
        color: #5D6975;
        font-size: 1.2em;
    }

    footer {
        color: #5D6975;
        width: 100%;
        height: 30px;
        position: absolute;
        bottom: 0;
        border-top: 1px solid #C1CED9;
        padding: 8px 0;
        text-align: center;
    }
    </style>
</head>

<body>
    <header class="clearfix">
        <div class="d-flex justify-content-between pl-4 pr-4 pt-3 pb-4 mt-3" style="margin-bottom:50px ">
            <img src="assets/img/logo-genitri.jpg" class="topleft">
            <img src="assets/images/logo/PAL.png" class="topright">
        </div>
    </header>
    <main>
        <h1>Balai Desa Genitri Kedungrejo</h1>
        <h1>  Kecamatan Pakis Kabupaten Malang</h1>
        <h3>
            <?php
             $tgl=date('d-m-Y');
                echo $tgl;
            ?>
        </h3>


        <h4>No : 1</h4>
        <h4>Nama Anak : Intan Kusuma Bangsa</h4>
        <h4>Tanggal Lahir : 13 Januari 2012</h4>
        <h4>Jenis Kelamin :Perempuan</h4>
        <h4>Alamat : Jl Baru dibangun</h4>
        <h4>Nama Ayah : Toyib</h4>
        <h4>Nama Ibu : Runi</h4>
        <h4>Anak Ke- : 7</h4>
    </main>
</body>

</html>