<?php require 'include/header.php'; ?>

<style>
  /* Scoped styles for thank-you page only */
  body.thankyou-page {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    background: #fafafa;
  }
  
  .thankyou-container {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
  }
  
  .card {
    width: 100%;
    max-width: 720px;
    background: #fff;
    border-radius: 14px;
    box-shadow: 0 8px 30px rgba(16,24,40,0.08), inset 0 1px 0 rgba(255,255,255,0.6);
    padding: 36px;
    text-align: center;
    border: 1px solid rgba(198,40,40,0.06);
    margin: 20px;
  }

  h1 {
    margin: 8px 0 6px;
    font-size: 1.6rem;
    letter-spacing: -0.02em;
  }

  p.lead {
    margin: 0 0 20px;
    color: #6b6b6b;
    font-size: 1rem;
    line-height: 1.5;
  }

  .card-row {
    display: flex;
    gap: 18px;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 18px;
  }

  .cta {
    border: 0;
    background: #c62828;
    color: #fff;
    padding: 12px 20px;
    border-radius: 10px;
    font-weight: 600;
    text-decoration: none;
    box-shadow: 0 8px 18px rgba(198,40,40,0.14);
    transition: transform .14s ease, box-shadow .14s ease, background .14s ease;
  }
  
  .cta:hover {
    transform: translateY(-3px); 
    box-shadow: 0 14px 28px rgba(198,40,40,0.16);
  }

  .secondary {
    background: transparent;
    color: #6b6b6b;
    padding: 10px 14px;
    border-radius: 10px;
    border: 1px solid rgba(16,24,40,0.06);
    text-decoration: none;
    font-weight: 600;
  }

  .check {
    width: 76px;
    height: 76px;
    border-radius: 50%;
    background: linear-gradient(180deg, rgba(198,40,40,0.12), rgba(198,40,40,0.06));
    display: inline-grid;
    place-items: center;
    margin: 8px auto 0;
  }
  
  .meta {
    margin-top: 20px;
    font-size: 0.9rem;
    color: #6b6b6b;
  }
  
  .meta a {
    color: #c62828;
    text-decoration: none;
  }
</style>

<body class="thankyou-page">
  <section>
    <div class="bg-[url(assets/images/bg-banner.webp)] bg-no-repeat bg-cover">
      <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-12">
          <div class="col-span-12">
            <?php require 'include/navbar.php'; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="thankyou-container">
    <main class="card" role="main" aria-labelledby="thank-heading">
      <div class="check" aria-hidden="true">
        <svg width="44" height="44" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M20 6L9 17l-5-5" stroke="#b71c1c" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>

      <h1 id="thank-heading">Thank you — we received your message</h1>
      <p class="lead">Thanks for contacting us. One of our team members will review your message and reach out within a few hours.</p>

      <div class="card-row">
        <a class="cta" href="/" title="Return to home">Return to Home</a>
        <a class="secondary" href="/contact" title="View contact page">View contact page</a>
      </div>

      <p class="meta">If you need immediate assistance, please email <a href="mailto:support@bookauthorworld.com">support@bookauthorworld.com</a>.</p>
    </main>
  </div>

  <?php require 'include/footer.php'; ?>
</body>