
<!-- News & Insights Section -->
<style>
    .news-section {
        background-color: #a38240;
        color: #ffffff;
    }

    .main-card {
        background: #ffffff;
        border-radius: 0;
        overflow: hidden;
    }

    .hero-image-wrapper {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        min-height: 450px;
        background: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1200&q=80') center/cover no-repeat;
    }

    .badge-popular {
        background-color: #f37021;
        color: #ffffff;
        font-size: 0.75rem;
        font-weight: 600;
        padding: 6px 14px;
        border-radius: 6px;
    }

    .featured-sidebar {
        background-color: #a38240;
        border-radius: 12px;
    }

    .btn-read-more {
        background-color: rgba(255, 255, 255, 0.25);
        color: #ffffff;
        font-size: 0.85rem;
        font-weight: 500;
        border-radius: 50px;
        padding: 6px 18px;
        border: 1px solid rgba(255, 255, 255, 0.4);
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        text-decoration: none;
    }

    .btn-read-more:hover {
        background-color: #ffffff;
        color: #a38240;
    }

    .thumb-img {
        width: 70px;
        height: 60px;
        object-fit: cover;
        border-radius: 8px;
    }

    .sub-post-title {
        font-size: 0.875rem;
        font-weight: 600;
        color: #2b2b2b;
        line-height: 1.3;
        text-decoration: none;
    }

    .sub-post-title:hover {
        color: #a38240;
    }
</style>
<section class="news-section py-5">
    <div class="container py-4">
        
        <!-- Section Header -->
        <div class="mb-4 col-lg-8">
        <h2 class="fw-bold fs-2 mb-2">News & Insights</h2>
        <p class="text-white-50 small mb-0 lh-base">
            Things move fast in the business world, and so should your business. Stay ahead of the curve with latest news and events related to doing business in Hong Kong.
        </p>
        </div>

        <!-- Main Layout Card -->
        <div class="main-card p-3 p-md-4 shadow-lg">
            <div class="row g-4">
                
                <!-- Left Content Area -->
                <div class="col-lg-8 d-flex flex-column justify-content-between">
                
                    <!-- Hero Post Image with Badge -->
                    <div class="hero-image-wrapper p-3 mb-4">
                        <span class="badge badge-popular position-relative z-1">Most Popular</span>
                    </div>

                    <!-- Sub Posts Horizontal List -->
                    <div class="row g-3">
                        
                        <!-- Sub Post 1 -->
                        <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=200&q=80" alt="Dubai Budget" class="thumb-img flex-shrink-0" />
                            <div>
                            <a href="#" class="sub-post-title d-block mb-1">Dubai Budget 2025-2026 Inside For...</a>
                            <div class="text-muted extra-small d-flex align-items-center gap-1" style="font-size: 0.75rem;">
                                <i class="bi bi-calendar3"></i>
                                <span>11 March 2026</span>
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- Sub Post 2 -->
                        <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=200&q=80" alt="Income Tax" class="thumb-img flex-shrink-0" />
                            <div>
                            <a href="#" class="sub-post-title d-block mb-1">Dubai Budget 2025-2026 Inside For...</a>
                            <div class="text-muted extra-small d-flex align-items-center gap-1" style="font-size: 0.75rem;">
                                <i class="bi bi-calendar3"></i>
                                <span>11 March 2026</span>
                            </div>
                            </div>
                        </div>
                        </div>

                    </div>
                </div>

                <!-- Right Sidebar Featured Box -->
                <div class="col-lg-4">
                    <div class="featured-sidebar p-4 p-md-5 h-100 d-flex flex-column justify-content-between text-white">
                        <div>
                            <span class="text-white-50 small text-uppercase fw-semibold d-block mb-3">New Post</span>
                            <h3 class="fw-bold fs-3 mb-0 lh-sm">
                                Dubai Budget<br />2025-2026<br />Inside For...
                            </h3>
                        </div>
                        
                        <div class="pt-4">
                            <a href="#" class="btn-read-more">
                                <i class="bi bi-journal-text"></i>
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                    <div class="news-circle d-none d-lg-block">
                        <img src="assets/images/objects/news-circle.png" alt="Decorative Shape" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>