const logInTab = document.getElementById('logInTab');
const signUpTab = document.getElementById('signUpTab');
const formLogIn = document.getElementById('formLogIn');
const formSignUp = document.getElementById('formSignUp');
const formHeader = document.getElementById('formHeader');
const formWrapper = document.getElementById('formWrapper');
const haveAccountBtn = document.getElementById('haveAccountBtn');

logInTab.addEventListener('click', function () {
	formHeader.classList = "form__header login-active";
	formWrapper.classList = "form__wrapper login-active";
});

signUpTab.addEventListener('click', function () {
	formHeader.classList = "form__header signup-active";
	formWrapper.classList = "form__wrapper signup-active";
});

haveAccountBtn.addEventListener('click', function () {
	formHeader.classList = "form__header login-active";
	formWrapper.classList = "form__wrapper login-active";
});