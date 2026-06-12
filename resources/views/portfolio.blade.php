<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chris D. La Rosa — IT Portfolio</title>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600&family=DM+Mono:wght@400;500&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">
<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

:root {
  --ink:     #111110;
  --paper:   #F8F7F4;
  --card:    #FFFFFF;
  --mid:     #74736E;
  --faint:   #E8E6E1;
  --accent:  #1746D4;
  --accent2: #E63C2F;
  --mono:    'DM Mono', monospace;
  --sans:    'DM Sans', sans-serif;
  --serif:   'Playfair Display', serif;
}

html { scroll-behavior: smooth; }

body {
  font-family: var(--sans);
  background: var(--paper);
  color: var(--ink);
  line-height: 1.6;
}

/* ── NAV ── */
nav {
  position: fixed; top: 0; left: 0; right: 0; z-index: 100;
  display: flex; justify-content: space-between; align-items: center;
  padding: 0 56px; height: 64px;
  background: rgba(248,247,244,0.92);
  backdrop-filter: blur(12px);
  border-bottom: 1px solid var(--faint);
}
.nav-logo {
  font-family: var(--mono);
  font-size: 12px; font-weight: 500; letter-spacing: 0.12em;
  color: var(--ink); text-decoration: none; text-transform: uppercase;
}
.nav-links { display: flex; gap: 36px; }
.nav-links a {
  font-size: 13px; color: var(--mid); text-decoration: none;
  letter-spacing: 0.03em; transition: color 0.2s;
}
.nav-links a:hover { color: var(--ink); }

/* ── HERO ── */
.hero {
  min-height: 100vh;
  display: grid;
  grid-template-columns: 420px 1fr;
  padding-top: 64px;
}

.hero-left {
  display: flex; flex-direction: column;
  padding: 72px 56px;
  border-right: 1px solid var(--faint);
  position: sticky; top: 64px; height: calc(100vh - 64px);
  overflow: hidden;
}

/* ── LARGE PROFILE PHOTO ── */
.profile-wrap {
  width: 160px; height: 160px;
  border-radius: 50%;
  overflow: hidden;
  margin-bottom: 32px;
  border: 4px solid var(--ink);
  box-shadow: 6px 6px 0 var(--accent);
  flex-shrink: 0;
  background: var(--faint);
}
.profile-wrap img {
  width: 100%; height: 100%;
  object-fit: cover; display: block;
}
.profile-initials-lg {
  width: 160px; height: 160px;
  border-radius: 50%;
  background: var(--ink);
  color: var(--paper);
  display: flex; align-items: center; justify-content: center;
  font-family: var(--serif);
  font-size: 40px; font-weight: 700;
  margin-bottom: 32px;
  border: 4px solid var(--ink);
  box-shadow: 6px 6px 0 var(--accent);
  flex-shrink: 0;
}

.hero-eyebrow {
  font-family: var(--mono);
  font-size: 10px; letter-spacing: 0.18em; color: var(--mid);
  text-transform: uppercase; margin-bottom: 20px;
  display: flex; align-items: center; gap: 8px;
}
.hero-eyebrow::before {
  content: '';
  display: inline-block;
  width: 20px; height: 1px;
  background: var(--accent);
}

.hero-name {
  font-family: var(--serif);
  font-size: clamp(44px, 5.5vw, 72px);
  font-weight: 800; line-height: 0.92;
  letter-spacing: -0.02em;
  margin-bottom: 16px;
}
.hero-name .dot { color: var(--accent2); }

.hero-role {
  font-family: var(--mono);
  font-size: 12px; color: var(--accent);
  letter-spacing: 0.1em; text-transform: uppercase;
  margin-bottom: 28px;
}

.hero-bio {
  font-size: 15px; color: var(--mid);
  line-height: 1.75; margin-bottom: 40px;
  max-width: 320px;
}

.hero-cta-row { display: flex; gap: 12px; flex-wrap: wrap; }

.btn-primary {
  display: inline-flex; align-items: center; gap: 8px;
  background: var(--ink); color: var(--paper);
  padding: 12px 24px; font-size: 13px; font-weight: 500;
  text-decoration: none; letter-spacing: 0.04em;
  transition: background 0.2s, transform 0.15s;
  border: 2px solid var(--ink);
}
.btn-primary:hover { background: var(--accent); border-color: var(--accent); }

