//Name :35
//2022-11-28
//Assign3
window.onload = function() {
 prepareListener();
}
function prepareListener() {
 var query2;
 query2 = document.getElementById("specialtyPick");
 query2.addEventListener("change",getSpecialty);
}

function getSpecialty() {
 this.form.submit();
}
