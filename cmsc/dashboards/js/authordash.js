const form = document.querySelector('form');
const titleInput = document.querySelector('#title');
const authorsInput = document.querySelector('#authors');
const emailInput = document.querySelector('#email');
const fileInput = document.querySelector('#file');
const categoryInput = document.querySelector('#category');
const termsInput = document.querySelector('#terms');
const submitBtn = document.querySelector('input[type="submit"]');

form.addEventListener('submit', (event) => {
  // Prevent the default form submission
  event.preventDefault();

  // Validate the form inputs
  const isValid = validateForm();

  // If the form is valid, submit it
  if (isValid) {
    submitForm();
  }
});

function validateForm() {
  let isValid = true;

  // Validate the title input
  if (titleInput.value.length < 5 || titleInput.value.length > 50) {
    titleInput.setCustomValidity('Title must be between 5 and 50 characters');
    isValid = false;
  } else {
    titleInput.setCustomValidity('');
  }

  // Validate the authors input
  if (authorsInput.value.length < 3 || authorsInput.value.length > 100) {
    authorsInput.setCustomValidity('Authors must be between 3 and 100
characters');
isValid = false;
} else {
authorsInput.setCustomValidity('');
}

// Validate the email input
const emailRegex = /\S+@\S+.\S+/;
if (!emailRegex.test(emailInput.value)) {
emailInput.setCustomValidity('Please enter a valid email address');
isValid = false;
} else {
emailInput.setCustomValidity('');
}

// Validate the file input
if (fileInput.files.length === 0) {
fileInput.setCustomValidity('Please choose a file to upload');
isValid = false;
} else if (fileInput.files[0].type !== 'application/pdf') {
fileInput.setCustomValidity('File must be in PDF format');
isValid = false;
} else {
fileInput.setCustomValidity('');
}

// Validate the category input
if (categoryInput.value === '') {
categoryInput.setCustomValidity('Please select a category');
isValid = false;
} else {
categoryInput.setCustomValidity('');
}

// Validate the terms input
if (!termsInput.checked) {
termsInput.setCustomValidity('You must agree to the terms and conditions');
isValid = false;
} else {
termsInput.setCustomValidity('');
}

// Return the validation result
return isValid;
}

function submitForm() {
// Disable the submit button to prevent multiple submissions
submitBtn.disabled = true;

// Display a loading indicator
submitBtn.value = 'Submitting...';

// Simulate a server request delay
setTimeout(() => {
// Reset the form and display a success message
form.reset();
submitBtn.value = 'Submit';
alert('Paper submitted successfully!');
}, 2000);
}