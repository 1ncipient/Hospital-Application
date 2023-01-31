//Name :35
//2022-11-28
//Assign3
window.onload = function() {
 prepareListener();
}
function prepareListener() {
 var doctorPatient;
 doctorPatient = document.getElementById("doctorPatient");
 doctorPatient.addEventListener("submit",looksAfter);
}

function looksAfter() {
 this.form.submit();
}
