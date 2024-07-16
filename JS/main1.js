// Get modal
var modal = document.getElementById("myModal");

// Get buttons
var becarioLogin = document.getElementById("becarioLogin");
var becarioRegister = document.getElementById("becarioRegister");
var empresarioLogin = document.getElementById("empresarioLogin");
var empresarioRegister = document.getElementById("empresarioRegister");

// Event listeners for buttons
becarioLogin.onclick = function() {
  // Redirect to becario login
  window.location.href = "../vista/formulario-becario.php";
}


empresarioLogin.onclick = function() {
  // Redirect to empresario login
  window.location.href = "../vista/formulario-empresa.php";
}


// Optional: Hide modal after clicking (if you want to hide the modal without redirecting)
// modal.style.display = "none";
