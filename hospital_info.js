//Name :35
//2022-11-28
//Assign3
window.onload = function() {
 prepareListener();
}
function prepareListener() {
 var hospital;
 hospital = document.getElementById("pickHospital");
 hospital.addEventListener("change",getHospital);
}

function getHospital() {
 this.form.submit();
}
