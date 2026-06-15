<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chris D. La Rosa — Web Developer & IT Professional</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
*, *::before, *::after { 
  box-sizing: border-box; 
  margin: 0; 
  padding: 0; 
}

:root {
  --bg-dark: #0f0f1e;
  --bg-card: #1a1a2e;
  --text-white: #ffffff;
  --text-gray: #9ca3af;
  --text-light: #e5e7eb;
  --accent: #7c3aed;
  --accent-light: #a78bfa;
  --accent-bright: #a855f7;
  --border: #2d2d44;
  --serif: 'Merriweather', serif;
  --sans: 'Inter', sans-serif;
}

html { scroll-behavior: smooth; }

body {
  font-family: var(--sans);
  background: var(--bg-dark);
  color: var(--text-white);
  line-height: 1.6;
  overflow-x: hidden;
}

/* ── GRADIENT BACKGROUND ── */
body::before {
  content: '';
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: radial-gradient(circle at 20% 50%, rgba(124, 58, 237, 0.15) 0%, transparent 50%),
              radial-gradient(circle at 80% 80%, rgba(168, 85, 247, 0.1) 0%, transparent 50%);
  pointer-events: none;
  z-index: 0;
}

/* ── NAVIGATION ── */
nav {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 100;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 60px;
  height: 70px;
  background: rgba(15, 15, 30, 0.8);
  backdrop-filter: blur(20px);
  border-bottom: 1px solid var(--border);
}

.nav-logo {
  font-size: 14px;
  font-weight: 700;
  letter-spacing: 0.15em;
  color: var(--text-white);
  text-decoration: none;
  text-transform: uppercase;
}

.nav-links {
  display: flex;
  gap: 48px;
}

.nav-links a {
  font-size: 13px;
  color: var(--text-gray);
  text-decoration: none;
  transition: color 0.3s;
  font-weight: 500;
}

.nav-links a:hover {
  color: var(--accent);
}

.nav-cta {
  background: var(--accent);
  color: var(--bg-dark);
  padding: 10px 24px;
  border-radius: 6px;
  font-weight: 600;
  font-size: 13px;
  text-decoration: none;
  transition: all 0.3s;
  border: 1px solid var(--accent);
}

.nav-cta:hover {
  background: var(--accent-bright);
  border-color: var(--accent-bright);
}

/* ── HERO SECTION ── */
.hero {
  position: relative;
  min-height: 100vh;
  display: grid;
  grid-template-columns: 1fr 1fr;
  align-items: center;
  padding: 140px 60px 100px;
  gap: 80px;
  z-index: 1;
}

.hero-content {
  display: flex;
  flex-direction: column;
  gap: 32px;
}

.hero-label {
  font-size: 12px;
  color: var(--accent);
  text-transform: uppercase;
  letter-spacing: 0.1em;
  font-weight: 600;
}

.hero-title {
  font-family: var(--serif);
  font-size: clamp(48px, 6vw, 72px);
  font-weight: 700;
  line-height: 1.1;
  color: var(--text-white);
}

.hero-title .accent-text {
  color: var(--accent);
}

.hero-desc {
  font-size: 16px;
  color: var(--text-gray);
  line-height: 1.8;
  max-width: 500px;
}

.hero-cta {
  display: flex;
  gap: 16px;
  flex-wrap: wrap;
}

.btn-primary {
  background: var(--accent);
  color: var(--bg-dark);
  padding: 14px 32px;
  border-radius: 6px;
  font-weight: 600;
  font-size: 14px;
  text-decoration: none;
  transition: all 0.3s;
  border: 2px solid var(--accent);
  display: inline-flex;
  align-items: center;
  gap: 8px;
}

.btn-primary:hover {
  background: var(--accent-bright);
  border-color: var(--accent-bright);
  transform: translateY(-2px);
}

.btn-secondary {
  background: transparent;
  color: var(--text-white);
  padding: 14px 32px;
  border-radius: 6px;
  font-weight: 600;
  font-size: 14px;
  text-decoration: none;
  transition: all 0.3s;
  border: 2px solid var(--border);
  display: inline-flex;
  align-items: center;
  gap: 8px;
}

