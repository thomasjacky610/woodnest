<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta name="description" content="WoodNest — solid wood furniture built to last a lifetime. Sofas, beds, dining tables, storage, and outdoor pieces for Canadian and North American homes."/>
<title>WoodNest — Premium Solid Wood Furniture | WoodNest</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body><nav class="site-nav" id="nav"><div class="nav-inner"><a href="index.html" class="logo">Wood<em>Nest</em></a><ul class="nav-links"><li><a href="index.html" class="on">Home</a></li><li><a href="sofas.html">Sofas</a></li><li><a href="beds.html">Beds</a></li><li><a href="dining.html">Dining</a></li><li><a href="storage.html">Storage</a></li><li><a href="journal.html">Journal</a></li><li><a href="about.html">About</a></li></ul><a href="contact.html" class="nav-cta">Contact Us</a><button class="ham" onclick="document.getElementById('mnav').classList.toggle('open')">☰</button></div><div class="mob-nav" id="mnav"><a href="index.html">Home</a><a href="sofas.html">Sofas</a><a href="beds.html">Beds</a><a href="dining.html">Dining</a><a href="storage.html">Storage</a><a href="journal.html">Journal</a><a href="about.html">About</a><a href="contact.html">Contact</a></div></nav>
<!-- HERO — editorial cream, large text, 3-image strip below -->
<section class="hero">
  <div class="hero-text-zone">
    <span class="hero-eyebrow">New Collection — Autumn 2025</span>
    <h1 class="hero-heading">Furniture<br><em>Worth Keeping.</em></h1>
    <p class="hero-sub">Solid materials, considered design, honest construction — pieces that grow more beautiful with every year of daily use.</p>
    <div class="hero-actions">
      <a href="sofas.html" class="btn btn-dark">Shop All Collections</a>
      <a href="about.html" class="btn btn-outline">Our Story</a>
    </div>
  </div>
  <div class="hero-strip">
    <div class="hero-strip-cell">
      <!-- IMAGE: img/living.jpg → Wide lifestyle shot of a living room with sofa and coffee table, warm natural light (1200×600px) -->
      <img src="img/living.jpg" alt="WoodNest living room — Chester sofa in natural linen"/>
    </div>
    <div class="hero-strip-cell">
      <!-- IMAGE: img/bedroom.jpg → Bedroom scene with timber bed frame, soft neutral bedding (1200×600px) -->
      <img src="img/bedroom.jpg" alt="WoodNest bedroom — Elm bed frame in solid oak"/>
    </div>
    <div class="hero-strip-cell">
      <!-- IMAGE: img/dining.jpg → Dining room with long wooden table, chairs, soft overhead light (1200×600px) -->
      <img src="img/dining.jpg" alt="WoodNest dining room — Oak dining table for six"/>
    </div>
  </div>
</section>

