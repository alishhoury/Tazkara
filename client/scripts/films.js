document.addEventListener('DOMContentLoaded', function() {
    fetch("get_films.php")
        .then(response => response.json())
        .then(films => {
            const grid = document.getElementById('film');
            grid.innerHTML = films.map(film => `
                <div class="film-card">
                    <img src="${film.image}" alt="${film.title}">
                    <div class="film-card-title">${film.title}</div>
                </div>
            `).join('');
        });
});