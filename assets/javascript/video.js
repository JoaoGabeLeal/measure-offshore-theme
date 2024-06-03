window.addEventListener('scroll', function() {
    let video = document.querySelector('.video');
    let scrollPosition = window.pageYOffset;
    let windowHeight = window.innerHeight;

    // Calcula a opacidade com base na posição de scroll
    let opacity = 1 - (scrollPosition / windowHeight);

    // Define a opacidade do vídeo
    video.style.opacity = opacity;
});