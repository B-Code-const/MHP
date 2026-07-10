<?php
$page_title = "Journal";
include 'includes/header.php';
?>

<main>
    <h1>Mood Journal</h1>
    <p>This is the main content area of the journal page.\n write your thought out an describe how you currently feel</p>
    <form action="journal.php" method="POST" style="width: 100%">
    <input id = "title" type="text" style="width: 100%;" placeholder="Title (Optional)">
    <input id = "entry" type="text" style="width: 100%; padding: 130px; margin: 10px 0; border: 1px solid #ccc;" placeholder="How are you feeling today?"></input>
    <button type="submit">Submit</button>
    </form>
</main>
<
<?php
include 'includes/footer.php';
?>
