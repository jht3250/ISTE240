function changeBackground() {
    var randomColor = Math.floor(Math.random()*16777215).toString(16);
    let bio = document.getElementById("bio");
    document.body.style.backgroundColor = "#" + randomColor;
    document.getElementById("bio").style.backgroundColor = "#" + randomColor;
    bio.style.setProperty('--borRightColor', "#" + randomColor);
    document.getElementById("randomBtn").style.backgroundColor = "#" + randomColor;
}