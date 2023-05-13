// Define an array of papers with their information
var papers = [
    {
      id: 1,
      title: "Paper Title 1",
      authors: "Author 1, Author 2",
      status: "Under Review",
      score: null
    },
    {
      id: 2,
      title: "Paper Title 2",
      authors: "Author 3, Author 4",
      status: "Under Review",
      score: null
    },
    {
      id: 3,
      title: "Paper Title 3",
      authors: "Author 5, Author 6",
      status: "Under Review",
      score: null
    }
  ];
  
  // Define a function to display the papers in a table
  function displayPapers() {
    var tableBody = document.querySelector("#paper-table tbody");
    tableBody.innerHTML = "";
  
    for (var i = 0; i < papers.length; i++) {
      var paper = papers[i];
  
      var row = document.createElement("tr");
      row.innerHTML = "<td>" + paper.id + "</td>" +
                      "<td>" + paper.title + "</td>" +
                      "<td>" + paper.authors + "</td>" +
                      "<td>" + paper.status + "</td>" +
                      "<td>" + (paper.score ? paper.score : "") + "</td>" +
                      "<td>" +
                        "<button class='view-button' data-id='" + paper.id + "'>View</button>" +
                        "<button class='rate-button' data-id='" + paper.id + "'>Rate</button>" +
                      "</td>";
  
      tableBody.appendChild(row);
    }
  }
  
  // Define a function to display the details of a specific paper
  function displayPaperDetails(id) {
    var paper = papers.find(function(paper) {
      return paper.id === id;
    });
  
    var detailsContainer = document.querySelector("#paper-details");
    detailsContainer.innerHTML = "";
  
    var heading = document.createElement("h3");
    heading.textContent = paper.title;
    detailsContainer.appendChild(heading);
  
    var authors = document.createElement("p");
    authors.textContent = "Authors: " + paper.authors;
    detailsContainer.appendChild(authors);
  
    var status = document.createElement("p");
    status.textContent = "Status: " + paper.status;
    detailsContainer.appendChild(status);
  
    if (paper.score !== null) {
      var score = document.createElement("p");
      score.textContent = "Score: " + paper.score;
      detailsContainer.appendChild(score);
    }
  
    var backButton = document.createElement("button");
    backButton.textContent = "Back";
    backButton.addEventListener("click", function() {
      displayPapers();
    });
    detailsContainer.appendChild(backButton);
  }
  
  // Define a function to handle rating a paper
  function ratePaper(id) {
    var paper = papers.find(function(paper) {
      return paper
  