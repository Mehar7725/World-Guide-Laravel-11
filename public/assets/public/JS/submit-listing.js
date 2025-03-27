const buttons = document.querySelectorAll("#buttonAd");
buttons.forEach((button, index) => {
  button.addEventListener("click", function () {
    buttons.forEach((b) => {
      b.classList.remove("bg-blue-500", "text-white");
      b.classList.add("bg-gray-200", "text-gray-700");
    });
    this.classList.remove("bg-gray-200", "text-gray-700");
    this.classList.add("bg-blue-500", "text-white");
    if (index === 0) {
      document.getElementById("address-label").innerHTML = "Full Address";
      document.getElementById("by-coord").classList.add("hidden");
      document.getElementById("by-address").classList.remove("hidden");
    } else if (index === 1) {
      document.getElementById("address-label").innerHTML = "Add Custom Address";
      document.getElementById("by-coord").classList.remove("hidden");
      document.getElementById("by-address").classList.add("hidden");
    }
  });
});
