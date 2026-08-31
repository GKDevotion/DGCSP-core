<?php 
require_once __DIR__ . '/../config.php';
include ROOT_PATH . '/singapore/elements/header.php';
?>

<style>
    /* Page View Switching system */
    .page-view {
        transition: opacity 0.4s ease-in-out;
        display: block;
        opacity: 1;
    }

    .sg-hero-section {
        background: linear-gradient(135deg, rgba(249, 245, 237, 0.9) 0%, rgba(255, 255, 255, 0.95) 100%), url('https://images.unsplash.com/photo-1525625293386-3f8f99389edd?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
        padding: 90px 0 70px;
        position: relative;
        border-bottom: 1px solid var(--gold-border);
    }

    .badge-gold {
        background-color: var(--gold-light);
        color: var(--gold-primary);
        border: 1px solid var(--gold-border);
        padding: 6px 14px;
        border-radius: 30px;
        font-size: 0.8rem;
        font-weight: 600;
        display: inline-block;
        margin-bottom: 12px;
    }

    /* Cards & Components */
    .card-custom {
        border: 1px solid var(--gold-border);
        border-radius: 12px;
        background: var(--white);
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
        height: 100%;
    }

    .card-custom:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-md);
        border-color: var(--gold-primary);
    }

    .icon-box {
        width: 54px;
        height: 54px;
        border-radius: 12px;
        background-color: var(--gold-light);
        color: var(--gold-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    /* Custom Buttons */
    .btn-gold {
        background-color: var(--gold-primary);
        color: var(--white);
        font-weight: 500;
        border: none;
        padding: 10px 24px;
        border-radius: 8px;
        transition: var(--transition);
        box-shadow: var(--shadow-sm);
    }

    .btn-gold:hover, .btn-gold:focus {
        background-color: var(--gold-hover);
        color: var(--white);
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .btn-outline-gold {
        background-color: transparent;
        color: var(--gold-primary);
        border: 1.5px solid var(--gold-primary);
        font-weight: 500;
        padding: 10px 24px;
        border-radius: 8px;
        transition: var(--transition);
    }

    .btn-outline-gold:hover {
        background-color: var(--gold-primary);
        color: var(--white);
        border-color: var(--gold-primary);
    }
</style>
<div id="page-home" class="page-view">
    <section class="sg-hero-section">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-7">
                    <span class="badge-gold"><i class="fa-solid fa-shield-halved me-1"></i> Singapore Jurisdiction Excellence</span>
                    <h1 class="display-6 fw-bold text-dark mb-3">Enterprise-Grade Customer Experience Hubs in Singapore</h1>
                    <p class="lead text-muted mb-4">Empowering global financial institutions, SaaS platforms, and e-commerce leaders with ACRA-compliant, multilingual customer service solutions operated out of Asia's premier business hub.</p>
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <button class="btn btn-gold btn-lg" onclick="navigateToPage('inquiry')">Custom SG Proposal <i class="fa-solid fa-arrow-right ms-2"></i></button>
                        <button class="btn btn-outline-gold btn-lg" onclick="navigateToPage('investment')">Calculate Setup Cost</button>
                    </div>
                    <div class="row g-3 pt-2 text-center text-sm-start">
                        <div class="col-6 col-sm-4">
                            <div class="fw-bold text-dark fs-4 mb-0" style="color: var(--gold-primary) !important;">100%</div>
                            <small class="text-muted">ACRA & PDPA Compliant</small>
                        </div>
                        <div class="col-6 col-sm-4">
                            <div class="fw-bold text-dark fs-4 mb-0" style="color: var(--gold-primary) !important;">24/7/365</div>
                            <small class="text-muted">Multilingual APAC Operations</small>
                        </div>
                        <div class="col-6 col-sm-4">
                            <div class="fw-bold text-dark fs-4 mb-0" style="color: var(--gold-primary) !important;">2-4 Weeks</div>
                            <small class="text-muted">Fast-Track Setup SLA</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card-custom p-4 border-2">
                        <h4 class="fw-bold mb-3"><i class="fa-solid fa-briefcase text-warning me-2"></i> Singapore Quick Setup</h4>
                        <ul class="list-unstyled mb-4">
                            <li class="d-flex align-items-start mb-3">
                                <i class="fa-solid fa-circle-check text-success mt-1 me-2"></i>
                                <div><strong>Corporate Tax Rate:</strong> 17% competitive flat rate with partial tax exemption incentives.</div>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <i class="fa-solid fa-circle-check text-success mt-1 me-2"></i>
                                <div><strong>Location Tier:</strong> Grade-A Office Hubs (MBFC, Suntec, Jurong Tech District).</div>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <i class="fa-solid fa-circle-check text-success mt-1 me-2"></i>
                                <div><strong>Talent Capabilities:</strong> Native English, Mandarin, Malay, Tamil & Bahasa Indonesia support personnel.</div>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fa-solid fa-circle-check text-success mt-1 me-2"></i>
                                <div><strong>Min Setup Capital:</strong> Starting from ~S$10,000 for boutique operational hubs.</div>
                            </li>
                        </ul>
                        <button class="btn btn-gold w-full w-100" onclick="navigateToPage('rules')">Explore SG Rules & Regulations</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include ROOT_PATH . '/singapore/elements/footer.php'; ?>