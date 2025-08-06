<?php
/**
 * Template Name: Report Packages
 * 
 * Template for the Report Packages pricing page
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <?php while (have_posts()) : the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class('report-packages-page'); ?>>
                
                <!-- Navigation Tabs -->
                <nav class="reports-nav">
                    <div class="container">
                        <ul class="nav-tabs">
                            <li><a href="<?php echo get_permalink(get_page_by_path('reports-overview')); ?>">Reports Overview</a></li>
                            <li class="active"><a href="<?php echo get_permalink(); ?>">Report Packages</a></li>
                            <li><a href="<?php echo get_permalink(get_page_by_path('free-report-offer')); ?>">Free Report Offer</a></li>
                        </ul>
                    </div>
                </nav>

                <!-- Hero Section -->
                <section class="hero-section">
                    <div class="container">
                        <header class="entry-header">
                            <h1 class="entry-title">
                                <?php echo get_field('hero_title') ?: 'Comprehensive Report Packages'; ?>
                            </h1>
                            <div class="entry-content">
                                <p>
                                    <?php echo get_field('hero_description') ?: 'Our comprehensive report packages are designed to equip your team with the critical insights needed to navigate the evolving AI landscape and gain a competitive edge. Each package delivers detailed AI Market Readiness and Competitive Analysis reports, tailored to empower your strategic decisions and client engagements.'; ?>
                                </p>
                            </div>
                        </header>
                    </div>
                </section>

                <!-- Pricing Table -->
                <section class="pricing-section">
                    <div class="container">
                        <div class="pricing-table-wrapper">
                            <table class="pricing-table">
                                <thead>
                                    <tr>
                                        <th>Feature</th>
                                        <th>Standard ($99)</th>
                                        <th>Standard ($449)</th>
                                        <th>Standard ($799)</th>
                                        <th>Premium ($4,000)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Report Inclusion</strong></td>
                                        <td>AI Market Readiness Report + Competitive Analysis Report (Google Doc content only)</td>
                                        <td>AI Market Readiness Report + Competitive Analysis Report (Google Doc content only)</td>
                                        <td>AI Market Readiness Report + Competitive Analysis Report (Google Doc content only)</td>
                                        <td>Both AI Market Readiness & Competitive Analysis Reports</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Presentation Style</strong></td>
                                        <td>No branding, no presentation</td>
                                        <td>No branding, no presentation</td>
                                        <td>No branding, no presentation</td>
                                        <td>Branded + Presentation</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Notifications</strong></td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>Slack Notifications</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Domains/Week</strong></td>
                                        <td>1</td>
                                        <td>5</td>
                                        <td>10</td>
                                        <td>25</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total Reports/Mo.</strong></td>
                                        <td>8</td>
                                        <td>40</td>
                                        <td>80</td>
                                        <td>250</td>
                                    </tr>
                                    <tr class="price-row">
                                        <td><strong>Monthly Price</strong></td>
                                        <td>$99</td>
                                        <td>$449</td>
                                        <td>$799</td>
                                        <td>$4,000</td>
                                    </tr>
                                    <tr class="price-per-report">
                                        <td><strong>Price per Report</strong></td>
                                        <td>$12</td>
                                        <td>$11</td>
                                        <td>$10</td>
                                        <td>$16</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <!-- Audience-Specific Benefits -->
                <section class="audience-benefits">
                    <div class="container">
                        <div class="benefits-grid">
                            
                            <!-- Consulting and Digital Marketing Agencies -->
                            <div class="benefit-card">
                                <h2>For Consulting and Digital Marketing Agencies</h2>
                                <p class="card-intro">
                                    <?php echo get_field('agencies_intro') ?: 'Leverage our reports to enhance your client services and drive strategic value.'; ?>
                                </p>
                                <ul class="benefits-list">
                                    <li>
                                        <strong>Client Acquisition & Strategy:</strong> 
                                        <?php echo get_field('agencies_benefit_1') ?: 'Use comprehensive market insights to attract new clients and develop winning strategies.'; ?>
                                    </li>
                                    <li>
                                        <strong>Enhanced Client Presentations:</strong> 
                                        <?php echo get_field('agencies_benefit_2') ?: 'Premium package includes branded reports that elevate your professional presentations.'; ?>
                                    </li>
                                    <li>
                                        <strong>Scalability & Efficiency:</strong> 
                                        <?php echo get_field('agencies_benefit_3') ?: 'Scale your operations efficiently with automated report generation and delivery.'; ?>
                                    </li>
                                </ul>
                            </div>

                            <!-- Sales Teams -->
                            <div class="benefit-card">
                                <h2>For Sales Teams</h2>
                                <p class="card-intro">
                                    <?php echo get_field('sales_intro') ?: 'Empower your sales force with actionable intelligence to close more deals.'; ?>
                                </p>
                                <ul class="benefits-list">
                                    <li>
                                        <strong>Targeted Prospecting:</strong> 
                                        <?php echo get_field('sales_benefit_1') ?: 'Identify and target high-value prospects with precision using market intelligence.'; ?>
                                    </li>
                                    <li>
                                        <strong>Credibility & Influence:</strong> 
                                        <?php echo get_field('sales_benefit_2') ?: 'Build credibility with prospects by presenting data-driven insights and competitive analysis.'; ?>
                                    </li>
                                    <li>
                                        <strong>Accelerated Sales Cycles:</strong> 
                                        <?php echo get_field('sales_benefit_3') ?: 'Speed up deal progression with timely, relevant market intelligence.'; ?>
                                    </li>
                                    <li>
                                        <strong>Real-time Intelligence:</strong> 
                                        <?php echo get_field('sales_benefit_4') ?: 'Premium package includes Slack notifications for instant market updates.'; ?>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </section>

                <!-- Call to Action -->
                <section class="cta-section">
                    <div class="container">
                        <div class="cta-content">
                            <h2>Choose the Package That Fits Your Needs</h2>
                            <p>Choose the package that best fits your operational scale and client engagement needs, and start leveraging strategic market intelligence today.</p>
                            <div class="cta-buttons">
                                <a href="#contact" class="button button-primary">Get Started</a>
                                <a href="<?php echo get_permalink(get_page_by_path('free-report-offer')); ?>" class="button button-secondary">Try Free Report</a>
                            </div>
                        </div>
                    </div>
                </section>

            </article>

        <?php endwhile; ?>

    </main>
</div>

<style>
/* Report Packages Page Styles */
.report-packages-page {
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

/* Pricing Table */
.pricing-section {
    padding: 80px 0;
    background: white;
}

.pricing-table-wrapper {
    overflow-x: auto;
    margin: 0 auto;
    max-width: 1200px;
}

.pricing-table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    border-radius: 10px;
    overflow: hidden;
}

