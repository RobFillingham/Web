window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');

    if (window.scrollY > 30) {
        navbar.style.backgroundColor = '#333'; // Cambia el color de fondo al hacer scroll
        navbar.style.color = '#fff'; // Cambia el color del texto al hacer scroll
    } else {
        navbar.style.backgroundColor = 'transparent'; // Restaura el color de fondo original
        navbar.style.color = 'white'; // Restaura el color de texto original
    }
});
