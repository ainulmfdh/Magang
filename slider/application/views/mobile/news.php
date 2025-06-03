<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Klinik Mata Dr. Sjamsu</title>
    <style>

        .container-news {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 30px;
        }

        /* Sidebar Styles */
        .sidebar {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            height: fit-content;
        }

        .sidebar-section {
            padding: 25px;
            border-bottom: 1px solid #e9ecef;
        }

        .sidebar-section:last-child {
            border-bottom: none;
        }

        .sidebar-title {
            font-size: 18px;
            font-weight: 600;
            color: #00bcd4;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .archive-list {
            list-style: none;
        }

        .archive-year {
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .archive-month {
            margin-left: 20px;
            margin-bottom: 8px;
        }

        .archive-month a {
            color: #666;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .archive-month a:hover {
            color: #00bcd4;
        }

        .archive-count {
            color: #999;
            font-size: 12px;
        }

        .tab-navigation {
            display: flex;
            border-bottom: 2px solid #e9ecef;
            margin-bottom: 20px;
        }

        .tab-btn {
            flex: 1;
            padding: 12px;
            background: none;
            border: none;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            color: #666;
            border-bottom: 2px solid transparent;
        }

        .tab-btn.active {
            color: #00bcd4;
            border-bottom-color: #00bcd4;
            font-weight: 600;
        }

        .popular-item {
            display: flex;
            gap: 12px;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #f0f0f0;
        }

        .popular-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .popular-image {
            width: 60px;
            height: 45px;
            border-radius: 6px;
            object-fit: cover;
            flex-shrink: 0;
        }

        .popular-content h4 {
            font-size: 13px;
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
            line-height: 1.3;
        }

        .popular-views {
            font-size: 12px;
            color: #666;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .content-header {
            margin-bottom: 30px;
        }

        .content-title {
            font-size: 24px;
            font-weight: 700;
            color: #00bcd4;
            margin-bottom: 10px;
        }

        .content-subtitle {
            color: #666;
            font-size: 16px;
        }

        .article-list {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .article-card {
            display: flex;
            gap: 20px;
            padding: 20px;
            padding-right: 30px;
            border: 1px solid #e9ecef;
            border-radius: 12px;
            transition: all 0.3s ease;
            background: white;
        }

        .article-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            background: white;
        }

        .article-image {
            width: 300px;
            height: 220px;
            border-radius: 2px;
            object-fit: cover;
            flex-shrink: 0;
        }

        .article-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .article-title {
            font-size: 20px;
            font-weight: 700;
            color: #00bcd4;
            margin-bottom: 10px;
            line-height: 1.3;
            text-transform: uppercase;
        }

        .article-date {
            font-size: 14px;
            color: #666;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .article-excerpt {
            color: #555;
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 15px;
            text-align: justify;
        }

        .button-container {
        display: flex;
        justify-content: flex-end;
    }

        .read-more-btn {
            background: linear-gradient(135deg, #00bcd4, #00acc1);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            align-self: flex-start;
            box-shadow: 0 3px 10px rgba(0, 188, 212, 0.3);
        }

        .read-more-btn:hover {
            background: linear-gradient(135deg, #00acc1, #0097a7);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 188, 212, 0.4);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container-news {
                grid-template-columns: 1fr;
                padding: 10px;
                gap: 20px;
            }

            .sidebar {
                order: 2;
            }

            .main-content {
                order: 1;
                padding: 20px;
            }

            .article-card {
                flex-direction: column;
                gap: 15px;
            }

            .article-image {
                width: 100%;
                height: 200px;
            }

            .article-title {
                font-size: 18px;
            }
        }

        @media (max-width: 480px) {
            .sidebar-section {
                padding: 15px;
            }

            .main-content {
                padding: 15px;
            }

            .content-title {
                font-size: 20px;
            }
        }

        /* Icons */
        .icon {
            width: 14px;
            height: 14px;
            fill: currentColor;
        }
        
    </style>
</head>
<body>
    <div class="container-news">
        <!-- Sidebar -->
        <aside class="sidebar">
            <!-- Archive Section -->
            <div class="sidebar-section">
                <h3 class="sidebar-title">Arsip</h3>
                <ul class="archive-list">
                    <li class="archive-year">2023</li>
                    <li class="archive-month">
                        <a href="#">Oct <span class="archive-count">(1)</span></a>
                    </li>
                    <li class="archive-month">
                        <a href="#">Jun <span class="archive-count">(1)</span></a>
                    </li>
                    <li class="archive-year">2022</li>
                    <li class="archive-month">
                        <a href="#">Mar <span class="archive-count">(1)</span></a>
                    </li>
                </ul>
            </div>

            <!-- Popular Articles Section -->
            <div class="sidebar-section">
                <div class="tab-navigation">
                    <button class="tab-btn active">Populer</button>
                    <button class="tab-btn">Dipromosikan</button>
                    <button class="tab-btn">Terbaru</button>
                </div>

                <div class="popular-articles">
                    <div class="popular-item">
                        <img src="https://images.unsplash.com/photo-1584820927498-cfe5211fd8bf?w=150&h=100&fit=crop" alt="Article" class="popular-image">
                        <div class="popular-content">
                            <h4>KLIK DISINI SETELAH SCAN -</h4>
                            <div class="popular-views">
                                <svg class="icon" viewBox="0 0 24 24">
                                    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                                </svg>
                                1354
                            </div>
                        </div>
                    </div>

                    <div class="popular-item">
                        <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=150&h=100&fit=crop" alt="Article" class="popular-image">
                        <div class="popular-content">
                            <h4>VISI MISI KLINIK MATA DR....</h4>
                            <div class="popular-views">
                                <svg class="icon" viewBox="0 0 24 24">
                                    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                                </svg>
                                1328
                            </div>
                        </div>
                    </div>

                    <div class="popular-item">
                        <img src="https://images.unsplash.com/photo-1584820927498-cfe5211fd8bf?w=150&h=100&fit=crop" alt="Article" class="popular-image">
                        <div class="popular-content">
                            <h4>HALLO GODWINS-CLICK HERE TO GET ...</h4>
                            <div class="popular-views">
                                <svg class="icon" viewBox="0 0 24 24">
                                    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                                </svg>
                                811
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="main-content">
            <div class="content-header">
                <h1 class="content-title">Semua Berita</h1>
                <p class="content-subtitle">Halaman 1 dari 1 halaman</p>
            </div>

            <div class="article-list">
                <!-- Article 1 -->
                <article class="article-card">
                    <img src="https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=300&h=200&fit=crop" alt="Operasi Katarak" class="article-image">
                    <div class="article-content">
                        <div>
                            <h2 class="article-title">Bakti Sosial Operasi Katarak Klinik Mata Dr. Sjamsu</h2>
                            <div class="article-date">
                                <svg class="icon" viewBox="0 0 24 24">
                                    <path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.1 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/>
                                </svg>
                                Senin, 21 Maret 2021
                            </div>
                            <p class="article-excerpt">
                                Dalam upaya meningkatkan kualitas hidup masyarakat, Grup Nusantara bekerja sama dengan Klinik Mata Dr. Sjamsu mengadakan bakti sosial operasi katarak bagi masyarakat kurang mampu.
                            </p>
                        </div>
                        <div class="button-container">
                                <button class="read-more-btn">Read More</button>
                            </div>
                    </div>
                </article>

                <!-- Article 2 -->
                <article class="article-card">
                    <img src="https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=300&h=200&fit=crop" alt="Operasi Katarak" class="article-image">
                    <div class="article-content">
                        <div>
                            <h2 class="article-title">Bakti Sosial Operasi Katarak Klinik Mata Dr. Sjamsu</h2>
                            <div class="article-date">
                                <svg class="icon" viewBox="0 0 24 24">
                                    <path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.1 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/>
                                </svg>
                                Senin, 21 Maret 2021
                            </div>
                            <p class="article-excerpt">
                                Dalam upaya meningkatkan kualitas hidup masyarakat, Grup Nusantara bekerja sama dengan Klinik Mata Dr. Sjamsu mengadakan bakti sosial operasi katarak bagi masyarakat kurang mampu.
                            </p>
                        </div>
                         <div class="button-container">
                                <button class="read-more-btn">Read More</button>
                            </div>
                    </div>
                </article>

                <!-- Article 3 -->
                <article class="article-card">
                    <img src="https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=300&h=200&fit=crop" alt="Operasi Katarak" class="article-image">
                    <div class="article-content">
                        <div>
                            <h2 class="article-title">Bakti Sosial Operasi Katarak Klinik Mata Dr. Sjamsu</h2>
                            <div class="article-date">
                                <svg class="icon" viewBox="0 0 24 24">
                                    <path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.1 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/>
                                </svg>
                                Senin, 21 Maret 2021
                            </div>
                            <p class="article-excerpt">
                                Dalam upaya meningkatkan kualitas hidup masyarakat, Grup Nusantara bekerja sama dengan Klinik Mata Dr. Sjamsu mengadakan bakti sosial operasi katarak bagi masyarakat kurang mampu.
                            </p>
                        </div>
                         <div class="button-container">
                                <button class="read-more-btn">Read More</button>
                            </div>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <script>
        // Tab functionality
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Read more functionality
        document.querySelectorAll('.read-more-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                alert('Mengarahkan ke artikel lengkap...');
            });
        });
    </script>
</body>
</html>