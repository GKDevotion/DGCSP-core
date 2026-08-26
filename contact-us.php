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
        }

        .btn-gold {
            display: inline-block;
            width: 100%;
            background: var(--gold-primary);
            color: var(--white);
            padding: 14px 32px;
            border-radius: 6px;
            border: none;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: var(--shadow-sm);
            text-align: center;
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

        /* Contact Main Layout */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 50px;
            align-items: start;
        }

        @media (max-width: 768px) {
            .contact-grid { grid-template-columns: 1fr; }
        }

        /* Info Cards */
        .info-card {
            background: var(--gold-light);
            border: 1px solid var(--gold-border);
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 24px;
            transition: var(--transition);
        }

        .info-card:hover {
            background: var(--white);
            box-shadow: var(--shadow-md);
        }

        .info-card h3 {
            color: var(--gold-primary);
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .info-card p {
            font-size: 0.95rem;
            color: var(--text-dark);
        }

        /* Contact Form */
        .form-card {
            background: var(--white);
            padding: 40px;
            border-radius: 12px;
            border: 1px solid var(--gold-border);
            box-shadow: var(--shadow-sm);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid var(--gold-border);
            border-radius: 6px;
            background-color: var(--gray-color);
            font-family: var(--font-family);
            font-size: 0.95rem;
            color: var(--text-dark);
            transition: var(--transition);
        }

        .form-control:focus {
            outline: none;
            background-color: var(--white);
            border-color: var(--gold-primary);
            box-shadow: 0 0 0 3px var(--gold-border);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        /* FAQ Grid */
        .grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 24px;
        }

        .faq-card {
            background: var(--white);
            border: 1px solid var(--gold-border);
            padding: 30px;
            border-radius: 10px;
            transition: var(--transition);
        }

        .faq-card:hover {
            box-shadow: var(--shadow-md);
        }

        .faq-card h3 {
            font-size: 1.1rem;
            margin-bottom: 10px;
            color: var(--gold-primary);
        }

        /* Map Placeholder */
        .map-frame {
            height: 350px;
            background: var(--gray-color);
            border: 1px solid var(--gold-border);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gold-hover);
            font-weight: 600;
        }
    </style>
    
    <!-- Hero Banner -->
    <section class="hero">
        <div class="container" data-aos="fade-up">
            <h1>Get In Touch</h1>
            <p>We are here to assist you. Reach out to our team for tailored assistance and exceptional service.</p>
        </div>
    </section>

    <!-- Main Contact Section -->
    <section>
        <div class="container contact-grid">
            <!-- Contact Details -->
            <div data-aos="fade-right">
                <span class="badge">Reach Us</span>
                <h2 class="section-title">We'd Love to Hear From You</h2>
                <p style="margin-bottom: 30px; color: var(--text-dark);">Have a question or looking to start a partnership? Send us a message or visit our main office.</p>
                
                <div class="info-card" data-aos="fade-up" data-aos-delay="100">
                    <h3>Headquarters</h3>
                    <p>100 Gold Coast Boulevard, Suite 500<br>New York, NY 10001</p>
                </div>

                <div class="info-card" data-aos="fade-up" data-aos-delay="200">
                    <h3>Direct Contact</h3>
                    <p>Phone: +1 (800) 555-0199<br>Email: contact@brandname.com</p>
                </div>

                <div class="info-card" data-aos="fade-up" data-aos-delay="300">
                    <h3>Business Hours</h3>
                    <p>Monday – Friday: 9:00 AM – 6:00 PM EST<br>Saturday – Sunday: Closed</p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="form-card" data-aos="fade-left" data-aos-delay="150">
                <h3 style="font-size: 1.5rem; margin-bottom: 20px; color: var(--gold-primary);">Send a Message</h3>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" class="form-control" placeholder="John Doe" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" class="form-control" placeholder="john@example.com" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" class="form-control" placeholder="Inquiry about..." required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" class="form-control" placeholder="How can we help you?" required></textarea>
                    </div>

                    <button type="submit" class="btn-gold">Submit Request</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section style="background-color: var(--gray-color);">
        <div class="container" data-aos="zoom-in">
            <div style="text-align: center; margin-bottom: 30px;">
                <span class="badge">Location</span>
                <h2 class="section-title">Visit Our Headquarters</h2>
            </div>
            <div class="map-frame">
                [ Interactive Map Placeholder ]
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section>
        <div class="container">
            <div style="text-align: center; margin-bottom: 50px;" data-aos="fade-up">
                <span class="badge">Assistance</span>
                <h2 class="section-title">Frequently Asked Questions</h2>
            </div>
            <div class="grid-2">
                <div class="faq-card" data-aos="fade-up" data-aos-delay="100">
                    <h3>What is your typical response time?</h3>
                    <p>Our client services team responds to all incoming inquiries within 24 business hours.</p>
                </div>
                <div class="faq-card" data-aos="fade-up" data-aos-delay="200">
                    <h3>Do you offer international consultations?</h3>
                    <p>Yes, we offer virtual consultations across multiple time zones globally.</p>
                </div>
                <div class="faq-card" data-aos="fade-up" data-aos-delay="300">
                    <h3>Where can I submit career inquiries?</h3>
                    <p>Please visit our careers section or email your resume directly to careers@brandname.com.</p>
                </div>
                <div class="faq-card" data-aos="fade-up" data-aos-delay="400">
                    <h3>How do I schedule a private appointment?</h3>
                    <p>Fill out the contact form specifying your preferred time, and a representative will confirm your booking.</p>
                </div>
            </div>
        </div>
    </section>

<?php include ROOT_PATH . '/elements/footer.php'; ?>