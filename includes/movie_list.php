<?php foreach ($movies as $movie): ?>
  <div class="movie">
    <h2><?php echo htmlspecialchars($movie->title); ?></h2>
    <p><?php echo htmlspecialchars($movie->getMovieInfo()); ?></p>
  </div>
<?php endforeach; ?>