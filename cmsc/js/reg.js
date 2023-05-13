// Get the form element
const form = document.querySelector('form');

// Add event listener to the form submit button
form.addEventListener('submit', function(event) {
  // Get the form inputs
  const username = document.querySelector('input[name="username"]');
  const email = document.querySelector('input[name="email"]');
  const password = document.querySelector('input[name="password"]');
  const userType = document.querySelector('select[name="user_type"]');

  // Check if the username is empty
  if (username.value.trim() === '') {
    alert('Please enter your username.');
    event.preventDefault();
    return false;
  }

  // Check if the email is empty
  if (email.value.trim() === '') {
    alert('Please enter your email.');
    event.preventDefault();
    return false;
  }

  // Check if the email is valid
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email.value.trim())) {
    alert('Please enter a valid email address.');
    event.preventDefault();
    return false;
  }

  // Check if the password is empty
  if (password.value.trim() === '') {
    alert('Please enter your password.');
    event.preventDefault();
    return false;
  }

  // Check if the user type is selected
  if (userType.value === '') {
    alert('Please select your user type.');
    event.preventDefault();
    return false;
  }
});
