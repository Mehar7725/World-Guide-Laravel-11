// Get the modal element
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btnLogin = document.getElementById("loginBtn");

// Get the <spanClose> element that closes the modal
var spanClose = document.getElementsByClassName("close")[0];

// Add event listener to the button to open the modal
btnLogin.addEventListener("click", function () {
  console.log("clicked");
  modal.style.display = "block";
});

// Add event listener to <spanClose> to close the modal
spanClose.addEventListener("click", function () {
  modal.style.display = "none";
});

// Add event listener to the window to close the modal when clicked outside
window.addEventListener("click", function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
});
