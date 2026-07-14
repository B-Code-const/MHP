<?php
$page_title = "Resources";
// Set the page title and load the resource data array.
include 'data/resources.php';
include 'includes/header.php';
?>

<main>
<!-- Hero section introducing the Mental Wellness Resources page -->
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
<!-- Resource cards generated from the PHP resources array -->
        <?php foreach ($resources as $resource): ?>
<!-- Loop through each resource and create a resource card. -->

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