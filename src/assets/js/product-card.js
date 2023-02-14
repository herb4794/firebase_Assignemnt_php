////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Product - Like Button
document.querySelectorAll('.product-card-container .product-info-container .like-share-save .like-icon').forEach(i => i.addEventListener('click', e => {
    i.classList.toggle('liked');
}));

// Product - Saved Button
document.querySelectorAll('.product-card-container .product-info-container .like-share-save .save-icon').forEach(i => i.addEventListener('click', e => {
    i.classList.toggle('saved');
}));


// Product - Add to Bag Button
document.querySelectorAll('.product-card-container .product-info-container .product-price-container button').forEach(button => button.addEventListener('click', e => {
    if (!button.classList.contains('added')) {
        button.classList.add('added');
        document.querySelector(".alert").classList.add('show');
        document.querySelector(".alert-overlay").classList.add('show');
        setTimeout(() => button.classList.remove('added'), 2000);
        setTimeout(() => document.querySelector(".alert").classList.remove('show'), 2000);
        setTimeout(() => document.querySelector(".alert-overlay").classList.remove('show'), 2000);
    }
    e.preventDefault();
}));

// Product - Alert's Cancel Button 
document.querySelector(".alert .close").addEventListener("click", () => {
    if (document.querySelector(".alert-overlay").classList.contains('show')) {
        document.querySelector(".alert-overlay").classList.remove('show');
    }
});
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////