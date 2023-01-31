var doctorPatient;
window.onload = function() {
 prepareListener();
}
function prepareListener() {
 
 doctorPatient = document.getElementById("targetPage");
 doctorPatient.addEventListener("submit",redirect);
}

function redirect() {
 window.location.replace(doctorPatient.value);
}
