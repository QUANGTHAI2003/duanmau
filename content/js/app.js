const username = document.querySelector('#ma_kh');
const pass = document.querySelector('#mat_khau');
const cfpass = document.querySelector('#mat_khau2');
const email = document.querySelector('#email');
const nameEle = document.querySelector('#ho_ten');
const form = document.querySelector('#form');
const btnSubmit = document.querySelector('#btnSubmit');
const imageInput = document.querySelector('#imageUpload');
const selectEle = document.querySelector('#danh_muc')
const don_gia = document.querySelector('#don_gia');

console.log(username, pass, cfpass, email, nameEle, form, btnSubmit, imageInput);

function showSuccess(input) {
    const formControl = input.parentElement;
    formControl.classList.remove('error');
    formControl.classList.add('success');
    const small = formControl.querySelector('small');
    small.innerText = '';
    btnSubmit.disabled = false;
    btnSubmit.style.backgroundColor = '#2ecc71';
}

function showError(input, message) {
    const formControl = input.parentElement;
    formControl.classList.add('error');
    formControl.classList.remove('success');
    const small = formControl.querySelector('small');
    small.innerText = message;
    btnSubmit.disabled = true;
    btnSubmit.style.backgroundColor = '#ccc';
}

function checkEmptyError(...listInput) {
    let isRequired = false;
    listInput.forEach(function (input) {
        if (input.value.trim() === '') {
            showError(input, 'Không được để trống');
            isRequired = true;
        } else {
            showSuccess(input);
        }
    });
    return isRequired;
}

function getFieldName(input) {
    if (input == ma_kh) {
        return 'Tên đăng nhập';
    } else if (input == mat_khau) {
        return 'Mật khẩu';
    } else if (input == mat_khau2) {
        return 'Xác nhận mật khẩu';
    } else if (input == email) {
        return 'Email';
    } else if (input == ho_ten) {
        return 'Họ tên';
    } else {
        return '';
    }
}

function checkEmailError(input) {
    const regexEmail =
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    input.value = input.value.trim();
    let isEmailError = !regexEmail.test(input.value);
    if (regexEmail.test(input.value)) {
        showSuccess(input);
    } else {
        showError(input, 'Email không hợp lệ! Vui lòng nhập lại');
    }
    return isEmailError;
}

function checkLength(input, min, max) {
    input.value = input.value.trim();
    if (input.value.length < min) {
        showError(input, `${getFieldName(input)} phải nhiều hơn ${min} ký tự`);
        return true;
    } else if (input.value.length > max) {
        showError(input, `${getFieldName(input)} phải ít hơn ${max} ký tự`);
        return true;
    } else {
        return false;
    }
}

function checkMatchPasswordError(passInput, cfpassInput) {
    if (passInput.value !== cfpassInput.value) {
        showError(mat_khau2, 'Mật khẩu không khớp');
        return true;
    } else {
        return false;
    }
}

function checkSelected(input) {
    var selectedValue = input.options[input.selectedIndex].value;
    if (selectedValue == "selectcard") {
        showError(input, 'Vui lòng chọn danh mục');
    }
}

function checkInputNumber(input) {
    var regexNumber = /^[0-9]+$/;
    if (!regexNumber.test(input.value)) {
        showError(input, 'Vui lòng nhập số');
    }
}
