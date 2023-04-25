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
// document.querySelectorAll('.product-card-container .product-info-container .product-price-container button').forEach(button => button.addEventListener('click', e => {
//     if (!button.classList.contains('added')) {
//         button.classList.add('added');
//         document.querySelector(".alert").classList.add('show');
//         document.querySelector(".alert-overlay").classList.add('show');
//         setTimeout(() => button.classList.remove('added'), 2000);
//         setTimeout(() => document.querySelector(".alert").classList.remove('show'), 2000);
//         setTimeout(() => document.querySelector(".alert-overlay").classList.remove('show'), 2000);
//     }
//     e.preventDefault();
// }));

// document.querySelectorAll('.product-card-container .product-info-container .product-price-container button').forEach(button => button.addEventListener('click', e => {
//     e.preventDefault();

//     if (!button.classList.contains('added')) {
//         button.classList.add('added');
//         document.querySelector(".alert").classList.add('show');
//         document.querySelector(".alert-overlay").classList.add('show');
//         setTimeout(() => button.classList.remove('added'), 2000);
//         setTimeout(() => document.querySelector(".alert").classList.remove('show'), 2000);
//         setTimeout(() => document.querySelector(".alert-overlay").classList.remove('show'), 2000);

//         // 通過AJAX提交表單信息到後端
//         const form = button.closest('form');
//         const formData = new FormData(form);
//         fetch(form.action, {
//             method: 'POST',
//             body: formData
//         }).then(response => {
//             // 根據後端返回的結果進行相應的處理
//         }).catch(error => {
//             console.error(error);
//         });
//     }
// }));

// Product - Alert's Cancel Button 
document.querySelector(".alert .close").addEventListener("click", () => {
    if (document.querySelector(".alert-overlay").classList.contains('show')) {
        document.querySelector(".alert-overlay").classList.remove('show');
    }
});


// const productForm = document.getElementById('productForm');
// const addToCartBtn = document.getElementById('addToCartBtn');
// const product_id = document.getElementById('product_id').value;


// addToCartBtn.addEventListener('click',async (e) => {
//   e.preventDefault();
//   const formData = new FormData(productForm) 

//   formData.append('add',1)
//   formData.append('product_id', product_id)

//   await fetch('../../server/cart.php',{
//     method: 'POST',
//     body: formData,
//   })
//   location.reload(true)
// })
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
