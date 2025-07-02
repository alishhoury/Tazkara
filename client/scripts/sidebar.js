document.getElementById('hamburger').onclick = function() {
    document.getElementById('sidebar').classList.add('open');
    document.getElementById('overlay').classList.add('active');
};
document.getElementById('overlay').onclick = function() {
    document.getElementById('sidebar').classList.remove('open');
    document.getElementById('overlay').classList.remove('active');}