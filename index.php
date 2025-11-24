<?php
session_start();
function e($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
$loggedIn = !empty($_SESSION['username']) || !empty($_SESSION['first_name']);
if(!$loggedIn) {
    header('Location: pages/login.php');
    exit;
}
$displayName = $loggedIn ? ($_SESSION['first_name'] ?? $_SESSION['username']) : '';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>FinFlow - Smart Finance Manager for Your Business</title>
  <meta name="description" content="All-in-one finance management platform for startups and small businesses."/>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="styles/style.css" />
</head>
<body>

  <!-- Header -->
  <header>
    <div class="header-container">
      <div class="logo">FinFlow</div>
      <div class="user-menu">
        <span class="username">Welcome, <?php echo e($displayName); ?></span>
        <form action="includes/logout.inc.php" method="post" style="display:inline;">
        <button class="btn-signout">Sign Out</button>
        </form> 
      </div>
    </div>
  </header>

  <!-- Hero -->
  <section class="hero">
    <div class="container">
      <h1>Take Control of Your Business Finances</h1>
      <p>Smart, simple, and secure finance management platform built for modern startups and growing businesses.</p>
      <button class="btn-primary">Get Started Free</button>
    </div>
  </section>

  <!-- About -->
  <section id="about">
    <div class="container">
      <h2 class="section-title">About FinFlow</h2>
      <div class="about-grid">
        <div class="about-card">
          <h3>Automated Invoicing</h3>
          <p>Create, send, and track professional invoices in seconds. Get paid faster with automated reminders.</p>
        </div>
        <div class="about-card">
          <h3>Real-time Insights</h3>
          <p>Beautiful dashboards and reports that give you instant clarity on cash flow, expenses, and profits.</p>
        </div>
        <div class="about-card">
          <h3>Bank-grade Security</h3>
          <p>Your financial data is encrypted and protected with industry-leading security standards.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section id="why-us">
    <div class="container">
      <h2 class="section-title">Why Choose FinFlow?</h2>
      <div class="features">
        <div class="feature">
          <div class="feature-icon">💸</div>
          <h3>Save Time</h3>
          <p>Automate repetitive tasks and focus on growing your business.</p>
        </div>
        <div class="feature">
          <div class="feature-icon">📊</div>
          <h3>Make Better Decisions</h3>
          <p>Data-driven insights help you understand your finances like never before.</p>
        </div>
        <div class="feature">
          <div class="feature-icon">🔒</div>
          <h3>Stay Secure</h3>
          <p>Enterprise-level encryption and regular security audits.</p>
        </div>
        <div class="feature">
          <div class="feature-icon">🎯</div>
          <h3>Grow Faster</h3>
          <p>Tools designed specifically for startups and scaling companies.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section id="testimonials" class="testimonials">
    <div class="container">
      <h2 class="section-title">What Our Customers Say</h2>
      <div class="testimonial-grid">
        <div class="testimonial">
          <p>"FinFlow saved us 20+ hours per month on bookkeeping. It's a game-changer for our startup."</p>
          <div class="author">
            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah L."/>
            <div>
              <strong>Sarah L.</strong><br/>
              <small>CEO, TechFlow Studio</small>
            </div>
          </div>
        </div>
        <div class="testimonial">
          <p>"The real-time reports helped us spot cash flow issues early. Highly recommend!"</p>
          <div class="author">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen"/>
            <div>
              <strong>Michael Chen</strong><br/>
              <small>CFO, GrowthLabs</small>
            </div>
          </div>
        </div>
        <div class="testimonial">
          <p>"Clean interface, powerful features, and amazing support. Best finance tool we've used."</p>
          <div class="author">
            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Emma R."/>
            <div>
              <strong>Emma Rodriguez</strong><br/>
              <small>Founder, CreativePath</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Pricing -->
  <section id="pricing" class="pricing">
    <div class="container">
      <h2 class="section-title">Simple, Transparent Pricing</h2>
      <div class="pricing-grid">
        <div class="price-card">
          <div class="price-header">
            <h3>Starter</h3>
            <div class="price">$19<span style="font-size:1rem;">/month</span></div>
          </div>
          <div class="price-body">
            <ul>
              <li>Up to 100 invoices/month</li>
              <li>Basic reporting</li>
              <li>Email support</li>
              <li>1 user</li>
            </ul>
            <button class="btn-primary">Start Free Trial</button>
          </div>
        </div>

        <div class="price-card" style="transform: scale(1.05);">
          <div class="price-header" style="background:#1e293b;">
            <h3>Professional</h3>
            <div class="price">$49<span style="font-size:1rem;">/month</span></div>
            <div style="background:#fff;color:#000;padding:0.5rem;border-radius:4px;margin-top:0.5rem;font-size:0.875rem;">Most Popular</div>
          </div>
          <div class="price-body">
            <ul>
              <li>Unlimited invoices</li>
              <li>Advanced analytics</li>
              <li>Priority support</li>
              <li>Up to 10 users</li>
              <li>API access</li>
            </ul>
            <button class="btn-primary">Start Free Trial</button>
          </div>
        </div>

        <div class="price-card">
          <div class="price-header">
            <h3>Enterprise</h3>
            <div class="price">Custom</div>
          </div>
          <div class="price-body">
            <ul>
              <li>Everything in Pro</li>
              <li>Dedicated account manager</li>
              <li>Custom integrations</li>
              <li>Unlimited users</li>
              <li>SLA & onboarding</li>
            </ul>
            <button class="btn-primary">Contact Sales</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq">
    <div class="container">
      <h2 class="section-title">Frequently Asked Questions</h2>
      <div class="faq">
        <div class="faq-item">
          <div class="faq-question">Is there a free trial?</div>
          <p>Yes! We offer a 14-day free trial with full access to all Professional features. No credit card required.</p>
        </div>
        <div class="faq-item">
          <div class="faq-question">Can I change plans later?</div>
          <p>Absolutely. You can upgrade or downgrade your plan at any time. Changes take effect immediately.</p>
        </div>
        <div class="faq-item">
          <div class="faq-question">Do you offer discounts for annual billing?</div>
          <p>Yes, annual plans get 2 months free (16% savings).</p>
        </div>
        <div class="faq-item">
          <div class="faq-question">Is my data secure?</div>
          <p>We use bank-level 256-bit SSL encryption and are SOC 2 Type II compliant.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="contact">
    <div class="container">
      <h2 class="section-title">Get in Touch</h2>
      <form>
        <input type="text" placeholder="Your Name" required/>
        <input type="email" placeholder="Your Email" required/>
        <textarea rows="6" placeholder="Your Message" required></textarea>
        <button type="submit" class="btn-primary">Send Message</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-links">
        <a href="#about">About</a>
        <a href="#why-us">Features</a>
        <a href="#pricing">Pricing</a>
        <a href="#testimonials">Testimonials</a>
        <a href="#faq">FAQ</a>
        <a href="#contact">Contact</a>
      </div>
      <p>&copy; 2025 FinFlow. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>