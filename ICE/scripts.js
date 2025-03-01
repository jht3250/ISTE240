/*
John Treon, Jake Hamilton
ISTE 240
In Class Exercise: Rotating Images
*/

var newImage = new Array();
var numImg = 4;
var current = 1;
var autoplayTimer;

function init() {
    var imgHolder = document.getElementById('imgHolder');
    var images = imgHolder.getElementsByTagName('img');
    for (var i = 1; i <= numImg; i++) {
        newImage[i] = new Image();
        newImage[i].src = "./assets/image" + i + "big.jpg";
    }
    setActive();

    startAutoplay();
}

function next() {
    current++;
    if (current > numImg) {
        current = 1;
    }
    console.log(current);
    document.getElementById('bigpic').src = newImage[current].src;
    setActive();
    resetAutoplay();
}

function prev() {
    current--;
    if (current < 1) {
        current = numImg;
    }
    console.log(current);
    document.getElementById('bigpic').src = newImage[current].src;
    setActive();
    resetAutoplay();
}

function changeMe(dom) {
    console.log(dom);
    var start = dom.src.indexOf("image") + 5;
    var end = dom.src.indexOf('.jpg');

    var num = dom.src.substring(start, end);
    current = parseInt(num);
    console.log(num);
    document.getElementById('bigpic').src = newImage[num].src;
    setActive();
}

function setActive() {
    var img = document.getElementById('img' + current.toString());
    console.log('img' + current.toString());
    console.log(img);
    // remove active class from old image
    var active = document.getElementsByClassName('active');
    if (active.length > 0) {
        active[0].classList.remove('active');
    }
    // add active class to new image
    img.classList.add('active');
}

function startAutoplay() {
    autoplayTimer = setInterval(next, 3000);
    var loading = document.getElementById('loading');
    loading.style.width = '98%';
}

function resetAutoplay() {
    clearInterval(autoplayTimer);
    var loading = document.getElementById('loading');
    // temporarily disable transition so the width can get applied immediately
    loading.style.transition = 'none';
    loading.style.width = '1%';
    
    // Force reflow to apply the width change immediately
    void loading.offsetWidth;
    
    // Re-enable transition
    loading.style.transition = 'width 3s';
    startAutoplay();
}