// Create the main navbar container
const navbar = document.createElement("div");
navbar.id = "navbar";
navbar.className =
  "top-0 left-0 w-full z-30 transition-all duration-300 h-[8vh] min-h-[60px] bg-transparent z-20";

// Create the navbar content container
const navbarContent = document.createElement("div");
navbarContent.id = "navbar-content";
navbarContent.className =
  "flex justify-between items-center h-full pr-8 bg-[#42A7DF] transition-all shadow-lg";

// Logo container
const logoContainer = document.createElement("div");
logoContainer.className =
  "flex items-center justify-center gap-x-2 py-4 px-6 pr-8 rounded-full";
const logoImg = document.createElement("img");
logoImg.src = "assets/public/logo.png";
logoImg.alt = "Logo";
logoImg.className = "w-[220px]";
logoContainer.appendChild(logoImg);

// Desktop Nav Links
const desktopNav = document.createElement("div");
desktopNav.className = "flex items-center h-full gap-x-5 hidden lg:flex";

const links = [
  { href: "/", text: "Home" },
  { href: "/blog", text: "Blog" },
  { href: "/our-companies", text: "Our Companies" },
  { href: "/about-us", text: "About Us" },
  { href: "/policy", text: "Policy" },
  { href: "/contact", text: "Contact" },
];

links.forEach((link) => {
  const navItem = document.createElement("div");
  navItem.className = "relative overflow-hidden";

  const anchor = document.createElement("a");
  anchor.href = link.href;
  anchor.textContent = link.text;
  anchor.className =
    "text-[16px] font-poppins font-[300] maxWeb1:text-[25px] maxWeb2:text-[30px] maxWeb3:text-[35px] maxWeb4:text-[40px] cursor-pointer hover:text-sec transition-all ease-in-out duration-500 text-white";

  navItem.appendChild(anchor);
  desktopNav.appendChild(navItem);
});



 
 
 if (!isAuthenticated) {
  
 

  // Sign In Button
const loginBtn = document.createElement("button");
loginBtn.id = "loginBtn";
loginBtn.className =
  "flex items-center gap-x-1 text-white hover:bg-white hover:text-[#42A7DF] px-2 py-2 rounded-lg transition-all duration-700 cursor-pointer";
const userIcon = document.createElement("i");
userIcon.className = "fas fa-user text-2xl";
const signInText = document.createElement("div");
signInText.textContent = "Sign In";
loginBtn.append(userIcon, signInText);
  
// Append buttons to desktopNav
desktopNav.append(loginBtn);
 }else{

  const navItem = document.createElement("div");
  navItem.className = "relative overflow-hidden";

  const anchor = document.createElement("a");
  anchor.href = '/logout';
  anchor.textContent = 'Logout';
  anchor.className =
    "text-[16px] font-poppins font-[300] maxWeb1:text-[25px] maxWeb2:text-[30px] maxWeb3:text-[35px] maxWeb4:text-[40px] cursor-pointer hover:text-sec transition-all ease-in-out duration-500 text-white";

  navItem.appendChild(anchor);
  desktopNav.appendChild(navItem);

 }


   // Add Listing Button
const addListingBtn = document.createElement("div");

addListingBtn.className =
  "flex items-center gap-x-1 border-2 border-white text-white px-2 py-2 rounded-lg cursor-pointer hover:bg-white hover:text-[#42A7DF] transition-all duration-700";
const plusIcon = document.createElement("i");
plusIcon.className = "fas fa-plus text-2xl";
const addListingText = document.createElement("div");
addListingText.textContent = "Add Listing";
addListingBtn.append(plusIcon, addListingText);

addListingBtn.addEventListener("click", function () {
  window.location.href = "add-listing";
});

// Append buttons to desktopNav
desktopNav.append( addListingBtn);




// Mobile Menu Button
const menuBtn = document.createElement("div");
menuBtn.className = "lg:hidden pr-3 cursor-pointer";
menuBtn.id = "menu-btn";
const menuIcon = document.createElement("i");
menuIcon.className = "fas fa-bars text-white text-2xl";
menuBtn.appendChild(menuIcon);

// Side Menu
const sideMenu = document.createElement("div");
sideMenu.id = "side-menu";
sideMenu.className =
  "fixed top-[12vh] right-0 w-full h-fit bg-[#42A7DF] transition-transform transform translate-x-full z-40";
const sideMenuContent = document.createElement("div");
sideMenuContent.className = "flex flex-col items-center p-4 py-8 text-white";
sideMenu.appendChild(sideMenuContent);

// Assemble the navbar
navbarContent.append(logoContainer, desktopNav, menuBtn);
navbar.append(navbarContent, sideMenu);

// Append the navbar to the body
document.body.appendChild(navbar);
