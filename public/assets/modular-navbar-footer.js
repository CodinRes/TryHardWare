// filepath: public/assets/modular-navbar-footer.js
document.addEventListener('DOMContentLoaded', function () {
    fetch('assets/navbar.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('navbar').innerHTML = data;
        });

    fetch('assets/footer.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer').innerHTML = data;
        });
});