<!-- CATEGORIES — horizontal scroll tiles -->
<section class="sec">
  <div class="wrap">
    <div style="display:flex;justify-content:space-between;align-items:flex-end;margin-bottom:24px;">
      <div><span class="lbl">Browse by Room</span><h2 style="margin:0;">What Are You Looking For?</h2></div>
      <a href="sofas.html" class="btn btn-outline" style="flex-shrink:0;">View All</a>
    </div>
    <div class="cat-scroll-wrap">
      <div class="cat-scroll">
        <a href="sofas.html" class="cat-tile">
          <div class="cat-img"><!-- IMAGE: img/living.jpg → Portrait of a sofa in a styled room (400×560px) --><img src="img/living.jpg" alt="Sofas collection"/></div>
          <div class="cat-tile-name">Sofas &amp; Armchairs</div><div class="cat-tile-count">18 pieces</div>
        </a>
        <a href="beds.html" class="cat-tile">
          <div class="cat-img"><!-- IMAGE: img/bedroom.jpg → Portrait of bed frame with headboard (400×560px) --><img src="img/bedroom.jpg" alt="Beds collection"/></div>
          <div class="cat-tile-name">Beds &amp; Bedroom</div><div class="cat-tile-count">12 pieces</div>
        </a>
        <a href="dining.html" class="cat-tile">
          <div class="cat-img"><!-- IMAGE: img/dining.jpg → Portrait of dining table and chairs (400×560px) --><img src="img/dining.jpg" alt="Dining collection"/></div>
          <div class="cat-tile-name">Dining</div><div class="cat-tile-count">14 pieces</div>
        </a>
        <a href="storage.html" class="cat-tile">
          <div class="cat-img"><!-- IMAGE: img/storage.jpg → Portrait of sideboard or shelving (400×560px) --><img src="img/storage.jpg" alt="Storage collection"/></div>
          <div class="cat-tile-name">Storage</div><div class="cat-tile-count">16 pieces</div>
        </a>
        <a href="outdoor.html" class="cat-tile">
          <div class="cat-img"><!-- IMAGE: img/storage.jpg → Portrait of outdoor bench or garden set (400×560px) --><img src="img/outdoor.jpg" alt="Outdoor collection"/></div>
          <div class="cat-tile-name">Outdoor</div><div class="cat-tile-count">10 pieces</div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- FEATURED PRODUCTS -->
<section class="sec-alt">
  <div class="wrap">
    <div style="display:flex;justify-content:space-between;align-items:flex-end;margin-bottom:28px;">
      <div><span class="lbl">Bestsellers</span><h2 style="margin:0;">Most Loved Pieces</h2></div>
      <a href="sofas.html" class="btn btn-outline" style="flex-shrink:0;">All Products</a>
    </div>
    <div class="prod-grid">
      <div class="prod-card"><div class="prod-img"><div class="prod-badge-wrap"><span class="badge badge-hot">Bestseller</span></div><img src="img/living.jpg" alt="The Chester Sofa" loading="lazy"/></div><div class="prod-body"><div class="prod-cat">Sofas</div><div class="prod-name">The Chester Sofa</div><div class="prod-desc">Kiln-dried hardwood frame, eight-way spring suspension, removable linen covers. Built to last 20 years.</div><div class="prod-foot"><div class="prod-price"><span class="from">From</span> $1,890</div><a href="product-sofa.html" class="prod-link">View →</a></div></div></div>
      <div class="prod-card"><div class="prod-img"><div class="prod-badge-wrap"><span class="badge badge-new">New</span></div><img src="img/bedroom.jpg" alt="Elm Bed Frame" loading="lazy"/></div><div class="prod-body"><div class="prod-cat">Beds</div><div class="prod-name">Elm Bed Frame</div><div class="prod-desc">Solid oak headboard, platform base, no box spring needed. Available in double, queen and king.</div><div class="prod-foot"><div class="prod-price"><span class="from">From</span> $1,490</div><a href="product-bed.html" class="prod-link">View →</a></div></div></div>
      <div class="prod-card"><div class="prod-img"><div class="prod-badge-wrap"><span class="badge badge-hot">Popular</span></div><img src="img/dining.jpg" alt="Oak Dining Table" loading="lazy"/></div><div class="prod-body"><div class="prod-cat">Dining</div><div class="prod-name">Oak Dining Table</div><div class="prod-desc">Solid European oak, mortise-and-tenon joints, hard oil finish. Seats six comfortably.</div><div class="prod-foot"><div class="prod-price"><span class="from">From</span> $1,240</div><a href="product-table.html" class="prod-link">View →</a></div></div></div>
      <div class="prod-card"><div class="prod-img"><img src="img/storage.jpg" alt="Walnut Sideboard" loading="lazy"/></div><div class="prod-body"><div class="prod-cat">Storage</div><div class="prod-name">Walnut Sideboard</div><div class="prod-desc">Three-door solid walnut, brushed brass handles, adjustable interior shelving.</div><div class="prod-foot"><div class="prod-price"><span class="from">From</span> $1,180</div><a href="product-sideboard.html" class="prod-link">View →</a></div></div></div>
      <div class="prod-card"><div class="prod-img"><div class="prod-badge-wrap"><span class="badge badge-hot">Popular</span></div><img src="img/living.jpg" alt="Linen Armchair" loading="lazy"/></div><div class="prod-body"><div class="prod-cat">Sofas</div><div class="prod-name">Linen Armchair</div><div class="prod-desc">Solid beech frame, high-resilience foam, removable linen cover. Fixed or swivel base.</div><div class="prod-foot"><div class="prod-price"><span class="from">From</span> $620</div><a href="product-armchair.html" class="prod-link">View →</a></div></div></div>
      <div class="prod-card"><div class="prod-img"><div class="prod-badge-wrap"><span class="badge badge-sale">Sale</span></div><img src="img/outdoor.jpg" alt="Cedar Outdoor Bench" loading="lazy"/></div><div class="prod-body"><div class="prod-cat">Outdoor</div><div class="prod-name">Cedar Outdoor Bench</div><div class="prod-desc">FSC-certified Western cedar, through-tenon joinery, natural oil finish. Weather-resistant.</div><div class="prod-foot"><div class="prod-price"><span class="from">From</span> $490</div><a href="outdoor.html" class="prod-link">View →</a></div></div></div>
      <div class="prod-card"><div class="prod-img"><img src="img/storage.jpg" alt="Birch Floating Shelf" loading="lazy"/></div><div class="prod-body"><div class="prod-cat">Storage</div><div class="prod-name">Birch Floating Shelf</div><div class="prod-desc">Solid birch, hidden bracket system, two widths. Clean wall installation included.</div><div class="prod-foot"><div class="prod-price"><span class="from">From</span> $280</div><a href="storage.html" class="prod-link">View →</a></div></div></div>
      <div class="prod-card"><div class="prod-img"><img src="img/living.jpg" alt="Byron Velvet Sofa" loading="lazy"/></div><div class="prod-body"><div class="prod-cat">Sofas</div><div class="prod-name">Byron Velvet Sofa</div><div class="prod-desc">Modular configuration, solid beech legs, performance velvet upholstery — 80,000 rubs.</div><div class="prod-foot"><div class="prod-price"><span class="from">From</span> $2,200</div><a href="sofas.html" class="prod-link">View →</a></div></div></div>
    </div>
  </div>
