// Function to assign reviewers to papers
function assignReviewer() {
    // Get the clicked assign button
    var assignBtn = event.target;

    // Get the parent table row of the clicked button
    var row = assignBtn.parentNode.parentNode;

    // Get the title and category of the paper
    var title = row.cells[0].textContent;
    var category = row.cells[2].textContent;

    // Get the available reviewers
    var reviewers = document.querySelectorAll('.reviewer-list tbody tr');

    // Loop through the reviewers to find the one with the matching expertise
    for (var i = 0; i < reviewers.length; i++) {
        var reviewer = reviewers[i];
        var expertise = reviewer.cells[1].textContent;

        // If the reviewer has the same expertise as the paper, assign the paper to the reviewer
        if (expertise == category) {
            reviewer.cells[2].innerHTML = "Assigned to " + title;
            assignBtn.disabled = true;
            break;
        }
    }
}

// Add event listeners to the assign buttons
var assignBtns = document.querySelectorAll('.assign-btn');
for (var i = 0; i < assignBtns.length; i++) {
    assignBtns[i].addEventListener('click', assignReviewer);
}
