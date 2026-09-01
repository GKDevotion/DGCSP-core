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