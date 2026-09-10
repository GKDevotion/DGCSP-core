<!-- NEW STICKY WRAPPER CONTAINER -->
<div class="main-sticky-navigation">
    
    <?php 
    include ROOT_PATH . '/elements/header-top-belt.php';
    ?>

    <header class="devotion-header sticky-top bg-white border-bottom py-3">
        <div class="container-fluid px-lg-5">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
        
                <!-- Brand / Image Logo -->
                <a class="navbar-brand me-auto py-0" href="index.php">
                    <img src="<?= BASE_URL ?>/assets/images/logo.png" alt="Devotion Global CSP" class="img-fluid brand-logo">
                </a>

                <!-- Mobile Toggle Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#devotionNavbar" aria-controls="devotionNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation Links Wrapper -->
                <div class="collapse navbar-collapse flex-column align-items-end" id="devotionNavbar">
                    
                    <!-- Main Primary Navigation -->
                    <ul class="navbar-nav ms-auto align-items-lg-center">

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="<?= BASE_URL ?>">
                                Back
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </a>
                        </li>
                        <!-- Corporate Structure -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?= BASE_URL ?>/singapore/corporate-structure"><!-- role="button" data-bs-toggle="dropdown" aria-expanded="false" -->
                                Corporate Structure
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/corporate-structure#setup-strategy">Company Setup Strategy</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/corporate-structure#entity-type">Business Entity Type</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/corporate-structure#14-steps">14 Steps to Register on LLC</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/corporate-structure#offshore-company">OffShore Company</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/corporate-structure#transfer-in">Company Transfer-IN</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/corporate-structure#llp">Lilmited Liability Partnerships?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/corporate-structure#holding-company">Registered in Holding Company</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/corporate-structure#asian-holding">Asian Holding Company</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/corporate-structure#global-lp">Global LP Holding Companies</a></li>
                            </ul>
                        </li>

                        <!-- Manufacturing -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?= BASE_URL ?>/singapore/manufacturing"><!-- role="button" data-bs-toggle="dropdown" aria-expanded="false" -->
                                Manufacturing
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/manufacturing#free-zones">Free Zones?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/manufacturing#compare-free-zones">Compare Free Zone Companies</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/manufacturing#engagement-fees">Engagement Fees?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/manufacturing#timelines">Timelines?</a></li>
                            </ul>
                        </li>

                        <!-- Financial Services -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?= BASE_URL ?>/singapore/financial-services"><!-- role="button" data-bs-toggle="dropdown" aria-expanded="false" -->
                                Financial Services
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#svf">Stored Value Facility</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#crypto-solution">Crypto Currency Solution</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#cms-license">CMS License?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#fintech-business">FinTech Businss?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#nft-business">NFT Business Setup</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#crypto-wallet">Crypto Wallet & Exchange Activity</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#resident-director">Resident Director</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#corporate-finance-query">Corporate Finance Solutions?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#sgx-listing">Listing on Stock Exchange?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#financial-company">Financial Company</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#crypto-solutions-adv">Crypto Currency Solutions</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#money-remittance">Money Remmittance Business</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/financial-services#corporate-finance-solutions">Corporate Fianance Solutions</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?= BASE_URL ?>/singapore/cash-flow"><!-- role="button" data-bs-toggle="dropdown" aria-expanded="false" -->
                                Cash Flow
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/cash-flow#government-incentives">Government Incentives?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/cash-flow#family-asset-companies">Family Aset companies?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/cash-flow#merchant-accounts">Mercent Accounts?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/cash-flow#ecommerce-sales">E-Commerce Sales?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/cash-flow#market-penetration">Market Penetration Stategies?</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?= BASE_URL ?>/singapore/business-setup"><!-- role="button" data-bs-toggle="dropdown" aria-expanded="false" -->
                                Business Setup
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/business-setup#employment-visa">Employeement & Residence Visa?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/business-setup#hr-services">Human Resource Service?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/business-setup#employee-considerations">Employee Considerations?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/business-setup#virtual-office">Virtual Office Services?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/business-setup#office-premises">Find Office Premises?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/business-setup#trademark-registration">Trademark Registration?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/business-setup#startup-guides">Enterpenuer Startup Guides?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/business-setup#business-support">Business Support Services?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/business-setup#llc-transfer">LLC Transfer Solutions?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/business-setup#ship-registration">Ship Registration?</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/business-setup#company-deregistration">Company D-Registration?</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown dropdown-hover ms-lg-2">
                            <a class="nav-link dropdown-toggle resources-pill-btn px-3" href="<?= BASE_URL ?>/singapore/book-keeping"><!-- role="button" data-bs-toggle="dropdown" aria-expanded="false" -->
                                Book Keeping
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/book-keeping#accounting-tax">Accounting & Tax</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/book-keeping#legal-consideration">Legal Consideration</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/book-keeping#tax-audit">Tax Audit Services</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/book-keeping#residence-director">Residence Sirector</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/book-keeping#withholding-tax">WithHolding TAX</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_URL ?>/singapore/book-keeping#asia-tax-rates">ASIA TAX Rates</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </header>
</div>