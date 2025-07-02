document.addEventListener("DOMContentLoaded", function () {
  const params = new URLSearchParams(window.location.search);
  const filmId = params.get("id");

  fetch("../get_films.php")
    .then((response) => response.json())
    .then((films) => {
      const cards = document.getElementById("hero");
      const film = films.find((f) => String(f.id) === filmId);
      if (film) {
        let videoEmbed = "";
        if (film.video) {
          const youtubeMatch = film.video.match(
            /(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/
          );
          if (youtubeMatch) {
            videoEmbed = `<iframe src="https://www.youtube.com/embed/${youtubeMatch[1]}"> </iframe>`;
          }
        }
        cards.innerHTML = `
    <div class="hero-section">
        <h2>${film.title}</h2>
        <img src="${film.image}" alt="${film.title}">
        <div class="trailer">
            ${videoEmbed}
        </div>
        <div><button>View Showtimes</button></div>
         <div class="info">
            <p><strong>Genre</strong>:${film.genre}</p>
            <p><strong>Running Time:</strong> ${film.duration ? film.duration : 'N/A'}</p>
            <p><strong>Release Date:</strong> ${film.realseDate ? film.realseDate : 'N/A'}</p>
         </div>
    </div>
                         `;
      }
    });
});
