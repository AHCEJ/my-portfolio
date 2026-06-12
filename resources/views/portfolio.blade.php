<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chris D. La Rosa — IT Portfolio</title>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --ink:     #0D0D0D;
    --paper:   #F7F5F0;
    --mid:     #6B6B6B;
    --accent:  #1A56FF;
    --accent2: #FF3C2F;
    --rule:    #D9D6CF;
    --card:    #FFFFFF;
  }

  html { scroll-behavior: smooth; }

  body {
    font-family: 'Space Grotesk', sans-serif;
    background: var(--paper);
    color: var(--ink);
    line-height: 1.6;
  }

  /* NAV */
  nav {
    position: fixed; top: 0; left: 0; right: 0; z-index: 100;
    display: flex; justify-content: space-between; align-items: center;
    padding: 18px 48px;
    background: var(--paper);
    border-bottom: 1px solid var(--rule);
  }
  .nav-logo {
    font-family: 'Space Mono', monospace;
    font-size: 13px; font-weight: 700; letter-spacing: 0.08em;
    color: var(--ink); text-decoration: none;
  }
  .nav-links { display: flex; gap: 32px; }
  .nav-links a {
    font-size: 13px; color: var(--mid); text-decoration: none;
    letter-spacing: 0.05em; transition: color 0.2s;
  }
  .nav-links a:hover { color: var(--accent); }

  /* PROFILE PHOTO */
  .profile-photo-wrap {
    width: 90px; height: 90px;
    border-radius: 50%;
    overflow: hidden;
    margin-bottom: 28px;
    border: 3px solid var(--accent);
    background: var(--rule);
    position: relative;
    flex-shrink: 0;
  }
  .profile-photo-wrap img {
    width: 100%; height: 100%;
    object-fit: cover;
    display: block;
  }
  /* Fallback initials shown when no photo */
  .profile-initials {
    width: 90px; height: 90px;
    border-radius: 50%;
    background: var(--ink);
    color: var(--paper);
    display: flex; align-items: center; justify-content: center;
    font-family: 'Space Mono', monospace;
    font-size: 22px; font-weight: 700;
    margin-bottom: 28px;
    border: 3px solid var(--accent);
    flex-shrink: 0;
    cursor: pointer;
    position: relative;
    overflow: hidden;
  }
  .profile-initials input[type="file"] {
    position: absolute; inset: 0;
    opacity: 0; cursor: pointer; width: 100%; height: 100%;
  }
  .profile-initials:hover::after {
    content: '📷';
    position: absolute; inset: 0;
    background: rgba(26,86,255,0.85);
    display: flex; align-items: center; justify-content: center;
    font-size: 26px;
    border-radius: 50%;
  }

  /* HERO */
  .hero {
    min-height: 100vh;
    display: grid;
    grid-template-columns: 1fr 1fr;
    padding-top: 72px;
  }
  .hero-left {
    display: flex; flex-direction: column; justify-content: center;
    padding: 80px 48px 80px 48px;
    border-right: 1px solid var(--rule);
  }
  .hero-eyebrow {
    font-family: 'Space Mono', monospace;
    font-size: 11px; letter-spacing: 0.15em; color: var(--mid);
    text-transform: uppercase; margin-bottom: 24px;
  }
  .hero-name {
    font-size: clamp(52px, 6vw, 88px);
    font-weight: 700; line-height: 0.95;
    letter-spacing: -0.03em;
    margin-bottom: 12px;
  }
  .hero-name .accent-dot { color: var(--accent2); }
  .hero-title {
    font-family: 'Space Mono', monospace;
    font-size: 14px; color: var(--accent);
    letter-spacing: 0.08em; margin-bottom: 32px;
  }
  .hero-bio {
    font-size: 17px; color: var(--mid); max-width: 420px;
    line-height: 1.7; margin-bottom: 48px;
  }
  .hero-cta {
    display: inline-flex; align-items: center; gap: 10px;
    background: var(--ink); color: var(--paper);
    padding: 14px 28px; font-size: 14px; font-weight: 600;
    text-decoration: none; letter-spacing: 0.04em;
    transition: background 0.2s;
  }
  .hero-cta:hover { background: var(--accent); }
  .hero-cta-arrow { font-size: 18px; }

  .hero-right {
    display: flex; flex-direction: column; justify-content: flex-end;
    padding: 80px 48px;
    position: relative; overflow: hidden;
  }
  .hero-bg-text {
    position: absolute; top: 50%; left: 50%;
    transform: translate(-50%, -50%) rotate(-15deg);
    font-family: 'Space Mono', monospace;
    font-size: 180px; font-weight: 700;
    color: var(--rule); white-space: nowrap;
    pointer-events: none; user-select: none;
    line-height: 1;
  }
  .hero-stats {
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 1px; background: var(--rule);
    border: 1px solid var(--rule);
    position: relative; z-index: 1;
  }
  .stat-item {
    background: var(--paper);
    padding: 28px 24px;
  }
  .stat-num {
    font-family: 'Space Mono', monospace;
    font-size: 36px; font-weight: 700;
    color: var(--ink); line-height: 1;
    margin-bottom: 6px;
  }
  .stat-num span { color: var(--accent); }
  .stat-label {
    font-size: 12px; color: var(--mid);
    text-transform: uppercase; letter-spacing: 0.1em;
  }
  .hero-tag-row {
    display: flex; gap: 8px; flex-wrap: wrap;
    margin-top: 24px; position: relative; z-index: 1;
  }
  .tag {
    font-family: 'Space Mono', monospace;
    font-size: 11px; padding: 6px 12px;
    border: 1px solid var(--rule);
    color: var(--mid); letter-spacing: 0.06em;
    background: var(--card);
  }

  /* SECTION COMMON */
  section { border-top: 1px solid var(--rule); }
  .section-inner {
    max-width: 1200px; margin: 0 auto;
    padding: 80px 48px;
  }
  .section-header {
    display: flex; justify-content: space-between; align-items: baseline;
    margin-bottom: 48px;
  }
  .section-label {
    font-family: 'Space Mono', monospace;
    font-size: 11px; color: var(--mid);
    text-transform: uppercase; letter-spacing: 0.15em;
  }
  .section-title {
    font-size: clamp(28px, 4vw, 44px);
    font-weight: 700; letter-spacing: -0.02em;
    line-height: 1.1;
  }

  /* ABOUT */
  .about-grid {
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 64px; align-items: start;
  }
  .about-text p {
    font-size: 17px; color: var(--mid); line-height: 1.8;
    margin-bottom: 20px;
  }
  .about-text p strong { color: var(--ink); font-weight: 600; }
  .about-details { display: flex; flex-direction: column; gap: 0; }
  .detail-row {
    display: flex; justify-content: space-between;
    align-items: center;
    padding: 16px 0;
    border-bottom: 1px solid var(--rule);
  }
  .detail-key {
    font-family: 'Space Mono', monospace;
    font-size: 11px; color: var(--mid);
    text-transform: uppercase; letter-spacing: 0.1em;
  }
  .detail-val {
    font-size: 14px; font-weight: 600; color: var(--ink);
  }

  /* SKILLS */
  .skills-grid {
    display: grid; grid-template-columns: repeat(3, 1fr);
    gap: 1px; background: var(--rule);
    border: 1px solid var(--rule);
  }
  .skill-card {
    background: var(--card);
    padding: 32px 28px;
    transition: background 0.2s;
  }
  .skill-card:hover { background: var(--ink); }
  .skill-card:hover .skill-icon,
  .skill-card:hover .skill-name,
  .skill-card:hover .skill-desc { color: var(--paper); }
  .skill-card:hover .skill-bar-fill { background: var(--accent); }
  .skill-icon { font-size: 28px; margin-bottom: 16px; display: block; }
  .skill-name {
    font-size: 15px; font-weight: 600; color: var(--ink);
    margin-bottom: 8px; transition: color 0.2s;
  }
  .skill-desc {
    font-size: 13px; color: var(--mid);
    line-height: 1.5; margin-bottom: 16px;
    transition: color 0.2s;
  }
  .skill-bar {
    height: 2px; background: var(--rule); position: relative;
  }
  .skill-bar-fill {
    height: 100%; background: var(--ink);
    transition: background 0.2s;
  }

  /* PROJECTS */
  .projects-grid {
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 1px; background: var(--rule);
    border: 1px solid var(--rule);
  }
  .project-card {
    background: var(--card); padding: 40px 36px;
    position: relative; overflow: hidden;
    transition: background 0.25s;
  }
  .project-card:hover { background: var(--accent); }
  .project-card:hover .project-num,
  .project-card:hover .project-title,
  .project-card:hover .project-desc,
  .project-card:hover .project-tech span { color: var(--paper); }
  .project-card:hover .project-tech span { border-color: rgba(255,255,255,0.3); }
  .project-num {
    font-family: 'Space Mono', monospace;
    font-size: 11px; color: var(--mid);
    letter-spacing: 0.1em; margin-bottom: 20px;
    transition: color 0.25s;
  }
  .project-title {
    font-size: 22px; font-weight: 700;
    letter-spacing: -0.02em; margin-bottom: 12px;
    transition: color 0.25s;
  }
  .project-desc {
    font-size: 14px; color: var(--mid);
    line-height: 1.7; margin-bottom: 24px;
    transition: color 0.25s;
  }
  .project-tech { display: flex; gap: 8px; flex-wrap: wrap; }
  .project-tech span {
    font-family: 'Space Mono', monospace;
    font-size: 10px; padding: 4px 10px;
    border: 1px solid var(--rule);
    color: var(--mid); letter-spacing: 0.06em;
    transition: color 0.25s, border-color 0.25s;
  }
  .project-arrow {
    position: absolute; bottom: 28px; right: 28px;
    font-size: 24px; opacity: 0;
    transition: opacity 0.25s; color: var(--paper);
  }
  .project-card:hover .project-arrow { opacity: 1; }

  /* EDUCATION */
  .edu-block {
    display: grid; grid-template-columns: 200px 1fr;
    gap: 48px; padding: 40px 0;
    border-bottom: 1px solid var(--rule);
  }
  .edu-year {
    font-family: 'Space Mono', monospace;
    font-size: 13px; color: var(--mid); padding-top: 4px;
  }
  .edu-school { font-size: 20px; font-weight: 700; margin-bottom: 6px; }
  .edu-degree { font-size: 15px; color: var(--accent); font-weight: 500; margin-bottom: 12px; }
  .edu-desc { font-size: 14px; color: var(--mid); line-height: 1.7; }

  /* CONTACT */
  .contact-grid {
    display: grid; grid-template-columns: 1fr 1fr; gap: 64px;
  }
  .contact-headline {
    font-size: clamp(32px, 5vw, 60px);
    font-weight: 700; line-height: 1.0;
    letter-spacing: -0.03em; margin-bottom: 24px;
  }
  .contact-headline .accent { color: var(--accent); }
  .contact-sub { font-size: 16px; color: var(--mid); line-height: 1.7; }
  .contact-links { display: flex; flex-direction: column; gap: 0; justify-content: center; }
  .contact-link {
    display: flex; justify-content: space-between; align-items: center;
    padding: 20px 0; border-bottom: 1px solid var(--rule);
    text-decoration: none; color: var(--ink);
    font-size: 15px; font-weight: 500;
    transition: color 0.2s;
  }
  .contact-link:hover { color: var(--accent); }
  .contact-link-arrow { font-size: 18px; }

  /* FOOTER */
  footer {
    border-top: 1px solid var(--rule);
    padding: 28px 48px;
    display: flex; justify-content: space-between; align-items: center;
  }
  footer p {
    font-family: 'Space Mono', monospace;
    font-size: 11px; color: var(--mid);
    letter-spacing: 0.06em;
  }

  /* RESPONSIVE */
  @media (max-width: 768px) {
    nav { padding: 16px 24px; }
    .nav-links { display: none; }
    .hero { grid-template-columns: 1fr; }
    .hero-left { padding: 60px 24px 40px; border-right: none; }
    .hero-right { padding: 40px 24px 60px; border-top: 1px solid var(--rule); }
    .hero-bg-text { font-size: 80px; }
    .section-inner { padding: 60px 24px; }
    .about-grid { grid-template-columns: 1fr; gap: 40px; }
    .skills-grid { grid-template-columns: 1fr 1fr; }
    .projects-grid { grid-template-columns: 1fr; }
    .edu-block { grid-template-columns: 1fr; gap: 12px; }
    .contact-grid { grid-template-columns: 1fr; gap: 40px; }
    footer { flex-direction: column; gap: 8px; padding: 24px; text-align: center; }
  }

  @media (prefers-reduced-motion: reduce) {
    * { transition: none !important; }
  }
