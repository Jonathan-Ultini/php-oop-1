<div class="movie-list">
  <?php foreach ($movies as $movie): ?>
    <div class="movie card mb-3">
      <div class="card-body">
        <h5 class="card-title"><?php echo htmlspecialchars($movie->title); ?></h5>
        <p class="card-text"><?php echo htmlspecialchars($movie->getMovieInfo()); ?></p>
        <!-- Bottone per eliminare il film -->
        <button class="btn btn-danger btn-sm remove-movie">Remove</button>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<script>
  // Aggiungi l'event listener per eliminare un film
  document.querySelectorAll('.remove-movie').forEach(button => {
    button.addEventListener('click', function() {
      this.closest('.movie').remove();
    });
  });
</script>