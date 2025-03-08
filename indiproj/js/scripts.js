document.querySelectorAll('.link-box').forEach(link => {
    link.addEventListener('mouseover', function() {
        const mainImage = document.getElementById('main-image');
        mainImage.classList.add('hidden');
        setTimeout(() => {
            mainImage.src = this.getAttribute('data-image');
            mainImage.classList.remove('hidden');
        }, 200); // Match the duration of the CSS transition
    });
    link.addEventListener('mouseout', function() {
        const mainImage = document.getElementById('main-image');
        mainImage.classList.add('hidden');
        setTimeout(() => {
            mainImage.src = '../assets/images/santorini.webp';
            mainImage.classList.remove('hidden');
        }, 200); // Match the duration of the CSS transition
    });
});
