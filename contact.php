<?php
$pageTitle = 'Contact | Hanin Alibrahim';
include 'header.php';
?>

<main>
    <section class="page-hero">
        <div class="wrap">
            <p class="eyebrow">SAY HELLO</p>
            <h1>Let’s start a <span class="serif-accent">conversation.</span></h1>
            <p class="page-lead">
                Have a question, internship opportunity or project idea?
                Send me a message using the form below.
            </p>
        </div>
    </section>

    <section class="section section-top">
        <div class="wrap contact-layout">

            <div class="contact-side">
                <p class="eyebrow">GET IN TOUCH</p>
                <h2>Good things<br>start with a<br><span class="serif-accent">message.</span></h2>

                <p>
                    I’m happy to connect about software development, technology,
                    creative projects and opportunities to learn.
                </p>

                <a class="contact-email" href="mailto:hanin.alibrahim.2006@gmail.com">
                    hanin.alibrahim.2006@gmail.com <span>↗</span>
                </a>

                <div class="social-links">
                    <a href="https://www.linkedin.com/in/hanin-al-ibrahim-b6996a338/"
                       target="_blank" rel="noopener noreferrer">
                        LinkedIn <span>↗</span>
                    </a>
                    <a href="https://github.com/haninalibrahim2006-blip"
                       target="_blank" rel="noopener noreferrer">
                        GitHub <span>↗</span>
                    </a>
                </div>
            </div>

            <form class="contact-form" action="sent.php" method="POST">
                <p class="eyebrow">SEND A MESSAGE</p>

                <?php if (isset($_GET['sent']) && $_GET['sent'] === '1'): ?>
                    <p class="notice success">Thank you! Your message has been sent.</p>
                <?php endif; ?>

                <?php if (isset($_GET['error'])): ?>
                    <p class="notice error">Please check your details and try again.</p>
                <?php endif; ?>

                <?php if (isset($_GET['sent']) && $_GET['sent'] === '0'): ?>
                    <p class="notice error">
                        Sorry, the message could not be sent. Please email me directly.
                    </p>
                <?php endif; ?>

                <div class="field">
                    <label for="name">Your name</label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        placeholder="How should I call you?"
                        autocomplete="name"
                        maxlength="100"
                        required
                    >
                </div>

                <div class="field">
                    <label for="email">Email address</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        placeholder="you@example.com"
                        autocomplete="email"
                        maxlength="254"
                        required
                    >
                </div>

                <div class="field">
                    <label for="message">Your message</label>
                    <textarea
                        id="message"
                        name="message"
                        rows="5"
                        placeholder="Tell me a little about it..."
                        maxlength="5000"
                        required
                    ></textarea>
                </div>

                <div class="hp-field" aria-hidden="true">
                    <label for="website">Leave this field empty</label>
                    <input id="website" name="website" tabindex="-1" autocomplete="off">
                </div>

                <button class="button button-dark" type="submit">
                    Send message <span>↗</span>
                </button>

                <p class="form-note">
                    Your message will be sent to my email address.
                    If the form does not work, please email me directly.
                </p>
            </form>

        </div>
    </section>
</main>

<?php include 'footer.php'; ?>