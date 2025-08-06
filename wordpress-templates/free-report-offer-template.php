<?php
/**
 * Template Name: Free Report Offer
 * 
 * Template for the Free Report Offer lead generation page
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <?php while (have_posts()) : the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class('free-report-offer-page'); ?>>
                
                <!-- Navigation Tabs -->
                <nav class="reports-nav">
                    <div class="container">
                        <ul class="nav-tabs">
                            <li><a href="<?php echo get_permalink(get_page_by_path('reports-overview')); ?>">Reports Overview</a></li>
                            <li><a href="<?php echo get_permalink(get_page_by_path('report-packages')); ?>">Report Packages</a></li>
                            <li class="active"><a href="<?php echo get_permalink(); ?>">Free Report Offer</a></li>
                        </ul>
                    </div>
                </nav>

                <!-- Hero Section -->
                <section class="hero-section">
                    <div class="container">
                        <header class="entry-header">
                            <h1 class="entry-title">
                                <?php echo get_field('hero_title') ?: 'Uncover Your Next Breakthrough: Get Your Free Report on Advanced Growth Strategies'; ?>
                            </h1>
                            <div class="entry-content">
                                <p>
                                    <?php echo get_field('hero_description') ?: 'Whether you\'re a consulting agency, digital marketing firm, or sales team, staying ahead requires access to the latest data, methodologies, and insights. In today\'s competitive landscape, challenges like acquiring high-value clients, optimizing campaigns, boosting sales team performance, and scaling operations can seem overwhelming. Our complimentary report provides the critical intelligence you need to overcome these hurdles and achieve unparalleled success.'; ?>
                                </p>
                            </div>
                        </header>
                    </div>
                </section>

                <!-- Lead Generation Form -->
                <section class="form-section">
                    <div class="container">
                        <div class="form-wrapper">
                            <div class="form-card">
                                <h2>Get Your Complimentary Report</h2>
                                <p class="form-intro">
                                    <?php echo get_field('form_intro') ?: 'To empower your strategic initiatives, we are pleased to offer you one complimentary report, packed with valuable strategies and insights.'; ?>
                                </p>
                                
                                <form class="lead-form" method="post" action="">
                                    <?php wp_nonce_field('free_report_submission', 'free_report_nonce'); ?>
                                    
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="first_name">First Name *</label>
                                            <input type="text" id="first_name" name="first_name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="last_name">Last Name *</label>
                                            <input type="text" id="last_name" name="last_name" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="email">Email Address *</label>
                                        <input type="email" id="email" name="email" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="tel" id="phone" name="phone">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="company">Company (Optional)</label>
                                        <input type="text" id="company" name="company">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="role">Role/Position (Optional)</label>
                                        <select id="role" name="role">
                                            <option value="">Select your role</option>
                                            <option value="consulting">Consulting Agency</option>
                                            <option value="marketing">Digital Marketing Agency</option>
                                            <option value="sales">Sales Team</option>
                                            <option value="executive">Executive/Management</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <button type="submit" class="submit-button">
                                            <?php echo get_field('submit_button_text') ?: 'Download Your Free Report'; ?>
                                        </button>
                                    </div>
                                    
                                    <div class="form-disclaimer">
                                        <p>
                                            <?php echo get_field('form_disclaimer') ?: 'By submitting this form, you agree to receive our newsletter and occasional marketing communications. You can unsubscribe at any time.'; ?>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Call to Action -->
                <section class="cta-section">
                    <div class="container">
                        <div class="cta-content">
                            <h2>Don't Miss Out on Transformative Insights</h2>
                            <p>
                                <?php echo get_field('cta_text') ?: 'Don\'t miss out on the insights that can transform your business. Complete the form now to download your free report and start implementing strategies for unparalleled success!'; ?>
                            </p>
                            <div class="cta-buttons">
                                <a href="#form" class="button button-primary">Get Your Free Report</a>
                                <a href="<?php echo get_permalink(get_page_by_path('report-packages')); ?>" class="button button-secondary">View All Packages</a>
                            </div>
                        </div>
                    </div>
                </section>

            </article>

        <?php endwhile; ?>

    </main>
</div>

<style>
/* Free Report Offer Page Styles */
.free-report-offer-page {
    max-width: 100%;
    margin: 0;
    padding: 0;
}

