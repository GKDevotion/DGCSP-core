// Page Navigation Controller Function
function navigateToPage(pageId) {
    // Hide all pages
    const pages = document.querySelectorAll('.page-view');
    pages.forEach(p => p.classList.remove('active-view'));

    // Show target page
    const target = document.getElementById('page-' + pageId);
    if(target) {
        target.classList.add('active-view');
    }

    // Update Nav items state
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => link.classList.remove('active'));
    const activeNav = document.getElementById('nav-' + pageId);
    if(activeNav) {
        activeNav.classList.add('active');
    }

    // Smooth scroll top
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Jurisdiction Selector Handler
function handleJurisdictionChange(val) {
    if(val !== 'sg') {
        alert('Singapore is currently the active primary jurisdiction. HK, Dubai, London, and NY portals are opening in Q4 2026.');
        document.getElementById('jurisdictionSelect').value = 'sg';
    }
}

// Setup Investment Calculator Script
function updateCostCalculator() {
    const seats = parseInt(document.getElementById('teamSeats').value);
    const tierVal = parseInt(document.getElementById('supportTier').value);
    const officeType = document.getElementById('officeType').value;

    document.getElementById('seatsVal').innerText = seats + ' Seats';

    // Calculate Base Capex
    let baseCapex = 8000; // Base ACRA & legal licensing
    if(officeType === 'coworking') baseCapex += 3000;
    if(officeType === 'private') baseCapex += 12000;

    // Calculate Monthly Opex per seat based on tier
    let agentSalary = 3000;
    if(tierVal === 2) agentSalary = 4500;
    if(tierVal === 3) agentSalary = 6500;

    let officeRentPerSeat = 300;
    if(officeType === 'coworking') officeRentPerSeat = 600;
    if(officeType === 'private') officeRentPerSeat = 900;

    const monthlyOpex = (seats * agentSalary) + (seats * officeRentPerSeat) + 2500; // Telecom + Software overhead
    const total3MoBuffer = baseCapex + (monthlyOpex * 3);

    // Format numbers to S$
    document.getElementById('initialSetupCost').innerText = 'S$ ' + baseCapex.toLocaleString();
    document.getElementById('monthlyOpexCost').innerText = 'S$ ' + monthlyOpex.toLocaleString() + ' / mo';
    document.getElementById('totalCapex').innerText = 'S$ ' + total3MoBuffer.toLocaleString();
}

// Case Studies Filter Functionality
function filterCases(category, btnElement) {
    // Button state UI
    const filterBtns = document.querySelectorAll('.filter-btn');
    filterBtns.forEach(btn => {
        btn.classList.remove('btn-gold', 'active');
        btn.classList.add('btn-outline-gold');
    });
    btnElement.classList.remove('btn-outline-gold');
    btnElement.classList.add('btn-gold', 'active');

    // Filtering items
    const items = document.querySelectorAll('.case-item');
    items.forEach(item => {
        if(category === 'all' || item.classList.contains(category)) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}

// Proposal Form Submit Handler
function handleFormSubmit(event) {
    event.preventDefault();
    const msg = document.getElementById('formSuccessMessage');
    msg.classList.remove('d-none');
    
    // Scroll to message
    msg.scrollIntoView({ behavior: 'smooth', block: 'center' });
    
    // Reset form
    document.getElementById('proposalForm').reset();
}

// Initialize Calculator on load
window.onload = function() {
    updateCostCalculator();
};


document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS animations
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        offset: 100
    });

    if( $(".nav-pill-btn").length > 0) {
        // Auto highlight pill nav items on scroll
        const sections = document.querySelectorAll("section[id]");
        const navPills = document.querySelectorAll(".nav-pill-btn");

        window.addEventListener("scroll", () => {
            let current = "";
            sections.forEach((section) => {
                const sectionTop = section.offsetTop - 120;
                if (pageYOffset >= sectionTop) {
                    current = section.getAttribute("id");
                }
            });

            navPills.forEach((pill) => {
                pill.classList.remove("active");
                if (pill.getAttribute("href") === `#${current}`) {
                    pill.classList.add("active");
                }
            });
        });
    }
});

// Duty & Tax Calculation Logic
function calculateSavings() {
    const cargo = parseFloat(document.getElementById('cargoValue').value) || 0;
    const duty = parseFloat(document.getElementById('dutyRate').value) || 0;

    const gstSaved = cargo * 0.09; // 9% Singapore GST
    const dutySaved = cargo * (duty / 100);
    const total = gstSaved + dutySaved;

    document.getElementById('totalSavings').innerText = `$${total.toLocaleString('en-US', {maximumFractionDigits: 0})} USD`;
}

// Form Response Handler
function showConfirmationMessage() {
    const msg = document.getElementById('formResponseMessage');
    msg.classList.remove('d-none');
    setTimeout(() => {
        msg.classList.add('d-none');
    }, 6000);
}

// Smooth Hover Dropdown behavior for Desktop
const dropdowns = document.querySelectorAll('.navbar .dropdown');
if (window.innerWidth > 991) {
    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('mouseenter', function() {
            const menu = this.querySelector('.dropdown-menu');
            if (menu) menu.classList.add('show');
        });
        dropdown.addEventListener('mouseleave', function() {
            const menu = this.querySelector('.dropdown-menu');
            if (menu) menu.classList.remove('show');
        });
    });
}

if( $('.calc-option').length > 0 ) {
    // Fee Calculator Logic
    const checkboxes = document.querySelectorAll('.calc-option');
    const totalDisplay = document.getElementById('calcTotal');

    function calculateTotal() {
        let currentTotal = 0;
        checkboxes.forEach(chk => {
            if (chk.checked) {
                currentTotal += parseInt(chk.value);
            }
        });
        if(totalDisplay) totalDisplay.textContent = '$' + currentTotal.toLocaleString();
    }

    checkboxes.forEach(chk => {
        chk.addEventListener('change', calculateTotal);
    });

    // Consultation Form Submit Notification
    const form = document.getElementById('consultationForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you! Your consultation request has been submitted. Our Singapore advisory team will contact you within 24 hours.');
            form.reset();
        });
    }
}