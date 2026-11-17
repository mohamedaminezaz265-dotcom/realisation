
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorldGuide</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
      <h1>WORLD <span>GUIDE</span></h1>
    <nav>
   <?php foreach ($links as $link): ?>
   <a href="<?= $link['url'] ?>">
   <?= $link['nom'] ?>
    </a>
   <?php endforeach; ?>
       </nav>
    </header>

    <section id="hero">
        <h1>Discover the world</h1>

        <p>
      Discover beautiful places, explore different cultures
  and create unforgettable memories.
        </p>

        <form>
  <input type="text" placeholder="Click for explore">
  <button type="reset">Explore</button>
        </form>
    </section>

    <main>

        <section id="destination">
<h1>Our Destinations</h1>
   <div class="destination">

   <?php foreach ($destinations as $destination): ?>
   <article class="card">

       <img src="<?= $destination['image'] ?>" alt="">

        <h2><?= $destination['nom'] ?></h2>

   <p><?= $destination['description'] ?></p>
       </article>
    <?php endforeach; ?>

   </div>
 </section>

       <section id="why">
       <h2>Why choose WorldGuide?</h2>

    <div class="features">

    <?php foreach ($features as $feature): ?>
   <div>
       <h3><?= $feature['nom'] ?></h3>
       <p><?= $feature['description'] ?></p>
        </div>
        <?php endforeach; ?>

    </div>
    </section>

    <section id="reviews">
        <h2>Reviews & Stories</h2>

    <?php foreach ($reviews as $review): ?>
        <div class="review-card">
        <p>
      <strong><?= $review['nom'] ?></strong>
    (<?= $review['pays'] ?>)
 </p>
<?php if ($review['commentaire'] != ''): ?>
   <p><?= $review['commentaire'] ?></p>
   <?php else: ?>
    <p>No review available.</p>
        <?php endif; ?>
       </div>
   <?php endforeach; ?>

 </section>

    </main>

    <footer>
        <h3>&copy; WorldGuide 2026</h3>
    </footer>

</body>
</html>
