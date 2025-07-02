document.addEventListener("DOMContentLoaded", function () {
  const params = new URLSearchParams(window.location.search);
  const filmId = params.get("id");

  fetch("../get_films.php")
    .then((response) => response.json())
    .then((films) => {
      const cards = document.getElementById("showtimes");
      const film = films.find((f) => String(f.id) === filmId);

     cards.innerHTML = `
        <div class="showtine-details">
          <h2>${film.title}-SHOWTIMES</h2>
          <div class="showtimes-list">
            <h3>Showtimes</h3>
            <ul>
              ${film.showtimes
                .map(
                  (show) => `
                    <li>
                      <strong>${show.time}</strong> - ${show.location}
                    </li>
                  `
                )
                .join("")}
            </ul>
          </div>
        </div>
      `;
    
})
    })