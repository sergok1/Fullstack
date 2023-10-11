// Функция для проверки, является ли строка пустой
function isEmpty(value) {
    return value.trim() === '';
  }
  
  // Функция для проверки длины пароля
  function isPasswordValid(value) {
    return value.length >= 8;
  }
  
  // Функция для проверки наличия символа @ в адресе электронной почты
  function isEmailValid(value) {
    return value.includes('@');
  }
  
  document.getElementById('registration-form').addEventListener('submit', function (event) {
    event.preventDefault(); // Отмена отправки формы
  
    let fname = document.getElementById('fname').value;
    let lname = document.getElementById('lname').value;
    let email = document.getElementById('email').value;
    let pword = document.getElementById('pword').value;
  
    // Проводим проверки и выводим сообщения об ошибках
    let fnameValid = !isEmpty(fname);
    let lnameValid = !isEmpty(lname);
    let emailValid = isEmailValid(email);
    let pwordValid = isPasswordValid(pword);
  
    document.getElementById('fname-p').textContent = fnameValid ? '' : 'First Name is required';
    document.getElementById('lname-p').textContent = lnameValid ? '' : 'Last Name is required';
    document.getElementById('email-p').textContent = emailValid ? '' : 'Invalid Email';
    document.getElementById('pword-p').textContent = pwordValid ? '' : 'Password should be at least 8 characters long';
  
    // Если все поля валидны, можно отправить данные на сервер
    if (fnameValid && lnameValid && emailValid && pwordValid) {
      // Ваш код для отправки данных на сервер
      alert('Form submitted successfully!');
    }
  });
  