let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let quantity = document.querySelector('.quantity');
let total = document.querySelector('.total');


openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let products = [
]
let listCards  = [];
function initApp(){
    products.forEach((value, key) =>{
         // Create a new div for each product and append it to the list
        // The div contains product information and an "Add to Cart" button
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="\e_delish\View/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">Add To Card</button>`;
        list.appendChild(newDiv);
    })
}
initApp();
function addToCard(key){
    if(listCards[key] == null){
         // If the product is not in the list card, copy it from the products list
        // and set the quantity to 1
        products[key].price = parseInt(products[key].price.replace('$', ''));
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();
}

function changeQuantity(key, quantity){
    if(quantity == 0){
         // If the quantity is 0, remove the product from the list card
        delete listCards[key];
    }else{
        // Update the quantity and price of the product in the list card
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}
function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;

    listCards.forEach((value, key)=>{
         // Iterate through the products in the list card and update the displayed information
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;

        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="\e_delish\View/${value.image}"/></div>
                <div>${value.name}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>
                <div>${value.price.toLocaleString()} $</div>`;
                listCard.appendChild(newDiv);
  // Update the total quantity and price
        }
    })
    total.innerText = 'Total = '+ totalPrice + '$';
    quantity.innerText = count;
}



const modeToggle = document.getElementById('mode-toggle');
        const body = document.body;
        const modeIcon = document.getElementById('mode-icon');

        // Check for user's preference in local storage
        document.addEventListener('DOMContentLoaded', () => {
            const isDarkMode = localStorage.getItem('dark-mode');
            if (isDarkMode === 'true') {
                body.classList.add('dark-mode');
                modeIcon.classList.replace('fa-sun', 'fa-moon');
            }
        });

        // Toggle between light and dark mode
        modeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            if (body.classList.contains('dark-mode')) {
                modeIcon.classList.replace('fa-sun', 'fa-moon');
                localStorage.setItem('dark-mode', 'true');
            } else {
                modeIcon.classList.replace('fa-moon', 'fa-sun');
                localStorage.setItem('dark-mode', 'false');
            }
        });
    // Text to be typed
    const textToType = "Department of Information Technology & Management";
  
    // Get the text container
    const typingTextContainer = document.getElementById('typing-text');
  
    // Function to simulate typing effect
    function typeText(index) {
      typingTextContainer.innerHTML = textToType.slice(0, index);
      if (index < textToType.length) {
        setTimeout(() => {
          typeText(index + 1);
        }, 100); // Adjust the typing speed (in milliseconds)
      }
    }
  
    // Start the typing animation
    typeText(0);
  
  var i = 0;
  
  var txt = 'Im sincere,responsible,dedicate,straight forward person.I believe in connectivity because connectivity is producativity.Always i try to encourage every people confidance is my power.Im 23 years old.I was born in Brahmanbaria.I grew up in Dhaka.My school was B-Baria then i completed my HSC from Dhanmondi Ideal collage.Afterthat i went china for study then .I did completed my 2 years study .Afterworth i came bangladesh in vaccation thats time i didnt go there .Then i took decision  to admit in Daffodil Internation University department of ITM.Now im gonna say about my family.My father Businessman & Mother is housewife.We are four brother mah first brother is Softoware engineer & second brother aboard then me last but not least 4th brother doing study in class 7.So that was me and my whole family Introduction';
  
  
  var speed = 10;
  
  function typeWriter() {
    if (i < txt.length) {
      document.getElementById("demo").innerHTML += txt.charAt(i);
      i++;
      setTimeout(typeWriter, speed);
  
    }
  }

  w3.slideshow(".nature", 1500);

  

var icon = document.getElementById("icon")
var sidenav = document.getElementById("sidenav")
var menu = document.getElementById("menu")

sidenav.style.right="-250px";

 icon.onclick = function(){
if(sidenav.style.right =="-250px"){
    sidenav.style.right="0";
}
else{
    sidenav.style.right="-250px";
    }
 }