.btn-secondary:hover {
  border-color: var(--accent);
  color: var(--accent);
}

.hero-image {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}

.profile-circle {
  width: 380px;
  height: 480px;
  border-radius: 8px;
  background: var(--bg-card);
  border: 2px solid var(--border);
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  box-shadow: 0 20px 60px rgba(124, 58, 237, 0.3);
  overflow: hidden;
}

.profile-circle img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  object-position: center;
  background: transparent;
}

.profile-initials {
  width: 100%;
  height: 100%;
  border-radius: 8px;
  background: linear-gradient(135deg, var(--accent), var(--accent-bright));
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: var(--serif);
  font-size: 80px;
  font-weight: 700;
  color: var(--text-white);
}

/* ── TRUSTED BY ── */
.trusted-section {
  padding: 60px;
  border-top: 1px solid var(--border);
  border-bottom: 1px solid var(--border);
  background: rgba(26, 26, 46, 0.4);
}

.trusted-container {
  max-width: 1200px;
  margin: 0 auto;
}

.trusted-label {
  font-size: 12px;
  color: var(--text-gray);
  text-transform: uppercase;
  letter-spacing: 0.1em;
  margin-bottom: 32px;
}

.trusted-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
  gap: 40px;
  align-items: center;
}

.trusted-item {
  font-size: 14px;
  color: var(--text-gray);
  font-weight: 500;
  opacity: 0.7;
  transition: opacity 0.3s;
}

.trusted-item:hover {
  opacity: 1;
  color: var(--accent);
}

/* ── FEATURED PROJECTS ── */
.featured-section {
  padding: 120px 60px;
  max-width: 1200px;
  margin: 0 auto;
  width: 100%;
}

.section-header {
  margin-bottom: 60px;
}

.section-label {
  font-size: 12px;
  color: var(--accent);
  text-transform: uppercase;
  letter-spacing: 0.1em;
  font-weight: 600;
  margin-bottom: 16px;
}

.section-title {
  font-family: var(--serif);
  font-size: clamp(36px, 5vw, 52px);
  font-weight: 700;
  color: var(--text-white);
}

.featured-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
  gap: 32px;
}

.project-card {
  background: linear-gradient(135deg, var(--bg-card), rgba(124, 58, 237, 0.1));
  border: 1px solid var(--border);
  border-radius: 12px;
  padding: 32px;
  transition: all 0.3s;
  cursor: pointer;
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.project-card:hover {
  border-color: var(--accent);
  transform: translateY(-5px);
  box-shadow: 0 20px 40px rgba(124, 58, 237, 0.2);
}

.project-number {
  font-size: 11px;
  color: var(--accent);
  text-transform: uppercase;
  letter-spacing: 0.12em;
  font-weight: 700;
}

.project-title {
  font-size: 20px;
  font-weight: 700;
  color: var(--text-white);
  line-height: 1.3;
}

.project-desc {
  font-size: 14px;
  color: var(--text-gray);
  line-height: 1.7;
  flex-grow: 1;
}

.project-tags {
  display: flex;
  gap: 8px;
  flex-wrap: wrap;
  padding-top: 16px;
  border-top: 1px solid var(--border);
}

.tag {
  font-size: 11px;
  background: rgba(124, 58, 237, 0.15);
  color: var(--accent-light);
  padding: 6px 12px;
  border-radius: 4px;
  font-weight: 500;
}

/* ── STATS SECTION ── */
.stats-section {
  padding: 100px 60px;
  background: linear-gradient(135deg, rgba(124, 58, 237, 0.1), rgba(168, 85, 247, 0.05));
  border-top: 1px solid var(--border);
  border-bottom: 1px solid var(--border);
}

.stats-container {
  max-width: 1200px;
  margin: 0 auto;
}

.stats-title {
  font-family: var(--serif);
  font-size: 44px;
  font-weight: 700;
  margin-bottom: 60px;
  text-align: center;
}

.stats-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 40px;
}