</section>

<!-- WHY WOODNEST -->
<section class="sec">
  <div class="wrap">
    <div style="text-align:center;max-width:520px;margin:0 auto 32px;">
      <span class="lbl">Why WoodNest</span>
      <h2>Built to a Standard, Not a Price</h2>
    </div>
    <div class="why-grid">
      <div class="why-cell"><span class="why-icon">🌲</span><h4>Responsibly Sourced</h4><p>Every timber we use is traceable to FSC-certified forests. We won't use a material we can't fully account for.</p></div>
      <div class="why-cell"><span class="why-icon">🔨</span><h4>Expert Joinery</h4><p>Mortise-and-tenon, dovetail, and tongue-and-groove throughout. No cam locks, no MDF frames, no shortcuts.</p></div>
      <div class="why-cell"><span class="why-icon">🛡</span><h4>12-Year Warranty</h4><p>Every structural component covered for 12 years — no registration, no conditions, no loopholes.</p></div>
      <div class="why-cell"><span class="why-icon">🚚</span><h4>White Glove Delivery</h4><p>Two-person team delivers to the room, assembles, and removes all packaging. Every time.</p></div>
    </div>
  </div>
</section>

<!-- ABOUT SPLIT -->
<div class="about-split" style="border-top:1px solid var(--border);border-bottom:1px solid var(--border);">
  <div class="about-img">
    <!-- IMAGE: img/workshop.jpg → Craftsperson working on furniture in a workshop, natural light (1200×800px) -->
    <img src="img/workshop.jpg" alt="WoodNest craftsperson in workshop"/>
  </div>
  <div class="about-content">
    <span class="lbl">Our Story</span>
    <h2 style="margin-bottom:14px;">Started With a Simple Frustration</h2>
    <p>We built WoodNest because we couldn't find what we were looking for — furniture that was genuinely well made at prices that didn't require a second mortgage. Not veneer on particleboard. Not joints that failed after three years. Just solid, honest, properly built furniture.</p>
    <p>We work directly with small workshops in Portugal, Sweden, and Denmark — craftspeople who use the same joinery methods that produced furniture meant to last centuries. We visit every workshop before placing an order. We sit in every chair. We push on every joint.</p>
    <div class="info-box">🌿 Every piece of timber we sell is FSC-certified and traceable. No old-growth timber. No materials we can't account for.</div>
    <a href="about.html" class="btn btn-dark" style="margin-top:8px;">Read Our Story →</a>
  </div>
