    <!-- Modal per aggiungere un nuovo film -->
    <div class="modal fade" id="addMovieModal" tabindex="-1" role="dialog" aria-labelledby="addMovieModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addMovieModalLabel">Add New Movie</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="addMovieForm">
              <div class="form-group">
                <label for="movieTitle">Title</label>
                <input type="text" class="form-control" id="movieTitle" required>
              </div>
              <div class="form-group">
                <label for="movieDirector">Director</label>
                <input type="text" class="form-control" id="movieDirector" required>
              </div>
              <div class="form-group">
                <label for="movieYear">Year</label>
                <input type="number" class="form-control" id="movieYear" required>
              </div>
              <div class="form-group">
                <label for="movieGenres">Genres (comma-separated)</label>
                <input type="text" class="form-control" id="movieGenres" required>
              </div>
              <button type="submit" class="btn btn-primary">Add Movie</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <p>&copy; 2024 Movie Database</p>
    </footer>

    <!-- Bootstrap JS e jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript per aggiungere un nuovo film -->
    <script>
      document.getElementById('addMovieForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const title = document.getElementById('movieTitle').value;
        const director = document.getElementById('movieDirector').value;
        const year = document.getElementById('movieYear').value;
        const genres = document.getElementById('movieGenres').value.split(',');

        const newMovie = {
          title: title,
          director: director,
          year: parseInt(year),
          genres: genres
        };

        // Inserire il nuovo film nella lista
        addMovieToList(newMovie);

        // Chiudere il modal
        $('#addMovieModal').modal('hide');
      });

      function addMovieToList(movie) {
        const movieList = document.querySelector('.movie-list');
        const movieCard = document.createElement('div');
        movieCard.classList.add('movie', 'card', 'mb-3');
        movieCard.innerHTML = `
                <div class="card-body">
                    <h5 class="card-title">${movie.title}</h5>
                    <p class="card-text">${movie.title} (${movie.year}), directed by ${movie.director} - Genres: ${movie.genres.join(', ')}</p>
                    <button class="btn btn-danger btn-sm remove-movie">Remove</button>
                </div>
            `;
        movieList.appendChild(movieCard);

        // Aggiungi event listener per eliminare
        movieCard.querySelector('.remove-movie').addEventListener('click', function() {
          movieCard.remove();
        });
      }
    </script>
    </body>

    </html>