.stat-item {
  text-align: center;
}

.stat-icon {
  font-size: 40px;
  margin-bottom: 16px;
}

.stat-number {
  font-size: 36px;
  font-weight: 800;
  color: var(--accent);
  margin-bottom: 8px;
}

.stat-label {
  font-size: 14px;
  color: var(--text-gray);
  text-transform: uppercase;
  letter-spacing: 0.08em;
}

/* ── SKILLS SECTION ── */
.skills-section {
  padding: 120px 60px;
  max-width: 1200px;
  margin: 0 auto;
  width: 100%;
}

.skills-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 24px;
}

.skill-box {
  background: linear-gradient(135deg, var(--bg-card), rgba(124, 58, 237, 0.05));
  border: 1px solid var(--border);
  border-radius: 12px;
  padding: 28px;
  transition: all 0.3s;
}

.skill-box:hover {
  border-color: var(--accent);
  transform: translateY(-3px);
}

.skill-icon {
  font-size: 32px;
  margin-bottom: 16px;
}

.skill-name {
  font-size: 16px;
  font-weight: 700;
  color: var(--text-white);
  margin-bottom: 8px;
}

.skill-desc {
  font-size: 13px;
  color: var(--text-gray);
  line-height: 1.6;
}

/* ── CONTACT SECTION ── */
.contact-section {
  padding: 120px 60px;
  background: linear-gradient(135deg, rgba(124, 58, 237, 0.1), rgba(168, 85, 247, 0.05));
  border-top: 1px solid var(--border);
  max-width: 1200px;
  margin: 0 auto;
  width: 100%;
}

.contact-content {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 80px;
  align-items: center;
}

.contact-text h2 {
  font-family: var(--serif);
  font-size: clamp(36px, 5vw, 56px);
  font-weight: 700;
  line-height: 1.1;
  margin-bottom: 24px;
}

.contact-text h2 .accent-text {
  color: var(--accent);
}

.contact-text p {
  font-size: 15px;
  color: var(--text-gray);
  line-height: 1.8;
}

.contact-links {
  display: flex;
  flex-direction: column;
  gap: 16px;
}

.contact-link {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  background: rgba(124, 58, 237, 0.1);
  border: 1px solid var(--border);
  border-radius: 8px;
  text-decoration: none;
  color: var(--text-white);
  transition: all 0.3s;
  font-weight: 500;
}

.contact-link:hover {
  background: rgba(124, 58, 237, 0.2);
  border-color: var(--accent);
}

.contact-link i {
  margin-right: 10px;
  color: var(--accent);
  font-size: 18px;
}

.contact-link-arrow {
  color: var(--accent);
  font-size: 20px;
}

/* ── FOOTER ── */
footer {
  border-top: 1px solid var(--border);
  padding: 40px 60px;
  text-align: center;
  color: var(--text-gray);
  font-size: 13px;
}

/* ── RESPONSIVE ── */
@media (max-width: 768px) {
  nav {
    padding: 0 24px;
    height: 60px;
  }

  .nav-links {
    display: none;
  }

  .nav-cta {
    padding: 8px 16px;
    font-size: 12px;
  }

  .hero {
    grid-template-columns: 1fr;
    padding: 120px 24px 60px;
    gap: 40px;
  }

  .profile-circle {
    width: 100%;
    max-width: 280px;
    height: 360px;
  }

  .profile-circle img {
    width: 100%;
    height: 100%;
  }

  .profile-initials {
    width: 100%;
    height: 100%;
    font-size: 60px;
  }

  .trusted-section,
  .featured-section,
  .skills-section,
  .contact-section {
    padding: 60px 24px;
  }

  .featured-grid {
    grid-template-columns: 1fr;
  }

  .contact-content {
    grid-template-columns: 1fr;
    gap: 40px;
  }

  .stats-grid {
    grid-template-columns: 1fr 1fr;
  }
}

@media (prefers-reduced-motion: reduce) {
  * {
    transition: none !important;
  }
}
</style>
</head>
<body>

