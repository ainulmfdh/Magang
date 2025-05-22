<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Berita - Portal Berita Terbaru</title>
    <style>
    /* Breadcrumb Start */
        .breadcrumb {
            width: 100%;
            height: 50px;
            background-color: rgba(0, 170, 181, 0.05);
            padding: 12px 12px;
        }
        .breadcrumb-item {
            padding-left: 20px;
        }
        .breadcrumb li {
            font-size: 15px;
        }

        .breadcrumb li a {
            text-decoration: none;
            font-weight: 500;
        }
    /* Breadcrumb End */

        .container-news {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .card-search {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .title-news {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
            color: #434343;
        }
        
        .tagline {
            font-size: 12px;
            color: #666;
            margin-bottom: 15px;
            text-align: center;
        }
        
        .search-container {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }
        
        .search-box {
            width: 100%;
            max-width: 450px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 14px;
        }
        
        .section-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .news-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 20px;
        }
        
        .news-card {
            /* background-color: #fff; */
            border-radius: 5px;
            overflow: hidden;
            /* box-shadow: 0 2px 5px rgba(0,0,0,0.1); */
        }
        
        .news-image {
            width: 50px
            height: 50px;
            object-fit: cover;
        }
        
        .news-content {
            padding: 15px;
        }
        
        .news-category {
            display: inline-block;
            background-color: #00a0e4;
            color: #fff;
            font-size: 12px;
            padding: 3px 8px;
            border-radius: 3px;
            margin-bottom: 10px;
        }
        
        .news-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        
        .news-excerpt {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
            line-height: 1.4;
        }
        
        .read-more {
            display: inline-block;
            background-color: #00a0e4;
            color: #fff;
            padding: 5px 15px;
            border-radius: 3px;
            font-size: 14px;
            text-decoration: none;
        }
        
        .separator {
            border-bottom: 1px solid #eaeaea;
            margin: 30px 0;
        }
        
        @media (max-width: 1024px) {
            .news-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        
        @media (max-width: 768px) {
            .news-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 480px) {
            .news-grid {
                grid-template-columns: 1fr;
            }
        }

        /* berita Styling */
        .berita-section {
            background-color: #ECFFFC;
            /* width: 100%; */
            margin-top: 20px;
            padding-top: 20px;
        }
        .news-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .news-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .news-info {
            padding: 15px;
            display: flex;
            flex-direction: column;
        }
        
        .news-title {
            font-size: 14px;
            font-weight: 700;
            color: rgba(0, 170, 181, 1);
            margin-bottom: 10px;
        }
        
        .news-summary {
            font-size: 12px;
            color: #666;
            margin-bottom: 15px;
        }
        .btn-detail {
            background-color: rgba(0, 170, 181, 1);
            color: white;
            border-radius: 20px;
            font-size: 12px;
            padding: 5px 15px;
            align-self: flex-end;
            text-decoration: none;
            display: inline-block;
        }
        .container-news {
            /* max-width: 1000px; */
            margin: 20px auto;
            overflow: hidden;
        }

        .limit-3-lines {
            display: -webkit-box;
            -webkit-line-clamp: 3;      
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .limit-2-lines {
            display: -webkit-box;
            -webkit-line-clamp: 2;      
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .spacer{
            margin-bottom: 60px;
        }
    </style>
</head>
<body>
    <nav style="--bs-breadcrumb-divider: url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'8\' height=\'8\'%3E%3Cpath d=\'M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z\' fill=\'%236c757d\'/%3E%3C/svg%3E');" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <!-- <li class="breadcrumb-item"><a href="#">Dokter</a></li> -->
            <li class="breadcrumb-item active" aria-current="page">Berita</li>
        </ol>
    </nav>

    <div class="container-news">
       
            <h1 class="title-news">Berita</h1>
            <p class="tagline">Temukan penjelasan lebih detail dan lengkap dari pertanyaan Anda di sini!</p>
            <div class="search-container">
                <input type="text" class="search-box" placeholder="Cari berita berdasarkan kata kunci di sini"><i class="bi bi-search"></i>
               
            </div>
        </div>
   

     <!-- Berita Section -->
       <h1 class="title-news">Berita Terbaru</h1>
    <section class="berita-section" style="background-color: rgba(0, 170, 181, 0.05);">
    <div class="container">
      
    <?php
    // Tambahkan fungsi tanggal_indo di atas sebelum looping jika belum ada
    function tanggal_indo($tanggal) {
        $bulan = [
            1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];

        $tanggal = date('Y-m-d', strtotime($tanggal));
        $pecah = explode('-', $tanggal);
        $tgl = (int)$pecah[2];
        $bln = (int)$pecah[1];
        $thn = $pecah[0];

        return $tgl . ' ' . $bulan[$bln] . ' ' . $thn;
    }
    ?>

<div class="row">
    <?php foreach ($news as $item): ?>
        <div class="col-md-3 mb-4">
            <div class="news-card">
                <a href="<?= site_url('news/mobile_detail/' . $item->id); ?>">
                    <?php if (!empty($item->gambar)): ?>
                        <img src="<?= base_url('asset/images/' . $item->gambar); ?>" alt="Foto Berita" class="img-fluid">
                    <?php else: ?>
                        <div class="no-photo">Tidak ada foto</div>
                    <?php endif; ?>
                </a>
                <div class="news-info">
                     <h3 class="news-title limit-2-lines">
                        <?= strip_tags($item->judul_berita); ?>
                    </h3>
                    <p class="news-summary limit-3-lines">
                        <?= strip_tags($item->deskripsi); ?>
                    </p>
                    <a class="btn-detail"><?= tanggal_indo($item->tanggal); ?></a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

            
        </div>
    </section>

    <div class="spacer"></div>
    <!-- Bootstrap 5 JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>