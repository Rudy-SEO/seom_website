<?php
/**
 * Template Name: Reports Overview
 * 
 * Template for the main Sales Enablement Reports overview page
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <?php while (have_posts()) : the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class('reports-overview-page'); ?>>
                
                <!-- Navigation Tabs -->
                <nav class="reports-nav">
                    <div class="container">
                        <ul class="nav-tabs">
                            <li class="active"><a href="<?php echo get_permalink(); ?>">Reports Overview</a></li>
                            <li><a href="<?php echo get_permalink(get_page_by_path('report-packages')); ?>">Report Packages</a></li>
                            <li><a href="<?php echo get_permalink(get_page_by_path('free-report-offer')); ?>">Free Report Offer</a></li>
                        </ul>
                    </div>
                </nav>

                <!-- Hero Section -->
                <section class="hero-section">
                    <div class="container">
                        <header class="entry-header">
                            <h1 class="entry-title">
                                <?php echo get_field('hero_title') ?: 'Accelerate Your Sales Cycle and Boost Deal Velocity with Our Sales Enablement Reports'; ?>
                            </h1>
                            <div class="entry-content">
                                <p>
                                    <?php echo get_field('hero_description') ?: 'In today\'s competitive landscape, access to timely, precise insights is not just an advantage—it\'s a necessity. Our comprehensive sales enablement reports are meticulously crafted to provide the critical intelligence you need to dramatically compress your sales cycle and significantly increase deal velocity. By transforming raw data into actionable strategies, we empower your team to close more deals, faster.'; ?>
                                </p>
                            </div>
                        </header>
                    </div>
                </section>

                <!-- Audience-Specific Benefits -->
                <section class="audience-benefits">
                    <div class="container">
                        <div class="benefits-grid">
                            
                            <!-- Consulting Agencies -->
                            <div class="benefit-card">
                                <h2>For Consulting Agencies</h2>
                                <p class="card-intro">
                                    <?php echo get_field('consulting_intro') ?: 'Elevate your client engagements and deliver strategic value that drives measurable results.'; ?>
                                </p>
                                <ul class="benefits-list">
                                    <li>
                                        <strong>Deepen Client Relationships:</strong> 
                                        <?php echo get_field('consulting_benefit_1') ?: 'Present compelling insights like estimated annual savings of $850,000-$1,150,000 through AI integration.'; ?>
                                    </li>
                                    <li>
                                        <strong>Uncover Growth Opportunities:</strong> 
                                        <?php echo get_field('consulting_benefit_2') ?: 'Identify new market segments like the digital health market growing at over 23% annually.'; ?>
                                    </li>
                                    <li>
                                        <strong>Validate Strategic Direction:</strong> 
                                        <?php echo get_field('consulting_benefit_3') ?: 'Provide analytical rigor for strategic recommendations.'; ?>
                                    </li>
                                </ul>
                            </div>

                            <!-- Digital Marketing Agencies -->
                            <div class="benefit-card">
                                <h2>For Digital Marketing Agencies</h2>
                                <p class="card-intro">
                                    <?php echo get_field('marketing_intro') ?: 'Ignite your campaigns and capture market share with data-driven strategies.'; ?>
                                </p>
                                <ul class="benefits-list">
                                    <li>
                                        <strong>Refine Your Messaging:</strong> 
                                        <?php echo get_field('marketing_benefit_1') ?: 'Gain insights into pain points like challenges with connectivity in underserved regions or customized diagnostic approaches.'; ?>
                                    </li>
                                    <li>
                                        <strong>Target High-Growth Niches:</strong> 
                                        <?php echo get_field('marketing_benefit_2') ?: 'Identify segments such as the AI in healthcare market projected to reach over $1 billion by 2025 or the fastest-growing telemedicine segment.'; ?>
                                    </li>
                                    <li>
                                        <strong>Outmaneuver Competitors:</strong> 
                                        <?php echo get_field('marketing_benefit_3') ?: 'Leverage competitive intelligence to stay ahead.'; ?>
                                    </li>
                                </ul>
                            </div>

                            <!-- Sales Teams -->
                            <div class="benefit-card">
                                <h2>For Sales Teams</h2>
                                <p class="card-intro">
                                    <?php echo get_field('sales_intro') ?: 'Empower your sales force to engage prospects and close deals faster.'; ?>
                                </p>
                                <ul class="benefits-list">
                                    <li>
                                        <strong>Accelerate Deal Progression:</strong> 
                                        <?php echo get_field('sales_benefit_1') ?: 'Present compelling value propositions like estimated annual savings of $850,000-$1,150,000.'; ?>
                                    </li>
                                    <li>
                                        <strong>Uncover Pain Points & Opportunities:</strong> 
                                        <?php echo get_field('sales_benefit_2') ?: 'Understand challenges like fragmented financial infrastructure, disconnected records, or diagnostic accuracy challenges.'; ?>
                                    </li>
                                    <li>
                                        <strong>Master Competitive Conversations:</strong> 
                                        <?php echo get_field('sales_benefit_3') ?: 'Prepare your team with competitive analysis.'; ?>
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
                            <h2>Ready to Transform Your Sales Performance?</h2>
                            <p>Choose the right package for your needs and start leveraging strategic market intelligence today.</p>
                            <div class="cta-buttons">
                                <a href="<?php echo get_permalink(get_page_by_path('report-packages')); ?>" class="button button-primary">View Report Packages</a>
                                <a href="<?php echo get_permalink(get_page_by_path('free-report-offer')); ?>" class="button button-secondary">Get Free Report</a>
                            </div>
                        </div>
                    </div>
                </section>

            </article>

        <?php endwhile; ?>

    </main>
</div>

<style>
/* Reports Overview Page Styles */
.reports-overview-page {
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

/* Audience Benefits */
.audience-benefits {
    padding: 80px 0;
    background: white;
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
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
    transition: transform 0.3s ease;
}

.benefit-card:hover {
    transform: translateY(-5px);
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