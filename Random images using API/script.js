// old code
// const numItemsToGenerate = 1; 

// function renderItem(){
//   fetch(`https://source.unsplash.com/1600x900/?mountains`).then((response)=> {   
//     let item = document.createElement('div');
//     item.classList.add('item');
//     item.innerHTML = `
//       <img class="beach-image" src="${response.url}" alt="beach image"/>
//     `     
//     document.body.appendChild(item);
//   }) 
// }
// for(let i=0;i<numItemsToGenerate;i++){
//   renderItem();
// }



// new code
const apiKey = 'IgpQFRqoPvn5TFLw25Ochan_ZGQnk-n490tp43VKU_0'; // API access key
let currentPage = 1;
const query = 'snowmountain';
const perPage = 30; 
const totalPages = 10;



// Function to fetch images
async function fetchImages(page) {
    try {
        const response = await fetch(`https://api.unsplash.com/search/photos?page=${page}&query=${query}&per_page=${perPage}&client_id=${apiKey}`, {
            headers: {
                'Authorization': `Client-ID ${apiKey}`
            }
        });

        if (!response.ok) {
            throw new Error('Network response was not ok');
        }

        const data = await response.json();
        console.log(data);
        return data.results; // Return the results array
    } catch (error) {
        console.error('Error fetching images:', error);
        return []; // Return an empty array in case of error
    }
}

// Function to fetch all images
async function fetchAllImages() {
    const pages = Array.from({ length: totalPages }, (_, i) => i + 1);
    const fetchPromises = pages.map(page => fetchImages(page));
    const results = await Promise.all(fetchPromises);
    const allImages = results.flat(); 
    console.log(allImages);
    return allImages;
}


function displayRandomImage(images) {
    if (images.length === 0) return;

    const randomIndex = Math.floor(Math.random() * images.length);
    const image = images[randomIndex];

    const container = document.getElementById('imageContainer');
    container.innerHTML = `
        <div class="image">
            <img src="${image.urls.regular}" alt="${image.alt_description || 'Image'}"/>
        </div>
    `;
}

// Display image when the page loads

async function init() {
    const images = await fetchAllImages();
    displayRandomImage(images);
}

// Initialize
init();
