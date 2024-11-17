$(document).ready(function() {
    var count_particles, stats, update;
    stats = new Stats;
    stats.setMode(0);
    stats.domElement.style.position = 'relative';
    stats.domElement.style.left = '0px';
    stats.domElement.style.top = '0px';
    document.body.appendChild(stats.domElement);
    count_particles = document.querySelector('.js-count-particles');
    update = function() {
        stats.begin();
        stats.end();
        if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
            count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
        }
        requestAnimationFrame(update);
    };
    requestAnimationFrame(update);


});



window.onscroll = function() {
    myFunction();
};
var header = document.getElementById("NavbarControl");
var HireBtn = document.getElementById("HireBtn");
var BtnColor = document.getElementById("BtnColor");
var sticky = header.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("fixed-top");
        header.classList.add("bg-white");
        HireBtn.classList.remove("hire-n");
        HireBtn.classList.add("hire-t");
        document.getElementById("FText").innerHTML = "Contact Us";
        document.getElementById("IndicatorIcon").classList.add("hide");
    } else {
        header.classList.remove("fixed-top");
        header.classList.remove("bg-white");
        HireBtn.classList.remove("hire-t");
        HireBtn.classList.add("hire-n");
        document.getElementById("FText").innerHTML = "Contact Us";
        document.getElementById("IndicatorIcon").classList.remove("hide");
    }
}



var i = 0;
var WelcomeText = "Welcome at GauravinghigC, where we are ";
var speed = 60; /* The speed/duration of the effect in milliseconds */
window.onload = function() {
    typeWriter();
}

function typeWriter() {
    if (i < WelcomeText.length) {
        document.getElementById("typetext").innerHTML += WelcomeText.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}

$(document).ready(function() {
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 2000, function() {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
});

function LoginAction(){
 var LoginArea = document.getElementById("LoginArea");
 var SignUpArea = document.getElementById("SignUpArea");
 if(LoginArea.style.display == "none"){
  LoginArea.style.display = "block";
  SignUpArea.style.display = "none";
 } else {
  SignUpArea.style.display = "block";
  LoginArea.style.display = "none";
 }
}

function PasswordCheck(){
 var GlobalMsg = document.getElementById("GlobalMsg");
 var FName = document.getElementById("FName");
 var EmailId = document.getElementById("EmailId");
 var PhoneNumber = document.getElementById("PhoneNumber");
 var Password1 = document.getElementById("Password1").value;
 var Password2 = document.getElementById("Password2").value;
 var SignUpAction = document.getElementById("SignUpAction");
 var MessageArea = document.getElementById("MessageArea");
 if(Password1 != Password2){
  MessageArea.classList.remove("text-success");
  MessageArea.classList.add("text-danger");
  MessageArea.innerHTML = "<i class='fa fa-warning'></i>";
 } else if (Password1 == Password2 && Password1 != "" && Password2 != "") {
  MessageArea.classList.remove("text-danger");
  MessageArea.classList.add("text-success");
  MessageArea.innerHTML = "<i class='fa fa-check-circle'></i>";
  if(FName.value == "" || EmailId.value == "" || PhoneNumber.value == "" || Password1 == "" || Password2 == ""){
  GlobalMsg.classList.add("text-danger");
  GlobalMsg.classList.add("ml-0");
  GlobalMsg.classList.add("pl-0");
  GlobalMsg.innerHTML = "Fill all Details...";
 }  else {
  GlobalMsg.style.display = "none";
  SignUpAction.classList.remove("disabled");
  SignUpAction.innerHTML = "Create Account <i class='fa fa-angle-right'></i>";
 }
 }
}

function SignUp(){
 var SignUpAction = document.getElementById("SignUpAction");
 SignUpAction.innerHTML = "<i class='fa fa-spinner fa-spin'></i> Creating Account...";
}

function CheckInputs(){
 var Username = document.getElementById("Username").value;
 var Password0 = document.getElementById("Password").value;
 var LoginAction = document.getElementById("LoginAction");
 if(Username != "" && Password0 != ""){
  LoginAction.classList.remove("disabled");
 } else {
  LoginAction.classList.add("disabled");
 }
}

function LoginClick(){
 var LoginAction = document.getElementById("LoginAction");
 LoginAction.innerHTML = "<i class='fa fa-spinner fa-spin'></i> Checking Login Details...";
}

function RecoveryAccount(){
 var RecoveryData = document.getElementById("RecoveryData").value;
 var PasswordRecoveryD = document.getElementById("PasswordRecoveryD");
 if(RecoveryData != ""){
  PasswordRecoveryD.classList.remove("disabled");
 } else {
  PasswordRecoveryD.classList.add("disabled");
 }
}

function PasswordRecovery(){
 var PasswordRecoveryD = document.getElementById("PasswordRecoveryD");
 PasswordRecoveryD.innerHTML = "<i class='fa fa-spinner fa-spin'></i> Searching Account...";
}

function ShowSidebar() {
  var Sidebar = document.getElementById("Sidebar");
  if (Sidebar.style.display == "block") {
   Sidebar.style.display = "none";
   Sidebar.style.transition = "display 5s";
  } else {
   Sidebar.style.transition = "display 5s";
   Sidebar.style.display = "block";
  }
 }

 function Uploading() {
  var UserProfile = document.getElementById("UserProfile").files.length;
  if (UserProfile === 0) {

  } else {
   document.getElementById("UploadingText").innerHTML = "<i class='fa fa-spinner fa-spin'></i> Uploading...";
  }
 }

 function QuizShow($Data) {
  var LivedData = document.getElementById("LivedData");
  var ClosedData = document.getElementById("ClosedData");
  var QuizView = document.getElementById("QuizView");
  var ViewAll = document.getElementById("ViewAll");
  if ($Data == "Live") {
   LivedData.style.display = "block";
   ClosedData.style.display = "none";
   QuizView.innerHTML = "<i class='fa fa-spinner fa-spin text-success font-18'></i> Active Quizs";
   ViewAll.style.display = "block";
  } else if ($Data == "Closed") {
   LivedData.style.display = "none";
   ClosedData.style.display = "block";
   QuizView.innerHTML = "<i class='fa fa-lock text-danger font-18'></i> Closed Quizs";
   ViewAll.style.display = "block";
  } else {
   LivedData.style.display = "block";
   ClosedData.style.display = "block";
   QuizView.innerHTML = "Search Quiz";
   ViewAll.style.display = "none";
  }
 }