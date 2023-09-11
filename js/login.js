const logBut = document.getElementById('login-but');
const logContainer = document.getElementById('logInContainer');
const logMain = document.getElementById('logInMain');

function openPopUp() {
    
    logContainer.style.display = "flex";
}


function closePopUp() {
    logContainer.style.display = "none";
}

function stayOpen() {
    event.stopPropagation();
}

logBut.addEventListener('click', openPopUp);
logContainer.addEventListener('click', closePopUp);
logMain.addEventListener('click', stayOpen, true);