<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chris D. La Rosa — IT Portfolio</title>
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300;400;500;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@3.19.0/dist/tabler-icons.min.css">
<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

:root {
  --bg:       #090D15;
  --bg2:      #0E1420;
  --bg3:      #141B2D;
  --card:     #111827;
  --border:   rgba(0,255,135,0.12);
  --border2:  rgba(0,255,135,0.25);
  --green:    #00FF87;
  --cyan:     #00E5FF;
  --muted:    #5A6A85;
  --dim:      #8892A4;
  --text:     #E2E8F0;
  --white:    #F0F6FF;
  --red:      #FF4560;
  --mono:     'JetBrains Mono', monospace;
  --sans:     'Inter', sans-serif;
}

html { scroll-behavior: smooth; }

body {
  font-family: var(--sans);
  background: var(--bg);
  color: var(--text);
  line-height: 1.6;
  overflow-x: hidden;
}

/* Scanline overlay */
body::before {
  content: '';
  position: fixed;
  inset: 0;
  background: repeating-linear-gradient(
    0deg,
    transparent,
    transparent 2px,
    rgba(0,255,135,0.012) 2px,
    rgba(0,255,135,0.012) 4px
  );
  pointer-events: none;
  z-index: 999;
}

/* ── NAV ── */
nav {
  position: fixed; top: 0; left: 0; right: 0; z-index: 100;
  display: flex; justify-content: space-between; align-items: center;
  padding: 0 56px; height: 60px;
  background: rgba(9,13,21,0.92);
  backdrop-filter: blur(16px);
  border-bottom: 1px solid var(--border);
}
.nav-logo {
  font-family: var(--mono);
  font-size: 13px; font-weight: 500; letter-spacing: 0.1em;
  color: var(--green); text-decoration: none;
}
.nav-logo .prompt { color: var(--muted); margin-right: 4px; }
.nav-links { display: flex; gap: 32px; align-items: center; }
.nav-links a {
  font-family: var(--mono);
  font-size: 12px; color: var(--muted); text-decoration: none;
  letter-spacing: 0.05em; transition: color 0.2s;
}
.nav-links a:hover { color: var(--green); }
.nav-status {
  display: flex; align-items: center; gap: 6px;
  font-family: var(--mono); font-size: 11px; color: var(--muted);
}
.status-dot {
  width: 6px; height: 6px; border-radius: 50%;
  background: var(--green);
  animation: pulse 2s infinite;
}
@keyframes pulse {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.3; }
}

/* ── HERO ── */
.hero {
  min-height: 100vh;
  display: grid;
  grid-template-columns: 400px 1fr;
  padding-top: 60px;
}

.hero-left {
  display: flex; flex-direction: column;
  padding: 64px 48px;
  border-right: 1px solid var(--border);
  position: sticky; top: 60px; height: calc(100vh - 60px);
  overflow: hidden;
  background: var(--bg2);
}

