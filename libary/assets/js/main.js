// log in and registration form
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});



// book cover previewer
function showPreview(event) {
    if (event.target.files.length > 0) {
      var src = URL.createObjectURL(event.target.files[0]);
      var previewer = document.getElementById("previewer");
      previewer.src = src;
      previewer.style.display = "block";
    }
  }

  
// greetings 
// greetings
function clock() {
  var date = new Date();
  var hours = date.getHours();
  var min = date.getMinutes();
  var sec = date.getSeconds();
  var midday;
  hours = updateTime(hours);
  min = updateTime(min);
  sec = updateTime(sec);

  midday = (hours >= 12) ? "PM" : "AM";

  document.getElementById("clock").innerHTML = hours + ":" + min + ":" + sec + ":" + midday;

  var time = setTimeout(function () {
      clock()
  }, 1000);

  if (hours < 12) {
      var greeting = "Good morning " + name
  }

  if (hours >= 12 && hours < 18) {
      var greeting = "Good afternoon" + name
  }

  if (hours >= 18 && hours <= 24) {
      var greeting = "Good evening"
  }
  document.getElementById("greeting").innerHTML = greeting;
}
function updateTime(k) {
  if (k < 10) {
      return "0" + k;
  } else {
      return k;
  }
}
clock()

