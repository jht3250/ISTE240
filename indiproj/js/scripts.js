function openMenu() {
    var element = document.getElementById("page");
    if (element.classList.contains("active")) {
        document.getElementById("toggle").classList.remove("hide");
        document.getElementById("close").classList.add("hide");
    }
    else {
        document.getElementById("toggle").classList.add("hide");
        document.getElementById("close").classList.remove("hide");
    }
    element.classList.toggle("active");
}
  
function changeImage(imageElement, newSrc) {
    const mainImage = document.getElementById('main-image');
    mainImage.classList.add('hidden');
    setTimeout(() => {
        mainImage.src = newSrc;
        mainImage.classList.remove('hidden');
    }, 200); // Match the duration of the CSS transition
}

function revertImage() {
    const mainImage = document.getElementById('main-image');
    mainImage.classList.add('hidden');
    setTimeout(() => {
        mainImage.src = '../assets/images/santorini.webp';
        mainImage.classList.remove('hidden');
    }, 200); // Match the duration of the CSS transition
}

function toggleDescription(image) {
    const desc = image.nextElementSibling;
    if (desc.classList.contains('hidden')) {
        desc.classList.remove('hidden');
        // Reset animation by re-adding the class
        void desc.offsetWidth;
        desc.classList.add(desc.classList.contains('slide-right') ? 'slide-right' : 'slide-left');
    } else {
        desc.classList.add('hidden');
        desc.classList.remove('slide-right', 'slide-left');
    }
}