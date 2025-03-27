// Create the main container div
const containerDiv = document.createElement("div");
containerDiv.className = "w-full h-[30vh] overflow-hidden relative mb-5";

// Create the overlay div
const overlayDiv = document.createElement("div");
overlayDiv.className =
  "absolute top-0 left-0 w-full h-full bg-black bg-opacity-30";

// Create the image element
const imageElement = document.createElement("img");
imageElement.src = "assets/public/images/mountaincliff.jpg";
imageElement.className = "w-full h-[30vh] object-cover scale-150";
imageElement.alt = "";

// Append the overlay and image to the container
containerDiv.append(overlayDiv, imageElement);

// Append the container to the body
document.body.appendChild(containerDiv);
