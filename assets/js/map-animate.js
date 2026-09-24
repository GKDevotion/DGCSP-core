const servicesList = [
    "Global Entity Management", "Accounting & TAX", "Fund Services",
    "Private Wealth & Family Office", "Merger & Acquisition", 
    "Corporate Advisory", "Banking Solutions"
];

const bgColors = [
    "rgba(255, 248, 230, 0.95)", "rgba(240, 248, 255, 0.95)", 
    "rgba(245, 243, 255, 0.95)", "rgba(240, 253, 244, 0.95)", 
    "rgba(255, 241, 242, 0.95)", "rgba(254, 249, 195, 0.95)"
];

const badgeContainer = document.getElementById('badgeContainer');
let currentServiceIndex = 0;

function getRandomNonOverlappingPositions() {
    // Keep badges inside percentage boundaries (15%-85% X, 15%-85% Y)
    let x1 = Math.floor(Math.random() * 60) + 15;
    let y1 = Math.floor(Math.random() * 60) + 15;
    
    let x2, y2, attempts = 0;
    do {
        x2 = Math.floor(Math.random() * 60) + 15;
        y2 = Math.floor(Math.random() * 60) + 15;
        let dist = Math.hypot(x1 - x2, y1 - y2);
        if (dist >= 25) break; // Ensure clear spacing between both badges
        attempts++;
    } while (attempts < 30);

    return [{ x: x1, y: y1 }, { x: x2, y: y2 }];
}

function spawnTwoBadges() {
    // Clear existing badges
    badgeContainer.innerHTML = '';

    const positions = getRandomNonOverlappingPositions();

    for (let i = 0; i < 2; i++) {
        const serviceName = servicesList[currentServiceIndex];
        currentServiceIndex = (currentServiceIndex + 1) % servicesList.length;

        const bg = bgColors[Math.floor(Math.random() * bgColors.length)];

        const badge = document.createElement('div');
        badge.className = 'service-badge-item';
        badge.textContent = serviceName;
        badge.style.backgroundColor = bg;
        badge.style.left = `${positions[i].x}%`;
        badge.style.top = `${positions[i].y}%`;

        badgeContainer.appendChild(badge);

        // Trigger smooth fade-in
        setTimeout(() => badge.classList.add('active'), 50);
    }

    // Fade out current pair before next cycle
    setTimeout(() => {
        const activeItems = badgeContainer.querySelectorAll('.service-badge-item');
        activeItems.forEach(item => item.classList.remove('active'));
    }, 2000);
}

// Run initial spawn, then loop every 2.5 seconds
spawnTwoBadges();
setInterval(spawnTwoBadges, 2500);

document.addEventListener('DOMContentLoaded', () => {
    const canvas = document.querySelector('.gdb-constellation-canvas');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    let width, height;
    let nodes = [];
    
    // Interactive mouse target
    const mouse = { x: null, y: null, radius: 180 };

    // Configurable Theme Options
    const options = {
    nodeColor: '#ab8139',        // Golden accent color
    lineRGB: '171, 129, 57',     // RGB values for gradient alpha lines
    maxDistance: 160,            // Max connection distance
    speed: 0.4                   // Slow drifting speed
    };

    function resize() {
    width = canvas.width = window.innerWidth;
    height = canvas.height = window.innerHeight;
    initNodes();
    }

    function initNodes() {
    nodes = [];
    // Dynamically scale node count according to viewport area
    const area = width * height;
    const nodeCount = Math.floor(area / 18000); 

    for (let i = 0; i < nodeCount; i++) {
        nodes.push({
        x: Math.random() * width,
        y: Math.random() * height,
        vx: (Math.random() - 0.5) * options.speed,
        vy: (Math.random() - 0.5) * options.speed,
        radius: Math.random() * 2 + 1.2
        });
    }
    }

    function render() {
    ctx.clearRect(0, 0, width, height);

    // Update and draw nodes
    for (let i = 0; i < nodes.length; i++) {
        const node = nodes[i];

        // Movement
        node.x += node.vx;
        node.y += node.vy;

        // Boundary bouncing
        if (node.x < 0 || node.x > width) node.vx *= -1;
        if (node.y < 0 || node.y > height) node.vy *= -1;

        // Gentle mouse displacement
        if (mouse.x !== null && mouse.y !== null) {
        const dx = mouse.x - node.x;
        const dy = mouse.y - node.y;
        const dist = Math.sqrt(dx * dx + dy * dy);
        if (dist < mouse.radius) {
            const force = (mouse.radius - dist) / mouse.radius;
            node.x -= (dx / dist) * force * 1.5;
            node.y -= (dy / dist) * force * 1.5;
        }
        }

        // Render node circle
        ctx.beginPath();
        ctx.arc(node.x, node.y, node.radius, 0, Math.PI * 2);
        ctx.fillStyle = options.nodeColor;
        ctx.fill();
    }

    // Connect adjacent nodes
    for (let i = 0; i < nodes.length; i++) {
        for (let j = i + 1; j < nodes.length; j++) {
        const dx = nodes[i].x - nodes[j].x;
        const dy = nodes[i].y - nodes[j].y;
        const dist = Math.sqrt(dx * dx + dy * dy);

        if (dist < options.maxDistance) {
            const alpha = (1 - dist / options.maxDistance) * 0.28;
            ctx.beginPath();
            ctx.moveTo(nodes[i].x, nodes[i].y);
            ctx.lineTo(nodes[j].x, nodes[j].y);
            ctx.strokeStyle = `rgba(${options.lineRGB}, ${alpha})`;
            ctx.lineWidth = 0.85;
            ctx.stroke();
        }
        }
    }

    requestAnimationFrame(render);
    }

    // Track mouse hover
    window.addEventListener('mousemove', (e) => {
    mouse.x = e.clientX;
    mouse.y = e.clientY;
    });

    window.addEventListener('mouseleave', () => {
    mouse.x = null;
    mouse.y = null;
    });

    window.addEventListener('resize', resize);

    resize();
    render();
});