.pricing-table th {
    background: #006666;
    color: white;
    padding: 20px 15px;
    text-align: center;
    font-weight: 600;
    font-size: 1.1rem;
}

.pricing-table th:first-child {
    text-align: left;
}

.pricing-table td {
    padding: 15px;
    border-bottom: 1px solid #e0e0e0;
    text-align: center;
    vertical-align: top;
}

.pricing-table td:first-child {
    text-align: left;
    font-weight: 600;
    background: #f8f9fa;
}

.pricing-table .price-row {
    background: #f0f8ff;
}

.pricing-table .price-row td {
    font-weight: bold;
    font-size: 1.2rem;
    color: #006666;
}

.pricing-table .price-per-report td {
    background: #e8f4f8;
    font-weight: 600;
}

/* Audience Benefits */
.audience-benefits {
    padding: 80px 0;
    background: #f8f9fa;
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 40px;
    max-width: 1200px;
    margin: 0 auto;
}

.benefit-card {
    background: white;
    padding: 40px 30px;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    border: 1px solid #e0e0e0;
}

.benefit-card h2 {
    color: #006666;
    font-size: 1.8rem;
    margin-bottom: 20px;
    text-align: center;
}

.card-intro {
    font-size: 1.1rem;
    color: #666;
    margin-bottom: 25px;
    line-height: 1.5;
    text-align: center;
}

.benefits-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.benefits-list li {
    padding: 15px 0;
    border-bottom: 1px solid #f0f0f0;
    line-height: 1.6;
}

.benefits-list li:last-child {
    border-bottom: none;
}

.benefits-list strong {
    color: #006666;
    display: block;
    margin-bottom: 5px;
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
    
    .pricing-table {
        font-size: 0.9rem;
    }
    
    .pricing-table th,
    .pricing-table td {
        padding: 10px 8px;
    }
    
    .benefits-grid {
        grid-template-columns: 1fr;
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

<?php get_footer(); ?> 