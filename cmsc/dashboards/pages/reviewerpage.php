<!DOCTYPE html>
<html>
<head>
  <title>Paper Reviewer Page</title>
  <link rel="stylesheet" href="css/reviewpage.css">
</head>
<body>
  <h1>Paper Reviewer Page</h1>
  <form id="paper-review-form">
    <label for="author-name">Author Name:</label>
    <input type="text" id="author-name" name="authorName" required>

    <label for="author-email">Author Email:</label>
    <input type="email" id="author-email" name="authorEmail" required>

    <label for="paper-title">Paper Title:</label>
    <input type="text" id="paper-title" name="paperTitle" required>

    <label for="paper-content">Paper Content:</label>
    <textarea id="paper-content" name="paperContent" required></textarea>

    <button type="submit" name="submit" value="submit">Submit</button>
  </form>

  <script>
    const form = document.getElementById('paper-review-form');

    form.addEventListener('submit', (event) => {
      event.preventDefault();

      const formData = new FormData(form);

      fetch('submit_paper_review.php', {
        method: 'POST',
        body: formData
      })
      .then(response => {
        if (response.ok) {
          alert('Your paper has been submitted for review!');
          form.reset();
        } else {
          throw new Error('An error occurred while submitting your paper.');
        }
      })
      .catch(error => {
        alert(error.message);
      });
    });
  </script>
</body>
</html>
