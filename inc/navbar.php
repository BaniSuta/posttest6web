<?php
date_default_timezone_set('Asia/Makassar')

?>
<header id="head">
    <div class="cont-header">
        <div class="header-img">
            <img src="img/wan hart.png" alt="Wan Hart" />
            <img src="img/right.png" alt="">
        </div>
        <div class="navbar">
            <div class="list">
                <p>| <a id="nav-list" onclick="return confirm('Apakah Anda Yakin Ingin Berpindah Halaman?')" href="index.php">Home</a> | <a id="nav-list" onclick="return confirm('Apakah Anda Yakin Ingin Berpindah Halaman?')" href="about.php">About</a> | <a id="nav-list" onclick="return confirm('Apakah Anda Yakin Ingin Berpindah Halaman?')" href="add.php">Input Data</a> |</p>
            </div>
            <div class="tanggal">
                <p>Current Date : <?= date('l, d-m-Y') ?></p>
                <p>Timezone : <?= date_default_timezone_get() ?></p>
            </div>
        </div>
    </div>
</header>