/* Navigation Tabs */
.reports-nav {
    background: #f0f8ff;
    border-bottom: 1px solid #e0e0e0;
    padding: 20px 0;
}

.nav-tabs {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    gap: 0;
}

.nav-tabs li {
    margin: 0;
}

.nav-tabs a {
    display: block;
    padding: 15px 25px;
    text-decoration: none;
    color: #333;
    background: #e0e0e0;
    border-radius: 5px 5px 0 0;
    transition: all 0.3s ease;
}

.nav-tabs li.active a {
    background: #006666;
    color: white;
}

.nav-tabs a:hover {
    background: #006666;
    color: white;
}

/* Hero Section */
.hero-section {
    background: #f0f8ff;
    padding: 60px 0;
    text-align: center;
}

.hero-section .entry-title {
    font-size: 2.5rem;
    margin-bottom: 30px;
    color: #333;
    line-height: 1.2;
}

.hero-section .entry-content p {
    font-size: 1.2rem;
    max-width: 800px;
    margin: 0 auto;
    line-height: 1.6;
    color: #666;
}

/* Form Section */
.form-section {
    padding: 80px 0;
    background: white;
}

.form-wrapper {
    max-width: 600px;
    margin: 0 auto;
}

.form-card {
    background: white;
    padding: 50px 40px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    border: 1px solid #e0e0e0;
}

.form-card h2 {
    color: #006666;
    font-size: 2rem;
    margin-bottom: 15px;
    text-align: center;
}

.form-intro {
    text-align: center;
    color: #666;
    margin-bottom: 30px;
    font-size: 1.1rem;
    line-height: 1.5;
}

/* Form Styles */
.lead-form {
    margin-top: 30px;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.form-group {
    margin-bottom: 25px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #333;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 12px 15px;
    border: 2px solid #e0e0e0;
    border-radius: 5px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.form-group input:focus,
.form-group select:focus {
    outline: none;
    border-color: #006666;
}

.submit-button {
    width: 100%;
    background: #006666;
    color: white;
    padding: 15px 30px;
    border: none;
    border-radius: 5px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.submit-button:hover {
    background: #004d4d;
}

.form-disclaimer {
    margin-top: 20px;
    padding: 15px;
    background: #f8f9fa;
    border-radius: 5px;
    font-size: 0.9rem;
    color: #666;
    text-align: center;
}

/* CTA Section */
.cta-section {
    background: #006666;
    color: white;
    padding: 60px 0;
    text-align: center;
}

.cta-content h2 {
    font-size: 2.2rem;
    margin-bottom: 20px;
}

.cta-content p {
    font-size: 1.2rem;
    margin-bottom: 30px;
    opacity: 0.9;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.button {
    padding: 15px 30px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    display: inline-block;
}

.button-primary {
    background: #ff6b35;
    color: white;
}

.button-primary:hover {
    background: #e55a2b;
    color: white;
}

.button-secondary {
    background: transparent;
    color: white;
    border: 2px solid white;
}

.button-secondary:hover {
    background: white;
    color: #006666;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .nav-tabs {
        flex-direction: column;
    }
    
    .nav-tabs a {
        border-radius: 5px;
        margin-bottom: 5px;
    }
    
    .hero-section .entry-title {
        font-size: 2rem;
    }
    
    .form-card {
        padding: 30px 20px;
    }
    
    .form-row {
        grid-template-columns: 1fr;
        gap: 0;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .button {
        width: 100%;
        max-width: 300px;
        text-align: center;
    }
}
</style>

<?php
// Handle form submission
if ($_POST && isset($_POST['free_report_nonce']) && wp_verify_nonce($_POST['free_report_nonce'], 'free_report_submission')) {
    // Process form submission
    $first_name = sanitize_text_field($_POST['first_name']);
    $last_name = sanitize_text_field($_POST['last_name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $company = sanitize_text_field($_POST['company']);
    $role = sanitize_text_field($_POST['role']);
    
    // Here you would typically:
    // 1. Save to database
    // 2. Send email notification
    // 3. Add to email list
    // 4. Redirect to download page
    
    // For now, just show a success message
    echo '<script>alert("Thank you! Your free report will be sent to your email.");</script>';
}

get_footer(); ?> 