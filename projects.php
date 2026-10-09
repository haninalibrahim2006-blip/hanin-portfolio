<?php
$pageTitle = 'Projects | Hanin Alibrahim';
include 'header.php';
?>

<main>
    <section class="page-hero">
        <div class="wrap">
            <p class="eyebrow">A SELECTION OF THINGS I’VE BUILT</p>
            <h1>Projects & <span class="serif-accent">experiments.</span></h1>
            <p class="page-lead">
                A mix of internship work, school assignments and creative experiments.
                Each project has taught me something new.
            </p>
        </div>
    </section>

    <section class="section section-top">
        <div class="wrap">

            <article class="project-card project-card-feature">
                <div class="project-card-top">
                    <span>01</span>
                    <span>INTERNSHIP</span>
                </div>

                <p class="project-kicker">C# · EEG · BLUETOOTH LE</p>
                <h2>EEG sensor integration</h2>

                <p>
                    Exploring how a C# application can communicate with Veetra EEG earbuds and BrainBit sensors.
                    The work includes scanning for Bluetooth Low Energy devices, working with device data
                    and saving readings to CSV files for further analysis.
                </p>

                <div class="tag-row">
                    <span>C#</span>
                    <span>BrainFlow</span>
                    <span>BrainBit</span>
                    <span>Bluetooth LE</span>
                    <span>CSV</span>
                </div>

                <div class="project-foot">
                    <span>Internship project</span>
                    <span class="project-symbol">◉</span>
                </div>
            </article>

            <div class="project-grid">
                <article class="project-card">
                    <div class="project-card-top">
                        <span>02</span>
                        <span>WEB DEVELOPMENT</span>
                    </div>
                    <h2>GameWorld webshop</h2>
                    <p>
                        A database-driven game store with category pages and product information,
                        built to practise dynamic web pages and database integration.
                    </p>
                    <div class="tag-row">
                        <span>PHP</span><span>MySQL</span><span>HTML</span><span>CSS</span>
                    </div>
                </article>

                <article class="project-card">
                    <div class="project-card-top">
                        <span>03</span>
                        <span>WEB DEVELOPMENT</span>
                    </div>
                    <h2>Radio Gaga</h2>
                    <p>
                        A multi-page website with navigation, database elements and audio content,
                        with attention to page structure and user experience.
                    </p>
                    <div class="tag-row">
                        <span>PHP</span><span>MySQL</span><span>Audio</span>
                    </div>
                </article>

                <article class="project-card">
                    <div class="project-card-top">
                        <span>04</span>
                        <span>DESKTOP APPLICATIONS</span>
                    </div>
                    <h2>Pokédex & space shooter</h2>
                    <p>
                        Two Windows Forms projects: an interactive Pokédex and a 2D shooter
                        using timer-based game logic and keyboard controls.
                    </p>
                    <div class="tag-row">
                        <span>C#</span><span>Windows Forms</span><span>OOP</span>
                    </div>
                </article>

                <article class="project-card">
                    <div class="project-card-top">
                        <span>05</span>
                        <span>GAME DEVELOPMENT</span>
                    </div>
                    <h2>Unity 3D landscape</h2>
                    <p>
                        A 3D environment experiment using sculpted terrain, trees, lighting
                        and fog to create atmosphere and depth.
                    </p>
                    <div class="tag-row">
                        <span>Unity</span><span>C#</span><span>3D design</span>
                    </div>
                </article>

                <article class="project-card">
                    <div class="project-card-top">
                        <span>06</span>
                        <span>VISUAL DESIGN</span>
                    </div>
                    <h2>Brand & layout concepts</h2>
                    <p>
                        Creative explorations including restaurant menus, promotional layouts
                        and retro pixel-art assets.
                    </p>
                    <div class="tag-row">
                        <span>Layout</span><span>Branding</span><span>Pixel art</span>
                    </div>
                </article>

                <article class="project-card project-card-github">
                    <span class="github-symbol">↗</span>
                    <p class="eyebrow">MORE CODE & LEARNING</p>
                    <h2>Find me on GitHub.</h2>
                    <p>
                        Visit my profile to explore repositories and follow what I’m learning next.
                    </p>
                    <a class="button button-dark"
                       href="https://github.com/haninalibrahim2006-blip"
                       target="_blank" rel="noopener noreferrer">
                        Open GitHub <span>↗</span>
                    </a>
                </article>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>