var modal = document.getElementById("alertModal");
var span = document.getElementById("alertClose");
var alertMessage = document.getElementById("alertMessage");

if (message) {
  alertMessage.textContent = message;
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

var addProductModal = document.getElementById("addProductModal");
var addProductButton = document.getElementById("addProductButton");
var addProductClose = document.getElementById("addProductClose");

addProductButton.onclick = function() {
  addProductModal.style.display = "block";
}

addProductClose.onclick = function() {
  addProductModal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == addProductModal) {
    addProductModal.style.display = "none";
  }
}
