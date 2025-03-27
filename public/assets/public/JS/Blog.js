// Blog data
blogDataForCards = [
  {
    name: "Lydia Kamau",
    date: "03/09/2019",
    title: "Ten fascinating sites to visit in Maldives",
    bgImg: "assets/public/images/bgimg.png",
    proImg: "assets/public/images/prof.jpeg",
  },
  {
    name: "Lydia Kamau",
    date: "03/09/2019",
    title: "Ten fascinating sites to visit in Maldives",
    bgImg: "assets/public/images/bgimg.png",
    proImg: "assets/public/images/prof.jpeg",
  },
  {
    name: "Lydia Kamau",
    date: "03/09/2019",
    title: "Ten fascinating sites to visit in Maldives",
    bgImg: "assets/public/images/bgimg.png",
    proImg: "assets/public/images/prof.jpeg",
  },
  {
    name: "Lydia Kamau",
    date: "03/09/2019",
    title: "Ten fascinating sites to visit in Maldives",
    bgImg: "assets/public/images/bgimg.png",
    proImg: "assets/public/images/prof.jpeg",
  },
  {
    name: "Lydia Kamau",
    date: "03/09/2019",
    title: "Ten fascinating sites to visit in Maldives",
    bgImg: "assets/public/images/bgimg.png",
    proImg: "assets/public/images/prof.jpeg",
  },
];

function createCountryCards() {
  const container = document.getElementById("blogsCardsContainer");

  blogDataForCards.forEach((country) => {
    // Create card container
    const card = document.createElement("div");
    card.className =
      "max-w-[360px] w-[360px] flex flex-col max-h-[55vh] min-h-[400px] items-center relative rounded-lg shadow-[rgba(99,99,99,0.2)_0px_2px_8px_0px] relative blog-card";

    // Create image element
    const img = document.createElement("img");
    img.src = country.bgImg;
    img.alt = country.name;
    img.className = "min-h-[200px] h-[200px] w-full object-cover rounded-t-lg";

    const proImg = document.createElement("img");
    proImg.src = country.proImg;
    proImg.alt = country.name;
    proImg.className =
      "h-[50px] rounded-full w-[50px] object-cover absolute top-[175px] left-1/2 -translate-x-1/2 border-2 border-white";

    // Create type element
    const typeDiv = document.createElement("div");
    typeDiv.className = "text-black text-[1rem] font-thin pt-10 pb-1";
    typeDiv.innerHTML = `blog`;
    // Create title element
    const titleDiv = document.createElement("div");
    titleDiv.className =
      "text-black text-[1.1rem] font-semibold px-8 text-center";
    titleDiv.innerHTML = `${country.title}`;

    // Create name element
    const nameDiv = document.createElement("div");
    nameDiv.className =
      "text-black text-[.9rem] font-[200] pt-5 pb-2 flex items-center gap-x-2";
    nameDiv.innerHTML = `<img src="assets/public/images/user.svg" class="w-5 h-5" />${country.name}`;

    // Create date element
    const dateDiv = document.createElement("div");
    dateDiv.className =
      "text-black text-[.9rem] font-[200] pt-5 pb-2 flex items-center gap-x-2";
    dateDiv.innerHTML = `<img src="assets/public/images/calender.svg" class="w-5 h-5" />${country.date}`;
    // name and date wrapper
    const nameDateWrapper = document.createElement("div");
    nameDateWrapper.className =
      "flex items-center gap-x-8 px-8 justify-between";
    nameDateWrapper.appendChild(nameDiv);
    nameDateWrapper.appendChild(dateDiv);

    // Append image and name to card
    card.appendChild(img);
    card.appendChild(proImg);
    card.appendChild(typeDiv);
    card.appendChild(titleDiv);
    card.appendChild(nameDateWrapper);
    // Append card to container
    container.appendChild(card);
  });
}

// Call function to create and display cards
createCountryCards();

const loginBlock = document.getElementById("login-block");
const loginBlock2 = document.getElementById("login-block2");
const blogBlock = document.getElementById("Write-Blog");
const isLogin = localStorage.getItem("login");
if (isLogin) {
  loginBlock.classList.add("hidden");
  loginBlock.classList.remove("flex");
  loginBlock2.classList.add("hidden");
  loginBlock2.classList.remove("flex");
  blogBlock.classList.add("flex");
  blogBlock.classList.remove("hidden");
} else {
  loginBlock.classList.add("flex");
  loginBlock.classList.remove("hidden");
  loginBlock2.classList.add("flex");
  loginBlock2.classList.remove("hidden");
  blogBlock.classList.add("hidden");
  blogBlock.classList.remove("flex");
}