.btn-ghost {
  display: inline-flex; align-items: center; gap: 8px;
  background: transparent; color: var(--ink);
  padding: 12px 24px; font-size: 13px; font-weight: 500;
  text-decoration: none; letter-spacing: 0.04em;
  transition: background 0.2s;
  border: 2px solid var(--faint);
}
.btn-ghost:hover { border-color: var(--ink); }

/* right column */
.hero-right {
  display: flex; flex-direction: column;
  padding: 72px 56px 72px 64px;
}

.hero-intro-label {
  font-family: var(--mono);
  font-size: 10px; color: var(--mid);
  letter-spacing: 0.16em; text-transform: uppercase;
  margin-bottom: 24px;
}

.hero-headline {
  font-family: var(--serif);
  font-size: clamp(32px, 4vw, 54px);
  font-weight: 700; line-height: 1.1;
  letter-spacing: -0.02em;
  margin-bottom: 40px;
}
.hero-headline em { color: var(--accent); font-style: italic; }

.hero-stat-row {
  display: grid; grid-template-columns: repeat(4, 1fr);
  gap: 1px; background: var(--faint);
  border: 1px solid var(--faint);
  margin-bottom: 48px;
}
.hero-stat {
  background: var(--card);
  padding: 24px 20px;
}
.hero-stat-num {
  font-family: var(--mono);
  font-size: 32px; font-weight: 500;
  color: var(--ink); line-height: 1;
  margin-bottom: 6px;
}
.hero-stat-num span { color: var(--accent); }
.hero-stat-label {
  font-size: 11px; color: var(--mid);
  text-transform: uppercase; letter-spacing: 0.1em;
}

.hero-stack-label {
  font-family: var(--mono);
  font-size: 10px; color: var(--mid);
  letter-spacing: 0.16em; text-transform: uppercase;
  margin-bottom: 16px;
}
.tag-row { display: flex; gap: 8px; flex-wrap: wrap; }
.tag {
  font-family: var(--mono);
  font-size: 11px; padding: 5px 12px;
  border: 1px solid var(--faint);
  color: var(--mid); letter-spacing: 0.05em;
  background: var(--card);
}

/* ── SECTION COMMON ── */
section { border-top: 1px solid var(--faint); }
.section-inner {
  max-width: 1100px; margin: 0 auto;
  padding: 80px 56px;
}
.section-eyebrow {
  font-family: var(--mono);
  font-size: 10px; color: var(--mid);
  text-transform: uppercase; letter-spacing: 0.18em;
  margin-bottom: 12px;
  display: flex; align-items: center; gap: 8px;
}
.section-eyebrow::before {
  content: '';
  display: inline-block;
  width: 20px; height: 1px; background: var(--accent);
}
.section-title {
  font-family: var(--serif);
  font-size: clamp(28px, 4vw, 44px);
  font-weight: 700; letter-spacing: -0.02em;
  line-height: 1.1; margin-bottom: 48px;
}

/* ── ABOUT ── */
.about-grid {
  display: grid; grid-template-columns: 1fr 360px;
  gap: 64px; align-items: start;
}
.about-text p {
  font-size: 16px; color: var(--mid); line-height: 1.85;
  margin-bottom: 20px;
}
.about-text p strong { color: var(--ink); font-weight: 600; }
.about-details { display: flex; flex-direction: column; }
.detail-row {
  display: flex; justify-content: space-between; align-items: center;
  padding: 14px 0; border-bottom: 1px solid var(--faint);
}
.detail-key {
  font-family: var(--mono);
  font-size: 10px; color: var(--mid);
  text-transform: uppercase; letter-spacing: 0.1em;
}
.detail-val { font-size: 14px; font-weight: 500; color: var(--ink); }

