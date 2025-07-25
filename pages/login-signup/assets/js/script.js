document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar");
    const navLinks = document.querySelectorAll(".nav-link");
  
    window.addEventListener("scroll", function () {
      if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
      } else {
        navbar.classList.remove("scrolled");
      }
    });
  });
  

document.addEventListener("DOMContentLoaded", () => {
  const signInForm = document.getElementById("sign-in-form");
  const signUpForm = document.getElementById("sign-up-form");
  const showSignup = document.getElementById("show-signup");
  const showSignin = document.getElementById("show-signin");

  showSignup.addEventListener("click", (e) => {
    e.preventDefault();
    signInForm.classList.add("d-none");
    signUpForm.classList.remove("d-none");
  });

  showSignin.addEventListener("click", (e) => {
    e.preventDefault();
    signUpForm.classList.add("d-none");
    signInForm.classList.remove("d-none");
  });

function validateform(){
		var user=document.myform.user.value;
		var password=document.myform.password.value;

		if (user==null || user==""){
			alert("Username can't be blank");
			return false;
		}else
		if (password.length<8) {
			alert("Password must be at least 8 characters long.");
			return false;
		}

		var x=document.myform.email.value;
		var atposition=x.indexOf("@");
		var dotposition=x.lastIndexOf(".");

		if (atposition<1 ||dotposition<atposition+2 || dotposition+2>=x.length) {
			alert("Please enter a valid email address");
			return false;
		}
	}

function login(){
	var user=document.form.user.value;
	var password=document.form.password.value;

	if (user==null || user=="") {
		alert("Either the username or password you entered is incorrect.\nPlease try again.");
		form.username.focus();
	}else{
		self.location.href = page;
	}
}})