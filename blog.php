<?php
$brand = 'Clearline Car Wash';
$address = '1847 N Milwaukee Avenue, Chicago, IL 60647';
$phone = '(312) 555-0148';
$email = 'hello@clearlinewash.com';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Car Care Blog | Clearline Car Wash Chicago</title>
  <meta name="description" content="Read practical car-care advice from Clearline Car Wash in Chicago, from wash routines to fresher interiors and paint-conscious cleaning.">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Car Care Blog | Clearline Car Wash Chicago">
  <meta property="og:description" content="Helpful notes on car washing, interior care, and keeping your vehicle clean around Chicago.">
  <meta property="og:image" content="images/blog_hero.jpg">
  <meta property="og:locale" content="en_US">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="site-header">
    <div class="container header-inner">
      <a class="logo" href="index.php" aria-label="Clearline Car Wash home">
        <span class="logo-mark" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 15.5 5.5 11a2 2 0 0 1 1.9-1.4h9.2a2 2 0 0 1 1.9 1.4l1.5 4.5"/><path d="M3 15.5h18v3a1.5 1.5 0 0 1-1.5 1.5h-15A1.5 1.5 0 0 1 3 18.5zM6 15.5h12M7 20v1m10-1v1"/></svg>
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
    <section class="hero" style="background-image: url('images/blog_hero.jpg')">
      <div class="container hero-content">
        <p class="eyebrow">Notes for a cleaner drive</p>
        <h1>Blog</h1>
        <p class="hero-copy">Straightforward tips for keeping your car comfortable, clean, and ready for Chicago miles.</p>
      </div>
    </section>

    <section class="section section-soft">
      <div class="container">
        <p class="eyebrow">Car-care reads</p>
        <h2 class="section-heading">Useful ideas for your next clean</h2>
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
    })();
  </script>
</body>
</html>