</style>
</head>
<body>

<!-- NAV -->
<nav>
  <a class="nav-logo" href="#">CDL·ROSA</a>
  <div class="nav-links">
    <a href="#about">About</a>
    <a href="#skills">Skills</a>
    <a href="#projects">Projects</a>
    <a href="#education">Education</a>
    <a href="#contact">Contact</a>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="hero-left">
    <!-- Profile Photo: replace 'your-photo.jpg' with your real image path -->
    <div class="profile-photo-wrap">
  <img src="/image/chris.jpg" alt="Chris D. La Rosa">
</div>

    <p class="hero-eyebrow">Available for work · Based in Philippines</p>
    <h1 class="hero-name">Chris D<span class="accent-dot">.</span><br>La Rosa</h1>
    <p class="hero-title">// IT GRADUATE &amp; WEB DEVELOPER</p>
    <p class="hero-bio">
      Fresh graduate with a passion for building clean, functional web applications. 
      Turning ideas into working software, one line of code at a time.
    </p>
    <a href="#contact" class="hero-cta">Get in touch <span class="hero-cta-arrow">→</span></a>
  </div>
  <div class="hero-right">
    <div class="hero-bg-text">IT</div>
    <div class="hero-stats">
      <div class="stat-item">
        <div class="stat-num">26<span>.</span></div>
        <div class="stat-label">Years Old</div>
      </div>
      <div class="stat-item">
        <div class="stat-num">BS<span>IT</span></div>
        <div class="stat-label">Degree</div>
      </div>
      <div class="stat-item">
        <div class="stat-num">4<span>+</span></div>
        <div class="stat-label">Projects Built</div>
      </div>
      <div class="stat-item">
        <div class="stat-num">∞</div>
        <div class="stat-label">Problems to Solve</div>
      </div>
    </div>
    <div class="hero-tag-row">
      <span class="tag">PHP</span>
      <span class="tag">Laravel</span>
      <span class="tag">MySQL</span>
      <span class="tag">JavaScript</span>
      <span class="tag">HTML/CSS</span>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section id="about">
  <div class="section-inner">
    <div class="section-header">
      <div>
        <p class="section-label">01 — About</p>
        <h2 class="section-title">Who I Am</h2>
      </div>
    </div>
    <div class="about-grid">
      <div class="about-text">
        <p>
          I'm <strong>Chris D. La Rosa</strong>, a 26-year-old IT graduate from 
          <strong>Occidental Mindoro State College</strong>. I hold a 
          <strong>Bachelor of Science in Information Technology</strong> and have a 
          strong foundation in web development, database management, and software design.
        </p>
        <p>
          I enjoy building practical web solutions — from simple websites to full-stack 
          web applications. Currently deepening my skills in <strong>Laravel</strong> and 
          modern web development to build real-world projects that solve real problems.
        </p>
        <p>
          I'm eager to grow as a developer, take on freelance work, and eventually 
          build products that make a difference in people's lives.
        </p>
      </div>
      <div class="about-details">
        <div class="detail-row">
          <span class="detail-key">Full Name</span>
          <span class="detail-val">Chris D. La Rosa</span>
        </div>
        <div class="detail-row">
          <span class="detail-key">Age</span>
          <span class="detail-val">26 years old</span>
        </div>
        <div class="detail-row">
          <span class="detail-key">Gender</span>
          <span class="detail-val">Male</span>
        </div>
        <div class="detail-row">
          <span class="detail-key">Degree</span>
          <span class="detail-val">BS Information Technology</span>
        </div>
        <div class="detail-row">
          <span class="detail-key">School</span>
          <span class="detail-val">OccMSC</span>
        </div>
        <div class="detail-row">
          <span class="detail-key">Location</span>
          <span class="detail-val">Occidental Mindoro, PH</span>
        </div>
        <div class="detail-row">
          <span class="detail-key">Status</span>
          <span class="detail-val">Open to Work ✅</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SKILLS -->
