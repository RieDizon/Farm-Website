<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>GreenFarm | Fresh Local Produce</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Playfair+Display:wght@500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <header class="site-header">
      <div class="logo">GreenFarm</div>
      <nav class="nav" aria-label="Main">
        <a href="#about">About</a>
        <a href="#products">Products</a>
        <a href="#stories">Stories</a>
        <a href="#contact">Contact</a>
        <a href="#tips">Farm Tips</a>
      </nav>
      <button class="nav-toggle" aria-label="Toggle navigation" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="btn primary" href="#products">Order Now</a>
    </header>

    <main>
      <section class="hero" id="home">
        <div class="hero-overlay"></div>
        <div class="hero-content">
          <p class="eyebrow">Locally grown · Sustainably harvested</p>
          <h1>Fresh from our fields to your table.</h1>
          <p class="hero-subhead">
            Welcome to GreenFarm! Fresh, healthy produce directly from our fields to
            your table.
          </p>
          <div class="hero-actions">
            <a class="btn primary" href="#products">Order Now</a>
            <a class="btn ghost" href="#contact">Visit Our Farm</a>
          </div>
          <div class="hero-metrics">
            <div>
              <strong>30+ crops</strong>
              <span>Harvested weekly</span>
            </div>
            <div>
              <strong>100% fresh</strong>
              <span>No long storage</span>
            </div>
            <div>
              <strong>Family farm</strong>
              <span>Since 1992</span>
            </div>
          </div>
        </div>
        <div class="hero-slider" aria-hidden="true">
          <img src="assets/hero-1.jpg" alt="Fresh farm produce" />
          <img src="assets/hero-2.jpg" alt="Seasonal vegetables" />
          <img src="assets/hero-3.jpg" alt="Fruit harvest" />
        </div>
      </section>

      <section class="intro section">
        <div class="intro-card">
          <h2>Fresh, clean, and local</h2>
          <p>
            We grow watermelon, melon, kamote, leafy greens, and more using soil-first
            practices. Every harvest is hand-picked for flavor and freshness.
          </p>
          <a class="text-link" href="#products">See this week’s harvest</a>
        </div>
        <div class="intro-highlights">
          <div class="highlight">
            <h3>Farm-Fresh Promise</h3>
            <p>Harvested at sunrise, delivered the same day.</p>
          </div>
          <div class="highlight">
            <h3>Soil-First Farming</h3>
            <p>Cover crops, compost, and mindful rotations.</p>
          </div>
          <div class="highlight">
            <h3>Community Grown</h3>
            <p>Local markets, farm visits, and CSA boxes.</p>
          </div>
        </div>
      </section>

      <section class="about section" id="about">
        <div class="about-text">
          <h2>Our Farm Story</h2>
          <p>
            GreenFarm began as a small family plot and has grown into a trusted
            local source for clean, vibrant produce. We believe in responsible
            farming that protects the land while feeding our neighbors.
          </p>
          <ul class="checklist">
            <li>Rainwater harvesting and efficient irrigation</li>
            <li>Integrated pest management with natural controls</li>
            <li>Hand-harvested and cold-chain prepped</li>
          </ul>
          <p>
            Our farming methods focus on soil health and seasonal diversity, so
            every harvest tastes the way it should: fresh and full of life.
          </p>
        </div>
        <div class="about-media">
          <div class="photo-card">Farmers at work</div>
          <div class="photo-card">Sunrise harvest</div>
          <div class="photo-card">Field rows</div>
          <div class="photo-card">Community market</div>
        </div>
      </section>

      <section class="products section" id="products">
        <div class="section-header">
          <h2>Seasonal Products</h2>
          <p>Browse Fruits, Vegetables, and Tubers. Search or filter below.</p>
        </div>
        <div class="product-tools">
          <input id="product-search" type="search" placeholder="Search products..." />
          <div class="filter-group">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="fruits">Fruits</button>
            <button class="filter-btn" data-filter="vegetables">Vegetables</button>
            <button class="filter-btn" data-filter="tubers">Tubers</button>
          </div>
        </div>
        <div class="product-grid" id="product-grid">
          <article class="product-card" data-category="fruits" data-name="Watermelon Sweet Ruby">
            <div class="badge">Fruits</div>
            <div class="product-image">Watermelon</div>
            <h3>Watermelon Sweet Ruby</h3>
            <p>Freshly harvested, juicy and sweet.</p>
            <p class="price">PHP 120 per kg</p>
            <button class="btn secondary order-btn" data-product="Watermelon Sweet Ruby">
              Order Now
            </button>
          </article>
          <article class="product-card" data-category="fruits" data-name="Honey Melon Sunrise">
            <div class="badge">Fruits</div>
            <div class="product-image">Melon</div>
            <h3>Honey Melon Sunrise</h3>
            <p>Fragrant aroma, bright and refreshing.</p>
            <p class="price">PHP 150 per whole</p>
            <button class="btn secondary order-btn" data-product="Honey Melon Sunrise">
              Order Now
            </button>
          </article>
          <article class="product-card" data-category="vegetables" data-name="Heirloom Tomatoes">
            <div class="badge">Vegetables</div>
            <div class="product-image">Tomatoes</div>
            <h3>Heirloom Tomatoes</h3>
            <p>Vibrant, tangy, and perfect for salads.</p>
            <p class="price">PHP 110 per kg</p>
            <button class="btn secondary order-btn" data-product="Heirloom Tomatoes">
              Add to Cart
            </button>
          </article>
          <article class="product-card" data-category="vegetables" data-name="Crunchy Cucumber">
            <div class="badge">Vegetables</div>
            <div class="product-image">Cucumber</div>
            <h3>Crunchy Cucumber</h3>
            <p>Crisp and hydrating, harvested daily.</p>
            <p class="price">PHP 70 per 3 pcs</p>
            <button class="btn secondary order-btn" data-product="Crunchy Cucumber">
              Add to Cart
            </button>
          </article>
          <article class="product-card" data-category="tubers" data-name="Kamote Orange Delight">
            <div class="badge">Tubers</div>
            <div class="product-image">Kamote</div>
            <h3>Kamote Orange Delight</h3>
            <p>Rich in nutrients, ideal for roasting.</p>
            <p class="price">PHP 85 per kg</p>
            <button class="btn secondary order-btn" data-product="Kamote Orange Delight">
              Order Now
            </button>
          </article>
          <article class="product-card" data-category="tubers" data-name="Purple Sweet Potato">
            <div class="badge">Tubers</div>
            <div class="product-image">Sweet Potato</div>
            <h3>Purple Sweet Potato</h3>
            <p>Earthy, hearty, and naturally vibrant.</p>
            <p class="price">PHP 100 per kg</p>
            <button class="btn secondary order-btn" data-product="Purple Sweet Potato">
              Order Now
            </button>
          </article>
          <article class="product-card" data-category="fruits" data-name="Citrus Burst Mix">
            <div class="badge">Fruits</div>
            <div class="product-image">Citrus</div>
            <h3>Citrus Burst Mix</h3>
            <p>Seasonal oranges and pomelo blend.</p>
            <p class="price">PHP 90 per punnet</p>
            <button class="btn secondary order-btn" data-product="Citrus Burst Mix">
              Order Now
            </button>
          </article>
        </div>
      </section>

      <section class="testimonials section" id="stories">
        <div class="section-header">
          <h2>Customer Stories</h2>
          <p>Real feedback from families who love fresh local food.</p>
        </div>
        <div class="testimonial-grid">
          <div class="testimonial-card">
            <p>
              "The melon flavor is incredible and always consistent. We now order
              every weekend."
            </p>
            <span>— Ana M., City Market</span>
          </div>
          <div class="testimonial-card">
            <p>
              "GreenFarm kamote is the best for roasting. The quality is always
              top-tier."
            </p>
            <span>— Carlo R., Local Chef</span>
          </div>
          <div class="testimonial-card">
            <p>
              "Fresh vegetables, friendly staff, and fast delivery. Highly
              recommended."
            </p>
            <span>— Jessa P., Home Cook</span>
          </div>
        </div>
      </section>

      <section class="newsletter section">
        <div class="newsletter-card">
          <div>
            <h2>Weekly Farm Box Updates</h2>
            <p>Get harvest alerts, recipes, and seasonal offers.</p>
          </div>
          <form class="newsletter-form" id="newsletter-form">
            <input type="email" name="email" placeholder="Your email" required />
            <button class="btn primary" type="submit">Join Newsletter</button>
            <span class="form-note" id="newsletter-note"></span>
          </form>
        </div>
      </section>

      <section class="tips section" id="tips">
        <div class="section-header">
          <h2>Farm Tips</h2>
          <p>Simple guides for storage, prep, and seasonal cooking.</p>
        </div>
        <div class="tips-grid">
          <article class="tip-card">
            <h3>Watermelon Storage</h3>
            <p>Keep whole melons cool and dry. Slice, cover, and chill for 3 days.</p>
          </article>
          <article class="tip-card">
            <h3>Kamote Roasting</h3>
            <p>Cut into wedges, coat with oil and salt, roast at 200°C for 30 min.</p>
          </article>
          <article class="tip-card">
            <h3>Leafy Greens</h3>
            <p>Rinse, spin dry, and store in a breathable container for crisp salads.</p>
          </article>
        </div>
      </section>

      <section class="contact section" id="contact">
        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Order directly, schedule a farm visit, or ask about bulk supply.</p>
        </div>
        <div class="contact-grid">
          <form id="contact-form" class="contact-form">
            <label>
              Name
              <input type="text" name="name" required />
            </label>
            <label>
              Email
              <input type="email" name="email" required />
            </label>
            <label>
              Message
              <textarea name="message" rows="4" required></textarea>
            </label>
            <button class="btn primary" type="submit">Send Message</button>
            <p class="form-note" id="contact-note" aria-live="polite"></p>
          </form>
          <div class="contact-details">
            <h3>Visit or Call</h3>
            <p><strong>Phone:</strong> +63 912 345 6789</p>
            <p><strong>Email:</strong> hello@greenfarm.local</p>
            <p><strong>Location:</strong> GreenFarm Road, Valley District</p>
            <a
              class="text-link"
              href="https://maps.google.com/?q=GreenFarm"
              target="_blank"
              rel="noreferrer"
            >
              Open Google Maps
            </a>
            <div class="social-links">
              <a href="https://facebook.com" target="_blank" rel="noreferrer">Facebook</a>
              <a href="https://instagram.com" target="_blank" rel="noreferrer">Instagram</a>
              <a href="https://tiktok.com" target="_blank" rel="noreferrer">TikTok</a>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div>
        <div class="logo">GreenFarm</div>
        <p>Farm-fresh produce, responsibly grown.</p>
      </div>
      <div>
        <h4>Quick Links</h4>
        <a href="#about">About</a>
        <a href="#products">Products</a>
        <a href="#contact">Contact</a>
      </div>
      <div>
        <h4>Contact</h4>
        <p>+63 912 345 6789</p>
        <p>hello@greenfarm.local</p>
      </div>
      <div>
        <h4>Hours</h4>
        <p>Mon-Sat: 7:00 AM - 6:00 PM</p>
        <p>Sun: 8:00 AM - 2:00 PM</p>
      </div>
    </footer>

    <div class="order-modal" id="order-modal" aria-hidden="true">
      <div class="order-dialog">
        <button class="modal-close" type="button" aria-label="Close">×</button>
        <h3>Order Item</h3>
        <form id="order-form">
          <label>
            Product
            <input type="text" name="product" readonly />
          </label>
          <label>
            Quantity
            <input type="number" name="quantity" min="1" value="1" required />
          </label>
          <label>
            Name
            <input type="text" name="name" required />
          </label>
          <label>
            Phone
            <input type="tel" name="phone" required />
          </label>
          <label>
            Email
            <input type="email" name="email" required />
          </label>
          <button class="btn primary" type="submit">Place Order</button>
          <p class="form-note" id="order-note"></p>
        </form>
      </div>
    </div>

    <script src="script.js"></script>
  </body>
</html>
