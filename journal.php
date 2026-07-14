<?php
session_start(); 
$submitted = false;
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
    $submitted = true;
}
$page_title = "Journal";
$active_page = "journal";
include 'includes/header.php';
?>

<main>

    <h1>Mood Journal</h1>

    <?php if ($submitted): ?>
        <div style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid #c3e6cb;">
            Your journal entry has been saved successfully!
        </div>
    <?php endif; ?>

    <p>Write your thoughts out and describe how you currently feel.</p>
    <form action="journal.php" method="POST" style="width: 100%">
        <h5 style="text-align: center; color: #c4a482;">-
            <?php echo count($_SESSION['journal_entries'] ?? []) + 1; ?>-
        </h5>
        <input id = "title" name = "title" type="text" style="width: 100%;" placeholder="Title (Optional)">
        <textarea id="entry" name="entry" style="width: 100%; height: 200px; margin: 10px 0; padding: 15px;"></textarea>
        <p style="font-weight: bold; margin-bottom: 5px;">Mood Scale:</p>

        <style>
            /* Hide the actual radio buttons */
            .mood-radios input[type="radio"] {
                display: none;
            }
            /* Style all emoji labels */
            .mood-radios label {
                display: inline-block;
                cursor: pointer;
                opacity: 0.5;
                transition: opacity 0.2s;
                padding: 5px;
            }
            /* Highlight the selected emoji */
            .mood-radios input[type="radio"]:checked + label {
                opacity: 1;
            }
            /* Hover effect */
            .mood-radios label:hover {
                opacity: 0.8;
            }
        </style>

        <div class="mood-radios" style="display: flex; justify-content: space-around; align-items: center; margin: 15px 0;">
            <input type="radio" name="mood" id="mood1" value="1">
            <label for="mood1"><img src="images/emoji_10.png" alt="Very Sad" style="width: 50px; height: 50px;"></label>

            <input type="radio" name="mood" id="mood2" value="2">
            <label for="mood2"><img src="images/emoji_7.png" alt="Sad" style="width: 50px; height: 50px;"></label>

            <input type="radio" name="mood" id="mood3" value="3">
            <label for="mood3"><img src="images/emoji_6.png" alt="Down" style="width: 50px; height: 50px;"></label>

            <input type="radio" name="mood" id="mood4" value="4" checked>
            <label for="mood4"><img src="images/emoji_5.png" alt="Neutral" style="width: 50px; height: 50px;"></label>

            <input type="radio" name="mood" id="mood5" value="5">
            <label for="mood5"><img src="images/emoji_4.png" alt="OK" style="width: 50px; height: 50px;"></label>

            <input type="radio" name="mood" id="mood6" value="6">
            <label for="mood6"><img src="images/emoji_2.png" alt="Good" style="width: 50px; height: 50px;"></label>

            <input type="radio" name="mood" id="mood7" value="7">
            <label for="mood7"><img src="images/emoji_1.png" alt="Great" style="width: 50px; height: 50px;"></label>
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
        echo "<p style='grid-column: 1 / -1;'>No entries logged yet. Write your first thought....</p>";
    }
    ?>
</div>


</main>

<?php
include 'includes/footer.php';
?>