</div>

<!-- TESTIMONIALS -->
<section class="sec-alt">
  <div class="wrap">
    <div style="text-align:center;max-width:480px;margin:0 auto 32px;">
      <span class="lbl">Reviews</span>
      <h2>From People Who Live With Our Furniture</h2>
    </div>
    <div class="testi-grid">
      <div class="testi"><div class="testi-stars">★★★★★</div><div class="testi-text">"The Chester sofa arrived in perfect condition and the delivery team were outstanding. Two years later it looks exactly as it did on day one. Worth every dollar."</div><div class="testi-name">Sarah M.</div><div class="testi-loc">Toronto, Ontario</div></div>
      <div class="testi"><div class="testi-stars">★★★★★</div><div class="testi-text">"Finally a dining table that's actually solid wood throughout. The Oak dining table seats eight when we use the leaf and it's been through everything — it still looks beautiful."</div><div class="testi-name">James &amp; Lisa T.</div><div class="testi-loc">Vancouver, BC</div></div>
      <div class="testi"><div class="testi-stars">★★★★★</div><div class="testi-text">"The Elm bed frame is rock solid. No squeaking, no flex, no movement at all. The headboard is genuinely beautiful solid oak. Best furniture purchase I've ever made."</div><div class="testi-name">David K.</div><div class="testi-loc">Austin, TX</div></div>
    </div>
  </div>
</section>

<!-- JOURNAL PREVIEW -->
<section class="sec">
  <div class="wrap">
    <div style="display:flex;justify-content:space-between;align-items:flex-end;margin-bottom:28px;">
      <div><span class="lbl">Journal</span><h2 style="margin:0;">Ideas, Care &amp; Inspiration</h2></div>
      <a href="journal.html" class="btn btn-outline">All Articles</a>
    </div>
    <div class="blog-grid">
      <div class="blog-card"><div class="blog-img"><!-- IMAGE: img/living.jpg → Bright living room with two sofa options side by side (800×500px) --><img src="img/living.jpg" alt="How to choose a sofa"/></div><div class="blog-body"><div class="blog-cat">Buying Advice</div><div class="blog-title"><a href="post-sofa-guide.html">How to Choose the Right Sofa — Without Regretting It Three Years Later</a></div><div class="blog-exc">Frame construction, cushion type, fabric grade — the decisions that actually matter when buying a sofa that will last.</div><div class="blog-meta">June 2025 · 8 min</div></div></div>
      <div class="blog-card"><div class="blog-img"><!-- IMAGE: img/workshop.jpg → Close-up of someone oiling a wooden table surface (800×500px) --><img src="img/workshop.jpg" alt="Caring for solid wood"/></div><div class="blog-body"><div class="blog-cat">Care &amp; Maintenance</div><div class="blog-title"><a href="post-wood-care.html">The Right Way to Care for Solid Wood Furniture</a></div><div class="blog-exc">Oil it, protect it, and treat minor damage at home — everything you need to keep wood furniture looking better every decade.</div><div class="blog-meta">May 2025 · 6 min</div></div></div>
      <div class="blog-card"><div class="blog-img"><!-- IMAGE: img/living.jpg → Small living room styled well with minimal furniture (800×500px) --><img src="img/living.jpg" alt="Furniture for small rooms"/></div><div class="blog-body"><div class="blog-cat">Design</div><div class="blog-title"><a href="journal.html">Furniture for Small Rooms: What Works and What Doesn't</a></div><div class="blog-exc">Scale, proportion, and visual weight — the three principles that determine whether a small room feels cosy or cramped.</div><div class="blog-meta">April 2025 · 5 min</div></div></div>
    </div>
  </div>
