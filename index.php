<?php
$pageTitle = 'Hanin Alibrahim | Software Developer';
include 'header.php';
?>

<main>
    <section class="hero">
        <div class="wrap hero-grid">
            <div class="hero-copy">
                <p class="eyebrow"><span class="status-dot"></span> SOFTWARE DEVELOPMENT STUDENT · THE NETHERLANDS</p>

                <h1>Curious mind.<br><span class="serif-accent">Creative builder.</span></h1>

                <p class="hero-lead">
                    I’m Hanin — a software development student who enjoys turning ideas into useful technology.
                    I work with C#, PHP and web technologies, and I’m exploring the connection between software,
                    sensors and immersive experiences.
                </p>

                <div class="hero-actions">
                    <a class="button button-dark" href="projects.php">Explore my work <span>↗</span></a>
                    <a class="text-link" href="contact.php">Let’s connect <span>→</span></a>
                </div>

                <div class="hero-meta">
                    <span><strong>01</strong> Software & web</span>
                    <span><strong>02</strong> Sensors & technology</span>
                    <span><strong>03</strong> Future space engineer</span>
                </div>
            </div>

            <div class="hero-visual">
                <div class="photo-frame">
                    <img
                        src="Schermafbeelding%202026-09-22%20122502.png"
                        alt="Portrait of Hanin Alibrahim"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='grid';"
                    >
                    <div class="photo-fallback" aria-hidden="true">
                        <span>H</span>
                        <small>PORTRAIT</small>
                    </div>
                </div>

                <div class="floating-note">
                    <span class="note-icon">✳</span>
                    <div>
                        <strong>Always learning</strong>
                        <small>One project at a time</small>
                    </div>
                </div>

                <div class="visual-caption">THE NETHERLANDS <span>·</span> ALWAYS LEARNING</div>
            </div>
        </div>
    </section>

    <section class="intro-strip">
        <div class="wrap strip-inner">
            <span class="strip-label">A LITTLE ABOUT MY APPROACH</span>
            <p>I combine a practical developer mindset with creativity, curiosity and a love for understanding how things work.</p>
            <a href="about.php">More about me <span>→</span></a>
        </div>
    </section>

    <section class="section" id="featured">
        <div class="wrap">
            <div class="section-heading">
                <div>
                    <p class="eyebrow">WHAT I’VE BEEN WORKING ON</p>
                    <h2>Selected work<span class="brand-dot">.</span></h2>
                </div>
                <a class="text-link" href="projects.php">All projects <span>→</span></a>
            </div>

            <article class="featured-project">
                <div class="project-number">01 / INTERNSHIP</div>

                <div class="featured-copy">
                    <p class="project-kicker">C# · SENSOR INTEGRATION</p>
                    <h3>Connecting software<br>with real-world data.</h3>
                    <p>
                        During my internship at SENSIKS, I’ve been exploring how software can connect with EEG devices,
                        work with incoming sensor data, and save results for further analysis.
                    </p>
                    <a href="projects.php" class="arrow-link">View project overview <span>↗</span></a>
                </div>

                <div class="feature-art" aria-label="Abstract technology illustration">
                    <div class="orbit orbit-one"></div>
                    <div class="orbit orbit-two"></div>
                    <div class="orbit orbit-three"></div>
                    <span class="orbit-core">EEG</span>
                    <span class="art-label">DATA IN MOTION</span>
                </div>
            </article>

            <div class="mini-projects">
                <article class="mini-project">
                    <span class="mini-icon">⌘</span>
                    <p class="project-kicker">WEB DEVELOPMENT</p>
                    <h3>GameWorld webshop</h3>
                    <p>A database-driven shop built as a web development project.</p>
                    <a href="projects.php">Explore project <span>→</span></a>
                </article>

                <article class="mini-project">
                    <span class="mini-icon">◉</span>
                    <p class="project-kicker">GAME DEVELOPMENT</p>
                    <h3>Unity 3D landscape</h3>
                    <p>A 3D environment focused on terrain, lighting and atmosphere.</p>
                    <a href="projects.php">Explore project <span>→</span></a>
                </article>

                <article class="mini-project">
                    <span class="mini-icon">✳</span>
                    <p class="project-kicker">CREATIVE DESIGN</p>
                    <h3>Visual concepts</h3>
                    <p>Exploring layouts, visual identity and pixel-art ideas.</p>
                    <a href="projects.php">Explore project <span>→</span></a>
                </article>
            </div>
        </div>
    </section>

    <section class="quote-band">
        <div class="wrap quote-inner">
            <span class="quote-mark">“</span>
            <p>I’m interested in more than writing code — I want to understand the systems, people and ideas behind it.</p>
            <span class="quote-credit">MY WAY OF THINKING</span>
        </div>
    </section>

    <section class="section">
        <div class="wrap cta-panel">
            <div>
                <p class="eyebrow">HAVE A PROJECT OR OPPORTUNITY?</p>
                <h2>Let’s make something<br><span class="serif-accent">meaningful.</span></h2>
            </div>
            <a class="button button-light" href="contact.php">Get in touch <span>↗</span></a>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>