<!-- NAVIGATION -->
<nav>
  <a class="nav-logo" href="#">CD·LR</a>
  <div class="nav-links">
    <a href="#projects">Projects</a>
    <a href="#skills">Skills</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
  </div>
  <a href="#contact" class="nav-cta">Let's Talk →</a>
</nav>

<!-- HERO SECTION -->
<section class="hero">
  <div class="hero-content">
    <p class="hero-label">Web Developer & IT Professional</p>
    <h1 class="hero-title">
      Web Developer<br><span class="accent-text">&</span> Builder<br>of Digital Solutions
    </h1>
    <p class="hero-desc">
      Fresh IT graduate passionate about crafting clean, functional web applications. Turning ideas into working software using modern web technologies and best practices.
    </p>
    <div class="hero-cta">
      <a href="#contact" class="btn-primary">View My Work →</a>
      <a href="#about" class="btn-secondary">Learn More</a>
    </div>
  </div>

  <div class="hero-image">
    <div class="profile-circle">
      <img src="./chris.png" alt="Chris D. La Rosa"
        onerror="this.parentElement.innerHTML='<div class=&quot;profile-initials&quot;>CL</div>'">>
    </div>
  </div>
</section>

<!-- TRUSTED BY -->
<section class="trusted-section">
  <div class="trusted-container">
    <p class="trusted-label">Experienced With</p>
    <div class="trusted-grid">
      <div class="trusted-item">📦 Laravel</div>
      <div class="trusted-item">🗄️ MySQL</div>
      <div class="trusted-item">⚡ JavaScript</div>
      <div class="trusted-item">🎨 HTML / CSS</div>
      <div class="trusted-item">🔧 Git & GitHub</div>
      <div class="trusted-item">📱 Responsive Design</div>
    </div>
  </div>
</section>

<!-- FEATURED PROJECTS -->
<section id="projects" class="featured-section">
  <div class="section-header">
    <p class="section-label">Portfolio</p>
    <h2 class="section-title">Featured Projects</h2>
  </div>

  <div class="featured-grid">
    <div class="project-card">
      <p class="project-number">PROJECT / 01</p>
      <h3 class="project-title">Student Information System</h3>
      <p class="project-desc">A comprehensive web-based system for managing student records, enrollment, and grades with admin dashboard and reporting features.</p>
      <div class="project-tags">
        <span class="tag">Laravel</span>
        <span class="tag">MySQL</span>
        <span class="tag">Blade</span>
        <span class="tag">Bootstrap</span>
      </div>
    </div>

    <div class="project-card">
      <p class="project-number">PROJECT / 02</p>
      <h3 class="project-title">Inventory Management System</h3>
      <p class="project-desc">Full-stack CRUD system for tracking products, stock levels, and transactions with user authentication, role management, and PDF reports.</p>
      <div class="project-tags">
        <span class="tag">PHP</span>
        <span class="tag">MySQL</span>
        <span class="tag">JavaScript</span>
        <span class="tag">CSS</span>
      </div>
    </div>

    <div class="project-card">
      <p class="project-number">PROJECT / 03</p>
      <h3 class="project-title">Personal Blog Platform</h3>
      <p class="project-desc">A modern blog application with user authentication, article creation, categories, and a clean, responsive reading interface.</p>
      <div class="project-tags">
        <span class="tag">Laravel</span>
        <span class="tag">Blade</span>
        <span class="tag">MySQL</span>
        <span class="tag">Tailwind</span>
      </div>
    </div>

    <div class="project-card">
      <p class="project-number">PROJECT / 04</p>
      <h3 class="project-title">Online Appointment Booking</h3>
      <p class="project-desc">Appointment scheduling system for salons and clinics. Customers can book appointments with automatic email confirmations.</p>
      <div class="project-tags">
        <span class="tag">Laravel</span>
        <span class="tag">MySQL</span>
        <span class="tag">JavaScript</span>
        <span class="tag">Blade</span>
      </div>
    </div>
  </div>
