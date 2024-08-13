
const products = [
    { id: 1, name: "Clock 1", price: 10, image: "Clock1.png" },
    { id: 2, name: "Clock 2", price: 15, image: "Clock2.png" },
    { id: 3, name: "Clock 3", price: 20, image: "Clock3.png" },
    { id: 4, name: "Clock 4", price: 25, image: "Clock4.png" },
    { id: 5, name: "Clock 5", price: 30, image: "Clock5.png" },
    { id: 6, name: "Clock 6", price: 35, image: "Clock6.png" },
    { id: 7, name: "Clock 7", price: 40, image: "Clock7.png" },
    { id: 8, name: "Clock 8", price: 45, image: "Clock8.png" },
    { id: 9, name: "Clock 9", price: 50, image: "Clock9.png" },
    { id: 10, name: "Clock 10", price: 55, image: "Clock10.png" },
    { id: 11, name: "Clock 11", price: 60, image: "Clock11.png" },
    { id: 12, name: "Clock 12", price: 65, image: "Clock12.png" }
];

let cartItems = [];


if (localStorage.getItem("cartItems")) {
    cartItems = JSON.parse(localStorage.getItem("cartItems"));
}

function saveCartToLocalStorage() {
    localStorage.setItem("cartItems", JSON.stringify(cartItems));
}

function renderCatalog() {
    const productListDiv = document.getElementById("cart-items");

    products.forEach(product => {
        const productDiv = document.createElement("div");
        productDiv.classList.add("cart-item");
        productDiv.innerHTML = `
            <div class="Images"> 
                <img src="${product.image}" alt="${product.name}">
            </div>
            <div class="cart-item-info">
                <p1>$${product.price.toFixed(2)}</p1>
            </div>
            <div class="cart-item-info-addCart">
                <h3>${product.name}</h3>
                <button class="add-to-cart" onclick="addToCart(${product.id})">Add to Cart</button>
            </div>
        `;
        productListDiv.appendChild(productDiv);
    });
}

renderCatalog();

// Function to render the cart
function renderCart() {
    const cartItemsDiv = document.getElementById("cart-items1");
    cartItemsDiv.innerHTML = ""; 
    let totalPrice = 0;

    for (let i = 0; i < cartItems.length; i++) {
        const item = cartItems[i];

        const im = document.createElement("div");
        const Clocks = document.createElement("div");
        const imageElement = document.createElement("img");
        imageElement.src = item.image; 
        Clocks.classList.add("ImagesCart");
        Clocks.appendChild(imageElement);
        im.appendChild(Clocks);
        im.classList.add("ImagePlusDetail");

        const cartItemDiv = document.createElement("div");
        cartItemDiv.classList.add("cart-item1");

        const cartItemInfoDiv = document.createElement("div");
        cartItemInfoDiv.classList.add("cart-item-info");
        const itemName = document.createElement("h3");
        itemName.textContent = item.name;
        const itemPrice = document.createElement("p");
        itemPrice.textContent = `$${item.price.toFixed(2)}`;
        const itemQuantity = document.createElement("p");
        itemQuantity.textContent = `Quantity: ${item.quantity}`;

        cartItemInfoDiv.appendChild(im);

        const detailsDiv=document.createElement("div");
        detailsDiv.appendChild(itemName);
        detailsDiv.appendChild(itemPrice);
        detailsDiv.appendChild(itemQuantity);
        detailsDiv.classList.add("Clock-Details");
        im.appendChild(detailsDiv);

        const cartItemActionsDiv = document.createElement("div");
        cartItemActionsDiv.classList.add("cart-item-actions");

        const MinusButton = document.createElement("button");
        MinusButton.textContent = "-";
        MinusButton.addEventListener("click", function() {
            DecreaseBy1(item.id);
        });
        cartItemActionsDiv.appendChild(MinusButton);

        const PlusButton = document.createElement("button");
        PlusButton.textContent = "+";
        PlusButton.addEventListener("click", function() {
            IncreaseBy1(item.id);
        });
        cartItemActionsDiv.appendChild(PlusButton);

        const removeButton = document.createElement("button");
        removeButton.textContent = "Remove";
        removeButton.addEventListener("click", function() {
            removeFromCart(item.id);
        });
        cartItemActionsDiv.appendChild(removeButton);

        cartItemDiv.appendChild(cartItemInfoDiv);
        cartItemDiv.appendChild(cartItemActionsDiv);

        cartItemsDiv.appendChild(cartItemDiv);

        totalPrice += item.price * item.quantity;
    }

    document.getElementById("total-price1").textContent = `$${totalPrice.toFixed(2)}`;
}

function addToCart(productId) {
    const product = products.find(p => p.id === productId);
    const existingItem = cartItems.find(item => item.id === productId);

    if (existingItem) {
        existingItem.quantity++;
        alert(`Item already exists in cart. Quantity: ${existingItem.quantity}`);
    } else {
        alert("Item added to cart");
        cartItems.push({ id: productId, name: product.name, price: product.price, quantity: 1, image: product.image });
    }

    saveCartToLocalStorage();
    renderCart();
}


function IncreaseBy1(productId) {
    const existingItem = cartItems.find(item => item.id === productId);
    if (existingItem) {
        existingItem.quantity++;
    }
    saveCartToLocalStorage();
    renderCart();
}


function DecreaseBy1(productId) {
    const existingItem = cartItems.find(item => item.id === productId);
    if (existingItem && existingItem.quantity > 0) {
        existingItem.quantity--;
        if (existingItem.quantity === 0) {
            removeFromCart(productId);
        }
    }
    saveCartToLocalStorage();
    renderCart();
}

function removeFromCart(productId) {
    cartItems = cartItems.filter(item => item.id !== productId);
    saveCartToLocalStorage();
    renderCart();
}


function checkout() {
    alert("Order placed");
}

function ShowCart() {
    document.querySelector('.Main').style.display = 'block';
    document.querySelector('.container').style.display = 'none';
    document.querySelector('.footer').style.display = 'none';
}


function ShowMenu() {
    document.querySelector('.Main').style.display = 'none';
    document.querySelector('.container').style.display = 'grid';
    document.querySelector('.footer').style.display = 'block';
}


renderCart();
