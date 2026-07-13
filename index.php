<?php
$page_title = "Home";
$active_page = "home";
include 'includes/header.php';
?>

<main>

    <section class="hero">

        <h1>Welcome to MindSpace</h1>

        <p>
            Take a moment to slow down, breathe, and focus on your well-being.
            MindSpace provides resources and daily wellness tools to support your
            mental health.
        </p>

        <a href="journal.php" class="hero-button">
            Start Today's Journal
        </a>

    </section>

    <section class="affirmation-section">

        <h2>Daily Affirmations</h2>

        <!-- Radio Buttons -->
        <input type="radio" name="carousel" id="slide1" checked>
        <input type="radio" name="carousel" id="slide2">
        <input type="radio" name="carousel" id="slide3">
        <input type="radio" name="carousel" id="slide4">
        <input type="radio" name="carousel" id="slide5">
        <input type="radio" name="carousel" id="slide6">

        <div class="carousel">

            <div class="slide slide1">
                <h3>💙</h3>
                <p>You are stronger than you think.</p>
            </div>

            <div class="slide slide2">
                <h3>🌿</h3>
                <p>Small steps each day lead to big progress.</p>
            </div>

            <div class="slide slide3">
                <h3>☀️</h3>
                <p>Your mental health matters just as much as your physical health.</p>
            </div>

            <div class="slide slide4">
                <h3>✨</h3>
                <p>Take a deep breath. You are doing your best.</p>
            </div>

            <div class="slide slide5">
                <h3>☺️</h3>
                <p>I am good and getting better.</p>
            </div>

            <div class="slide slide6">
                <h3>😁</h3>
                <p>I am optimistic because today is a new day.</p>
            </div>

        </div>

        <div class="carousel-nav">

            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
            <label for="slide4"></label>
            <label for="slide5"></label>
            <label for="slide6"></label>

        </div>

    </section>

</main>

<?php
include 'includes/footer.php';
?>