.terminal-header {
  display: flex; align-items: center; gap: 6px;
  margin-bottom: 32px;
}
.t-dot {
  width: 10px; height: 10px; border-radius: 50%;
}
.t-dot-r { background: #FF5F57; }
.t-dot-y { background: #FEBC2E; }
.t-dot-g { background: #28C840; }
.terminal-label {
  font-family: var(--mono); font-size: 11px; color: var(--muted);
  margin-left: 8px; letter-spacing: 0.08em;
}

.profile-wrap {
  width: 140px; height: 140px;
  border-radius: 2px;
  overflow: hidden;
  margin-bottom: 28px;
  border: 1px solid var(--border2);
  position: relative;
  flex-shrink: 0;
  background: var(--bg3);
}
.profile-wrap img {
  width: 100%; height: 100%;
  object-fit: cover; display: block;
}
.profile-wrap::after {
  content: '';
  position: absolute; inset: 0;
  background: linear-gradient(135deg, transparent 60%, rgba(0,255,135,0.08));
  pointer-events: none;
}
.profile-initials-lg {
  width: 140px; height: 140px;
  border-radius: 2px;
  background: var(--bg3);
  color: var(--green);
  display: flex; align-items: center; justify-content: center;
  font-family: var(--mono); font-size: 36px; font-weight: 700;
  margin-bottom: 28px;
  border: 1px solid var(--border2);
  flex-shrink: 0;
}

.hero-prompt {
  font-family: var(--mono); font-size: 11px; color: var(--muted);
  margin-bottom: 12px; letter-spacing: 0.06em;
}
.hero-prompt .ps { color: var(--green); }

.hero-name {
  font-family: var(--mono);
  font-size: clamp(28px, 3.5vw, 42px);
  font-weight: 700; line-height: 1.1;
  color: var(--white);
  margin-bottom: 8px;
  letter-spacing: -0.02em;
}
.hero-name .hl { color: var(--green); }

.hero-role {
  font-family: var(--mono);
  font-size: 12px; color: var(--cyan);
  letter-spacing: 0.06em; margin-bottom: 20px;
}

.hero-bio {
  font-size: 13px; color: var(--dim);
  line-height: 1.75; margin-bottom: 32px;
}

.hero-tags { display: flex; flex-wrap: wrap; gap: 6px; margin-bottom: 32px; }
.hero-tag {
  font-family: var(--mono); font-size: 10px;
  padding: 3px 10px;
  border: 1px solid var(--border2);
  color: var(--green);
  letter-spacing: 0.06em;
  background: rgba(0,255,135,0.04);
}

.hero-cta-row { display: flex; gap: 10px; flex-wrap: wrap; }

.btn-primary {
  display: inline-flex; align-items: center; gap: 8px;
  background: var(--green); color: var(--bg);
  padding: 10px 22px; font-size: 12px; font-weight: 600;
  font-family: var(--mono);
  text-decoration: none; letter-spacing: 0.06em;
  transition: opacity 0.2s;
  border: none;
}
.btn-primary:hover { opacity: 0.85; }

.btn-ghost {
  display: inline-flex; align-items: center; gap: 8px;
  background: transparent; color: var(--green);
  padding: 10px 22px; font-size: 12px; font-weight: 500;
  font-family: var(--mono);
  text-decoration: none; letter-spacing: 0.06em;
  transition: background 0.2s;
  border: 1px solid var(--border2);
}
.btn-ghost:hover { background: rgba(0,255,135,0.07); }

/* right column */
.hero-right {
  display: flex; flex-direction: column;
  padding: 64px 56px 64px 64px;
}

.cmd-line {
  font-family: var(--mono); font-size: 11px; color: var(--muted);
  letter-spacing: 0.08em; margin-bottom: 24px;
  display: flex; align-items: center; gap: 8px;
}
.cmd-line .sym { color: var(--green); }

.hero-headline {
  font-family: var(--mono);
  font-size: clamp(26px, 3.2vw, 46px);
  font-weight: 700; line-height: 1.15;
  letter-spacing: -0.02em;
  color: var(--white);
  margin-bottom: 40px;
}
.hero-headline .hl { color: var(--green); }
.hero-headline .hl2 { color: var(--cyan); }

/* typing cursor */
.cursor {
  display: inline-block;
  width: 2px; height: 1em;
  background: var(--green);
  vertical-align: middle;
  margin-left: 3px;
  animation: blink 1s step-end infinite;
}
@keyframes blink {
  0%, 100% { opacity: 1; }
  50% { opacity: 0; }
}

.hero-stat-row {
  display: grid; grid-template-columns: repeat(4, 1fr);
  border: 1px solid var(--border);
  margin-bottom: 48px;
}
.hero-stat {
  padding: 20px 16px;
  border-right: 1px solid var(--border);
  background: var(--card);
}
.hero-stat:last-child { border-right: none; }
.hero-stat-num {
  font-family: var(--mono);
  font-size: 28px; font-weight: 700;
  color: var(--green); line-height: 1;
  margin-bottom: 6px;
}
.hero-stat-num .unit { font-size: 14px; color: var(--muted); }
.hero-stat-label {
  font-family: var(--mono);
  font-size: 9px; color: var(--muted);
  text-transform: uppercase; letter-spacing: 0.12em;
}

.section-comment {
  font-family: var(--mono);
  font-size: 11px; color: var(--muted);
  letter-spacing: 0.06em; margin-bottom: 14px;
  display: flex; align-items: center; gap: 8px;
}
.section-comment .slashes { color: var(--green); }

.stack-grid { display: flex; flex-wrap: wrap; gap: 6px; }
.stack-tag {
  font-family: var(--mono); font-size: 10px;
  padding: 4px 10px;
  border: 1px solid var(--border);
  color: var(--dim); letter-spacing: 0.06em;
  background: var(--card);
  transition: border-color 0.2s, color 0.2s;
}
.stack-tag:hover { border-color: var(--green); color: var(--green); }

/* ── SECTION COMMON ── */
section { border-top: 1px solid var(--border); }
.section-inner {
  max-width: 1100px; margin: 0 auto;
  padding: 80px 56px;
}
.section-eyebrow {
  font-family: var(--mono);
  font-size: 10px; color: var(--muted);
  text-transform: uppercase; letter-spacing: 0.18em;
  margin-bottom: 10px;
  display: flex; align-items: center; gap: 8px;
}
.section-eyebrow .slashes { color: var(--green); }
.section-title {
  font-family: var(--mono);
  font-size: clamp(24px, 3.5vw, 40px);
  font-weight: 700; letter-spacing: -0.02em;
  line-height: 1.1; margin-bottom: 48px;
  color: var(--white);
}
.section-title .hl { color: var(--green); }

/* ── GRID LINE DECORATION ── */
.grid-line {
  display: flex; align-items: center; gap: 12px;
  margin-bottom: 40px; margin-top: -24px;
}
.grid-line-bar {
  flex: 1; height: 1px; background: var(--border);
}
.grid-line-val {
  font-family: var(--mono); font-size: 10px; color: var(--border2);
}

/* ── ABOUT ── */
.about-grid {
  display: grid; grid-template-columns: 1fr 340px;
  gap: 60px; align-items: start;
}
.about-text p {
  font-size: 15px; color: var(--dim); line-height: 1.85;
  margin-bottom: 18px;
}
.about-text p strong { color: var(--text); font-weight: 600; }
.about-details {
  border: 1px solid var(--border);
  background: var(--card);
}
.detail-row {
  display: flex; justify-content: space-between; align-items: center;
  padding: 12px 20px;
  border-bottom: 1px solid var(--border);
}
.detail-row:last-child { border-bottom: none; }
.detail-key {
  font-family: var(--mono); font-size: 10px; color: var(--muted);
  text-transform: uppercase; letter-spacing: 0.1em;
}
.detail-val { font-family: var(--mono); font-size: 12px; font-weight: 500; color: var(--text); }
.detail-val .ok { color: var(--green); }

/* ── SKILLS ── */
.skills-grid {
  display: grid; grid-template-columns: repeat(3, 1fr);
  border: 1px solid var(--border);
}
.skill-card {
  background: var(--card); padding: 28px 24px;
  border-right: 1px solid var(--border);
  border-bottom: 1px solid var(--border);
  transition: background 0.22s;
  cursor: default;
  position: relative;
  overflow: hidden;
}
.skill-card:nth-child(3),
.skill-card:nth-child(6) { border-right: none; }
.skill-card:nth-child(4),
.skill-card:nth-child(5),
.skill-card:nth-child(6) { border-bottom: none; }
.skill-card::before {
  content: '';
  position: absolute; top: 0; left: 0; right: 0;
  height: 2px; background: var(--green);
  transform: scaleX(0); transform-origin: left;
  transition: transform 0.3s ease;
}
.skill-card:hover::before { transform: scaleX(1); }
.skill-card:hover { background: var(--bg3); }
.skill-icon-wrap {
  font-size: 22px; color: var(--green);
  margin-bottom: 16px;
  display: flex; align-items: center;
}
.skill-name {
  font-family: var(--mono);
  font-size: 13px; font-weight: 600; color: var(--white);
  margin-bottom: 8px;
}
.skill-desc {
  font-size: 12px; color: var(--muted);
  line-height: 1.6; margin-bottom: 18px;
}
.skill-bar {
  height: 2px; background: var(--border);
  position: relative;
}
.skill-bar-fill {
  height: 100%; background: var(--green);
  position: relative;
}
.skill-pct {
  position: absolute; right: 0; top: -18px;
  font-family: var(--mono); font-size: 10px; color: var(--green);
}

/* ── PROJECTS ── */
.projects-grid {
  display: grid; grid-template-columns: 1fr 1fr;
  border: 1px solid var(--border);
}
.project-card {
  background: var(--card); padding: 36px 32px;
  position: relative; overflow: hidden;
  border-right: 1px solid var(--border);
  border-bottom: 1px solid var(--border);
  transition: background 0.22s;
}
.project-card:nth-child(2),
.project-card:nth-child(4) { border-right: none; }
.project-card:nth-child(3),
.project-card:nth-child(4) { border-bottom: none; }
.project-card:hover { background: var(--bg3); }

.project-card::after {
  content: '';
  position: absolute; bottom: 0; left: 0; right: 0;
  height: 1px; background: var(--green);
  transform: scaleX(0); transform-origin: left;
  transition: transform 0.3s ease;
}
.project-card:hover::after { transform: scaleX(1); }

.project-num {
  font-family: var(--mono); font-size: 10px; color: var(--muted);
  letter-spacing: 0.14em; margin-bottom: 18px;
}
.project-num .bracket { color: var(--green); }
.project-title {
  font-family: var(--mono);
  font-size: 18px; font-weight: 700;
  color: var(--white);
  margin-bottom: 12px;
  letter-spacing: -0.01em;
}
.project-desc {
  font-size: 13px; color: var(--dim);
  line-height: 1.7; margin-bottom: 24px;
}
.project-tech { display: flex; gap: 6px; flex-wrap: wrap; }
.project-tech span {
  font-family: var(--mono); font-size: 10px;
  padding: 3px 9px;
  border: 1px solid var(--border);
  color: var(--cyan);
  letter-spacing: 0.06em;
}
.project-arrow {
  position: absolute; top: 28px; right: 28px;
  font-size: 16px; color: var(--green);
  opacity: 0; transition: opacity 0.22s;
}
.project-card:hover .project-arrow { opacity: 1; }

/* ── EDUCATION ── */
.edu-block {
  display: grid; grid-template-columns: 200px 1fr;
  gap: 48px; padding: 40px 0;
  border-bottom: 1px solid var(--border);
  align-items: start;
}
.edu-year {
  font-family: var(--mono); font-size: 11px; color: var(--muted);
  padding-top: 4px;
}
.edu-year .year-range { color: var(--green); display: block; font-size: 14px; margin-bottom: 4px; }
.edu-school {
  font-family: var(--mono);
  font-size: 20px; font-weight: 700; color: var(--white);
  margin-bottom: 6px;
}
.edu-degree {
  font-family: var(--mono);
  font-size: 12px; color: var(--cyan);
  font-weight: 500; margin-bottom: 14px;
  letter-spacing: 0.04em;
}
.edu-desc { font-size: 13px; color: var(--dim); line-height: 1.75; }

/* ── CONTACT ── */
.contact-grid {
  display: grid; grid-template-columns: 1fr 1fr; gap: 64px;
}
.contact-headline {
  font-family: var(--mono);
  font-size: clamp(30px, 4.5vw, 52px);
  font-weight: 700; line-height: 1.1;
  letter-spacing: -0.02em; margin-bottom: 20px;
  color: var(--white);
}
.contact-headline .hl { color: var(--green); }
.contact-sub { font-size: 14px; color: var(--dim); line-height: 1.75; }
.contact-links { display: flex; flex-direction: column; justify-content: center; }
.contact-link {
  display: flex; justify-content: space-between; align-items: center;
  padding: 18px 0; border-bottom: 1px solid var(--border);
  text-decoration: none; color: var(--text);
  font-family: var(--mono); font-size: 12px;
  font-weight: 500; transition: color 0.2s;
  gap: 12px;
}
.contact-link:hover { color: var(--green); }
.contact-link-left { display: flex; align-items: center; gap: 12px; }
.contact-link-left i { font-size: 16px; color: var(--muted); transition: color 0.2s; }
.contact-link:hover .contact-link-left i { color: var(--green); }
.contact-link-arrow { font-size: 14px; color: var(--muted); }

/* ── FOOTER ── */
footer {
  border-top: 1px solid var(--border);
  padding: 24px 56px;
  display: flex; justify-content: space-between; align-items: center;
  background: var(--bg2);
}
footer p {
  font-family: var(--mono); font-size: 10px; color: var(--muted);
  letter-spacing: 0.08em;
}
footer .hl { color: var(--green); }

/* ── RESPONSIVE ── */
@media (max-width: 900px) {
  nav { padding: 0 20px; }
  .nav-links { display: none; }
  .hero { grid-template-columns: 1fr; }
  .hero-left {
    position: static; height: auto;
    padding: 56px 24px 36px; border-right: none;
  }
  .hero-right { padding: 36px 24px 56px; border-top: 1px solid var(--border); }
  .hero-stat-row { grid-template-columns: 1fr 1fr; }
  .section-inner { padding: 56px 24px; }
  .about-grid { grid-template-columns: 1fr; gap: 36px; }
  .skills-grid { grid-template-columns: 1fr 1fr; }
  .skills-grid .skill-card:nth-child(3) { border-right: none; }
  .projects-grid { grid-template-columns: 1fr; }
  .project-card { border-right: none !important; }
  .edu-block { grid-template-columns: 1fr; gap: 12px; }
  .contact-grid { grid-template-columns: 1fr; gap: 36px; }
  footer { flex-direction: column; gap: 8px; padding: 20px; text-align: center; }
}
@media (prefers-reduced-motion: reduce) {
  * { animation: none !important; transition: none !important; }
}
</style>
</head>
<body>

<!-- NAV -->
<nav>
  <a class="nav-logo" href="#"><span class="prompt">~/</span>chris-larosa</a>
  <div class="nav-links">
    <a href="#about">about.md</a>
    <a href="#skills">skills.json</a>
    <a href="#projects">projects/</a>
    <a href="#education">education.log</a>
    <a href="#contact">contact.sh</a>
  </div>
  <div class="nav-status">
    <div class="status-dot"></div>
    open to work
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="hero-left">
    <div class="terminal-header">
      <div class="t-dot t-dot-r"></div>
      <div class="t-dot t-dot-y"></div>
      <div class="t-dot t-dot-g"></div>
      <span class="terminal-label">user@portfolio ~ bash</span>
    </div>

    <div class="profile-wrap">
      <img src="/image/chris.jpg" alt="Chris D. La Rosa"
        onerror="this.parentElement.outerHTML='<div class=\'profile-initials-lg\'>CL</div>'">
    </div>

    <p class="hero-prompt"><span class="ps">❯</span> whoami</p>
    <h1 class="hero-name">Chris D.<br><span class="hl">La Rosa</span></h1>
    <p class="hero-role">// IT Graduate &amp; Web Developer</p>
    <p class="hero-bio">
      Fresh graduate building clean, functional web applications.
      Turning ideas into working software, one line of code at a time.
    </p>

    <div class="hero-tags">
      <span class="hero-tag">PHP</span>
      <span class="hero-tag">Laravel</span>
      <span class="hero-tag">MySQL</span>
      <span class="hero-tag">JavaScript</span>
      <span class="hero-tag">HTML/CSS</span>
      <span class="hero-tag">Git</span>
    </div>

    <div class="hero-cta-row">
      <a href="#contact" class="btn-primary">./contact.sh</a>
      <a href="#projects" class="btn-ghost">ls projects/</a>
    </div>
  </div>

  <div class="hero-right">
    <p class="cmd-line"><span class="sym">$</span> cat introduction.txt</p>
    <h2 class="hero-headline">
      Building the web,<br>
      one <span class="hl">commit</span><br>
      at a time<span class="cursor"></span>
    </h2>

    <div class="hero-stat-row">
      <div class="hero-stat">
        <div class="hero-stat-num">26<span class="unit">yr</span></div>
        <div class="hero-stat-label">Age</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-num">BS<span class="unit">IT</span></div>
        <div class="hero-stat-label">Degree</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-num">4<span class="unit">+</span></div>
        <div class="hero-stat-label">Projects</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-num">∞</div>
        <div class="hero-stat-label">Problems</div>
      </div>
    </div>

    <p class="section-comment"><span class="slashes">//</span> current stack</p>
    <div class="stack-grid">
      <span class="stack-tag">PHP 8.x</span>
      <span class="stack-tag">Laravel 11</span>
      <span class="stack-tag">MySQL 8</span>
      <span class="stack-tag">JavaScript ES6+</span>
      <span class="stack-tag">Blade Templates</span>
      <span class="stack-tag">Tailwind CSS</span>
      <span class="stack-tag">Bootstrap 5</span>
      <span class="stack-tag">Git / GitHub</span>
      <span class="stack-tag">REST APIs</span>
      <span class="stack-tag">Responsive Design</span>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section id="about">
  <div class="section-inner">
    <p class="section-eyebrow"><span class="slashes">// </span>01 &mdash; about</p>
    <h2 class="section-title">cat <span class="hl">about.md</span></h2>
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
          <span class="detail-key">name</span>
          <span class="detail-val">Chris D. La Rosa</span>
        </div>
        <div class="detail-row">
          <span class="detail-key">age</span>
          <span class="detail-val">26</span>
        </div>
        <div class="detail-row">
          <span class="detail-key">gender</span>
          <span class="detail-val">male</span>
        </div>
        <div class="detail-row">
          <span class="detail-key">degree</span>
          <span class="detail-val">BS Information Technology</span>
        </div>
        <div class="detail-row">
          <span class="detail-key">school</span>
          <span class="detail-val">OMSC</span>
        </div>
        <div class="detail-row">
          <span class="detail-key">location</span>
          <span class="detail-val">San Jose, Occ. Mindoro, PH</span>
        </div>
        <div class="detail-row">
          <span class="detail-key">status</span>
          <span class="detail-val"><span class="ok">● open to work</span></span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SKILLS -->
<section id="skills">
  <div class="section-inner">
    <p class="section-eyebrow"><span class="slashes">// </span>02 &mdash; skills</p>
    <h2 class="section-title">cat <span class="hl">skills.json</span></h2>
    <div class="skills-grid">
      <div class="skill-card">
        <div class="skill-icon-wrap"><i class="ti ti-brand-php" aria-hidden="true"></i></div>
        <div class="skill-name">PHP / Laravel</div>
        <div class="skill-desc">Backend web development using PHP and Laravel framework for building robust full-stack applications.</div>
        <div class="skill-bar">
          <div class="skill-bar-fill" style="width:80%">
            <span class="skill-pct">80%</span>
          </div>
        </div>
      </div>
      <div class="skill-card">
        <div class="skill-icon-wrap"><i class="ti ti-database" aria-hidden="true"></i></div>
        <div class="skill-name">MySQL</div>
        <div class="skill-desc">Database design, queries, and management using MySQL with Laravel's Eloquent ORM.</div>
        <div class="skill-bar">
          <div class="skill-bar-fill" style="width:75%">
            <span class="skill-pct">75%</span>
          </div>
        </div>
      </div>
      <div class="skill-card">
        <div class="skill-icon-wrap"><i class="ti ti-brand-html5" aria-hidden="true"></i></div>
        <div class="skill-name">HTML / CSS</div>
        <div class="skill-desc">Structuring and styling web pages with clean, semantic HTML and modern CSS techniques.</div>
        <div class="skill-bar">
          <div class="skill-bar-fill" style="width:85%">
            <span class="skill-pct">85%</span>
          </div>
        </div>
      </div>
      <div class="skill-card">
        <div class="skill-icon-wrap"><i class="ti ti-brand-javascript" aria-hidden="true"></i></div>
        <div class="skill-name">JavaScript</div>
        <div class="skill-desc">Adding interactivity and dynamic behavior to web pages and applications using modern ES6+.</div>
        <div class="skill-bar">
          <div class="skill-bar-fill" style="width:65%">
            <span class="skill-pct">65%</span>
          </div>
        </div>
      </div>
      <div class="skill-card">
        <div class="skill-icon-wrap"><i class="ti ti-brand-git" aria-hidden="true"></i></div>
        <div class="skill-name">Git / GitHub</div>
        <div class="skill-desc">Version control and collaboration using Git and GitHub for all development projects.</div>
        <div class="skill-bar">
          <div class="skill-bar-fill" style="width:70%">
            <span class="skill-pct">70%</span>
          </div>
        </div>
      </div>
      <div class="skill-card">
        <div class="skill-icon-wrap"><i class="ti ti-device-mobile" aria-hidden="true"></i></div>
        <div class="skill-name">Responsive Design</div>
        <div class="skill-desc">Building web apps that work beautifully across mobile, tablet, and desktop screens.</div>
        <div class="skill-bar">
          <div class="skill-bar-fill" style="width:72%">
            <span class="skill-pct">72%</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PROJECTS -->
<section id="projects">
  <div class="section-inner">
    <p class="section-eyebrow"><span class="slashes">// </span>03 &mdash; projects</p>
    <h2 class="section-title">ls <span class="hl">projects/</span></h2>
    <div class="projects-grid">
      <div class="project-card">
        <div class="project-num"><span class="bracket">[</span>001<span class="bracket">]</span></div>
        <div class="project-title">Student Information System</div>
        <div class="project-desc">A web-based system for managing student records, enrollment, and grades. Includes admin dashboard and reports.</div>
        <div class="project-tech">
          <span>Laravel</span><span>MySQL</span><span>Blade</span><span>Bootstrap</span>
        </div>
        <div class="project-arrow"><i class="ti ti-arrow-up-right"></i></div>
      </div>
      <div class="project-card">
        <div class="project-num"><span class="bracket">[</span>002<span class="bracket">]</span></div>
        <div class="project-title">Inventory Management System</div>
        <div class="project-desc">A full CRUD inventory system for tracking products, stock levels, and transactions with login, roles, and PDF reports.</div>
        <div class="project-tech">
          <span>PHP</span><span>MySQL</span><span>JavaScript</span><span>CSS</span>
        </div>
        <div class="project-arrow"><i class="ti ti-arrow-up-right"></i></div>
      </div>
      <div class="project-card">
        <div class="project-num"><span class="bracket">[</span>003<span class="bracket">]</span></div>
        <div class="project-title">Freelancer Website — LGU San Jose</div>
        <div class="project-desc">A freelancer platform built for the municipality of San Jose, Occidental Mindoro to connect local talent with opportunities.</div>
        <div class="project-tech">
          <span>Laravel</span><span>MySQL</span><span>Blade</span><span>JavaScript</span>
        </div>
        <div class="project-arrow"><i class="ti ti-arrow-up-right"></i></div>
      </div>
      <div class="project-card">
        <div class="project-num"><span class="bracket">[</span>004<span class="bracket">]</span></div>
        <div class="project-title">Online Appointment Booking</div>
        <div class="project-desc">A booking system for salons and clinics. Customers can schedule appointments and receive email confirmations.</div>
        <div class="project-tech">
          <span>Laravel</span><span>MySQL</span><span>JavaScript</span><span>Blade</span>
        </div>
        <div class="project-arrow"><i class="ti ti-arrow-up-right"></i></div>
      </div>
    </div>
  </div>
</section>

<!-- EDUCATION -->
<section id="education">
  <div class="section-inner">
    <p class="section-eyebrow"><span class="slashes">// </span>04 &mdash; education</p>
    <h2 class="section-title">cat <span class="hl">education.log</span></h2>
    <div class="edu-block">
      <div class="edu-year">
        <span class="year-range">2022 — 2026</span>
        Occidental Mindoro
      </div>
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
    <p class="section-eyebrow"><span class="slashes">// </span>05 &mdash; contact</p>
    <h2 class="section-title">./contact<span class="hl">.sh</span></h2>
    <div class="contact-grid">
      <div>
        <div class="contact-headline">Got a<br>project<span class="hl">?</span><br>Let's build.</div>
        <p class="contact-sub">Open to freelance projects, full-time roles, and collaborations. Drop me a message and let's build something great together.</p>
      </div>
      <div class="contact-links">
        <a href="mailto:chrislarosa.bsit@gmail.com" class="contact-link">
          <span class="contact-link-left">
            <i class="ti ti-mail" aria-hidden="true"></i>
            chrislarosa.bsit@gmail.com
          </span>
          <span class="contact-link-arrow"><i class="ti ti-arrow-right"></i></span>
        </a>
        <a href="https://www.facebook.com/Sirhc0120" class="contact-link">
          <span class="contact-link-left">
            <i class="ti ti-brand-facebook" aria-hidden="true"></i>
            Facebook Profile
          </span>
          <span class="contact-link-arrow"><i class="ti ti-arrow-right"></i></span>
        </a>
        <a href="https://github.com/AHCEJ" class="contact-link">
          <span class="contact-link-left">
            <i class="ti ti-brand-github" aria-hidden="true"></i>
            GitHub Profile
          </span>
          <span class="contact-link-arrow"><i class="ti ti-arrow-right"></i></span>
        </a>
        <a href="#" class="contact-link">
          <span class="contact-link-left">
            <i class="ti ti-file-cv" aria-hidden="true"></i>
            Download Resume
          </span>
          <span class="contact-link-arrow"><i class="ti ti-arrow-right"></i></span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <p><span class="hl">©</span> 2026 Chris D. La Rosa</p>
  <p>Built with <span class="hl">HTML</span> · <span class="hl">CSS</span> · <span class="hl">Laravel</span></p>
</footer>

</body>
</html>