/* ── SKILLS ── */
.skills-grid {
  display: grid; grid-template-columns: repeat(3, 1fr);
  gap: 1px; background: var(--faint);
  border: 1px solid var(--faint);
}
.skill-card {
  background: var(--card); padding: 32px 28px;
  transition: background 0.22s;
  cursor: default;
}
.skill-card:hover { background: var(--ink); }
.skill-card:hover .skill-name,
.skill-card:hover .skill-desc { color: var(--paper); }
.skill-card:hover .skill-bar-fill { background: var(--accent); }
.skill-icon-wrap {
  width: 40px; height: 40px;
  background: var(--faint);
  display: flex; align-items: center; justify-content: center;
  margin-bottom: 20px;
  font-size: 20px;
  transition: background 0.22s;
}
.skill-card:hover .skill-icon-wrap { background: rgba(255,255,255,0.1); }
.skill-name {
  font-size: 15px; font-weight: 600; color: var(--ink);
  margin-bottom: 8px; transition: color 0.22s;
}
.skill-desc {
  font-size: 13px; color: var(--mid);
  line-height: 1.55; margin-bottom: 20px;
  transition: color 0.22s;
}
.skill-bar { height: 2px; background: var(--faint); }
.skill-bar-fill { height: 100%; background: var(--ink); transition: background 0.22s; }

/* ── PROJECTS ── */
.projects-grid {
  display: grid; grid-template-columns: 1fr 1fr;
  gap: 1px; background: var(--faint);
  border: 1px solid var(--faint);
}
.project-card {
  background: var(--card); padding: 40px 36px;
  position: relative; overflow: hidden;
  transition: background 0.22s;
}
.project-card:hover { background: var(--accent); }
.project-card:hover .project-num,
.project-card:hover .project-title,
.project-card:hover .project-desc { color: var(--paper); }
.project-card:hover .project-tech span {
  color: rgba(255,255,255,0.7);
  border-color: rgba(255,255,255,0.25);
}
.project-num {
  font-family: var(--mono);
  font-size: 10px; color: var(--mid); letter-spacing: 0.12em;
  margin-bottom: 20px; transition: color 0.22s;
}
.project-title {
  font-family: var(--serif);
  font-size: 22px; font-weight: 700;
  margin-bottom: 12px; transition: color 0.22s;
  letter-spacing: -0.01em;
}
.project-desc {
  font-size: 14px; color: var(--mid);
  line-height: 1.7; margin-bottom: 24px; transition: color 0.22s;
}
.project-tech { display: flex; gap: 8px; flex-wrap: wrap; }
.project-tech span {
  font-family: var(--mono);
  font-size: 10px; padding: 4px 10px;
  border: 1px solid var(--faint);
  color: var(--mid); letter-spacing: 0.06em;
  transition: color 0.22s, border-color 0.22s;
}
.project-arrow {
  position: absolute; bottom: 28px; right: 28px;
  font-size: 22px; opacity: 0;
  transition: opacity 0.22s; color: var(--paper);
}
.project-card:hover .project-arrow { opacity: 1; }

/* ── EDUCATION ── */
.edu-block {
  display: grid; grid-template-columns: 180px 1fr;
  gap: 48px; padding: 40px 0;
  border-bottom: 1px solid var(--faint);
}
.edu-year {
  font-family: var(--mono);
  font-size: 12px; color: var(--mid); padding-top: 4px;
}
.edu-school {
  font-family: var(--serif);
  font-size: 22px; font-weight: 700; margin-bottom: 6px;
}
.edu-degree {
  font-size: 14px; color: var(--accent);
  font-weight: 500; margin-bottom: 14px;
  letter-spacing: 0.01em;
}
.edu-desc { font-size: 14px; color: var(--mid); line-height: 1.75; }

/* ── CONTACT ── */
.contact-grid {
  display: grid; grid-template-columns: 1fr 1fr; gap: 64px;
}
.contact-headline {
  font-family: var(--serif);
  font-size: clamp(36px, 5vw, 60px);
  font-weight: 700; line-height: 1.0;
  letter-spacing: -0.02em; margin-bottom: 24px;
}
.contact-headline .accent { color: var(--accent); }
.contact-sub { font-size: 15px; color: var(--mid); line-height: 1.75; }
.contact-links { display: flex; flex-direction: column; justify-content: center; }
.contact-link {
  display: flex; justify-content: space-between; align-items: center;
  padding: 20px 0; border-bottom: 1px solid var(--faint);
  text-decoration: none; color: var(--ink);
  font-size: 14px; font-weight: 500; transition: color 0.2s;
}
.contact-link:hover { color: var(--accent); }
.contact-link-arrow { font-size: 18px; }

