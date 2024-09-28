// função para renderizar a lista de produtos
function renderProducts(products) {
    const productsList = document.querySelector('.products ul');
    productsList.innerHTML = '';
    products.forEach(product => {
        const productHTML = `
            <li class="product">
                <img src="${product.image}" alt="${product.title}">
                <h2>${product.title}</h2>
                <p>${product.description}</p>
                <p>R$ ${product.price}</p>
            </li>
        `;
        productsList.innerHTML += productHTML;
    });
}

// função para buscar produtos
function searchProducts() {
    const searchInput = document.querySelector('input[name="search"]');
    const searchValue = searchInput.value.trim();
    if (searchValue) {
        // fazer uma requisição AJAX para buscar produtos
        // e renderizar a lista de produtos
    }
}

// adicionar evento de busca
document.querySelector('input[name="search"]').addEventListener('keyup', searchProducts);