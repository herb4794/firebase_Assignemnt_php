////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
document.querySelector('.forgot-id-container .forgot-id-row .forgot-id-form.col-8 .input-field.phone .input-forgot-id-phone').addEventListener("focus", () => {
    document.querySelector('.forgot-id-container .forgot-id-row .forgot-id-form.col-8 .input-field.phone').classList.add('active');
    document.querySelector('.forgot-id-container .forgot-id-row .forgot-id-form.col-8 .forgot-id-btn').classList.remove('false');
    document.querySelector('.forgot-id-container .forgot-id-row .forgot-id-form.col-8 .forgot-id-btn').classList.add('true');
    document.querySelector('.forgot-id-container .forgot-id-row .forgot-id-form.col-8 .forgot-id-btn').type = "submit";
});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////