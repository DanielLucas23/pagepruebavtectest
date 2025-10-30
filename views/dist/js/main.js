const carrusel = document.getElementById("c");
    const totalSlides = carrusel.children.length;
    let currentSlide = 0;

    function moverCarrusel(direccion) {
        currentSlide = (currentSlide + direccion + totalSlides) % totalSlides;
        carrusel.style.transform = `translateX(-${currentSlide * 100}%)`;
    }

    setInterval(() => {
        moverCarrusel(1);
    }, 5000); // cambia de slide cada 5 segundos

    // Función de visibilidad con IntersectionObserver
    const manejarVisibilidad = (entradas, observador) => {
    entradas.forEach((entrada) => {
        if (entrada.isIntersecting) {
        entrada.target.classList.add("visible");
        } else {
        entrada.target.classList.remove("visible");
        }
    });
};

// Crear el observer
const observer = new IntersectionObserver(manejarVisibilidad, {
  threshold: 0.5,
});

// Seleccionar el elemento que quieres observar
const elementos = document.querySelectorAll(".c-img");
elementos.forEach(el => observer.observe(el));