<section id="skills">
  <div class="section-inner">
    <div class="section-header">
      <div>
        <p class="section-label">02 — Skills</p>
        <h2 class="section-title">What I Work With</h2>
      </div>
    </div>
    <div class="skills-grid">
      <div class="skill-card">
        <span class="skill-icon">🐘</span>
        <div class="skill-name">PHP / Laravel</div>
        <div class="skill-desc">Backend web development using PHP and the Laravel framework for building robust applications.</div>
        <div class="skill-bar"><div class="skill-bar-fill" style="width:80%"></div></div>
      </div>
      <div class="skill-card">
        <span class="skill-icon">🗄️</span>
        <div class="skill-name">MySQL</div>
        <div class="skill-desc">Database design, queries, and management using MySQL with Laravel's Eloquent ORM.</div>
        <div class="skill-bar"><div class="skill-bar-fill" style="width:75%"></div></div>
      </div>
      <div class="skill-card">
        <span class="skill-icon">🌐</span>
        <div class="skill-name">HTML / CSS</div>
        <div class="skill-desc">Structuring and styling web pages with clean, semantic HTML and modern CSS.</div>
        <div class="skill-bar"><div class="skill-bar-fill" style="width:85%"></div></div>
      </div>
      <div class="skill-card">
        <span class="skill-icon">⚡</span>
        <div class="skill-name">JavaScript</div>
        <div class="skill-desc">Adding interactivity and dynamic behavior to web pages and applications.</div>
        <div class="skill-bar"><div class="skill-bar-fill" style="width:65%"></div></div>
      </div>
      <div class="skill-card">
        <span class="skill-icon">🔧</span>
        <div class="skill-name">Git / GitHub</div>
        <div class="skill-desc">Version control and project collaboration using Git and GitHub repositories.</div>
        <div class="skill-bar"><div class="skill-bar-fill" style="width:70%"></div></div>
      </div>
      <div class="skill-card">
        <span class="skill-icon">📱</span>
        <div class="skill-name">Responsive Design</div>
        <div class="skill-desc">Building web apps that work beautifully across mobile, tablet, and desktop screens.</div>
        <div class="skill-bar"><div class="skill-bar-fill" style="width:72%"></div></div>
      </div>
    </div>
  </div>
