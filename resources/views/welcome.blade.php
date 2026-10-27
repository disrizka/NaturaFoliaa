<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PT. Natura Folia — Briket Arang Tempurung Kelapa Premium</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
  :root{
    --paper:#FFFFFF;
    --paper-soft:#F7F8F4;
    --navy:#10241A;
    --pine:#1C3829;
    --ember:#D9712C;
    --ember-soft:#FBDFC4;
    --gold:#A98A4E;
    --line:#E7E5DC;
    --grey-text:#5C6258;
    --dot-green:#2FBF8F;
    --dot-blue:#6C7BF0;
  }
  *{margin:0;padding:0;box-sizing:border-box;}
  html{scroll-behavior:smooth;}
  body{
    background:var(--paper);
    color:var(--navy);
    font-family:'Inter', sans-serif;
    font-weight:400;
    overflow-x:hidden;
  }
  h1,h2,h3,h4{
    font-family:'Poppins', sans-serif;
    font-weight:700;
    color:var(--navy);
    line-height:1.08;
  }
  a{color:inherit; text-decoration:none;}
  img{max-width:100%; display:block;}
  .wrap{max-width:1240px; margin:0 auto; padding:0 32px;}
  @media (max-width:640px){ .wrap{padding:0 20px;} }

  /* ---------- NAV ---------- */
  header{ padding:26px 0 0; position:relative; z-index:10; }
  nav{
    max-width:1240px; margin:0 auto; padding:0 32px;
    display:flex; align-items:center; justify-content:space-between; gap:20px;
  }
  .logo{ display:flex; align-items:center; gap:10px; }
  .logo-mark{ width:38px; height:38px; flex-shrink:0; }
  .logo-text{ font-family:'Poppins', sans-serif; font-weight:800; font-size:1.15rem; color:var(--navy); line-height:1.1; }
  .logo-text small{ display:block; font-family:'Inter',sans-serif; font-weight:400; font-size:0.6rem; letter-spacing:0.08em; color:var(--grey-text); text-transform:uppercase; }
  .navlinks{ display:flex; gap:34px; font-size:0.92rem; font-weight:500; }
  .navlinks a{ color:var(--navy); opacity:0.75; transition:opacity .2s, color .2s; }
  .navlinks a.active{ color:var(--ember); opacity:1; }
  .navlinks a:hover{ opacity:1; }
  .nav-right{ display:flex; align-items:center; gap:22px; }
  .nav-phone{ text-align:right; font-size:0.78rem; line-height:1.3; display:none; }
  .nav-phone .lbl{ color:var(--grey-text); font-weight:500; }
  .nav-phone .num{ color:var(--ember); font-weight:700; }
  @media (min-width:1040px){ .nav-phone{ display:block; } }
  .nav-cta{
    background:var(--paper); border:1px solid var(--line); color:var(--navy);
    padding:13px 24px; border-radius:30px; font-size:0.82rem; font-weight:600; letter-spacing:0.02em;
    box-shadow:0 4px 18px rgba(16,36,26,0.07);
    transition:background .2s, color .2s, border-color .2s;
    white-space:nowrap;
  }
  .nav-cta:hover{ background:var(--navy); color:#fff; border-color:var(--navy); }
  .burger{ display:none; font-size:1.4rem; cursor:pointer; }
  @media (max-width:880px){ .navlinks{ display:none; } .burger{ display:block; } }

  /* ---------- HERO ---------- */
  .hero{ position:relative; padding:60px 0 90px; overflow:visible; }
  .hero-grid{
    display:grid; grid-template-columns:1fr 1fr; gap:40px; align-items:center;
    position:relative; z-index:2;
  }
  @media (max-width:960px){ .hero-grid{ grid-template-columns:1fr; } }

  .eyebrow{
    display:flex; align-items:center; gap:10px;
    font-size:0.78rem; font-weight:700; letter-spacing:0.14em; text-transform:uppercase;
    color:var(--navy); margin-bottom:26px;
  }
  .dot{ width:7px; height:7px; border-radius:50%; display:inline-block; }
  .dot.g{ background:var(--dot-green); }
  .dot.e{ background:var(--ember); }
  .dot.b{ background:var(--dot-blue); }

  .hero h1{
    font-size:clamp(2.6rem, 4.6vw, 4rem);
    letter-spacing:-0.01em;
  }
  .hero h1 .accent-dot{ color:var(--ember); }
  .hero p.lead{
    margin-top:28px; font-size:1.08rem; line-height:1.65; color:var(--grey-text);
    max-width:480px; font-weight:400;
  }
  .hero-actions{ display:flex; align-items:center; gap:24px; margin-top:42px; flex-wrap:wrap; position:relative; }
  .btn-pill{
    background:linear-gradient(95deg, var(--pine) 0%, var(--ember) 100%);
    color:#fff; padding:18px 40px; border-radius:50px;
    font-weight:700; font-size:0.92rem; letter-spacing:0.02em;
    box-shadow:0 14px 30px -8px rgba(28,56,41,0.45);
    transition:transform .2s, box-shadow .2s;
    position:relative;
  }
  .btn-pill:hover{ transform:translateY(-2px); box-shadow:0 18px 36px -8px rgba(28,56,41,0.55); }
  .btn-text{ font-weight:700; font-size:0.92rem; color:var(--navy); letter-spacing:0.02em; border-bottom:2px solid var(--navy); padding-bottom:3px; }
  .btn-text:hover{ color:var(--ember); border-color:var(--ember); }
  .floating-dot{ position:absolute; width:9px; height:9px; border-radius:50%; }

  /* hero illustration */
  .hero-art{ position:relative; height:520px; display:flex; align-items:center; justify-content:center; }
  .blob{
    position:absolute; inset:0; margin:auto; width:88%; height:96%;
    background:var(--ember-soft);
    border-radius:62% 38% 55% 45% / 50% 45% 55% 50%;
    z-index:0;
  }
  .art-svg{ position:relative; z-index:1; width:92%; height:auto; }
  .free-tag{
    position:absolute; top:6px; right:18px; background:#fff; border-radius:30px;
    padding:12px 22px; box-shadow:0 10px 30px rgba(16,36,26,0.12);
    font-size:0.75rem; line-height:1.35; z-index:3; display:none;
  }
  @media (min-width:960px){ .free-tag{ display:block; } }
  .free-tag .l1{ color:var(--grey-text); font-weight:500; }
  .free-tag .l2{ color:var(--ember); font-weight:700; }

  /* ---------- TRUST STRIP ---------- */
  .trust{ border-top:1px solid var(--line); border-bottom:1px solid var(--line); padding:28px 0; background:var(--paper-soft); }
  .trust .wrap{ display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:18px; font-size:0.82rem; font-weight:500; color:var(--grey-text); }
  .trust b{ color:var(--navy); font-weight:700; }

  /* ---------- SECTION shared ---------- */
  section{ padding:120px 0; position:relative; }
  .section-head{ max-width:620px; margin-bottom:60px; }
  .section-head .eyebrow{ margin-bottom:16px; }
  .section-head h2{ font-size:clamp(1.9rem,3.2vw,2.5rem); }
  .section-head p{ margin-top:18px; color:var(--grey-text); line-height:1.65; font-size:1.02rem; }

  /* ABOUT */
  .about-grid{ display:grid; grid-template-columns:1fr 1fr; gap:70px; align-items:start; }
  @media (max-width:880px){ .about-grid{ grid-template-columns:1fr; gap:40px; } }
  .about-copy p{ color:var(--grey-text); line-height:1.75; font-size:1.02rem; margin-bottom:18px; }
  .about-copy strong{ color:var(--pine); font-weight:600; }
  .why-grid{ display:grid; grid-template-columns:1fr 1fr; gap:1px; background:var(--line); border:1px solid var(--line); border-radius:18px; overflow:hidden; }
  @media (max-width:480px){ .why-grid{ grid-template-columns:1fr; } }
  .why-item{ background:#fff; padding:28px 26px; }
  .why-item .ico{ width:38px; height:38px; border-radius:10px; background:var(--ember-soft); display:flex; align-items:center; justify-content:center; margin-bottom:16px; font-size:1.1rem; }
  .why-item h4{ font-size:1.02rem; margin-bottom:8px; font-weight:600; }
  .why-item p{ color:var(--grey-text); font-size:0.88rem; line-height:1.55; }

  /* PRODUCTS */
  .products{ background:var(--paper-soft); }
  .product-grid{ display:grid; grid-template-columns:repeat(3,1fr); gap:22px; }
  @media (max-width:880px){ .product-grid{ grid-template-columns:repeat(2,1fr); } }
  @media (max-width:560px){ .product-grid{ grid-template-columns:1fr; } }
  .product-card{
    background:#fff; border:1px solid var(--line); border-radius:18px; padding:34px 28px;
    transition:transform .25s, box-shadow .25s; min-height:200px;
    display:flex; flex-direction:column; justify-content:flex-end;
  }
  .product-card:hover{ transform:translateY(-4px); box-shadow:0 18px 36px rgba(16,36,26,0.08); }
  .product-card .pico{ width:44px; height:44px; border-radius:12px; background:var(--ember-soft); margin-bottom:30px; }
  .product-card h4{ font-size:1.08rem; margin-bottom:8px; font-weight:600; }
  .product-card p{ font-size:0.88rem; color:var(--grey-text); line-height:1.55; }

  /* SPECS */
  .spec-table-wrap{ overflow-x:auto; border:1px solid var(--line); border-radius:18px; }
  table.specs-table{ width:100%; border-collapse:collapse; min-width:680px; }
  table.specs-table th, table.specs-table td{ padding:18px 26px; text-align:left; border-bottom:1px solid var(--line); font-size:0.92rem; }
  table.specs-table th{ font-size:0.74rem; letter-spacing:0.06em; text-transform:uppercase; color:var(--ember); font-weight:700; background:var(--paper-soft); }
  table.specs-table td{ color:var(--grey-text); }
  table.specs-table tr:last-child td{ border-bottom:none; }
  table.specs-table td.label{ color:var(--navy); font-weight:600; }

  /* PROCESS */
  .process{ background:var(--paper-soft); }
  .process-grid{ display:grid; grid-template-columns:repeat(4,1fr); gap:22px; }
  @media (max-width:880px){ .process-grid{ grid-template-columns:repeat(2,1fr); } }
  @media (max-width:560px){ .process-grid{ grid-template-columns:1fr; } }
  .process-step{ background:#fff; border:1px solid var(--line); border-radius:18px; padding:30px 26px; }
  .process-step .stepnum{ font-family:'Poppins',sans-serif; font-weight:700; color:var(--ember); font-size:1.4rem; margin-bottom:14px; }
  .process-step h4{ font-size:1.02rem; font-weight:600; margin-bottom:8px; }
  .process-step p{ font-size:0.88rem; color:var(--grey-text); line-height:1.55; }

  /* CERT */
  .cert-grid{ display:grid; grid-template-columns:1fr 1fr; gap:22px; }
  @media (max-width:700px){ .cert-grid{ grid-template-columns:1fr; } }
  .cert-card{ background:var(--paper-soft); border-radius:18px; padding:38px; }
  .cert-card .tag{ font-size:0.72rem; font-weight:700; letter-spacing:0.08em; text-transform:uppercase; color:var(--ember); }
  .cert-card h4{ margin-top:14px; font-size:1.2rem; font-weight:600; }
  .cert-card p{ margin-top:10px; color:var(--grey-text); font-size:0.9rem; line-height:1.6; }

  /* CONTACT */
  .contact{ background:var(--navy); border-radius:32px; max-width:1240px; margin:0 auto; padding:80px 60px; position:relative; overflow:hidden; }
  @media (max-width:640px){ .contact{ padding:60px 28px; border-radius:20px; } }
  .contact::before{ content:''; position:absolute; right:-120px; top:-120px; width:340px; height:340px; border-radius:50%; background:radial-gradient(circle, rgba(217,113,44,0.35), transparent 70%); }
  .contact-inner{ text-align:center; max-width:640px; margin:0 auto; position:relative; z-index:1; }
  .contact .eyebrow{ justify-content:center; color:var(--ember-soft); }
  .contact h2{ font-size:clamp(2rem,3.6vw,2.8rem); color:#fff; }
  .contact p{ margin:20px auto 42px; color:rgba(255,255,255,0.7); font-size:1.04rem; max-width:480px; line-height:1.65; }
  .contact-actions{ display:flex; gap:16px; justify-content:center; flex-wrap:wrap; }
  .contact-card{
    display:flex; flex-direction:column; align-items:flex-start; gap:2px;
    border:1px solid rgba(255,255,255,0.18); padding:16px 24px; border-radius:14px;
    font-size:0.95rem; color:#fff; transition:border-color .2s, background .2s; text-align:left;
  }
  .contact-card:hover{ border-color:var(--ember); background:rgba(255,255,255,0.05); }
  .contact-card .sub{ font-size:0.74rem; color:rgba(255,255,255,0.55); font-weight:500; }

  /* FOOTER */
  footer{ padding:60px 0 30px; }
  .footer-grid{ display:grid; grid-template-columns:1.4fr 1fr 1fr 1fr; gap:40px; }
  @media (max-width:780px){ .footer-grid{ grid-template-columns:1fr 1fr; } }
  @media (max-width:480px){ .footer-grid{ grid-template-columns:1fr; } }
  .footer-grid h5{ font-size:0.72rem; text-transform:uppercase; letter-spacing:0.1em; color:var(--ember); margin-bottom:18px; font-weight:700; }
  .footer-grid ul{ list-style:none; }
  .footer-grid li{ margin-bottom:10px; }
  .footer-grid a{ color:var(--grey-text); font-size:0.92rem; transition:color .2s; }
  .footer-grid a:hover{ color:var(--pine); }
  .footer-logo{ display:flex; align-items:center; gap:10px; margin-bottom:14px; }
  .footer-grid p.desc{ color:var(--grey-text); font-size:0.9rem; line-height:1.6; max-width:280px; }
  .footer-bottom{ margin-top:60px; padding-top:24px; border-top:1px solid var(--line); display:flex; justify-content:space-between; flex-wrap:wrap; gap:10px; font-size:0.8rem; color:var(--grey-text); }

  ::selection{ background:var(--ember); color:#fff; }
  @media (prefers-reduced-motion: reduce){ *{ transition:none !important; } }
</style>
</head>
<body>

<header>
  <nav class="wrap">
    <div class="logo">
      <svg class="logo-mark" viewBox="0 0 40 40" fill="none">
        <circle cx="14" cy="14" r="9" fill="#1C3829"/>
        <circle cx="26" cy="14" r="9" fill="#D9712C"/>
        <circle cx="14" cy="26" r="9" fill="#D9712C" fill-opacity="0.55"/>
        <circle cx="26" cy="26" r="9" fill="#1C3829" fill-opacity="0.7"/>
      </svg>
      <div class="logo-text">NATURA FOLIA<small>Coconut Charcoal Co.</small></div>
    </div>
    <div class="navlinks">
      <a href="#beranda" class="active">Beranda</a>
      <a href="#produk">Produk</a>
      <a href="#spesifikasi">Spesifikasi</a>
      <a href="#proses">Proses</a>
      <a href="#kontak">Kontak</a>
    </div>
    <div class="nav-right">
      <div class="nav-phone">
        <div class="lbl">Konsultasi Gratis</div>
        <div class="num">+62 813-1535-3425</div>
      </div>
      <a href="https://wa.me/6281315353425" class="nav-cta">MULAI PESAN</a>
    </div>
    <div class="burger">☰</div>
  </nav>
</header>

<!-- HERO -->
<section class="hero" id="beranda">
  <div class="wrap hero-grid">
    <div>
      <div class="eyebrow"><span class="dot g"></span> SOLUSI BARA ALAMI UNTUK SEMUA</div>
      <h1>Petualangan<br>panas alami dari<br>tempurung <span class="accent-dot">kelapa</span></h1>
      <p class="lead">Kami memproduksi briket arang tempurung kelapa kelas ekspor — terbakar merata, asap minim, tanpa menebang satu pohon pun.</p>
      <div class="hero-actions">
        <a href="#kontak" class="btn-pill">MINTA PENAWARAN</a>
        <a href="#produk" class="btn-text">LIHAT PRODUK</a>
      </div>
    </div>
    <div class="hero-art">
      <div class="free-tag"><div class="l1">Konsultasi Gratis</div><div class="l2">+62 813-1535-3425</div></div>
      <div class="blob"></div>
      <svg class="art-svg" viewBox="0 0 520 480" fill="none" xmlns="http://www.w3.org/2000/svg">
        <!-- grill base -->
        <ellipse cx="260" cy="430" rx="160" ry="14" fill="#1C3829" opacity="0.08"/>
        <rect x="150" y="300" width="220" height="90" rx="14" fill="#10241A"/>
        <rect x="150" y="300" width="220" height="14" rx="7" fill="#2A4636"/>
        <!-- grill legs -->
        <rect x="170" y="388" width="10" height="42" rx="3" fill="#10241A"/>
        <rect x="340" y="388" width="10" height="42" rx="3" fill="#10241A"/>
        <!-- charcoal briquettes glowing -->
        <g>
          <rect x="180" y="318" width="36" height="36" rx="6" fill="#3A2A1B"/>
          <rect x="180" y="318" width="36" height="36" rx="6" fill="#D9712C" opacity="0.5"/>
          <rect x="222" y="324" width="36" height="36" rx="6" fill="#3A2A1B" transform="rotate(8 240 342)"/>
          <rect x="222" y="324" width="36" height="36" rx="6" fill="#FBDFC4" opacity="0.5" transform="rotate(8 240 342)"/>
          <rect x="264" y="318" width="36" height="36" rx="6" fill="#3A2A1B"/>
          <rect x="264" y="318" width="36" height="36" rx="6" fill="#D9712C" opacity="0.55"/>
          <rect x="306" y="326" width="34" height="34" rx="6" fill="#3A2A1B" transform="rotate(-6 323 343)"/>
        </g>
        <!-- smoke -->
        <path d="M210 300 C200 270 230 260 220 230 C212 208 232 196 224 170" stroke="#C9C2B0" stroke-width="6" stroke-linecap="round" fill="none" opacity="0.6"/>
        <path d="M300 300 C312 274 286 262 296 234 C304 212 284 200 294 176" stroke="#C9C2B0" stroke-width="6" stroke-linecap="round" fill="none" opacity="0.45"/>
        <!-- coconut shell pile -->
        <circle cx="110" cy="396" r="26" fill="#5A4435"/>
        <circle cx="142" cy="404" r="20" fill="#3A2A1B"/>
        <path d="M96 388 Q110 374 124 388" stroke="#1C140E" stroke-width="3" fill="none" opacity="0.5"/>
        <!-- person silhouette tending grill -->
        <circle cx="402" cy="166" r="38" fill="#F3D9B8"/>
        <path d="M368 152 Q372 122 402 120 Q434 122 436 152 Q436 142 402 140 Q372 142 368 152Z" fill="#10241A"/>
        <path d="M340 360 Q336 250 380 210 Q400 196 420 210 Q458 244 458 360 Z" fill="#D9712C"/>
        <path d="M380 210 Q400 196 420 210" stroke="#10241A" stroke-width="3" fill="none" opacity="0.3"/>
        <!-- arm holding tongs -->
        <path d="M412 250 Q452 268 452 312" stroke="#F3D9B8" stroke-width="18" stroke-linecap="round" fill="none"/>
        <path d="M452 312 L470 332" stroke="#10241A" stroke-width="6" stroke-linecap="round"/>
        <path d="M452 312 L436 332" stroke="#10241A" stroke-width="6" stroke-linecap="round"/>
        <!-- face -->
        <circle cx="390" cy="162" r="3" fill="#10241A"/>
        <circle cx="414" cy="162" r="3" fill="#10241A"/>
        <path d="M392 178 Q402 186 412 178" stroke="#10241A" stroke-width="3" fill="none" stroke-linecap="round"/>
      </svg>
    </div>
  </div>
  <div class="floating-dot" style="background:var(--dot-blue); top:-6px; right:80px;"></div>
  <div class="floating-dot" style="background:var(--ember); top:140px; left:-2px;"></div>
  <div class="floating-dot" style="background:var(--dot-green); top:260px; left:22px;"></div>
</section>

<div class="trust">
  <div class="wrap">
    <div><b>30+</b> mitra lokal &amp; global</div>
    <div><b>0</b> pohon ditebang untuk produksi</div>
    <div><b>100%</b> tempurung kelapa alami</div>
    <div><b>3</b> pulau sumber bahan baku</div>
  </div>
</div>

<!-- ABOUT -->
<section id="tentang">
  <div class="wrap about-grid">
    <div class="about-copy">
      <div class="eyebrow"><span class="dot e"></span> TENTANG KAMI</div>
      <h2 style="margin-bottom:24px; font-size:clamp(1.7rem,3vw,2.2rem);">Diolah dari sisa, bukan dari kerusakan.</h2>
      <p><strong>PT. Natura Folia</strong> mengolah tempurung kelapa matang dari kebun rakyat di Sulawesi, Sumatera, dan Jawa menjadi briket arang berkualitas ekspor.</p>
      <p>Setiap batch melewati pembakaran terkontrol, pengepresan presisi, dan pengujian laboratorium sebelum dikemas — memastikan briket terbakar merata dari awal hingga akhir.</p>
    </div>
    <div class="why-grid">
      <div class="why-item"><div class="ico">🌱</div><h4>Tanpa Tebang Pohon</h4><p>100% dari tempurung kelapa, sumber daya terbarukan.</p></div>
      <div class="why-item"><div class="ico">🔥</div><h4>Panas Lebih Lama</h4><p>Terbakar stabil hingga 6 jam, cocok untuk shisha & BBQ.</p></div>
      <div class="why-item"><div class="ico">✨</div><h4>Abu Minimal</h4><p>Sisa abu di bawah 3%, lebih sedikit waktu membersihkan.</p></div>
      <div class="why-item"><div class="ico">📦</div><h4>Kemasan Fleksibel</h4><p>Desain kemasan custom gratis sesuai brand Anda.</p></div>
    </div>
  </div>
</section>

<!-- PRODUCTS -->
<section class="products" id="produk">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow"><span class="dot g"></span> LINI PRODUK</div>
      <h2>Lima bentuk, satu standar kualitas.</h2>
      <p>Dari kubus untuk pasar harian hingga heksagonal khusus shisha — setiap bentuk dirancang untuk karakter pembakaran yang berbeda.</p>
    </div>
    <div class="product-grid">
      <div class="product-card"><div class="pico"></div><h4>Cube 25/26</h4><p>Briket kubus standar untuk penyalaan cepat dan pembakaran konsisten.</p></div>
      <div class="product-card"><div class="pico"></div><h4>Cube 15</h4><p>Versi lebih kecil, cocok untuk porsi personal sehari-hari.</p></div>
      <div class="product-card"><div class="pico"></div><h4>Hexagonal Shisha</h4><p>Permukaan kontak lebih luas, panas lebih merata untuk shisha.</p></div>
      <div class="product-card"><div class="pico"></div><h4>Hexagonal BBQ</h4><p>Daya bakar tinggi hingga 6 jam, andalan sesi panggang panjang.</p></div>
      <div class="product-card"><div class="pico"></div><h4>Lump Charcoal Alami</h4><p>Arang tanpa cetakan, aroma khas untuk panggangan kaya rasa.</p></div>
      <div class="product-card" style="background:var(--paper-soft);"><h4>Butuh bentuk khusus?</h4><p>Kami menerima permintaan custom shape sesuai kebutuhan Anda. <a href="#kontak" style="color:var(--ember); font-weight:600;">Diskusikan →</a></p></div>
    </div>
  </div>
</section>

<!-- SPECS -->
<section id="spesifikasi">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow"><span class="dot e"></span> SPESIFIKASI TEKNIS</div>
      <h2>Tiga kelas, terukur dan teruji.</h2>
      <p>Setiap kelas melalui pengujian laboratorium internal sebelum lolos pengemasan.</p>
    </div>
    <div class="spec-table-wrap">
      <table class="specs-table">
        <thead><tr><th>Parameter</th><th>Grade A</th><th>Premium Grade</th><th>BBQ Charcoal</th></tr></thead>
        <tbody>
          <tr><td class="label">Aroma</td><td>Tidak berbau</td><td>Tidak berbau</td><td>Aroma kayu alami</td></tr>
          <tr><td class="label">Bahan</td><td>100% kelapa</td><td>100% kelapa</td><td>Campuran kayu, heksagonal</td></tr>
          <tr><td class="label">Waktu Bakar</td><td>1.5–2 jam</td><td>2 jam</td><td>6 jam</td></tr>
          <tr><td class="label">Kalori</td><td>7000–7500</td><td>7000–7500</td><td>7000–7500</td></tr>
          <tr><td class="label">Kadar Air</td><td>&lt; 5%</td><td>&lt; 5%</td><td>&lt; 5%</td></tr>
          <tr><td class="label">Kadar Abu</td><td>2–2.5%</td><td>1.7–2%</td><td>&lt; 3%</td></tr>
          <tr><td class="label">Fixed Carbon</td><td>&gt; 80</td><td>&gt; 80</td><td>—</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section class="process" id="proses">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow"><span class="dot g"></span> DARI KEBUN KE KEMASAN</div>
      <h2>Proses produksi yang terjaga di setiap tahap.</h2>
    </div>
    <div class="process-grid">
      <div class="process-step"><div class="stepnum">01</div><h4>Pengumpulan Tempurung</h4><p>Dikumpulkan dari petani mitra di Sulawesi, Sumatera, dan Jawa.</p></div>
      <div class="process-step"><div class="stepnum">02</div><h4>Karbonisasi Terkontrol</h4><p>Pembakaran tungku tertutup menghasilkan fixed carbon tinggi.</p></div>
      <div class="process-step"><div class="stepnum">03</div><h4>Pencetakan & Pengeringan</h4><p>Dicetak sesuai bentuk pesanan, dikeringkan hingga kadar air ideal.</p></div>
      <div class="process-step"><div class="stepnum">04</div><h4>Uji Lab & Pengemasan</h4><p>Diuji laboratorium sebelum dikemas sesuai desain brand Anda.</p></div>
    </div>
  </div>
</section>

<!-- CERT -->
<section id="sertifikasi">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow"><span class="dot e"></span> SERTIFIKASI & JAMINAN</div>
      <h2>Diaudit, diuji, dan dijamin.</h2>
    </div>
    <div class="cert-grid">
      <div class="cert-card"><div class="tag">PENILAIAN MUTU</div><h4>Dinilai oleh Beckjorindo</h4><p>Kualitas produk dievaluasi independen untuk konsistensi setiap pengiriman.</p></div>
      <div class="cert-card"><div class="tag">AUDIT FASILITAS</div><h4>Pabrik Diaudit oleh Carsurin</h4><p>Fasilitas produksi diaudit berkala untuk standar keamanan dan ekspor.</p></div>
      <div class="cert-card"><div class="tag">JAMINAN KEPUASAN</div><h4>Garansi 100% Kepuasan</h4><p>Kami akan memperbaiki jika produk tidak sesuai ekspektasi Anda.</p></div>
      <div class="cert-card"><div class="tag">KEMASAN</div><h4>Desain Kemasan Gratis</h4><p>Kustomisasi kemasan tanpa biaya tambahan sesuai identitas brand.</p></div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="kontak">
  <div class="wrap">
    <div class="contact">
      <div class="contact-inner">
        <div class="eyebrow"><span class="dot e"></span> MULAI KERJA SAMA</div>
        <h2>Siap memesan, atau ingin sampel dulu?</h2>
        <p>Tim kami siap membantu menentukan grade dan bentuk briket yang paling sesuai dengan kebutuhan pasar Anda.</p>
        <div class="contact-actions">
          <a href="https://wa.me/6281315353425" class="contact-card"><span>+62 813-1535-3425</span><span class="sub">Chat via WhatsApp</span></a>
          <a href="mailto:zakiadzimsantoso@gmail.com" class="contact-card"><span>zakiadzimsantoso@gmail.com</span><span class="sub">Kirim email penawaran</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<footer>
  <div class="wrap footer-grid">
    <div>
      <div class="footer-logo">
        <svg width="32" height="32" viewBox="0 0 40 40" fill="none">
          <circle cx="14" cy="14" r="9" fill="#1C3829"/><circle cx="26" cy="14" r="9" fill="#D9712C"/>
          <circle cx="14" cy="26" r="9" fill="#D9712C" fill-opacity="0.55"/><circle cx="26" cy="26" r="9" fill="#1C3829" fill-opacity="0.7"/>
        </svg>
        <span style="font-family:'Poppins',sans-serif; font-weight:800; font-size:1.1rem;">NATURA FOLIA</span>
      </div>
      <p class="desc">Produsen briket arang tempurung kelapa premium asal Indonesia, untuk pasar lokal dan ekspor.</p>
    </div>
    <div><h5>Produk</h5><ul><li><a href="#produk">Cube 25/26</a></li><li><a href="#produk">Cube 15</a></li><li><a href="#produk">Hexagonal Shisha</a></li><li><a href="#produk">Hexagonal BBQ</a></li></ul></div>
    <div><h5>Perusahaan</h5><ul><li><a href="#tentang">Tentang Kami</a></li><li><a href="#proses">Proses Produksi</a></li><li><a href="#sertifikasi">Sertifikasi</a></li><li><a href="#kontak">Kontak</a></li></ul></div>
    <div><h5>Kontak</h5><ul><li><a href="https://wa.me/6281315353425">+62 813-1535-3425</a></li><li><a href="mailto:zakiadzimsantoso@gmail.com">zakiadzimsantoso@gmail.com</a></li></ul></div>
  </div>
  <div class="wrap footer-bottom">
    <span>© 2026 PT. Natura Folia. Seluruh hak cipta dilindungi.</span>
    <span>Dibuat dengan bahan baku 100% tempurung kelapa.</span>
  </div>
</footer>

</body>
</html>