//Name :35
//2022-11-28
//Assign3
window.onload = function() {
 prepareListener();
}
function prepareListener() {
 var query1;
 query1 = document.getElementById("order");
 query1.addEventListener("submit",getOrder);

}
function getOrder() {
 this.form.submit();
}

