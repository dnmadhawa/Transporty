
document.getElementById("sh-date").max;

var slideIndex = 1;
showSlides(slideIndex);
var myTimer = setInterval(next, 4000,1);

function next(n) {
  clearInterval(myTimer);
  showSlides(slideIndex += n);
}

function previous(n) {
  clearInterval(myTimer);
  showSlides(slideIndex += n);
}

function showSlides(a) {
  var x = document.getElementsByClassName("slide");
  if (a > x.length){
    slideIndex = 1;
  }

  if (a < 1) {
    slideIndex = x.length;
  }

  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }

  x[slideIndex-1].style.display = "block";  
  a =slideIndex+1;
  myTimer = setInterval(next, 10000,1);

}



