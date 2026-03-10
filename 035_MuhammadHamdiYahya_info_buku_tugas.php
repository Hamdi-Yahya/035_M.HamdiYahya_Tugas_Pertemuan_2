<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Buku - Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Informasi Buku</h1>
        
        <?php
        // Data buku
        $judul1 = "Laravel: From Beginner to Advanced";
        $kategori1 = "Programming";
        $bahasa1 = "Inggris";
        $halaman1 = 450;
        $berat1 = 283;
        $pengarang1 = "Aam Yahya";
        $penerbit1 = "Informatika";
        $tahun_terbit1 = 2023;
        $harga1 = 125000;
        $stok1 = 8;
        $isbn1 = "978-602-1234-56-7";

        $judul2 = "Mastering MySQL Database";
        $kategori2 = "Database";
        $bahasa2 = "Inggris";
        $halaman2 = 380;
        $berat2 = 260;
        $pengarang2 = "Andi Pratama";
        $penerbit2 = "Elex Media Komputindo";
        $tahun_terbit2 = 2022;
        $harga2 = 110000;
        $stok2 = 6;
        $isbn2 = "978-602-5678-12-3";

        $judul3 = "Belajar Web Design dengan HTML & CSS";
        $kategori3 = "Web Design";
        $bahasa3 = "Indonesia";
        $halaman3 = 320;
        $berat3 = 240;
        $pengarang3 = "Rizky Kurniawan";
        $penerbit3 = "Andi Publisher";
        $tahun_terbit3 = 2021;
        $harga3 = 95000;
        $stok3 = 10;
        $isbn3 = "978-602-7890-45-6";

        $judul4 = "Python Programming Fundamentals";
        $kategori4 = "Programming";
        $bahasa4 = "Inggris";
        $halaman4 = 410;
        $berat4 = 275;
        $pengarang4 = "Patrick Johnson";
        $penerbit4 = "TechPress";
        $tahun_terbit4 = 2024;
        $harga4 = 135000;
        $stok4 = 7;
        $isbn4 = "978-602-3456-78-9";
        ?>
        
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0"><?php echo $judul1; ?></h5>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th width="200">Pengarang</th>
                        <td>: <?php echo $pengarang1; ?></td>
                    </tr>
                    <tr>
                        <th>Penerbit</th>
                        <td>: <?php echo $penerbit1; ?></td>
                    </tr>
                    <tr>
                        <th>Kategori</th>
                        <td>: <?php echo $kategori1; ?></td>
                    </tr>
                    <tr>
                        <th>Bahasa</th>
                        <td>: <?php echo $bahasa1; ?></td>
                    </tr>
                    <tr>
                        <th>Halaman Buku</th>
                        <td>: <?php echo $halaman1; ?></td>
                    </tr>
                    <tr>
                        <th>Berat Buku</th>
                        <td>: <?php echo $berat1; ?> Gram</td>
                    </tr>
                    <tr>
                        <th>Tahun Terbit</th>
                        <td>: <?php echo $tahun_terbit1; ?></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td>: <?php echo $isbn1; ?></td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <td>: Rp <?php echo number_format($harga1, 0, ',', '.'); ?></td>
                    </tr>
                    <tr>
                        <th>Stok</th>
                        <td>: <?php echo $stok1; ?> buku</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-warning text-white">
                <h5 class="mb-0"><?php echo $judul2; ?></h5>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th width="200">Pengarang</th>
                        <td>: <?php echo $pengarang2; ?></td>
                    </tr>
                    <tr>
                        <th>Penerbit</th>
                        <td>: <?php echo $penerbit2; ?></td>
                    </tr>
                    <tr>
                        <th>Kategori</th>
                        <td>: <?php echo $kategori2; ?></td>
                    </tr>
                    <tr>
                        <th>Bahasa</th>
                        <td>: <?php echo $bahasa2; ?></td>
                    </tr>
                    <tr>
                        <th>Halaman Buku</th>
                        <td>: <?php echo $halaman2; ?></td>
                    </tr>
                    <tr>
                        <th>Berat Buku</th>
                        <td>: <?php echo $berat2; ?> Gram</td>
                    </tr>
                    <tr>
                        <th>Tahun Terbit</th>
                        <td>: <?php echo $tahun_terbit2; ?></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td>: <?php echo $isbn2; ?></td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <td>: Rp <?php echo number_format($harga2, 0, ',', '.'); ?></td>
                    </tr>
                    <tr>
                        <th>Stok</th>
                        <td>: <?php echo $stok2; ?> buku</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-danger text-white">
                <h5 class="mb-0"><?php echo $judul3; ?></h5>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th width="200">Pengarang</th>
                        <td>: <?php echo $pengarang3; ?></td>
                    </tr>
                    <tr>
                        <th>Penerbit</th>
                        <td>: <?php echo $penerbit3; ?></td>
                    </tr>
                    <tr>
                        <th>Kategori</th>
                        <td>: <?php echo $kategori3; ?></td>
                    </tr>
                    <tr>
                        <th>Bahasa</th>
                        <td>: <?php echo $bahasa3; ?></td>
                    </tr>
                    <tr>
                        <th>Halaman Buku</th>
                        <td>: <?php echo $halaman3; ?></td>
                    </tr>
                    <tr>
                        <th>Berat Buku</th>
                        <td>: <?php echo $berat3; ?> Gram</td>
                    </tr>
                    <tr>
                        <th>Tahun Terbit</th>
                        <td>: <?php echo $tahun_terbit3; ?></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td>: <?php echo $isbn3; ?></td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <td>: Rp <?php echo number_format($harga3, 0, ',', '.'); ?></td>
                    </tr>
                    <tr>
                        <th>Stok</th>
                        <td>: <?php echo $stok3; ?> buku</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0"><?php echo $judul4; ?></h5>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th width="200">Pengarang</th>
                        <td>: <?php echo $pengarang4; ?></td>
                    </tr>
                    <tr>
                        <th>Penerbit</th>
                        <td>: <?php echo $penerbit4; ?></td>
                    </tr>
                    <tr>
                        <th>Kategori</th>
                        <td>: <?php echo $kategori4; ?></td>
                    </tr>
                    <tr>
                        <th>Bahasa</th>
                        <td>: <?php echo $bahasa4; ?></td>
                    </tr>
                    <tr>
                        <th>Halaman Buku</th>
                        <td>: <?php echo $halaman4; ?></td>
                    </tr>
                    <tr>
                        <th>Berat Buku</th>
                        <td>: <?php echo $berat4; ?> Gram</td>
                    </tr>
                    <tr>
                        <th>Tahun Terbit</th>
                        <td>: <?php echo $tahun_terbit4; ?></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td>: <?php echo $isbn4; ?></td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <td>: Rp <?php echo number_format($harga4, 0, ',', '.'); ?></td>
                    </tr>
                    <tr>
                        <th>Stok</th>
                        <td>: <?php echo $stok4; ?> buku</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>