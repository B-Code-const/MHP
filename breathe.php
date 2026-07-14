<?php
$page_title = "Guided Breathing";
$active_page = "breathe";
include 'includes/header.php';
?>

<main>
    <!-- Guided breathing exercise introduction -->

    <section class="breathing-container">

        <h1>Guided Breathing Exercise</h1>

        <p class="intro">
            Take a few moments to slow down, breathe deeply,
            and relax. Follow the animation below and breathe
            at a comfortable pace.
        </p>
        <!-- Animated breathing circle controlled by CSS keyframes -->
        <div class="breathing-circle">

            <div class="inner-circle">

                <p>Breathe</p>

            </div>

        </div>
        <!-- Step-by-step breathing instructions -->

        <div class="breathing-steps">

            <div>
                <h3>🌬️ Breathe In</h3>
                <p>Slowly inhale through your nose.</p>
            </div>

            <div>
                <h3>⏸ Hold</h3>
                <p>Hold your breath gently.</p>
            </div>

            <div>
                <h3>💨 Breathe Out</h3>
                <p>Exhale slowly through your mouth.</p>
            </div>

        </div>
        <!-- Motivational quote -->

        <blockquote>
            "A few deep breaths can make a big difference."
        </blockquote>

        <a href="index.php" class="hero-button">
            Return Home
        </a>

    </section>

</main>

<?php
include 'includes/footer.php';
?>