</section>

<!-- PROJECTS -->
<section id="projects">
  <div class="section-inner">
    <div class="section-header">
      <div>
        <p class="section-label">03 — Projects</p>
        <h2 class="section-title">Things I've Built</h2>
      </div>
    </div>
    <div class="projects-grid">
      <div class="project-card">
        <div class="project-num">PROJECT / 001</div>
        <div class="project-title">Student Information System</div>
        <div class="project-desc">A web-based system for managing student records, enrollment, and grades for a school or university. Includes admin dashboard and reports.</div>
        <div class="project-tech">
          <span>Laravel</span><span>MySQL</span><span>Blade</span><span>Bootstrap</span>
        </div>
        <div class="project-arrow">↗</div>
      </div>
      <div class="project-card">
        <div class="project-num">PROJECT / 002</div>
        <div class="project-title">Inventory Management System</div>
        <div class="project-desc">A full CRUD inventory system for tracking products, stock levels, and transactions. Includes login, roles, and PDF reports.</div>
        <div class="project-tech">
          <span>PHP</span><span>MySQL</span><span>JavaScript</span><span>CSS</span>
        </div>
        <div class="project-arrow">↗</div>
      </div>
      <div class="project-card">
        <div class="project-num">PROJECT / 003</div>
        <div class="project-title">Personal Blog Platform</div>
        <div class="project-desc">A blog web app where users can create, edit, and publish articles. Features authentication, categories, and a clean reading UI.</div>
        <div class="project-tech">
          <span>Laravel</span><span>Blade</span><span>MySQL</span><span>Tailwind</span>
        </div>
        <div class="project-arrow">↗</div>
      </div>
      <div class="project-card">
        <div class="project-num">PROJECT / 004</div>
        <div class="project-title">Online Appointment Booking</div>
        <div class="project-desc">A booking system for small businesses like salons and clinics. Customers can schedule appointments and receive email confirmations.</div>
        <div class="project-tech">
          <span>Laravel</span><span>MySQL</span><span>JavaScript</span><span>Blade</span>
        </div>
        <div class="project-arrow">↗</div>
      </div>
    </div>
  </div>
