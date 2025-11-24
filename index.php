<?php
session_start();
function e($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
$loggedIn = !empty($_SESSION['username']) || !empty($_SESSION['first_name']);
$displayName = $loggedIn ? ($_SESSION['first_name'] ?? $_SESSION['username']) : '';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>WealthPro — Wealth Management</title>
    <link rel="stylesheet" href="./styles/style.css">
    <meta name="robots" content="noindex">
</head>
<body>

    <!-- NAVBAR -->
    <header class="form-page">
        <nav class="nav form-card" aria-label="Main navigation">
            <div class="brand">WealthPro</div>
            <div class="nav-links">
                <a href="#home">Home</a>
                <a href="#services">Services</a>
                <a href="#how">How it works</a>
                <a href="#pricing">Pricing</a>
                <a href="#contact">Contact</a>

                <?php if ($loggedIn): ?>
                    <span class="welcome-text">Welcome, <?php echo e($displayName); ?></span>
                    <a class="link" href="php/logout.php">Sign out</a>
                <?php else: ?>
                    <a class="btn primary" href="pages/login.php">Login</a>
                    <a class="link" href="pages/signup.php">Sign up</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>

    <main class="form-page">

        <!-- HERO -->
        <section id="home" class="form-card section hero-section">
            <div class="hero-left">
                <h1>Grow, protect, and optimize your wealth with confidence</h1>
                <p class="muted">We combine data-driven strategies and personalized guidance to help you reach your financial goals.</p>

                <div class="hero-buttons">
                    <?php if (!$loggedIn): ?>
                        <a class="btn primary" href="pages/signup.php">Get started</a>
                        <a class="link" href="pages/login.php">Sign in</a>
                    <?php else: ?>
                        <a class="btn primary" href="pages/login.php">Open dashboard</a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="hero-right">
                <img src="https://via.placeholder.com/420x260?text=Wealth+Chart" alt="Wealth chart">
            </div>
        </section>

        <!-- SERVICES -->
        <section id="services" class="section">
            <div class="form-card">
                <h2>Our services</h2>
                <p class="muted">Comprehensive planning and investment management tailored to your life stage.</p>

                <div class="feature-grid">
                    <div class="feature">
                        <h3>Investment Management</h3>
                        <p class="muted small">Active and passive strategies to match your risk profile.</p>
                    </div>

                    <div class="feature">
                        <h3>Financial Planning</h3>
                        <p class="muted small">Holistic plans including retirement, tax & estate guidance.</p>
                    </div>

                    <div class="feature">
                        <h3>Tax Optimization</h3>
                        <p class="muted small">Improve after-tax returns with proven strategies.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- HOW IT WORKS -->
        <section id="how" class="section">
            <div class="form-card">
                <h2>How it works</h2>
                <p class="muted">Simple onboarding, customized plan, and ongoing monitoring.</p>

                <div class="row feature-row">
                    <div class="feature">
                        <h4>1. Discovery</h4>
                        <p class="muted small">Tell us your goals, risk tolerance and timelines.</p>
                    </div>

                    <div class="feature">
                        <h4>2. Plan</h4>
                        <p class="muted small">We design a tailored investment and financial plan.</p>
                    </div>

                    <div class="feature">
                        <h4>3. Monitor</h4>
                        <p class="muted small">Continuous oversight and quarterly reviews.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- PRICING -->
        <section id="pricing" class="section">
            <div class="form-card">
                <h2>Pricing plans</h2>
                <p class="muted">Transparent fees, no surprises.</p>

                <div class="pricing-grid">
                    <div class="plan">
                        <h3>Starter</h3>
                        <p class="muted">For new investors</p>
                        <p class="price">$9/mo</p>
                        <p class="muted small">Basic portfolio management and quarterly check-ins.</p>
                        <a class="btn primary plan-btn" href="pages/signup.php">Choose</a>
                    </div>

                    <div class="plan">
                        <h3>Growth</h3>
                        <p class="muted">For active savers</p>
                        <p class="price">$29/mo</p>
                        <p class="muted small">Advanced strategies and monthly reporting.</p>
                        <a class="btn primary plan-btn" href="pages/signup.php">Choose</a>
                    </div>

                    <div class="plan">
                        <h3>Premium</h3>
                        <p class="muted">Personalized wealth management</p>
                        <p class="price">Custom</p>
                        <p class="muted small">Dedicated advisor, tax & estate planning.</p>
                        <a class="btn primary plan-btn" href="pages/signup.php">Contact us</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- TESTIMONIALS -->
        <section id="testimonials" class="section">
            <div class="form-card">
                <h2>What our clients say</h2>

                <div class="testimonials">
                    <div class="feature">
                        <strong>Anna P.</strong>
                        <p class="muted small">"WealthPro simplified retirement planning; their team is excellent."</p>
                    </div>

                    <div class="feature">
                        <strong>Mark R.</strong>
                        <p class="muted small">"Clear advice and strong performance — highly recommend."</p>
                    </div>

                    <div class="feature">
                        <strong>Leah S.</strong>
                        <p class="muted small">"Personalized service and easy-to-use platform."</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT -->
        <section id="contact" class="section">
            <div class="form-card">
                <h2>Contact us</h2>
                <p class="muted">Questions about plans or onboarding? Send a message.</p>

                <form action="#" method="post" class="contact-form">
                    <div class="row">
                        <div class="field"><input type="text" placeholder="Your name"></div>
                        <div class="field"><input type="email" placeholder="Email"></div>
                    </div>

                    <div class="row">
                        <div class="field">
                            <textarea placeholder="Message"></textarea>
                        </div>
                    </div>

                    <button class="btn primary">Send message</button>
                </form>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="footer form-card">
            <div class="footer-content">
                <div>© <?php echo date('Y'); ?> WealthPro. All rights reserved.</div>
                <div class="footer-links">
                    <a class="link" href="#privacy">Privacy</a>
                    <a class="link" href="#terms">Terms</a>
                </div>
            </div>
        </footer>

    </main>

</body>
</html>
