document.getElementById('registerForm').addEventListener('submit', function(event) {
    let fullname = document.getElementById('full_name').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let confirm_password = document.getElementById('repeat_password').value;
    let contact_number = document.getElementById('contact_number').value;
    let errors = [];
  
    if (fullname.trim() === '') {
      errors.push('Full name is required');
      document.getElementById('fullnameError').innerText = 'Full name is required';
    } else {
      document.getElementById('fullnameError').innerText = '';
    }
  
    if (email.trim() === '') {
      errors.push('Email is required');
      document.getElementById('emailError').innerText = 'Email is required';
    } else if (!validateEmail(email)) {
      errors.push('Invalid email address');
      document.getElementById('emailError').innerText = 'Invalid email address';
    } else {
      document.getElementById('emailError').innerText = '';
    }
  
    if (password.trim() === '') {
      errors.push('Password is required');
      document.getElementById('passwordError').innerText = 'Password is required';
    } else {
      document.getElementById('passwordError').innerText = '';
    }
  
    if (confirm_password.trim() === '') {
      errors.push('Confirm password is required');
      document.getElementById('confirmPasswordError').innerText = 'Confirm password is required';
    } else if (confirm_password !== password) {
      errors.push('Passwords do not match');
      document.getElementById('confirmPasswordError').innerText = 'Passwords do not match';
    } else {
      document.getElementById('confirmPasswordError').innerText = '';
    }
  
    if (contact_number.trim() === '') {
      errors.push('Contact number is required');
      document.getElementById('contactNumberError').innerText = 'Contact number is required';
    } else {
      document.getElementById('contactNumberError').innerText = '';
    }
  
    if (errors.length > 0) {
      event.preventDefault();
    }
  });
  
  function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
  }
  