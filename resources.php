<?php
$page_title = "Resources";

include 'includes/header.php';
include 'data/resources.php';
?>

<main>

    <h1>Mental Wellness Resources</h1>

    <p>
        Browse trusted resources to help improve your mental health and
        practice healthy digital wellness habits.
    </p>

    <section class="resource-grid">

        <?php foreach ($resources as $resource): ?>

            <article class="resource-card">

                <h2><?= htmlspecialchars($resource["title"]); ?></h2>

                <h3><?= htmlspecialchars($resource["type"]); ?></h3>

                <p><?= htmlspecialchars($resource["description"]); ?></p>

                <a href="<?= htmlspecialchars($resource["url"]); ?>" target="_blank">
                    Learn More
                </a>

            </article>

        <?php endforeach; ?>

    </section>

</main>

<?php
include 'includes/footer.php';
?>