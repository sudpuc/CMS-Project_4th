// Get the "Add Date" button element
const addButton = document.querySelector('.add-button');

// Add a click event listener to the button
addButton.addEventListener('click', function() {
  // Get the table element
  const table = document.querySelector('table');

  // Create a new row element
  const newRow = document.createElement('tr');

  // Add the date and description input fields to the row
  newRow.innerHTML = `
    <td>
      <label for="date-input">Date</label>
      <input type="date" id="date-input">
    </td>
    <td>
      <label for="description-input">Description</label>
      <input type="text" id="description-input">
    </td>
    <td>
      <button class="save-button">Save</button>
      <button class="cancel-button">Cancel</button>
    </td>
  `;

  // Add the new row to the table body
  table.querySelector('tbody').appendChild(newRow);
});
