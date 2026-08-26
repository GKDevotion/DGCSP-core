<style>
    /* Module Menu Grid */
    .module-menu-section {
        border: 1px solid var(--gold-border);
        border-radius: 20px;
        padding: 40px 30px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.5);
    }

    .menu-title {
        color: var(--gold-primary);
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 600;
    }

    .module-card {
        background: var(--card-bg);
        border: 1px solid var(--gold-border);
        border-radius: 14px;
        padding: 20px;
        display: flex;
        align-items: center;
        gap: 15px;
        cursor: pointer;
        transition: var(--transition);
        text-decoration: none;
        color: var(--text-light);
        height: 100%;
    }

    .module-card:hover, .module-card.active {
        background: rgba(184, 150, 85, 0.12);
        border-color: var(--gold-hover);
        transform: translateY(-4px);
        color: var(--gold-hover);
    }

    .module-icon {
        width: 48px;
        height: 48px;
        border-radius: 10px;
        background: rgba(184, 150, 85, 0.15);
        color: var(--gold-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
        flex-shrink: 0;
        transition: var(--transition);
    }

    .module-card:hover .module-icon,
    .module-card.active .module-icon {
        background: var(--gold-primary);
        color: #111;
    }

    .module-name {
        font-size: 0.95rem;
        font-weight: 600;
        margin: 0;
        line-height: 1.3;
    }

    .arrow-icon {
        margin-left: auto;
        color: var(--text-muted);
        font-size: 0.85rem;
        transition: var(--transition);
    }

    .module-card:hover .arrow-icon {
        color: var(--gold-primary);
        transform: translateX(4px);
    }
</style>

<section class="module-menu-section mt-5">
    <div class="text-center mb-4">
        <span class="menu-title"><i class="fa-solid fa-layer-group me-2"></i>Navigation Menu</span>
    </div>

    <div class="row g-3">
        <!-- Module 1 -->
        <div class="col-lg-4 col-md-6">
            <a href="<?= BASE_URL ?>/offshore-jurisdiction/type-of-income-source" class="module-card" onclick="navigateToModule('income-source')">
                <div class="module-icon"><i class="fa-solid fa-wallet"></i></div>
                <div>
                    <h3 class="module-name">Type of Income Source</h3>
                </div>
                <i class="fa-solid fa-chevron-right arrow-icon"></i>
            </a>
        </div>

        <!-- Module 2 -->
        <div class="col-lg-4 col-md-6">
            <a href="<?= BASE_URL ?>/offshore-jurisdiction/mainly-investment-markets" class="module-card" onclick="navigateToModule('investment-markets')">
                <div class="module-icon"><i class="fa-solid fa-chart-line"></i></div>
                <div>
                    <h3 class="module-name">Mainly Investment Markets</h3>
                </div>
                <i class="fa-solid fa-chevron-right arrow-icon"></i>
            </a>
        </div>

        <!-- Module 3 -->
        <div class="col-lg-4 col-md-6">
            <a href="<?= BASE_URL ?>/offshore-jurisdiction/office-location-rules-ragulation" class="module-card" onclick="navigateToModule('rules-regulations')">
                <div class="module-icon"><i class="fa-solid fa-scale-balanced"></i></div>
                <div>
                    <h3 class="module-name">Offshore Location & Rules</h3>
                </div>
                <i class="fa-solid fa-chevron-right arrow-icon"></i>
            </a>
        </div>

        <!-- Module 4 -->
        <div class="col-lg-4 col-md-6">
            <a href="<?= BASE_URL ?>/offshore-jurisdiction/minimum-setup-investment-duration" class="module-card" onclick="navigateToModule('investment-duration')">
                <div class="module-icon"><i class="fa-solid fa-hourglass-half"></i></div>
                <div>
                    <h3 class="module-name">Min Setup & Duration</h3>
                </div>
                <i class="fa-solid fa-chevron-right arrow-icon"></i>
            </a>
        </div>

        <!-- Module 5 -->
        <div class="col-lg-4 col-md-6">
            <a href="<?= BASE_URL ?>/offshore-jurisdiction/pros-cons" class="module-card" onclick="navigateToModule('pros-cons')">
                <div class="module-icon"><i class="fa-solid fa-right-left"></i></div>
                <div>
                    <h3 class="module-name">Pros & Cons</h3>
                </div>
                <i class="fa-solid fa-chevron-right arrow-icon"></i>
            </a>
        </div>

        <!-- Module 7 -->
        <div class="col-lg-4 col-md-6 mx-auto">
            <a href="<?= BASE_URL ?>/offshore-jurisdiction/documentation" class="module-card" onclick="navigateToModule('documents')">
                <div class="module-icon"><i class="fa-solid fa-folder-open"></i></div>
                <div>
                    <h3 class="module-name">Documents Required</h3>
                </div>
                <i class="fa-solid fa-chevron-right arrow-icon"></i>
            </a>
        </div>
    </div>
</section>