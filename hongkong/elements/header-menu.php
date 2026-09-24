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
                            <a class="nav-link" href="<?= BASE_URL ?>" title="Home Page">
                                Back
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </a>
                        </li>
                        <!-- Corporate Structure -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?= getJurisditionLink('hongkong') ?>/corporate-structure.php"><!-- role="button" data-bs-toggle="dropdown" aria-expanded="false" -->
                                Corporate Structure
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/corporate-structure.php#setup-strategy">Company Setup Strategy</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/corporate-structure.php#entity-type">Business Entity Type</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/corporate-structure.php#14-steps">14 Steps to Register on LLC</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/corporate-structure.php#offshore-company">OffShore Company</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/corporate-structure.php#transfer-in">Company Transfer-IN</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/corporate-structure.php#llp">Lilmited Liability Partnerships?</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/corporate-structure.php#holding-company">Registered in Holding Company</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/corporate-structure.php#asian-holding">Asian Holding Company</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/corporate-structure.php#global-lp">Global LP Holding Companies</a></li>
                            </ul>
                        </li>

                        <!-- Manufacturing -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?= getJurisditionLink('hongkong') ?>/manufacturing.php"><!-- role="button" data-bs-toggle="dropdown" aria-expanded="false" -->
                                Manufacturing
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/manufacturing.php#free-zones">Free Zones?</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/manufacturing.php#compare-free-zones">Compare Free Zone Companies</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/manufacturing.php#engagement-fees">Engagement Fees?</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/manufacturing.php#timelines">Timelines?</a></li>
                            </ul>
                        </li>

                        <!-- Financial Services -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?= getJurisditionLink('hongkong') ?>/financial-services.php"><!-- role="button" data-bs-toggle="dropdown" aria-expanded="false" -->
                                Financial Services
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/financial-services.php#svf">Stored Value Facility</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/financial-services.php#crypto-solution">Crypto Currency Solution</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/financial-services.php#cms-license">CMS License?</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/financial-services.php#fintech-business">FinTech Businss?</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/financial-services.php#nft-business">NFT Business Setup</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/financial-services.php#crypto-wallet">Crypto Wallet & Exchange Activity</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/financial-services.php#resident-director">Resident Director</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/financial-services.php#corporate-finance-query">Corporate Finance Solutions?</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/financial-services.php#sgx-listing">Listing on Stock Exchange?</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/financial-services.php#financial-company">Financial Company</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/financial-services.php#crypto-solutions-adv">Crypto Currency Solutions</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/financial-services.php#money-remittance">Money Remmittance Business</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/financial-services.php#corporate-finance-solutions">Corporate Fianance Solutions</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?= getJurisditionLink('hongkong') ?>/cash-flow.php"><!-- role="button" data-bs-toggle="dropdown" aria-expanded="false" -->
                                Cash Flow
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/cash-flow.php#government-incentives">Government Incentives?</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/cash-flow.php#family-asset-companies">Family Aset companies?</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/cash-flow.php#merchant-accounts">Mercent Accounts?</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/cash-flow.php#ecommerce-sales">E-Commerce Sales?</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/cash-flow.php#market-penetration">Market Penetration Stategies?</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?= getJurisditionLink('hongkong') ?>/business-setup.php"><!-- role="button" data-bs-toggle="dropdown" aria-expanded="false" -->
                                Business Setup
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/business-setup.php#employment-visa">Employeement & Residence Visa?</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/business-setup.php#hr-services">Human Resource Service?</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/business-setup.php#employee-considerations">Employee Considerations?</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/business-setup.php#virtual-office">Virtual Office Services?</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/business-setup.php#office-premises">Find Office Premises?</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/business-setup.php#trademark-registration">Trademark Registration?</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/business-setup.php#startup-guides">Enterpenuer Startup Guides?</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/business-setup.php#business-support">Business Support Services?</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/business-setup.php#llc-transfer">LLC Transfer Solutions?</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/business-setup.php#ship-registration">Ship Registration?</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/business-setup.php#company-deregistration">Company D-Registration?</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown dropdown-hover ms-lg-2">
                            <a class="nav-link dropdown-toggle resources-pill-btn px-3" href="<?= getJurisditionLink('hongkong') ?>/book-keeping.php"><!-- role="button" data-bs-toggle="dropdown" aria-expanded="false" -->
                                Book Keeping
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/book-keeping.php#accounting-tax">Accounting & Tax</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/book-keeping.php#legal-consideration">Legal Consideration</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/book-keeping.php#tax-audit">Tax Audit Services</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/book-keeping.php#residence-director">Residence Sirector</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/book-keeping.php#withholding-tax">WithHolding TAX</a></li>
                                <li><a class="dropdown-item" href="<?= getJurisditionLink('hongkong') ?>/book-keeping.php#asia-tax-rates">ASIA TAX Rates</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </header>
</div>