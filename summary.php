<?php
session_start();
// Load today's wellness tip from the tips array using the current weekday.
include 'data/tips.php';
$tip = $tips[date('N') - 1];

$page_title = "Summary";
$active_page = "summary";
$mood_val = $_SESSION['mood'] ?? null;
$emoji_map = [
  1 => 'emoji_10.png',
  2 => 'emoji_7.png',
  3 => 'emoji_6.png',
  4 => 'emoji_5.png',
  5 => 'emoji_4.png',
  6 => 'emoji_2.png',
  7 => 'emoji_1.png'
];
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
  box-sizing: border-box;
  padding: 10px;
}

/* Slideshow Container */
.slideshow {
  position: relative;
  width: 100%;
  height: 160px;
  overflow: hidden;
  border-radius: 12px;
  margin-top: 10px;
  background-color: #f0e6df;
  box-shadow: 0 4px 6px rgba(0,0,0,0.05);
}

.cat-slide {
  position: absolute;
  top: 15;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 0;
  animation: fadeSlideshow 9s infinite;
}

/* Delay for each slide */
.slide1 { animation-delay: 0s; }
.slide2 { animation-delay: 2s; }
.slide3 { animation-delay: 4s; }

/* Fading animation keyframes */
@keyframes fadeSlideshow {
  0% { opacity: 0; }
  5% { opacity: 1; }
  33% { opacity: 1; }
  38% { opacity: 0; }
  100% { opacity: 0; }
}

/* Daily Tip */
.daily-tip {
  margin-top: 40px;
  padding: 20px;
  background-color: #f0e6df;
  border-radius: 12px;
  text-align: center;
  box-shadow: 0 4px 6px rgba(0,0,0,0.05);
}

.daily-tip h2 {
  margin-top: 0;
  color: #4a3e3d;
}

.daily-tip p {
  font-size: 18px;
  color: #6e605f;
}
</style>

<div class="mycontainer">

<div>
  <h2>Recent Mood</h2>

  <?php if ($mood_val !== null): ?>
    <img src="images/<?php echo $emoji_map[$mood_val]; ?>" style="width: 60px; height: 60px; display: block; margin: 10px 0;" alt="Mood Emoji">
    <p>Your last checked-in rating was <strong><?php echo $mood_val; ?></strong> out of 7.</p>
  <?php else: ?>
    <p>No mood logged yet today. Check in on the Journal page</p>
  <?php endif; ?>

</div>

<div>
  <h2>Wellness Streak</h2>

  <p style="font-size: 36px; margin: 10px 0;">
    🔥 <strong><?php echo $_SESSION['streak'] ?? 0; ?></strong>
  </p>

  <p>Consecutive Days Checked In. Keep it up!</p>

</div>

<div>
  <h2>Take a break and look at these cats.</h2>

  <div class="slideshow">
    <img src="images/cat1.png" class="cat-slide slide1" alt="Cute Kitten 1">
    <img src="images/cat2.png" class="cat-slide slide2" alt="Cute Kitten 2">
    <img src="images/cat3.png" class="cat-slide slide3" alt="Cute Kitten 3">
  </div>

</div>

</div>

<div class="daily-tip">
    <h2>Today's Wellness Tip</h2>
    <p><?php echo htmlspecialchars($tip); ?></p>
</div>

</main>

<?php
include 'includes/footer.php';
?>