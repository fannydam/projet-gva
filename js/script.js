/* ANIM BURGER & MENU */
const burger = document.querySelector('.burger');
const lateral = document.querySelector('.menu-lat');
const menuListGroup = document.querySelector('.list-name-groupe');
const submenu = document.querySelector('.submenu-lat');
const overlay = document.querySelector('.overlay');
const linkedIn = document.querySelector('.overlay-img-in');

burger.addEventListener('click', () => {
    burger.classList.toggle('active');
    lateral.classList.toggle('active');
    overlay.classList.toggle('active');
    linkedIn.classList.toggle('active');
});

menuListGroup.addEventListener('click', () => {
    submenu.classList.toggle('active');
});

overlay.addEventListener('click', () => {
    overlay.classList.toggle('active');
    burger.classList.toggle('active');
    lateral.classList.toggle('active');
    submenu.classList.toggle('active');
    
});

// VALIDATION DES FORMULAIRES
function validation() {
    let form = document.forms["form"];
    let email = form['email'].value;
    let firstname = form['firstname'].value;
    let lastname = form['lastname'].value;
    let message = form['message'].value;

    const firstnameTest = /^[A-Za-z'àáâãäåçèéêëìíîïðòóôõöùúûüýÿ -]{1,30}$/.test(firstname);

    const lastnameTest = /^[A-Za-z'àáâãäåçèéêëìíîïðòóôõöùúûüýÿ -]{1,30}$/.test(lastname);

    const emailTest = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(email);


    let errorMessage = document.querySelector(".error-message");

    if (firstname == "" && lastname == "" && email == "" && message == "") {
        form["firstname"].style.border = "red solid 1px";
        errorMessage.innerHTML = 'Merci de remplir le champs';
        return false;
    }

    if (!firstnameTest) {
        form["firstname"].style.border = "red solid 1px";
        errorMessage.innerHTML = 'Le nom ne doit pas contenir de chiffres ni de caractères spéciaux';
        return false;
    } 
    if (!lastnameTest) {
        form["lastname"].style.border = "red solid 1px";
        errorMessage.innerHTML = 'Le nom ne doit pas contenir de chiffres ni de caractères spéciaux';
        return false;
    } 
    if (!emailTest) {
        form["email"].style.border = "red solid 1px";
        errorMessage.innerHTML = 'Email non conforme';
        return false;
    } 
}
