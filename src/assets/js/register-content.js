////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
document.querySelector('.register-container .register-row .register-form.col-8 .input-field.username .input-register-username').addEventListener("focus", () => {
    document.querySelector('.register-container .register-row .register-form.col-8 .input-field.username').classList.add('active');
});

document.querySelector('.register-container .register-row .register-form.col-8 .input-field.password .input-register-password').addEventListener("focus", () => {
    document.querySelector('.register-container .register-row .register-form.col-8 .input-field.password').classList.add('active');
});

document.querySelector('.register-container .register-row .register-form.col-8 .input-field.confirm-password .input-register-confirm-password').addEventListener("focus", () => {
    document.querySelector('.register-container .register-row .register-form.col-8 .input-field.confirm-password').classList.add('active');
});

document.querySelector('.register-container .register-row .register-form.col-8 .input-field.phone .input-register-phone').addEventListener("focus", () => {
    document.querySelector('.register-container .register-row .register-form.col-8 .input-field.phone').classList.add('active');
});
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////