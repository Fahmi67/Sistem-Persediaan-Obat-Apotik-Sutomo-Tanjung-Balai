<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="?page=utama">Sistem Informasi Persediaan Obat Di Apotik</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>

                <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=persediaanobat&actions=tampil">Persediaan Obat</a></li>
                        <li><a href="?page=obatmasuk&actions=tampil">Obat Masuk</a></li>
                        <li><a href="?page=obatkeluar&actions=tampil">Obat Keluar</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=persediaanobat&actions=report">Laporan Persediaan Obat</a></li>
                        <li><a href="?page=obatmasuk&actions=report">Laporan Obat Masuk</a></li>
                        <li><a href="?page=obatkeluar&actions=report">Laporan Obat Keluar</a></li>
                    </ul>
                </li>
                <li><a href="?page=user&actions=tampil">User</a></li>

                 <?php
            }elseif(isset($_SESSION['level']) && $_SESSION['level'] ==0) { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=persediaanobat&actions=report">Laporan Persediaan Obat</a></li>
                        <li><a href="?page=obatmasuk&actions=report">Laporan Obat Masuk</a></li>
                        <li><a href="?page=obatkelua&actions=report">Laporan Obat Keluar</a></li>
                    </ul>
                </li>

                <?php } ?>


                <li><a href="?page=about&actions=tampil">About</a></li>
                <li><a href="?page=kontak&actions=tampil">Contact</a></li>

                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