</section>

<!-- STATS SECTION -->
<section class="stats-section">
  <div class="stats-container">
    <h2 class="stats-title">By The Numbers</h2>
    <div class="stats-grid">
      <div class="stat-item">
        <div class="stat-icon">🎓</div>
        <div class="stat-number">BS<span style="font-size: 24px;">IT</span></div>
        <div class="stat-label">Degree</div>
      </div>
      <div class="stat-item">
        <div class="stat-icon">💼</div>
        <div class="stat-number">4<span style="font-size: 24px;">+</span></div>
        <div class="stat-label">Projects</div>
      </div>
      <div class="stat-item">
        <div class="stat-icon">⚙️</div>
        <div class="stat-number">6<span style="font-size: 24px;">+</span></div>
        <div class="stat-label">Technologies</div>
      </div>
      <div class="stat-item">
        <div class="stat-icon">🚀</div>
        <div class="stat-number">∞</div>
        <div class="stat-label">Growth</div>
      </div>
    </div>
  </div>
</section>

<!-- SKILLS SECTION -->
<section id="skills" class="skills-section">
  <div class="section-header">
    <p class="section-label">Expertise</p>
    <h2 class="section-title">What I Work With</h2>
  </div>

  <div class="skills-grid">
    <div class="skill-box">
      <div class="skill-icon">🐘</div>
      <h3 class="skill-name">PHP & Laravel</h3>
      <p class="skill-desc">Building robust backend applications using PHP and the Laravel framework with clean architecture principles.</p>
    </div>

    <div class="skill-box">
      <div class="skill-icon">🗄️</div>
      <h3 class="skill-name">MySQL</h3>
      <p class="skill-desc">Database design, optimization, and management using MySQL with Laravel's Eloquent ORM for efficient data handling.</p>
    </div>

    <div class="skill-box">
      <div class="skill-icon">🌐</div>
      <h3 class="skill-name">HTML & CSS</h3>
      <p class="skill-desc">Structuring and styling web pages with semantic HTML and modern CSS techniques for responsive design.</p>
    </div>

    <div class="skill-box">
      <div class="skill-icon">⚡</div>
      <h3 class="skill-name">JavaScript</h3>
      <p class="skill-desc">Adding interactivity and dynamic behavior to web applications with vanilla JavaScript and modern frameworks.</p>
    </div>

    <div class="skill-box">
      <div class="skill-icon">🔧</div>
      <h3 class="skill-name">Git & Version Control</h3>
      <p class="skill-desc">Collaborative development using Git and GitHub with proper branching strategies and commit practices.</p>
    </div>

    <div class="skill-box">
      <div class="skill-icon">📱</div>
      <h3 class="skill-name">Responsive Design</h3>
      <p class="skill-desc">Creating web applications that work seamlessly across mobile, tablet, and desktop devices.</p>
    </div>
  </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="contact-section">
  <div class="contact-content">
    <div class="contact-text">
      <h2>
        Got a <span class="accent-text">project?</span><br>Let's talk.
      </h2>
      <p>
        I'm open to freelance projects, full-time opportunities, and collaborations. Whether you have a web app idea, need a developer, or just want to chat about technology, feel free to reach out.
      </p>
    </div>

    <div class="contact-links">
      <a href="mailto:chrislarosa.bsit@gmail.com" class="contact-link">
        <span><i class="fas fa-envelope"></i> Email Me</span>
        <span class="contact-link-arrow">→</span>
      </a>
      <a href="https://github.com/AHCEJ" target="_blank" class="contact-link">
        <span><i class="fab fa-github"></i> GitHub Profile</span>
        <span class="contact-link-arrow">→</span>
      </a>
      <a href="https://www.facebook.com/Sirhc0120" target="_blank" class="contact-link">
        <span><i class="fab fa-facebook"></i> Facebook</span>
        <span class="contact-link-arrow">→</span>
      </a>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <p>© 2026 Chris D. La Rosa. Built with HTML, CSS & Modern Web Technologies.</p>
</footer>

</body>
</html>