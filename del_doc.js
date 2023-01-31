//Name :35
//2022-11-28
//Assign3

window.onload = function() {
 prepareListener();
}
//prepare listener
function prepareListener() {
 var query4;
 query4 = document.getElementById("delete");
 query4.addEventListener("submit",delDoc);

}
//submit form
function delDoc() {
 this.form.submit();
}

