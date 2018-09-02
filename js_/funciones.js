$(document).ready(function () {
      $('.slider').slider({full_width: true});
});


function gotoprin(){
    
    location.href = "principal.html";
}

function handleBtnClick(event) {
  toggleButton(event.target);
}

function handleBtnKeyPress(event) {
  
  if (event.key === " " || event.key === "Enter") {
    
    event.preventDefault();
    toggleButton(event.target);
  }
}

function toggleButton(element) {
  
  var pressed = (element.getAttribute("aria-pressed") === "true");
  
  element.setAttribute("aria-pressed", !pressed);
}