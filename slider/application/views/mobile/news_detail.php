<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Bakti Sosial Operasi Katarak Klinik Mata Dr. Sjamsu</title>
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
        
        .body-news {
            justify-content: space-between;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
            gap: 30px;
        }
        
        .main-content {
            flex: 2;
        }
        
        .sidebar {
            flex: 1;
        }
        
        h1 {
            font-size: 20px;
            color: #333;
            margin-bottom: 10px;
            font-weight: bold;
        }
        
        .author {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }
        
        .author a {
            color: #2b87d1;
            text-decoration: none;
        }
        
        .date {
            color: #888;
            font-size: 12px;
        }
        
        .article-image {
            width: 100%;
            height: auto;
            margin: 20px 0;
            border-radius: 8px;
        }
        
        
        .search-box {
            display: flex;
            margin-bottom: 30px;
        }
        
        .search-box input {
            flex: 1;
            padding: 8px 12px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
            font-size: 14px;
        }
        
        .search-box button {
            background-color: #fff;
            border: 1px solid #ccc;
            border-left: none;
            padding: 8px 12px;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }
        
        .sidebar h2 {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
            font-weight: bold;
            margin-left: 20px;
        }
        
        .related-news {
            list-style: none;
        }
        
        .news-item {
            display: flex;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .news-item img{
            width: 180px;
            height: 100px;
            margin-right: 10px;
        }
        .news-image {
            width: 40px;
            height: 30px;
            border-radius: 5px;
            object-fit: cover;
            margin-right: 10px;
        }
        
        .news-content h3 {
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        .news-content h3 a {
            color: #333;
            text-decoration: none;
            line-height: 1.3;
        }
        
        .news-date {
            font-size: 12px;
            color: #888;
        }
        
        @media (max-width: 768px) {
            body {
                flex-direction: column;
            }
            
            .sidebar {
                margin-top: 30px;
            }
        }

        .spacer{
            margin-bottom: 60px;
        }
    </style>
</head>
<body>

  <nav style="--bs-breadcrumb-divider: url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'8\' height=\'8\'%3E%3Cpath d=\'M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z\' fill=\'%236c757d\'/%3E%3C/svg%3E');" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('news/mobile'); ?>">Berita</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail</li>
    </ol>
  </nav>

    <div class="body-news">
         
    <div class="main-content">
    <h1><?= $news->judul_berita; ?></h1>

    <div class="author">
        Ditulis oleh <a href="#"><?= $news->penulis ?? 'Admin'; ?></a>
    </div>

    <?php if (!empty($news->gambar)): ?>
                <img src="<?= base_url('asset/images/' . $news->gambar); ?>" alt="Gambar Berita" class="article-image">
            <?php endif; ?>
    <p><?= $news->deskripsi; ?></p>
</div>

    
    <div class="sidebar">
        <div class="search-box">
            <input type="text" placeholder="Cari berita berdasarkan judul kategori topik">
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                </svg>
            </button>
        </div>
        <h2>Berita Terkait</h2>
        <ul class="related-news">
            <li class="news-item">
               <img src="<?= base_url('asset/images/godwins.png'); ?>" alt="Doctor" class="img-fluid">
                <div class="news-content">
                    <h3><a href="#">Waspadai Katarak Sejak Dini: Kenali Gejala dan Cara Pencegahannya</a></h3>
                    <div class="news-date">07 Mei 2025</div>
                </div>
            </li>
            <li class="news-item">
               <img src="<?= base_url('asset/images/scan.png'); ?>" alt="Doctor" class="img-fluid">
                <div class="news-content">
                    <h3><a href="#">Waspadai Katarak Sejak Dini: Kenali Gejala dan Cara Pencegahannya</a></h3>
                    <div class="news-date">07 Mei 2025</div>
                </div>
            </li>
            <li class="news-item">
               <img src="<?= base_url('asset/images/visi.jpg'); ?>" alt="Doctor" class="img-fluid">
                <div class="news-content">
                    <h3><a href="#">Waspadai Katarak Sejak Dini: Kenali Gejala dan Cara Pencegahannya</a></h3>
                    <div class="news-date">07 Mei 2025</div>
                </div>
            </li>
            <li class="news-item">
               <img src="<?= base_url('asset/images/godwins.png'); ?>" alt="Doctor" class="img-fluid">
                <div class="news-content">
                    <h3><a href="#">Waspadai Katarak Sejak Dini: Kenali Gejala dan Cara Pencegahannya</a></h3>
                    <div class="news-date">07 Mei 2025</div>
                </div>
            </li>
            <li class="news-item">
               <img src="<?= base_url('asset/images/scan.png'); ?>" alt="Doctor" class="img-fluid">
                <div class="news-content">
                    <h3><a href="#">Waspadai Katarak Sejak Dini: Kenali Gejala dan Cara Pencegahannya</a></h3>
                    <div class="news-date">07 Mei 2025</div>
                </div>
            </li>
        </ul>

    </div>
   </div>

    <div class="spacer"></div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>