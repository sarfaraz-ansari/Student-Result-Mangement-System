const menu=document.getElementById("menu")
const icon=document.getElementById("icon")
navbar=document.getElementById("navbar")

icon.onclick = function(){
    menu.classList.toggle('active');
    icon.classList.toggle('active');
}
menu.onclick = function(event){
    if (event.target.id!== "menu" && event.target.id!== "icon" && event.target.id!== "navbar"){
        menu.classList.remove('active');
        icon.classList.remove('active');
    }
}


// slideshow
let slideIndex=1;
window.addEventListener("load",function() {
    showSlides(slideIndex);
    myTimer = setInterval(function(){plusSlides(1)}, 4000);
})  

// Next/previous controls
function plusSlides(n){
    clearInterval(myTimer);
    if (n < 0){
      showSlides(slideIndex -= 1);
    } else {
     showSlides(slideIndex += 1); 
    }
    if (n === -1){
      myTimer = setInterval(function(){plusSlides(n + 2)}, 4000);
    } else {
      myTimer = setInterval(function(){plusSlides(n + 1)}, 4000);
    }
  }

// Thumbnail image controls
function currentSlide(n){
    clearInterval(myTimer);
    myTimer = setInterval(function(){plusSlides(n + 1)}, 4000);
    showSlides(slideIndex = n);
  }

  function showSlides(n){
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
  }
  // Dependent dropdown list
   var courseObject = {
    "1": {
      "B.Tech": ["Bio-Tech","Civil","CSE","EE","EC", "IT", "ME"],
      "M.tech": ["CSE", "ME"],
      "MBA": ["Finance", "HR", "IT", "Int. Bus.", "marketing", "Oper. Res."],
      "Polytechnic": ["CE", "EC", "ME"]
    },
    "2": {
      "B.Tech": ["Bio-Tech","Civil","CSE","EE","EC", "IT", "ME"],
      "M.tech": ["CSE", "ME"],
      "MBA": ["Finance", "HR", "IT", "Int. Bus.", "marketing", "Oper. Res."],
      "Polytechnic": ["CE", "EC", "ME"]
    },
    "3": {
      "B.Tech": ["Bio-Tech","Civil","CSE","EE","EC", "IT", "ME"],
      "M.tech": ["CSE", "ME"],
      "MBA": ["Finance", "HR", "IT", "Int. Bus.", "marketing", "Oper. Res."],
      "Polytechnic": ["CE", "EC", "ME"]
    },
    "4": {
      "B.Tech": ["Bio-Tech","Civil","CSE","EE","EC", "IT", "ME"],
      "M.tech": ["CSE", "ME"],
      "MBA": ["Finance", "HR", "IT", "Int. Bus.", "marketing", "Oper. Res."],
      "Polytechnic": ["CE", "EC", "ME"]
    }
    
    
  }
  window.onload = function() {
    var yearSel = document.getElementById("Year");
    var courseSel = document.getElementById("Course");
    var branchSel = document.getElementById("Branch");
    for (var x in courseObject) {
      yearSel.options[yearSel.options.length] = new Option(x, x);
    }
    yearSel.onchange = function() {
      branchSel.length = 1;
      courseSel.length = 1;
      for (var y in courseObject[this.value]) {
        courseSel.options[courseSel.options.length] = new Option(y, y);
      }
    }
    courseSel.onchange = function() {
    branchSel.length = 1;
    var z = courseObject[yearSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
        branchSel.options[branchSel.options.length] = new Option(z[i], z[i]);
      }
    }
  }



  // form validation
  function validate(){
    if( document.signup.Name.value == "" ) {
      alert( "Please provide your name!" );
      document.signup.Name.focus() ;
      return false;
   }
    if( document.signup.Rollno.value.toString().length != 13 ) {
      alert( "Please provide valid Roll number!" );
      document.signup.Rollno.focus() ;
      return false;
   }
    if( document.signup.Year.value == "" ) {
      alert( "Please provide your Year!" );
      document.signup.Year.focus() ;
      return false;
   }
    if( document.signup.Course.value == "" ) {
      alert( "Please provide your Course!" );
      document.signup.Course.focus() ;
      return false;
   }
    if( document.signup.Branch.value == "" ) {
      alert( "Please provide your Branch!" );
      document.signup.Branch.focus() ;
      return false;
    }
    if( document.signup.Password.value == "" ) {
      alert( "Please provide your Password!" );
      document.signup.Password.focus() ;
      return false;
    }
    if( document.signup.Password.value.toString().length <= 8 ) {
      alert( "Please provide valid Password!" );
      document.signup.Password.focus() ;
      return false;
    }
      return ( true );
    }

  // show/hide password button
  function myFunction() {
    var x = document.getElementById("Password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }