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

function toggleDescription(element) {
    const p = element.querySelector('p');
    if (p.classList.contains('hidden')) {
        p.classList.remove('hidden');
        p.classList.add('show');
    } else {
        p.classList.add('hidden');
        p.classList.remove('show');
    }
}