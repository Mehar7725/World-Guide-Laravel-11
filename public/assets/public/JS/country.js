const urlParams = new URLSearchParams(window.location.search);
const country = urlParams.get("country");
document.getElementById("company-name").innerText = country;
document.getElementById("visit-company-name").innerText = `Visit ${country}`;

// Navigation items data
const navItems = [
  { title: "Home", link: "/" },
  { title: "Blog", link: "/blog" },
  { title: "Our Companies", link: "/our-companies" },
  { title: "About Us", link: "/about-us" },
  { title: "Policy", link: "/policy" },
  { title: "Contact", link: "/contact" },
];

// Select the footer navigation container
const footerContainer = document.getElementById("footer-navs");

// Loop through navigation items and create a navigation link for each
navItems.forEach((nv) => {
  const nameDiv = document.createElement("div");
  nameDiv.className =
    "cursor-pointer border-b-2 border-b-transparent hover:border-b-white transition-all duration-700";
  nameDiv.innerHTML = nv.title;
  nameDiv.addEventListener("click", function () {
    window.location.href = nv.link;
  });
  footerContainer.appendChild(nameDiv);
});
