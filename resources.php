<?php
$page_title = "Resources";

include 'data/resources.php';
include 'includes/header.php';
?>

<main>

    <section class="resources-hero">

        <h1>Mental Wellness Resources</h1>

        <p>
            Browse trusted resources to help improve your mental health and
            practice healthy digital wellness habits.
        </p>

        <a href="journal.php" class="hero-button">
            Start Today's Mood Journal
        </a>

    </section>

    <section class="resource-grid">

        <?php foreach ($resources as $resource): ?>

            <article class="resource-card">

                <span class="resource-type">
                    <?= htmlspecialchars($resource["type"]); ?>
                </span>

                <h2>
                    <?= htmlspecialchars($resource["title"]); ?>
                </h2>

                <p>
                    <?= htmlspecialchars($resource["description"]); ?>
                </p>

                <a
                    href="<?= htmlspecialchars($resource["url"]); ?>"
                    target="_blank">
                    Learn More →
                </a>

            </article>

        <?php endforeach; ?>

    </section>

</main>

<?php
include 'includes/footer.php';
?>