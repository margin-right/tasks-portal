function reg_valid(){

    let trigger = true;
    let error_color = '#f2cc7d';

    let firstName = document.getElementsByName('firstName')[0];
    let secondName = document.getElementsByName('secondName')[0];
    let lastName = document.getElementsByName('lastName')[0];
    let email = document.getElementsByName('email')[0];
    let login = document.getElementsByName('login')[0];
    let password = document.getElementsByName('password')[0];
    let password_check = document.getElementById('password-check');

    firstName.style.background = 'white';
    secondName.style.background = 'white';
    lastName.style.background = 'white';
    email.style.background = 'white';
    password.style.background = 'white';
    password_check.style.background = 'white';

    if(!firstName.value.match(/^[а-яА-ЯёЁ ]+$/)){
        trigger = false;
        firstName.style.background = error_color;
    }
    if(!secondName.value.match(/^[а-яА-ЯёЁ ]+$/)){
        trigger = false;
        secondName.style.background = error_color;
    }
    if(!lastName.value.match(/^[а-яА-ЯёЁ ]+$/)){
        trigger = false;
        lastName.style.background = error_color;
    }
    if(email_valid(email.value) == false){
        trigger = false;
        email.style.background = error_color;
    }
    if(!login.value){
        trigger = false;
        login.style.background = error_color;
    }
    if(password.value != password_check.value || !password.value || !password_check.value){
        trigger = false;
        password.style.background = error_color;
        password_check.style.background = error_color;
    }

    if(trigger == true){
        document.getElementById('form-block').submit();
    }else{
        alert('Не верно заполнены поля')
        return false
    }


}

function email_valid(email){
    if(email.match(/^[-@.a-zA-Z0-9]+$/) == null){
        return false
    }
    let email_arr = email.split('@');
    if(email_arr.length != 2){
        return false
    }
    if(email_arr[0] == '' || email_arr[1] == ''){
        return false
    }
    let second_part_arr = email_arr[1].split('.');
    if(second_part_arr.length != 2){
        return false
    }
    if(second_part_arr[0] == '' || second_part_arr[1] == ''){
        return false
    }
    return true
}