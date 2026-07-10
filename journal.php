<?php
session_start(); 
if (!empty($_POST['entry'])) {
    $_SESSION['journal_entries'][] = [
        'title' => htmlspecialchars($_POST['title']),
        'content' => htmlspecialchars($_POST['entry'])
    ];
}
$page_title = "Journal";
include 'includes/header.php';
?>

<main>
    <h1>Mood Journal</h1>
    <p>This is the main content area of the journal page.\n write your thought out an describe how you currently feel</p>
    <form action="journal.php" method="POST" style="width: 100%">
        <h5 style="text-align: center; color: #c4a482;">-
            <?php echo count($_SESSION['journal_entries']); ?>-
        </h5>
        <input id = "title" name = "title" type="text" style="width: 100%;" placeholder="Title (Optional)">
        <textarea id="entry" name="entry" style="width: 100%; height: 200px; margin: 10px 0; padding: 15px;"></textarea>
        <button type="submit">Submit</button>
    </form>

    <h3>Previous Entries</h3>
<div class="entries-list">
    <?php
    if (!empty($_SESSION['journal_entries'])) {
        foreach (array_reverse($_SESSION['journal_entries'], true) as $id => $item) {
            
            echo "<div class='entry-card'>";
            echo "<strong>Entry #" . ($id + 1) . ": " . $item['title'] . "</strong><br>";
            echo "<p>" . $item['content'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p style='grid-column: 1 / -1;'>No entries logged yet. Write your first thought above! Ug.</p>";
    }
    ?>
</div>


</main>
<
<?php
include 'includes/footer.php';
?>
