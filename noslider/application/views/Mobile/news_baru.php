<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Klinik Mata Dr. Sjamsu</title>
    <style>
    /* Breadcrumb Start */
      .breadcrumb {
        width: 100%;
        height: 50px;
        background-color: rgba(0, 170, 181, 0.05);
        padding: 12px 12px;
      }
      .breadcrumb-item {
        padding-left: 60px;
      }
        .breadcrumb li {
        font-size: 18px;
        font-weight: 500;
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
            color: #00bcd4; /* Main theme color */
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .archive-list {
            list-style: none;
            padding-left: 0; /* Removed default padding */
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
            color: #00bcd4; /* Main theme color */
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
            color: #00bcd4; /* Main theme color */
            border-bottom-color: #00bcd4; /* Main theme color */
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
             /* Ensure long titles wrap */
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2; /* Limit to 2 lines */
            -webkit-box-orient: vertical;
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
            color: #00bcd4; /* Main theme color */
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
            /* background: white; */ /* Already white, no need to re-declare */
        }

        .article-image {
            width: 300px;
            height: 220px;
            border-radius: 8px; /* Slightly more rounded */
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
            color: #00bcd4; /* Main theme color */
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
             /* For multi-line excerpt */
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3; /* Adjust number of lines shown */
            -webkit-box-orient: vertical;
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
            /* align-self: flex-start; */ /* Moved to button-container if needed */
            box-shadow: 0 3px 10px rgba(0, 188, 212, 0.3);
            text-decoration: none; /* For <a> tags */
        }

        .read-more-btn:hover {
            background: linear-gradient(135deg, #00acc1, #0097a7);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 188, 212, 0.4);
        }

        /* Responsive Design */
        @media (max-width: 992px) { /* Adjusted breakpoint for sidebar stack */
            .container-news {
                grid-template-columns: 1fr;
                padding: 15px; /* Adjusted padding */
                gap: 25px; /* Adjusted gap */
            }
            .sidebar {
                order: 2; /* Sidebar appears after main content */
            }
            .main-content {
                order: 1;
            }
        }

        @media (max-width: 768px) {
            .article-card {
                flex-direction: column;
                gap: 15px;
                padding: 15px; /* Adjusted padding */
            }

            .article-image {
                width: 100%;
                height: 200px; /* Adjusted for mobile */
            }

            .article-title {
                font-size: 18px;
            }
             .main-content { /* Ensure main content padding is consistent */
                padding: 20px;
            }
        }

        @media (max-width: 480px) {
            .sidebar-section {
                padding: 20px; /* Adjusted padding */
            }

            .main-content {
                padding: 15px;
            }

            .content-title {
                font-size: 20px;
            }
             .breadcrumb-item {
                padding-left: 20px; /* Adjust breadcrumb padding for small screens */
            }
            .article-excerpt {
                -webkit-line-clamp: 2; /* Show fewer lines on very small screens */
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
    <nav style="--bs-breadcrumb-divider: url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'8\' height=\'8\'%3E%3Cpath d=\'M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z\' fill=\'%236c757d\'/%3E%3C/svg%3E');" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Berita</li>
    </ol>
  </nav>

    <div class="container-news">
        <aside class="sidebar">
            <div class="sidebar-section">
                <h3 class="sidebar-title">Arsip</h3>
                <ul class="archive-list">
                    <?php
                    // Placeholder for dynamic archive.
                    // You'll need to fetch and process this data in your controller/model
                    // For now, using the static example:
                    ?>
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

            <div class="sidebar-section">
                <div class="tab-navigation">
                    <button class="tab-btn active">Populer</button>
                    <button class="tab-btn">Dipromosikan</button>
                    <button class="tab-btn">Terbaru</button>
                </div>

                <div class="popular-articles">
                    <?php
                    $popular_news_items = array_slice($news, 0, 3); // Get first 3 news items
                    ?>
                    <?php if (!empty($popular_news_items)): ?>
                        <?php foreach ($popular_news_items as $index => $popular_item): ?>
                            <div class="popular-item">
                                <img src="<?= base_url('asset/images/' . htmlspecialchars($popular_item->gambar)); ?>" alt="<?= htmlspecialchars($popular_item->judul_berita); ?>" class="popular-image">
                                <div class="popular-content">
                                    <a href="<?= site_url('news/view/' . $popular_item->id); ?>" style="text-decoration:none; color: inherit;">
                                       <h4><?= htmlspecialchars($popular_item->judul_berita); ?></h4>
                                    </a>
                                    <div class="popular-views">
                                        <svg class="icon" viewBox="0 0 24 24">
                                            <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                                        </svg>
                                        <?php
                                        echo 1000 + ($index * 150) + rand(0,50); // Example view count
                                        ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>Belum ada berita populer.</p>
                    <?php endif; ?>
                </div>
            </div>
        </aside>

        <div class="main-content">
            <div class="content-header">
                <h1 class="content-title">Semua Berita</h1>
                <?php
                // Basic pagination info (can be enhanced with CI's pagination library)
                $total_news = count($news);
                $items_per_page = 10; // Example, adjust as needed
                $total_pages = ceil($total_news / $items_per_page);
                $current_page = 1; // Assuming page 1 for now
                ?>
                <p class="content-subtitle">Menampilkan <?= $total_news > 0 ? '1' : '0'; ?> - <?= $total_news < $items_per_page ? $total_news : $items_per_page; ?> dari <?= $total_news; ?> berita. Halaman <?= $current_page; ?> dari <?= $total_pages; ?></p>
            </div>

            <div class="article-list">
                <?php if (!empty($news)): ?>
                    <?php foreach ($news as $news_item): ?>
                        <article class="article-card">
                            <?php if (!empty($news_item->gambar)): ?>
                                <img src="<?= base_url('asset/images/' . htmlspecialchars($news_item->gambar)); ?>" alt="<?= htmlspecialchars($news_item->judul_berita); ?>" class="article-image">
                            <?php else: ?>
                                <img src="<?= base_url('asset/images/default.jpg'); ?>" alt="Default Image" class="article-image"> <?php endif; ?>
                            <div class="article-content">
                                <div>
                                    <h2 class="article-title">
                                        <a href="<?= site_url('news/view/' . $news_item->id); ?>" style="text-decoration:none; color:inherit;">
                                            <?= htmlspecialchars($news_item->judul_berita); ?>
                                        </a>
                                    </h2>
                                    <div class="article-date">
                                        <svg class="icon" viewBox="0 0 24 24">
                                            <path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.1 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/>
                                        </svg>
                                        <?php
                                        // Format the date. Example: Senin, 21 Maret 2021
                                        // Set locale to Indonesian for day/month names if not already set globally
                                        // You might need to install the intl PHP extension for full localization
                                        setlocale(LC_TIME, 'id_ID.UTF-8', 'Indonesian_Indonesia.1252');
                                        echo strftime('%A, %d %B %Y', strtotime($news_item->tanggal));
                                        // If strftime isn't working as expected (locale issues), use date():
                                        // $date = new DateTime($news_item->tanggal);
                                        // echo $date->format('l, d F Y'); // F might be in English, requires more work for Indonesian month names
                                        ?>
                                    </div>
                                    <p class="article-excerpt">
                                        <?php
                                        // Create a short excerpt, limit to e.g., 150 characters
                                        $excerpt = strip_tags($news_item->deskripsi);
                                        if (strlen($excerpt) > 150) {
                                            $excerpt = substr($excerpt, 0, 150) . '...';
                                        }
                                        echo htmlspecialchars($excerpt);
                                        ?>
                                    </p>
                                </div>
                                <div class="button-container">
                                    <a href="<?= site_url('news/mobile_detail/' . $news_item->id); ?>" class="read-more-btn">Read More</a>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Belum ada berita yang tersedia.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script>
        // Tab functionality
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                // Add logic here to change the content of .popular-articles based on the tab
                // For example, fetch different data via AJAX or show/hide different pre-loaded sections.
                // For now, it only changes the active tab style.
            });
        });

        // The "Read More" buttons are now <a> tags with href, so direct JS for navigation isn't strictly needed
        // unless you want to add AJAX loading or other effects.
        // The commented-out code below is not necessary if using <a> tags.
        //
        // document.querySelectorAll('.read-more-btn').forEach(btn => {
        //     btn.addEventListener('click', function(event) {
        //         // If the button itself is an <a> tag, the default action will navigate.
        //         // If it's a <button> and you want it to navigate:
        //         // event.preventDefault(); // Prevent default if it's a form submit button
        //         // const url = this.dataset.href; // Assuming you add data-href attribute to the button
        //         // if (url) {
        //         //     window.location.href = url;
        //         // }
        //         // For the original example where it was always news_detail.php:
        //         // window.location.href = "<?= site_url('news/view'); ?>"; // This would need an ID
        //     });
        // });
    </script>
</body>
</html>