</section>

<!-- EDUCATION -->
<section id="education">
  <div class="section-inner">
    <div class="section-header">
      <div>
        <p class="section-label">04 — Education</p>
        <h2 class="section-title">Academic Background</h2>
      </div>
    </div>
    <div class="edu-block">
      <div class="edu-year">2019 — 2023</div>
      <div>
        <div class="edu-school">Occidental Mindoro State College</div>
        <div class="edu-degree">Bachelor of Science in Information Technology</div>
        <div class="edu-desc">
          Completed a 4-year degree covering core subjects including web development, 
          database management, networking, systems analysis and design, object-oriented 
          programming, and software engineering. Gained hands-on experience through 
          capstone projects and on-the-job training.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <div class="section-inner">
    <div class="section-header">
      <div>
        <p class="section-label">05 — Contact</p>
        <h2 class="section-title">Let's Work Together</h2>
      </div>
    </div>
    <div class="contact-grid">
      <div>
        <div class="contact-headline">Got a<br>project<span class="accent">?</span><br>Let's talk.</div>
        <p class="contact-sub">Open to freelance projects, full-time roles, and collaborations. Drop me a message and let's build something great.</p>
      </div>
      <div class="contact-links">
        <a href="mailto:chris.larosa@email.com" class="contact-link">
          <span>📧 chris.larosa@email.com</span>
          <span class="contact-link-arrow">→</span>
        </a>
        <a href="#" class="contact-link">
          <span>💼 LinkedIn Profile</span>
          <span class="contact-link-arrow">→</span>
        </a>
        <a href="#" class="contact-link">
          <span>🐙 GitHub Profile</span>
          <span class="contact-link-arrow">→</span>
        </a>
        <a href="#" class="contact-link">
          <span>📄 Download Resume</span>
          <span class="contact-link-arrow">→</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <p>© 2026 CHRIS D. LA ROSA</p>
  <p>BUILT WITH HTML · CSS · LOVE</p>
</footer>

<script>
  function loadPhoto(event) {
    const file = event.target.files[0];
    if (!file) return;
    const reader = new FileReader();
    reader.onload = function(e) {
      const circle = document.getElementById('profileCircle');
      // Replace initials with the photo
      circle.innerHTML = `<img src="${e.target.result}" alt="Chris D. La Rosa" style="width:100%;height:100%;object-fit:cover;border-radius:50%;display:block;">`;
      circle.style.background = 'transparent';
    };
    reader.readAsDataURL(file);
  }
</script>
</body>
</html>