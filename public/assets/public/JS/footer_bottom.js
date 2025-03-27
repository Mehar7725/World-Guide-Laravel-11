// Create a container div
const container = document.createElement("div");
container.classList.add("flex", "flex-col", "w-full");

// Top section
const topSection = document.createElement("div");
topSection.classList.add(
  "flex",
  "items-center",
  "justify-center",
  "w-full",
  "bg-[#45505b]",
  "pt-12",
  "gap-x-3",
  "px-20",
  "text-[lightgray]",
  "font-thin",
  "text-[1rem]"
);

// Add copyright information
const copyrightDiv = document.createElement("div");
copyrightDiv.textContent =
  "Copyright © 2006 - 2020 BLUE DIAMOND GLOBAL GROUP Australia Pty Limited (ABN: 62 497 349 953)";
topSection.appendChild(copyrightDiv);

// Add contact details
const contactDetails = document.createElement("div");
contactDetails.classList.add("flex", "px-3", "gap-x-2");

// Sydney info
const sydneyDiv = document.createElement("div");
sydneyDiv.classList.add("flex", "items-center", "gap-x-2");

const sydneyDot = document.createElement("div");
sydneyDot.classList.add(
  "h-[6px]",
  "w-[6px]",
  "rounded-full",
  "border-[1px]",
  "border-white",
  "bg-white"
);
sydneyDiv.appendChild(sydneyDot);

const sydneyText = document.createElement("div");
sydneyText.textContent = "2000 Sydney, Australia";
sydneyDiv.appendChild(sydneyText);
contactDetails.appendChild(sydneyDiv);

// Telephone info
const telDiv = document.createElement("div");
telDiv.classList.add("flex", "items-center", "gap-x-2");

const telDot = document.createElement("div");
telDot.classList.add(
  "h-[6px]",
  "w-[6px]",
  "rounded-full",
  "border-[1px]",
  "border-white",
  "bg-white"
);
telDiv.appendChild(telDot);

const telText = document.createElement("div");
telText.textContent = "Tel 1800 008 555";
telDiv.appendChild(telText);
contactDetails.appendChild(telDiv);

topSection.appendChild(contactDetails);

// Bottom section
const bottomSection = document.createElement("div");
bottomSection.classList.add(
  "bg-[#45505b]",
  "text-center",
  "pb-10",
  "text-[lightgray]",
  "font-thin"
);
bottomSection.textContent = "Proudly World Guide by Domain & App Developers";

// Append sections to the container
container.appendChild(topSection);
container.appendChild(bottomSection);

// Append the container to the body or any other desired parent
document.body.appendChild(container);
