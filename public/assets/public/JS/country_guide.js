console.log("Script loaded!");

// Define countries array first
const countries = [
  {
    name: "Australia",
    image: "assets/public/images/australia.jpg",
    flag: "🇦🇺"
  },
  {
    name: "New Zealand",
    image: "assets/public/images/newzealand.jpg",
    flag: "🇳🇿"
  },
  {
    name: "United Kingdom",
    image: "assets/public/images/uk.jpg",
    flag: "🇬🇧"
  },
  {
    name: "France",
    image: "assets/public/images/france.jpg",
    flag: "🇫🇷"
  },
  {
    name: "United States",
    image: "assets/public/images/usa.jpg",
    flag: "🇺🇸"
  },
  {
    name: "Canada",
    image: "assets/public/images/canada.jpg",
    flag: "🇨🇦"
  },
  {
    name: "Egypt",
    image: "assets/public/images/egypt.jpg",
    flag: "🇪🇬"
  },
  {
    name: "Morocco",
    image: "assets/public/images/morocco.jpg",
    flag: "🇲🇦"
  },
  {
    name: "South Africa",
    image: "assets/public/images/southafrica.jpg",
    flag: "🇿🇦"
  },
  {
    name: "Japan",
    image: "assets/public/images/japan.jpg",
    flag: "🇯🇵"
  },
  {
    name: "China",
    image: "assets/public/images/china.jpg",
    flag: "🇨🇳"
  },
  {
    name: "India",
    image: "assets/public/images/india.jpg",
    flag: "🇮🇳"
  },
  {
    name: "Brazil",
    image: "assets/public/images/brazil.jpg",
    flag: "🇧🇷"
  },
  {
    name: "Argentina",
    image: "assets/public/images/argentina.jpg",
    flag: "🇦🇷"
  },
  {
    name: "Mexico",
    image: "assets/public/images/mexico.jpg",
    flag: "🇲🇽"
  },
  {
    name: "Spain",
    image: "assets/public/images/spain.jpg",
    flag: "🇪🇸"
  },
  {
    name: "Italy",
    image: "assets/public/images/italy.jpg",
    flag: "🇮🇹"
  },
  {
    name: "Germany",
    image: "assets/public/images/germany.jpg",
    flag: "🇩🇪"
  },
  {
    name: "Russia",
    image: "assets/public/images/russia.jpg",
    flag: "🇷🇺"
  },
  {
    name: "Thailand",
    image: "assets/public/images/thailand.jpg",
    flag: "🇹🇭"
  },
  {
    name: "Indonesia",
    image: "assets/public/images/indonesia.jpg",
    flag: "🇮🇩"
  },
  {
    name: "Turkey",
    image: "assets/public/images/turkey.jpg",
    flag: "🇹🇷"
  },
  {
    name: "Greece",
    image: "assets/public/images/greece.jpg",
    flag: "🇬🇷"
  }
];

// Define function
function createCountryCards() {
    console.log("Function called!");
    const container = document.getElementById('countryCardsContainer');
    console.log("Container:", container);

    if (!container) {
        console.error("Container not found!");
        return;
    }
    
    container.innerHTML = '';

    countries.forEach(country => {
        console.log("Creating card for:", country.name);
        const wrapper = document.createElement('div');
        wrapper.className = 'flex flex-col gap-y-2';

        const imageCard = document.createElement('div');
        imageCard.className = 'country-card w-[400px] h-[250px] rounded-lg overflow-hidden shadow-lg cursor-pointer';
        imageCard.innerHTML = `
            <img src="${country.image}" alt="${country.name}" 
                class="w-full h-full object-cover"
                onerror="this.src='assets/public/images/placeholder.jpg'; console.log('Image failed to load for ${country.name}');">
        `;

        const button = document.createElement('div');
        button.className = 'bg-gradient-to-r from-emerald-500 to-cyan-500 p-4 rounded-lg cursor-pointer text-white';
        button.innerHTML = `
            <div class="flex items-center justify-center text-xl font-semibold">
                <span>${country.flag}</span>
                <span class="ml-2">${country.name}</span>
            </div>
        `;

        [imageCard, button].forEach(element => {
            element.addEventListener('click', () => {
                window.location.href = `./country.html?country=${country.name.toLowerCase()}`;
            });
        });

        wrapper.appendChild(imageCard);
        wrapper.appendChild(button);
        container.appendChild(wrapper);
    });
}

// Add single event listener
document.addEventListener('DOMContentLoaded', () => {
    console.log("DOM loaded!");
    createCountryCards();
});