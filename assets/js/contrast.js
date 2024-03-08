// Get the root element
var r = document.querySelector(':root');

// Create a function for getting a variable value
function myFunction_get() {
  // Get the styles (properties and values) for the root
  var rs = getComputedStyle(r);
  // Alert the value of the --blue variable
  // alert("The value of --blue is: " + rs.getPropertyValue('--title-color'));
}

// Create a function for setting a variable value
function myFunction_set() {
  // Set the value of variable --blue to another value (in this case "lightblue")
  r.style.setProperty('--blue', 'lightblue');
}

// --title-color: #015E5B;
//   --highlight-color: #1acc8d;
//   --highlight-box: #007874;
//   --test1-background: rgba(115,194,191, .9);
//   --test2-background: #99CCCC;
//   --test3-background: #99CCFF;
//   --test4-background: rgba(0, 150, 161, 0.91);
//   --test5-background: rgba(15, 120, 127, 0.91);
//   --white: #fff;
//   --black: #000;