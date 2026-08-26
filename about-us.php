<?php 
require_once __DIR__ . '/config.php';
include ROOT_PATH . '/elements/header.php';

?>
    <style>
  
        section {
            padding: 80px 0;
        }

        /* Common Elements */
        .badge {
            display: inline-block;
            background: var(--gold-light);
            color: var(--gold-primary);
            border: 1px solid var(--gold-border);
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 16px;
        }

        .section-title {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 16px;
            position: relative;
        }

        .btn-gold {
            display: inline-block;
            background: var(--gold-primary);
            color: var(--white);
            padding: 14px 32px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            box-shadow: var(--shadow-sm);
        }

        .btn-gold:hover {
            background: var(--gold-hover);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        /* Hero Banner */
        .hero {
            background: linear-gradient(135deg, var(--gold-banner-bg), var(--gold-hover));
            color: var(--white);
            text-align: center;
            padding: 120px 0 90px;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.15rem;
            max-width: 650px;
            margin: 0 auto;
            opacity: 0.95;
        }

        /* Mission & Vision */
        .grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
        }

        .card {
            background: var(--white);
            padding: 40px;
            border-radius: 12px;
            border: 1px solid var(--gold-border);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
        }

        /* Story Section */
        .story-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        @media (max-width: 768px) {
            .story-grid { grid-template-columns: 1fr; }
        }

        .story-img-frame {
            position: relative;
            background: var(--gold-light);
            border: 2px solid var(--gold-border);
            border-radius: 16px;
            height: 380px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gold-primary);
            font-weight: 600;
        }

        /* Stats Counter */
        .stats {
            background-color: var(--gray-color);
            border-top: 1px solid var(--gold-border);
            border-bottom: 1px solid var(--gold-border);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            text-align: center;
        }

        .stat-item h3 {
            font-size: 2.8rem;
            color: var(--gold-primary);
            font-weight: 700;
        }

        /* Core Values */
        .grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
        }

        .value-card {
            background: var(--gold-light);
            border: 1px solid var(--gold-border);
            padding: 30px;
            border-radius: 10px;
            transition: var(--transition);
        }

        .value-card:hover {
            background: var(--white);
            box-shadow: var(--shadow-md);
        }

        /* Leadership */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 30px;
            text-align: center;
        }

        .team-card {
            background: var(--white);
            border: 1px solid var(--gold-border);
            padding: 30px 20px;
            border-radius: 12px;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }

        .team-card:hover {
            box-shadow: var(--shadow-md);
            transform: translateY(-4px);
        }

        .team-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: var(--gray-color);
            border: 2px solid var(--gold-primary);
            margin: 0 auto 20px;
        }

        /* CTA */
        .cta {
            background: var(--gold-light);
            text-align: center;
            border-radius: 16px;
            margin: 40px auto 80px;
            border: 1px solid var(--gold-border);
        }
    </style>
</head>
<body>

    <!-- Hero Banner -->
    <section class="hero">
        <div class="container" data-aos="fade-up">
            <h1>Excellence Defined by Passion</h1>
            <p>Crafting premium experiences and bespoke solutions with uncompromising quality and timeless elegance.</p>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section>
        <div class="container grid-2">
            <div class="card" data-aos="fade-right" data-aos-delay="100">
                <span class="badge">Purpose</span>
                <h2 class="section-title">Our Mission</h2>
                <p>To redefine industry standards through precision, exceptional craftsmanship, and a relentless dedication to elevated experiences for every client.</p>
            </div>
            <div class="card" data-aos="fade-left" data-aos-delay="200">
                <span class="badge">Future</span>
                <h2 class="section-title">Our Vision</h2>
                <p>To remain a global benchmark for quality and sophistication, leading with sustainable innovation and enduring value.</p>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section style="background-color: var(--gray-color);">
        <div class="container story-grid">
            <div data-aos="fade-right">
                <span class="badge">Legacy</span>
                <h2 class="section-title">Our Journey</h2>
                <p style="margin-bottom: 16px;">Established with a vision for perfection, our journey began with a simple commitment: never compromise on quality.</p>
                <p>Today, our brand stands as a symbol of integrity and refinement, constantly pioneering new approaches while honoring our original values.</p>
            </div>
            <div class="story-img-frame" data-aos="zoom-in" data-aos-delay="150">
                [ Brand Imagery Place ]
            </div>
        </div>
    </section>

    <!-- Impact & Metrics -->
    <section class="stats">
        <div class="container stats-grid">
            <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                <h3>15+</h3>
                <p>Years of Heritage</p>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                <h3>120k</h3>
                <p>Global Clients</p>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                <h3>99.8%</h3>
                <p>Satisfaction Rate</p>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                <h3>40+</h3>
                <p>Industry Awards</p>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section>
        <div class="container">
            <div style="text-align: center; margin-bottom: 50px;" data-aos="fade-up">
                <span class="badge">Pillars</span>
                <h2 class="section-title">Our Guiding Values</h2>
            </div>
            <div class="grid-3">
                <div class="value-card" data-aos="fade-up" data-aos-delay="100">
                    <h3 style="color: var(--gold-primary); margin-bottom: 10px;">Mastery</h3>
                    <p>We approach every effort with meticulous attention to detail and unwavering pursuit of perfection.</p>
                </div>
                <div class="value-card" data-aos="fade-up" data-aos-delay="200">
                    <h3 style="color: var(--gold-primary); margin-bottom: 10px;">Integrity</h3>
                    <p>Authenticity and transparency form the foundation of our trust-based relationships.</p>
                </div>
                <div class="value-card" data-aos="fade-up" data-aos-delay="300">
                    <h3 style="color: var(--gold-primary); margin-bottom: 10px;">Innovation</h3>
                    <p>Integrating modern techniques while preserving timeless elegance in everything we create.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership / Team -->
    <section style="background-color: var(--gray-color);">
        <div class="container">
            <div style="text-align: center; margin-bottom: 50px;" data-aos="fade-up">
                <span class="badge">People</span>
                <h2 class="section-title">The Leadership</h2>
            </div>
            <div class="team-grid">
                <div class="team-card" data-aos="flip-left" data-aos-delay="100">
                    <div class="team-avatar"></div>
                    <h3>Victoria Sterling</h3>
                    <p style="color: var(--gold-hover); font-size: 0.9rem;">Founder & Managing Director</p>
                </div>
                <div class="team-card" data-aos="flip-left" data-aos-delay="200">
                    <div class="team-avatar"></div>
                    <h3>Julian Vance</h3>
                    <p style="color: var(--gold-hover); font-size: 0.9rem;">Chief Design Officer</p>
                </div>
                <div class="team-card" data-aos="flip-left" data-aos-delay="300">
                    <div class="team-avatar"></div>
                    <h3>Elena Rostova</h3>
                    <p style="color: var(--gold-hover); font-size: 0.9rem;">Head of Operations</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <div class="container">
        <section class="cta" data-aos="zoom-in">
            <h2 class="section-title">Connect with Us</h2>
            <p style="margin-bottom: 24px; color: var(--text-dark);">Experience unmatched quality tailored to your needs.</p>
            <a href="#" class="btn-gold">Get in Touch</a>
        </section>
    </div>


<?php include ROOT_PATH . '/elements/footer.php'; ?>