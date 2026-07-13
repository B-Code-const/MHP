<?php
session_start(); 
if (!empty($_POST['entry'])) {
    $title = trim($_POST['title'] ?? '');
    if ($title === '') {
        $title = 'Untitled';
    }
    // Save current check-in mood to session (satisfies project rubric!)
    $_SESSION['mood'] = intval($_POST['mood'] ?? 4);

    $_SESSION['journal_entries'][] = [
        'title' => htmlspecialchars($title),
        'content' => htmlspecialchars($_POST['entry']),
        'mood' => intval($_POST['mood'] ?? 4)
    ];
}
$page_title = "Journal";
$active_page = "journal";
include 'includes/header.php';
?>

<main>

    <h1>Mood Journal</h1>
    <p>This is the main content area of the journal page.\n write your thought out an describe how you currently feel</p>
    <form action="journal.php" method="POST" style="width: 100%">
        <h5 style="text-align: center; color: #c4a482;">-
            <?php echo count($_SESSION['journal_entries'] ?? []) + 1; ?>-
        </h5>
        <input id = "title" name = "title" type="text" style="width: 100%;" placeholder="Title (Optional)">
        <textarea id="entry" name="entry" style="width: 100%; height: 200px; margin: 10px 0; padding: 15px;"></textarea>
        <p style="font-weight: bold; margin-bottom: 5px;">Mood Scale:</p>
        <div style="display: flex; align-items: center; gap: 20px; margin: 15px 0;">
            <input type="range" id="mood-slider" name="mood" min="1" max="7" value="4" style="flex: 1;" oninput="updateMood(this.value)">
            <img id="mood-emoji" src="images/emoji_5.png" alt="Current Mood" style="width: 60px; height: 60px;">
        </div>


        <button type="submit">Submit</button>

    </form>

    <h3>Previous Entries</h3>
<div class="entries-list">
    <?php
    if (!empty($_SESSION['journal_entries'])) {
        foreach (array_reverse($_SESSION['journal_entries'], true) as $id => $item) {
            
            echo "<div class='entry-card'>";
            echo "<span style='float: right; font-size: 12px; color: #888;'>Entry #" . ($id + 1) . "</span>";
            
            // Map mood number to correct emoji file and show it on card!
            $mood_val = $item['mood'] ?? 4;
            $emoji_map = [
                1 => 'emoji_10.png',
                2 => 'emoji_7.png',
                3 => 'emoji_6.png',
                4 => 'emoji_5.png',
                5 => 'emoji_4.png',
                6 => 'emoji_2.png',
                7 => 'emoji_1.png'
            ];
            $emoji_name = $emoji_map[$mood_val] ?? 'emoji_5.png';
            echo "<img src='images/$emoji_name' style='float: right; width: 24px; height: 24px; margin-right: 8px;' alt='Mood'>";

            $display_title = !empty($item['title']) ? $item['title'] : 'Untitled';
            echo "<strong>" . $display_title . "</strong>";
            echo "<p style='margin-top: 10px;'>" . $item['content'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p style='grid-column: 1 / -1;'>No entries logged yet. Write your first thought above! Ug.</p>";
    }
    ?>
</div>


</main>

<script>
function updateMood(val) {
    const emojis = {
        '1': 'images/emoji_10.png',
        '2': 'images/emoji_7.png',
        '3': 'images/emoji_6.png',
        '4': 'images/emoji_5.png',
        '5': 'images/emoji_4.png',
        '6': 'images/emoji_2.png',
        '7': 'images/emoji_1.png'
    };
    document.getElementById('mood-emoji').src = emojis[val];
}
</script>

<?php
include 'includes/footer.php';
?>
