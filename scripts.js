// Example: Alert when a project is clicked
document.addEventListener("DOMContentLoaded", () => {
    const projectLinks = document.querySelectorAll("li");
    projectLinks.forEach((item) => {
      item.addEventListener("click", () => {
        alert("You clicked a project!");
      });
    });
  });
  