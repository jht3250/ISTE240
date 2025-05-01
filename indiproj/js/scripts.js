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

function validateForm() {
    const from = document.getElementById('from').value.trim();
    const message = document.getElementById('message').value.trim();
    var isValid = true;

    if (!from) {
        alert('Please enter your name.');
        return false;
    }

    if (!message) {
        alert('Please enter your message.');
        return false;
    }

    return true;
}

function openLoginPopup() {
    document.getElementById('loginPopup').style.display = 'block';
}

function closeLoginPopup() {
    document.getElementById('loginPopup').style.display = 'none';
}

function validateLoginForm() {
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();

    if (!username) {
        alert('Please enter your username.');
        return false;
    }

    if (!password) {
        alert('Please enter your password.');
        return false;
    }

    return true;
}