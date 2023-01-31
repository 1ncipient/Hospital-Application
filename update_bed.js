//Name :35
//2022-11-28
//Assign3
window.onload = function() {
 prepareListener();
}
function prepareListener() {
 var updateBed;
 updateBed = document.getElementById("hospitalBed");
 updateBed.addEventListener("submit",updateBed);
}

function updateBed() {
 this.form.submit();
}
