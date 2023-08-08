import 'bootstrap';
import '@popperjs/core';


document.addEventListener('DOMContentLoaded', function () {
    let videoSrc;
    const videoBtns = document.querySelectorAll('.js-youtube-link');
    const modalElement = document.getElementById('videoModal');
    const videoElement = document.getElementById('video');

    if (videoBtns) {
        videoBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                videoSrc = this.getAttribute('data-src');
            });
        });
    }

    if (modalElement) {
        modalElement.addEventListener('shown.bs.modal', function () {
            videoElement.setAttribute('src', `${videoSrc}?autoplay=1&modestbranding=1&showinfo=0`);
        });

        modalElement.addEventListener('hide.bs.modal', function () {
            videoElement.setAttribute('src', videoSrc);
        });
    }
});
