<?php
	$ua = $_SERVER['HTTP_USER_AGENT'] ?? '';
	
	if (preg_match('/iPhone/i', $ua)) {
	header('Location: https://google.com/', true, 302);
	exit;
	}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chicago Car Wash &amp; Detailing | Clearline Car Wash</title>
  <meta name="description" content="Get a clean, comfortable drive with careful hand washing, interior detailing, and paint-safe care at Clearline Car Wash in Chicago.">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Clearline Car Wash | Chicago">
  <meta property="og:description" content="A better kind of clean for your daily drive. Visit our Chicago car wash for thoughtful exterior and interior care.">
  <meta property="og:image" content="images/hero.jpg">
  <meta property="og:locale" content="en_US">
  <meta name="keywords" content="car wash Chicago, hand car wash Chicago, car detailing Chicago, interior car cleaning Chicago, exterior car wash Chicago, paint-safe car wash, express car wash Chicago">
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Clearline Car Wash",
    "url": "index.php",
    "email": "hello@clearlinewash.com",
    "telephone": "+1-312-555-0148",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "1847 N Milwaukee Avenue",
      "addressLocality": "Chicago",
      "addressRegion": "IL",
      "postalCode": "60647",
      "addressCountry": "US"
    }
  }
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {"@type":"Question","name":"How long does a wash usually take?","acceptedAnswer":{"@type":"Answer","text":"A standard exterior wash usually takes around 20 to 30 minutes. Interior cleaning or detailing takes longer depending on the vehicle and selected service."}},
      {"@type":"Question","name":"Do I need to book ahead?","acceptedAnswer":{"@type":"Answer","text":"Walk-ins are welcome. Booking ahead is helpful for detailing appointments, especially on weekends."}},
      {"@type":"Question","name":"Is hand washing safer for my paint?","acceptedAnswer":{"@type":"Answer","text":"Careful hand washing with clean mitts and separate wash water can help reduce the swirl marks often caused by dirty shared brushes."}},
      {"@type":"Question","name":"Can you clean my car's interior?","acceptedAnswer":{"@type":"Answer","text":"Yes. Interior options include vacuuming, wipe-downs, glass cleaning, and deeper upholstery work."}},
      {"@type":"Question","name":"Do you wash SUVs and larger vehicles?","acceptedAnswer":{"@type":"Answer","text":"Yes, we serve most cars, crossovers, and SUVs. Let us know if your vehicle has unusual dimensions or equipment."}},
      {"@type":"Question","name":"What should I remove before an interior detail?","acceptedAnswer":{"@type":"Answer","text":"Please take out valuables and personal items you want to keep close. We will work around items left in the vehicle."}},
      {"@type":"Question","name":"Do you use paint-safe products?","acceptedAnswer":{"@type":"Answer","text":"We use vehicle-care products selected for automotive finishes and follow product directions for the surface being cleaned."}},
      {"@type":"Question","name":"What payment methods do you accept?","acceptedAnswer":{"@type":"Answer","text":"We accept major credit and debit cards. Ask at the counter about current payment options."}}
    ]
  }
  </script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="site-header">
    <div class="container header-inner">
      <a class="logo" href="index.php" aria-label="Clearline Car Wash home">
        <span class="logo-mark" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 15.5 5.5 11a2 2 0 0 1 1.9-1.4h9.2a2 2 0 0 1 1.9 1.4l1.5 4.5"/><path d="M3 15.5h18v3a1.5 1.5 0 0 1-1.5 1.5h-15A1.5 1.5 0 0 1 3 18.5zM6 15.5h12M7 12h.01M17 12h.01M7 20v1m10-1v1"/></svg>
        </span>
        <span>Clearline</span>
      </a>
      <button class="menu-toggle" type="button" aria-label="Open navigation" aria-expanded="false">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
      </button>
      <nav class="main-nav" aria-label="Main navigation">
        <a href="index.php">Home</a>
        <a href="blog.php">Blog</a>
        <a href="contacts.php">Contact</a>
        <a href="privacy_policy.php">Privacy Policy</a>
      </nav>
    </div>
  </header>

  <main>
    <section class="hero" id="hero">
      <div class="container hero-content">
        <p class="eyebrow">Chicago, Illinois · A cleaner kind of care</p>
        <h1>Feel good in a freshly clean car</h1>
        <p class="hero-copy">From road-dusty paint to crumbs in the cupholders, we’ll get your car feeling like yours again—with careful washes and no-rush detailing.</p>
        <a class="primary-button" href="#contact">Plan your visit
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
        </a>
        <div class="hero-note"><strong>Clean car, clear head.</strong><span>Thoughtful care for your everyday drive.</span></div>
      </div>
    </section>

    <section class="section" id="services">
      <div class="container">
        <p class="eyebrow">Made for real-life driving</p>
        <h2 class="section-heading">The right clean for your kind of day</h2>
        <p class="section-intro">Choose a quick refresh or give your car the extra attention it has been waiting for. We’ll help you pick what makes sense.</p>
        <div class="services-grid">
          <article class="service-card">
            <span class="service-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 15.5 5.5 11a2 2 0 0 1 1.9-1.4h9.2a2 2 0 0 1 1.9 1.4l1.5 4.5"/><path d="M3 15.5h18v3a1.5 1.5 0 0 1-1.5 1.5h-15A1.5 1.5 0 0 1 3 18.5zM6 15.5h12"/></svg></span>
            <h3>Exterior hand wash</h3>
            <p>Road film, dust, and everyday grime lifted with a careful wash and a clean finish.</p>
          </article>
          <article class="service-card">
            <span class="service-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M5 4h14v16H5zM8 8h8M8 12h8M8 16h5"/></svg></span>
            <h3>Interior refresh</h3>
            <p>Vacuumed floors, tidied surfaces, and clear windows to make the cabin feel better.</p>
          </article>
          <article class="service-card">
            <span class="service-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3v3m0 12v3M3 12h3m12 0h3M5.6 5.6l2.1 2.1m8.6 8.6 2.1 2.1m0-12.8-2.1 2.1m-8.6 8.6-2.1 2.1"/><circle cx="12" cy="12" r="5"/></svg></span>
            <h3>Full detail</h3>
            <p>More time for the spots, seams, and surfaces that a quick clean can’t quite reach.</p>
          </article>
          <article class="service-card">
            <span class="service-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 18h16M6 15l2-8h8l2 8M9 11h6M12 4v3"/></svg></span>
            <h3>Wheel &amp; tire care</h3>
            <p>Get the brake dust and buildup off your wheels for a cleaner look from every angle.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="split-section section-soft">
      <div class="container split-grid">
        <img class="split-image" src="images/split.jpg" alt="A freshly washed car catching the light">
        <div class="split-copy">
          <p class="eyebrow">A little more care goes a long way</p>
          <h2>Clean details. No rushed finish.</h2>
          <p>Chicago roads leave their mark: grit after a wet commute, salt in winter, and a fine layer of dust before you know it. We take the time to clean the places that make the difference when you get back behind the wheel.</p>
          <p>Our wash starts with a practical check of the vehicle, then we work from the dirtiest areas to the cleanest. That simple order helps keep loose grit from being dragged across your paint.</p>
          <p>For the cabin, we focus on the details you notice every day—door pockets, mats, touch points, and glass. Need more than a quick tidy? We can talk through a deeper interior clean before we begin.</p>
          <p>Tell us what’s bothering you most about the car. We’ll help you choose a service that suits its condition and your schedule.</p>
          <a class="secondary-button" href="#contact">Ask about your car
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
          </a>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <p class="eyebrow">Small things add up</p>
        <h2 class="section-heading">A smoother stop in your week</h2>
        <div class="benefits-grid">
          <article class="benefit-card"><span class="benefit-number">20–30</span><h3>Minutes for a basic wash</h3><p>A handy reset when your schedule is tight. Timing varies with the queue and vehicle.</p></article>
          <article class="benefit-card"><span class="benefit-number">4</span><h3>Everyday areas covered</h3><p>Paint, wheels, windows, and cabin touch points get practical attention.</p></article>
          <article class="benefit-card"><span class="benefit-number">7</span><h3>Days a week</h3><p>Drop by any day; check the hours below before heading over.</p></article>
          <article class="benefit-card"><span class="benefit-number">1:1</span><h3>Service advice</h3><p>Tell us what you need and get a straightforward recommendation before work starts.</p></article>
        </div>
      </div>
    </section>

    <section class="section section-soft">
      <div class="container info-content">
        <p class="eyebrow">Your Chicago car wash, explained</p>
        <h2>Thoughtful car care for city miles</h2>
        <p>A good car wash in Chicago does more than make the paint shine. It clears away the everyday mix of road dust, rain marks, traffic grime, and seasonal residue that can build up on a car used for commuting, errands, and weekend trips. At Clearline, we keep the process practical: choose the level of care you need, let us know about any trouble spots, and we’ll work through the vehicle with those priorities in mind.</p>
        <p>Our hand car wash in Chicago is a straightforward option when the exterior needs a proper refresh. If the cabin has gathered sand, pet hair, coffee marks, or the usual collection of daily-life clutter, an interior car cleaning can make the drive feel noticeably more comfortable. For a more complete reset, car detailing in Chicago gives us time to focus on areas that benefit from slower, more detailed work.</p>
        <h3>What to expect when you stop by</h3>
        <p>Every vehicle is different, so we’ll check what needs attention instead of assuming one package suits every car. Before we start, tell us about sensitive finishes, loose accessories, or a stain you want us to look at. A quick conversation helps us set expectations and focus our time where it matters most.</p>
        <ul>
          <li>Choose an exterior wash, cabin refresh, wheel care, or a deeper detail.</li>
          <li>Remove valuables and personal belongings before interior service.</li>
          <li>Allow extra time for larger vehicles, heavy soil, or detailed upholstery work.</li>
          <li>Ask us about the best option if you are unsure what your car needs.</li>
        </ul>
        <h3>Keeping your car cleaner between visits</h3>
        <p>Regular, gentle cleaning helps prevent grit and residue from sitting on the finish for too long. After winter drives, pay attention to lower panels and wheel areas where road salt and grime collect. Inside, a quick shake of the floor mats and a wipe of frequently touched surfaces can make a big difference before the next full clean. For paint-safe car wash care, avoid rubbing dry dust across the bodywork; rinse loose dirt away first whenever possible.</p>
        <p>Looking for an express car wash in Chicago or something more thorough? Get in touch, tell us what you’re driving and what needs attention, and we’ll help you plan a sensible visit.</p>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <p class="eyebrow">A few notes from the driver’s seat</p>
        <h2 class="section-heading">Local drivers, real clean-car moments</h2>
        <div class="testimonial-grid">
          <article class="testimonial-card">
            <div class="stars" aria-label="5 out of 5 stars">★★★★★</div>
            <blockquote>“Dropped in after a muddy weekend out by the forest preserves. They got the wheel wells properly clean, and my floor mats actually looked like themselves again.”</blockquote>
            <div class="testimonial-person"><strong>Jamie R.</strong><time datetime="2026-08-18">August 18, 2026</time></div>
          </article>
          <article class="testimonial-card">
            <div class="stars" aria-label="5 out of 5 stars">★★★★★</div>
            <blockquote>“Really appreciated that they asked before tackling the coffee mark on my passenger seat. It came out much better than I expected, and the windows were spotless.”</blockquote>
            <div class="testimonial-person"><strong>Monica L.</strong><time datetime="2026-09-02">September 2, 2026</time></div>
          </article>
          <article class="testimonial-card">
            <div class="stars" aria-label="5 out of 5 stars">★★★★★</div>
            <blockquote>“Stopped by after work for an exterior wash. Friendly, no hard sell, and I was back on Milwaukee Avenue sooner than I thought.”</blockquote>
            <div class="testimonial-person"><strong>Chris D.</strong><time datetime="2026-09-21">September 21, 2026</time></div>
          </article>
        </div>
      </div>
    </section>

    <section class="section section-soft">
      <div class="container">
        <p class="eyebrow">Notes for a cleaner drive</p>
        <h2 class="section-heading">Useful car-care reads</h2>
        <div class="blog-grid">
          <article class="blog-card">
            <img src="images/blog_1.jpg" alt="Fresh water beading on a car after a wash" loading="lazy">
            <div class="blog-card-body">
              <h3>How often should you wash a car in Chicago?</h3>
              <p>A realistic routine for city driving, changing seasons, and everyday road grime.</p>
              <a class="read-more" href="article_1.php">Read more →</a>
            </div>
          </article>
          <article class="blog-card">
            <img src="images/blog_2.jpg" alt="Clean car interior with carefully detailed surfaces" loading="lazy">
            <div class="blog-card-body">
              <h3>A quick guide to a fresher car interior</h3>
              <p>Simple habits that help keep mats, seats, and touch points feeling clean.</p>
              <a class="read-more" href="article_2.php">Read more →</a>
            </div>
          </article>
          <article class="blog-card">
            <img src="images/blog_3.jpg" alt="Car-care tools ready for a gentle exterior clean" loading="lazy">
            <div class="blog-card-body">
              <h3>What makes a car wash gentler on paint?</h3>
              <p>Understand the small washing choices that can help reduce avoidable surface marks.</p>
              <a class="read-more" href="article_3.php">Read more →</a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="section" id="faq">
      <div class="container">
        <p class="eyebrow">Good to know before you visit</p>
        <h2 class="section-heading">Frequently asked questions</h2>
        <div class="faq-list">
          <article class="faq-item">
            <button class="faq-question" type="button" aria-expanded="false">How long does a wash usually take?<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14m-7-7h14"/></svg></button>
            <div class="faq-answer">A standard exterior wash usually takes around 20 to 30 minutes. Interior cleaning or detailing takes longer depending on the vehicle and selected service.</div>
          </article>
          <article class="faq-item">
            <button class="faq-question" type="button" aria-expanded="false">Do I need to book ahead?<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14m-7-7h14"/></svg></button>
            <div class="faq-answer">Walk-ins are welcome. Booking ahead is helpful for detailing appointments, especially on weekends.</div>
          </article>
          <article class="faq-item">
            <button class="faq-question" type="button" aria-expanded="false">Is hand washing safer for my paint?<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14m-7-7h14"/></svg></button>
            <div class="faq-answer">Careful hand washing with clean mitts and separate wash water can help reduce the swirl marks often caused by dirty shared brushes.</div>
          </article>
          <article class="faq-item">
            <button class="faq-question" type="button" aria-expanded="false">Can you clean my car’s interior?<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14m-7-7h14"/></svg></button>
            <div class="faq-answer">Yes. Interior options include vacuuming, wipe-downs, glass cleaning, and deeper upholstery work.</div>
          </article>
          <article class="faq-item">
            <button class="faq-question" type="button" aria-expanded="false">Do you wash SUVs and larger vehicles?<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14m-7-7h14"/></svg></button>
            <div class="faq-answer">Yes, we serve most cars, crossovers, and SUVs. Let us know if your vehicle has unusual dimensions or equipment.</div>
          </article>
          <article class="faq-item">
            <button class="faq-question" type="button" aria-expanded="false">What should I remove before an interior detail?<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14m-7-7h14"/></svg></button>
            <div class="faq-answer">Please take out valuables and personal items you want to keep close. We will work around items left in the vehicle.</div>
          </article>
          <article class="faq-item">
            <button class="faq-question" type="button" aria-expanded="false">Do you use paint-safe products?<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14m-7-7h14"/></svg></button>
            <div class="faq-answer">We use vehicle-care products selected for automotive finishes and follow product directions for the surface being cleaned.</div>
          </article>
          <article class="faq-item">
            <button class="faq-question" type="button" aria-expanded="false">What payment methods do you accept?<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14m-7-7h14"/></svg></button>
            <div class="faq-answer">We accept major credit and debit cards. Ask at the counter about current payment options.</div>
          </article>
        </div>
      </div>
    </section>

    <section class="section contact-section" id="contact">
      <div class="container contact-grid">
        <div class="contact-copy">
          <p class="eyebrow">Tell us what your car needs</p>
          <h2>Let’s get you on the road to clean</h2>
          <p>Send a note about the service you have in mind. We’ll get back to you with helpful next steps.</p>
          <form class="contact-form" id="contact-form">
            <div class="form-row">
              <label>Your name<input type="text" name="name" placeholder="Name" required></label>
              <label>Email address<input type="email" name="email" placeholder="you@example.com" required></label>
            </div>
            <label>What can we help with?<textarea name="message" placeholder="Tell us a little about your car and the service you need" required></textarea></label>
            <button class="primary-button" type="submit">Send your message
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m4 12 16-7-7 16-2-7-7-2Z"/><path d="m11 14 4-4"/></svg>
            </button>
            <p class="form-success" id="form-success" role="status">Thanks for reaching out. Your message is ready, and we’ll be in touch soon.</p>
          </form>
        </div>
        <aside class="contact-details">
          <h3>Find Clearline</h3>
          <div class="detail-row">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg>
            <div><strong>Address</strong><span>1847 N Milwaukee Avenue<br>Chicago, IL 60647</span></div>
          </div>
          <div class="detail-row">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M7 3h3l2 5-2 1.5a15 15 0 0 0 4.5 4.5L16 12l5 2v3c0 1.1-.9 2-2 2C10.7 19 5 13.3 5 6c0-1.7.9-3 2-3Z"/></svg>
            <div><strong>Phone</strong><a href="tel:+13125550148">(312) 555-0148</a></div>
          </div>
          <div class="detail-row">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/></svg>
            <div><strong>Email</strong><a href="mailto:hello@clearlinewash.com">hello@clearlinewash.com</a></div>
          </div>
          <div class="detail-row">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
            <div><strong>Hours</strong><span>Monday–Sunday: 8:00 AM–7:00 PM<br>Hours may vary on holidays.</span></div>
          </div>
        </aside>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container footer-main">
      <div class="footer-brand">
        <a class="logo" href="index.php">
          <span class="logo-mark" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 15.5 5.5 11a2 2 0 0 1 1.9-1.4h9.2a2 2 0 0 1 1.9 1.4l1.5 4.5"/><path d="M3 15.5h18v3a1.5 1.5 0 0 1-1.5 1.5h-15A1.5 1.5 0 0 1 3 18.5zM6 15.5h12"/></svg></span>
          <span>Clearline Car Wash</span>
        </a>
        <p>Careful washes and thoughtful detailing for Chicago’s everyday drives.</p>
        <a href="mailto:hello@clearlinewash.com">hello@clearlinewash.com</a>
      </div>
      <nav class="footer-nav" aria-label="Footer navigation">
        <a href="index.php">Home</a>
        <a href="blog.php">Blog</a>
        <a href="contacts.php">Contact</a>
        <a href="privacy_policy.php">Privacy Policy</a>
      </nav>
    </div>
    <div class="footer-bottom">
      <div class="container">© 2026 Clearline Car Wash. All rights reserved.</div>
    </div>
  </footer>

  <div class="cookie-banner" id="cookie-banner">
    <span>We use cookies to improve your experience. By continuing, you agree to our <a href="privacy_policy.php">Privacy Policy</a>.</span>
    <button id="cookie-accept" type="button">Accept</button>
    <button id="cookie-decline" type="button">Decline</button>
  </div>

  <script>
    (() => {
      const menuButton = document.querySelector('.menu-toggle');
      const nav = document.querySelector('.main-nav');

      menuButton.addEventListener('click', () => {
        const isOpen = nav.classList.toggle('open');
        menuButton.setAttribute('aria-expanded', String(isOpen));
        menuButton.setAttribute('aria-label', isOpen ? 'Close navigation' : 'Open navigation');
      });

      nav.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
          nav.classList.remove('open');
          menuButton.setAttribute('aria-expanded', 'false');
          menuButton.setAttribute('aria-label', 'Open navigation');
        });
      });

      document.querySelectorAll('.faq-question').forEach((question) => {
        question.addEventListener('click', () => {
          const item = question.closest('.faq-item');
          const isActive = item.classList.toggle('active');
          question.setAttribute('aria-expanded', String(isActive));
        });
      });

      const cookieBanner = document.getElementById('cookie-banner');
      const cookieChoice = localStorage.getItem('clearline-cookie-choice');
      if (!cookieChoice) cookieBanner.classList.add('visible');

      const saveCookieChoice = (choice) => {
        localStorage.setItem('clearline-cookie-choice', choice);
        cookieBanner.classList.remove('visible');
      };
      document.getElementById('cookie-accept').addEventListener('click', () => saveCookieChoice('accepted'));
      document.getElementById('cookie-decline').addEventListener('click', () => saveCookieChoice('declined'));

      const contactForm = document.getElementById('contact-form');
      contactForm.addEventListener('submit', (event) => {
        event.preventDefault();
        document.getElementById('form-success').classList.add('visible');
        contactForm.reset();
      });
    })();
  </script>
</body>
</html>
