document.addEventListener('DOMContentLoaded', function() {
    fetch("get_films.php")
        .then(response => response.json())
        .then(films => {
            const cards = document.getElementById('film');
            cards.innerHTML = films.map(film => `
                <div class="film-card">
                    <img src="${film.image}" alt="${film.title}">
                    <div class="film-overlay">
                    <div class="overlay-content">
                        <h2>${film.title}</h2>
                        <p>${film.description}</p>
                    </div>
                    </div>
                </div>
            `).join('');
        });
});