/* ── FOOTER ── */
footer {
  border-top: 1px solid var(--faint);
  padding: 28px 56px;
  display: flex; justify-content: space-between; align-items: center;
}
footer p {
  font-family: var(--mono);
  font-size: 11px; color: var(--mid); letter-spacing: 0.06em;
}

/* ── RESPONSIVE ── */
@media (max-width: 900px) {
  nav { padding: 0 24px; }
  .nav-links { display: none; }
  .hero { grid-template-columns: 1fr; }
  .hero-left {
    position: static; height: auto;
    padding: 60px 24px 40px; border-right: none;
  }
  .profile-wrap, .profile-initials-lg {
    width: 130px; height: 130px;
    box-shadow: 4px 4px 0 var(--accent);
  }
  .hero-right { padding: 40px 24px 60px; border-top: 1px solid var(--faint); }
  .hero-stat-row { grid-template-columns: 1fr 1fr; }
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
  <a class="nav-logo" href="#">CL · LA ROSA</a>
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
    <div class="profile-wrap">
      <img src="/image/chris.jpg" alt="Chris D. La Rosa"
        onerror="this.parentElement.outerHTML='<div class=\'profile-initials-lg\'>CL</div>'">
    </div>
    <p class="hero-eyebrow">Available for work · Philippines</p>
    <h1 class="hero-name">Chris D<span class="dot">.</span><br>La Rosa</h1>
    <p class="hero-role">// IT Graduate &amp; Web Developer</p>
    <p class="hero-bio">
      Fresh graduate with a passion for building clean, functional web applications.
      Turning ideas into working software, one line of code at a time.
    </p>
    <div class="hero-cta-row">
      <a href="#contact" class="btn-primary">Get in touch →</a>
      <a href="#projects" class="btn-ghost">View work</a>
    </div>
  </div>

  <div class="hero-right">
    <p class="hero-intro-label">Introduction</p>
    <h2 class="hero-headline">Building the web,<br>one <em>commit</em> at a time.</h2>

    <div class="hero-stat-row">
      <div class="hero-stat">
        <div class="hero-stat-num">26<span>.</span></div>
        <div class="hero-stat-label">Years Old</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-num">BS<span>IT</span></div>
        <div class="hero-stat-label">Degree</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-num">4<span>+</span></div>
        <div class="hero-stat-label">Projects</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-num">∞</div>
        <div class="hero-stat-label">Problems</div>
      </div>
    </div>

    <p class="hero-stack-label">Tech Stack</p>
    <div class="tag-row">
      <span class="tag">PHP</span>
      <span class="tag">Laravel</span>
      <span class="tag">MySQL</span>
      <span class="tag">JavaScript</span>
      <span class="tag">HTML / CSS</span>
      <span class="tag">Git</span>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section id="about">
  <div class="section-inner">
    <p class="section-eyebrow">01 — About</p>
    <h2 class="section-title">Who I Am</h2>
    <div class="about-grid">
      <div class="about-text">
        <p>I'm <strong>Chris D. La Rosa</strong>, a 26-year-old IT graduate from
          <strong>Occidental Mindoro State College</strong>. I hold a
          <strong>Bachelor of Science in Information Technology</strong> and have a
          solid foundation in web development, database management, and software design.</p>
        <p>I enjoy building practical web solutions — from simple websites to full-stack
          web applications. Currently deepening my skills in <strong>Laravel</strong> and
          modern web development to build real-world projects that solve real problems.</p>
        <p>I'm eager to grow as a developer, take on freelance work, and eventually
          build products that make a meaningful difference.</p>
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
          <span class="detail-val">OMSC</span>
        </div>
        <div class="detail-row">
          <span class="detail-key">Location</span>
          <span class="detail-val">San Jose,Occidental Mindoro, PH</span>
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
    <p class="section-eyebrow">02 — Skills</p>
    <h2 class="section-title">What I Work With</h2>
    <div class="skills-grid">
      <div class="skill-card">
        <div class="skill-icon-wrap">🐘</div>
        <div class="skill-name">PHP / Laravel</div>
        <div class="skill-desc">Backend web development using PHP and the Laravel framework for building robust applications.</div>
        <div class="skill-bar"><div class="skill-bar-fill" style="width:80%"></div></div>
      </div>
      <div class="skill-card">
        <div class="skill-icon-wrap">🗄️</div>
        <div class="skill-name">MySQL</div>
        <div class="skill-desc">Database design, queries, and management using MySQL with Laravel's Eloquent ORM.</div>
        <div class="skill-bar"><div class="skill-bar-fill" style="width:75%"></div></div>
      </div>
      <div class="skill-card">
        <div class="skill-icon-wrap">🌐</div>
        <div class="skill-name">HTML / CSS</div>
        <div class="skill-desc">Structuring and styling web pages with clean, semantic HTML and modern CSS techniques.</div>
        <div class="skill-bar"><div class="skill-bar-fill" style="width:85%"></div></div>
      </div>
      <div class="skill-card">
        <div class="skill-icon-wrap">⚡</div>
        <div class="skill-name">JavaScript</div>
        <div class="skill-desc">Adding interactivity and dynamic behavior to web pages and applications.</div>
        <div class="skill-bar"><div class="skill-bar-fill" style="width:65%"></div></div>
      </div>
      <div class="skill-card">
        <div class="skill-icon-wrap">🔧</div>
        <div class="skill-name">Git / GitHub</div>
        <div class="skill-desc">Version control and collaboration using Git and GitHub for all projects.</div>
        <div class="skill-bar"><div class="skill-bar-fill" style="width:70%"></div></div>
      </div>
      <div class="skill-card">
        <div class="skill-icon-wrap">📱</div>
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
    <p class="section-eyebrow">03 — Projects</p>
    <h2 class="section-title">Things I've Built</h2>
    <div class="projects-grid">
      <div class="project-card">
        <div class="project-num">PROJECT / 001</div>
        <div class="project-title">Student Information System</div>
        <div class="project-desc">A web-based system for managing student records, enrollment, and grades. Includes admin dashboard and reports.</div>
        <div class="project-tech">
          <span>Laravel</span><span>MySQL</span><span>Blade</span><span>Bootstrap</span>
        </div>
        <div class="project-arrow">↗</div>
      </div>
      <div class="project-card">
        <div class="project-num">PROJECT / 002</div>
        <div class="project-title">Inventory Management System</div>
        <div class="project-desc">A full CRUD inventory system for tracking products, stock levels, and transactions with login, roles, and PDF reports.</div>
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
        <div class="project-desc">A booking system for salons and clinics. Customers can schedule appointments and receive email confirmations.</div>
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
    <p class="section-eyebrow">04 — Education</p>
    <h2 class="section-title">Academic Background</h2>
    <div class="edu-block">
      <div class="edu-year">2019 — 2023</div>
      <div>
        <div class="edu-school">Occidental Mindoro State College</div>
        <div class="edu-degree">Bachelor of Science in Information Technology</div>
        <div class="edu-desc">
          Completed a 4-year degree covering web development, database management,
          networking, systems analysis and design, object-oriented programming, and
          software engineering. Gained hands-on experience through capstone projects
          and on-the-job training.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <div class="section-inner">
    <p class="section-eyebrow">05 — Contact</p>
    <h2 class="section-title">Let's Work Together</h2>
    <div class="contact-grid">
      <div>
        <div class="contact-headline">Got a<br>project<span class="accent">?</span><br>Let's talk.</div>
        <p class="contact-sub">Open to freelance projects, full-time roles, and collaborations. Drop me a message and let's build something great together.</p>
      </div>
      <div class="contact-links">
        <a href="mailto:chrislarosa@gmail.com" class="contact-link">
          <span>📧 chrislarosa.bsit@gmail.com</span>
          <span class="contact-link-arrow">→</span>
        </a>
        <a href="https://facebook.com/yourprofile" class="contact-link">
  <span>🔵 Facebook Profile</span>
  <span class="contact-link-arrow">→</span>
</a>
        <a href="https://github.com/AHCEJ" class="contact-link">
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
  <p>© 2026 Chris D. La Rosa</p>
  <p>Built with HTML · CSS · Laravel</p>
</footer>

</body>
</html>