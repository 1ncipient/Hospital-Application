//Name :35
//2022-11-28
//Assign3
window.onload = function() {
 prepareListener();
}
function prepareListener() {
 var query3;
 query3 = document.getElementById("insert");
 query3.addEventListener("submit",insertDoctor);

}
function insertDoctor() {
 this.form.submit();
}

