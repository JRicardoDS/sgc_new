function toggleMenu() {
    var menu = document.getElementById("menu");
    var header = document.querySelector("header");

    menu.classList.toggle("open");

    // Desplazar el encabezado al mismo tiempo que el menú
    if (menu.classList.contains("open")) {
        header.style.left = "300px"; // Ajusta el desplazamiento al ancho del menú
    } else {
        header.style.left = "0";
    }
}

// Cerrar el menú cuando se hace clic en un enlace
document.querySelectorAll('.menu ul li a').forEach(item => {
    item.addEventListener('click', () => {
        document.getElementById("menu").classList.remove("open");
        document.querySelector("header").style.left = "0"; // Asegura que el encabezado vuelva a su posición original al cerrar el menú
    });
});
