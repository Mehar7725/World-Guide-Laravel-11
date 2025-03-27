// Our Companies data
ourCompaniesDataForCards = [
  {
    desc: `Have you ever thought of owning your own homestead? Well World guide/real-estate has the best deals for you. We offer our clients a variety of ideal choices from Luxurious villas, rental apartments, cafes, and farm houses etc that have a serene environmental and comfort ability. We have a direct line for our clients to contact our agent for any assistances and also direct contacts to specific property agents. Find your property by a fingertip. You could also visit our site: <a>https://www.worldguide.com.au/real-estate</a> for more information.`,
    logo: "assets/public/images/worldguide-re.png",
    img: "assets/public/images/worldguide-re1.jpg",
    name: "World Guide Real Estate",
    link: "/real-estate",
  },
  {
    desc: `World guide holding group pty limited offers clients a platform to own any of their dream cars. From luxury sports cars to family vans all at the tip of your finger. World guide have the best deals for cars and also serves its customers with deliveries of their purchases all around the world to their doorstep. Join us today and have a pick of your dream cars and get transported anywhere around the globe. Visit: <a>https://world-guide.org/Cars</a>  for more information.`,
    logo: "assets/public/images/worldcars-g.png",
    img: "assets/public/images/worldcars-g1.jpg",
    name: "World Guide Cars",
    link: "/cars",
  },
  {
    desc: `Prevent cyber bullying and entrust us to conceal all your website information. World guide builds web security and hosting and offers its clients a high security host and iCloud. For more information visit: <a>https://www.security-host.org</a> for latest updates.`,
    logo: "assets/public/images/sh.png",
    img: "assets/public/images/sh1.png",
    name: "World Guide Security Host",
    link: "/security-host",
  },
  {
    desc: `With over 24000 channels, world guide broadcasts the best channels to its clients. We know what people need around the world so we build huge servers for TV channels so that our clients can conveniently access them through their TV sets, iPhones, PC, or even tablets. For more information about our channels, visit: <a>https://www.channels-world.com/</a>`,
    logo: "assets/public/images/cw.png",
    img: "assets/public/images/cw1.jpg",
    name: "World Guide Channels",
    link: "/channels",
  },
  {
    desc: `As an entrepreneur we work to build our clients businesses too. We have their goals and success in mind. So with many individuals wanting to start and run a successful business, world guide serves to provide a growing base by setting a good domain & Apps design to help build a strong and profitable business. We have the best developers to suite & Apps  your every need. For more just visit: <a>https://www.domain-design.org</a>`,
    logo: "assets/public/images/dd.png",
    img: "assets/public/images/dd.jpg",
    name: "World Guide Domain Design",
    link: "/domain-design",
  },
  {
    desc: `Ever wanted to visit your dream country, well world guide offers you the chance to visit any country all over the globe. We offer student visas, business visas, job seeker visas, tourist and visitor visas etc. we provide the best leeway for you visit and stay anywhere you may prefer. For more information please visit:  <a>https://world-guide.org/Immigration</a>`,
    logo: "assets/public/images/worldguide-im.png",
    img: "assets/public/images/worldguide-im1.png",
    name: "World Guide Immigration",
    link: "/immigration",
  },
  {
    desc: `Another part of our companies named World Mall its contain more than 100.000 uniq items and cheaper prices, with high quality with one month guarantee return. of course most of them free delivery around the world also we did safe payment and high secure process Here You Can Visit Our Mall <a>https://world-guide.org/world-mall</a>`,
    logo: "assets/public/images/worldmall.png",
    img: "assets/public/images/worldmall1.jpg",
    name: "World Guide World Mall",
    link: "/world-mall",
  },
];

function createCountryCards() {
  const container = document.getElementById("companiesCardsContainer");

  ourCompaniesDataForCards.forEach((company) => {
    // Create card container
    const card = document.createElement("div");
    card.className =
      "w-full flex flex-col items-center justify-center relative rounded-lg relative gap-y-4";

    // Create Logo element
    const logo = document.createElement("img");
    logo.src = company.logo;
    logo.alt = company.name;
    logo.className = "w-fit max-w-[300px] object-cover";
    // Create image element
    const img = document.createElement("img");
    img.src = company.img;
    img.alt = company.name;
    img.className = "h-[200px] object-cover";

    const cardImages = document.createElement("div");
    cardImages.className =
      "w-[80%] flex flex-col gap-y-5 justify-between items-center rounded-lg relative";

    // Create description element
    const desc = document.createElement("div");
    desc.innerHTML = company.desc;
    desc.className = "text-[1.1rem] font-[300] w-[80%]";

    const anchors = desc.getElementsByTagName("a");
    for (let anchor of anchors) {
      anchor.className = "text-blue-500 underline cursor-pointer"; // Apply custom styles
      anchor.href = company.link;
    }

    const imageContainer1 = document.createElement("div");
    imageContainer1.className = "w-full flex items-start";
    const imageContainer2 = document.createElement("div");
    imageContainer2.className = "w-full flex justify-end";

    imageContainer1.appendChild(logo);
    imageContainer2.appendChild(img);

    cardImages.appendChild(imageContainer1);
    cardImages.appendChild(imageContainer2);

    // append image to card
    card.appendChild(cardImages);
    card.appendChild(desc);
    // Append card to container
    container.appendChild(card);
  });
}

// Call function to create and display cards
createCountryCards();