</section>

<div class="cta-band"><div class="wrap-sm"><h2>Ready to Find Your Perfect Piece?</h2><p>Browse over 70 furniture pieces or talk to our team — we're here to help you find exactly what your home needs.</p><div style="display:flex;gap:10px;justify-content:center;flex-wrap:wrap;"><a href="sofas.html" class="btn btn-outline-w">Shop All Furniture</a><a href="contact.html" class="btn btn-outline-w">Talk to Us</a></div></div></div>
<footer class="site-footer"><div class="wrap"><div class="ft-grid"><div class="ft-brand"><div class="ft-logo">Wood<em>Nest</em></div><p>Premium furniture crafted to last. Solid materials, expert construction, and designs that stand the test of time. Proudly serving Canadian and North American homes.</p></div><div class="fc"><h5>Collections</h5><ul><li><a href="sofas.html">Sofas & Armchairs</a></li><li><a href="beds.html">Beds & Bedroom</a></li><li><a href="dining.html">Dining</a></li><li><a href="storage.html">Storage</a></li><li><a href="outdoor.html">Outdoor</a></li></ul></div><div class="fc"><h5>Company</h5><ul><li><a href="about.html">About Us</a></li><li><a href="journal.html">Journal</a></li><li><a href="contact.html">Contact</a></li></ul></div><div class="fc"><h5>Legal</h5><ul><li><a href="privacy.html">Privacy Policy</a></li><li><a href="terms.html">Terms of Service</a></li><li><a href="disclaimer.html">Disclaimer</a></li></ul></div></div><div class="ft-bot"><p>&copy; <span id="yr"></span> WoodNest. All rights reserved. &nbsp;|&nbsp; <a href="privacy.html">Privacy</a> &nbsp;|&nbsp; <a href="terms.html">Terms</a> &nbsp;|&nbsp; <a href="disclaimer.html">Disclaimer</a></p><p style="margin-top:4px;">Independent furniture retailer. Not affiliated with any other furniture brand or manufacturer.</p></div></div></footer><script>document.getElementById("yr").textContent=new Date().getFullYear();function fq(b){var i=b.closest(".faq-item"),o=i.classList.contains("open");document.querySelectorAll(".faq-item.open").forEach(function(x){x.classList.remove("open");});if(!o)i.classList.add("open");}function acc(b){var i=b.closest(".accord-item"),o=i.classList.contains("open");document.querySelectorAll(".accord-item.open").forEach(function(x){x.classList.remove("open");});if(!o)i.classList.add("open");}function sub(){var e=document.querySelector(".fg input[type=email]"),m=document.querySelector(".fg textarea");if(e&&m){if(!e.value.trim()||!m.value.trim()){alert("Please fill required fields.");return;}document.getElementById("fok").style.display="block";document.querySelector(".sbtn").disabled=true;}}function switchThumb(el,src){document.getElementById("mainImg").src=src;document.querySelectorAll(".pd-thumb").forEach(function(t){t.classList.remove("on");});el.closest(".pd-thumb").classList.add("on");}function selOpt(el){el.closest(".pd-options").querySelectorAll(".pd-opt").forEach(function(o){o.classList.remove("on");});el.classList.add("on");}</script></body>
</html>
