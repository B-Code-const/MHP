<?php
session_start();
$page_title = "Summary";
$active_page = "summary";
include 'includes/header.php';
?>

<main>
    
    <h1>Wellness Summary</h1>
    <p>Your dashboard summary of mood check-ins and self-care progress.</p>
    
<style>
.mycontainer {
  width:100%;
  overflow:auto;
}
.mycontainer div {
  width:33%;
  float:left;
}
</style>
<div class="mycontainer">
<div>
  <h2>London</h2>
  <p>London is the capital city of England.</p>
  <p>London has over 9 million inhabitants.</p>
</div>

<div>
  <h2>Oslo</h2>
  <p>Oslo is the capital city of Norway.</p>
  <p>Oslo has over 700,000 inhabitants.</p>
</div>

<div>
  <h2>Rome</h2>
  <p>Rome is the capital city of Italy.</p>
  <p>Rome has over 4 million inhabitants.</p>
</div>
</main>

<?php
include 'includes/footer.php';
?>
