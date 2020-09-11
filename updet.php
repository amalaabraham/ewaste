<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>

.contain
{
    display: inline-block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 15px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.contain input 
{
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 100%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #b2beb5;
}

/* When the radio button is checked, add a blue background */
.contain input:checked ~ .checkmark {
    background-color: black;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.contain input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.contain .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 30%;
	background: white;
}


/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}
.custom-select select {
  display: none; /*hide original SELECT element:*/
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: black transparent transparent transparent;
}
/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: black transparent #fff transparent;
  top: 7px;
}
/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: black;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}
/*style items (options):*/
.select-items {
  position: absolute;
  background-color: #ccc;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}
/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
	</style>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>	
	<form action="ten.php" method="post">
		<div class="imgcontainer">
    	<img src="one.png" width="20px" class="new">
  		</div>
		<div class="container">
		<!-- <br/>
		<br/> -->
	    <label for="uname"><b>Username</b></label>
	    <input type="text" placeholder="Enter New Username" id="uname" name="username"  required>

	    <label for="psw"><b>Password</b></label>
	    <input type="password" placeholder="Enter New Password" id="password" name="password" required>

		<label for="firstname"><b>Firstname</b></label>
		<input type="text" name="firstname" placeholder="Enter New Firstname" id="firstname" required>
		
		<label for="lastname"><b>Lastname</b></label>
		<input type="text" name="lastname" placeholder="Enter Lastname" id="lastname" required>
		
		<label for="email"><b>Email ID</b></label>
		<input type="email" name="email" placeholder="Enter Email" id="email" required>
		
		<label for="pno"><b>Phone Number</b></label>
		<input type="tel" name="pno" placeholder="Enter Phone Number" id="pno" required>
		
		<label for="pno"><b>Aadhar Number</b></label>
		<input type="text" name="ano" placeholder="Enter Aadhar Number" id="ano" required>

		<label for="pno"><b>PAN Number</b></label>
		<input type="text" name="pan" placeholder="Enter PAN Number" id="pan" required>

		<label for="pno"><b>GSTIN</b></label>
		<input type="text" name="gst" placeholder="Enter GSTIN" id="gst" required>

		<label for="gen"><b>Gender</b></label>
		<br/>
		<br/>
		<label class="contain">Male
		<input type="radio" checked="checked" name="gender" value="Male">
		<span class="checkmark"></span>
		</label>
		<label class="contain">Female
		<input type="radio" name="gender" value="Female">
		<span class="checkmark"></span>

		</label>
		<br/>
		<br/>

		<label for="pol"><b>Type Of Policy</b></label>
		<div class="custom-select" style="width:200px;">
		<select name="pol">
			<option value="Health Insurance">Health Insurance</option>
			<option value="Vehicle Insurance">Vehicle Insurance</option>
			<option value="Both">Both</option>
		</select>
		</div>

		<script>
		var x, i, j, selElmnt, a, b, c;
		/*look for any elements with the class "custom-select":*/
		x = document.getElementsByClassName("custom-select");
		for (i = 0; i < x.length; i++) {
		  selElmnt = x[i].getElementsByTagName("select")[0];
		  /*for each element, create a new DIV that will act as the selected item:*/
		  a = document.createElement("DIV");
		  a.setAttribute("class", "select-selected");
		  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
		  x[i].appendChild(a);
		  /*for each element, create a new DIV that will contain the option list:*/
		  b = document.createElement("DIV");
		  b.setAttribute("class", "select-items select-hide");
		  for (j = 0; j < selElmnt.length; j++) {
		    /*for each option in the original select element,
		    create a new DIV that will act as an option item:*/
		    c = document.createElement("DIV");
		    c.innerHTML = selElmnt.options[j].innerHTML;
		    c.addEventListener("click", function(e) {
		        /*when an item is clicked, update the original select box,
		        and the selected item:*/
		        var y, i, k, s, h;
		        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
		        h = this.parentNode.previousSibling;
		        for (i = 0; i < s.length; i++) {
		          if (s.options[i].innerHTML == this.innerHTML) {
		            s.selectedIndex = i;
		            h.innerHTML = this.innerHTML;
		            y = this.parentNode.getElementsByClassName("same-as-selected");
		            for (k = 0; k < y.length; k++) {
		              y[k].removeAttribute("class");
		            }
		            this.setAttribute("class", "same-as-selected");
		            break;
		          }
		        }
		        h.click();
		    });
		    b.appendChild(c);
		  }
		  x[i].appendChild(b);
		  a.addEventListener("click", function(e) {
		      /*when the select box is clicked, close any other select boxes,
		      and open/close the current select box:*/
		      e.stopPropagation();
		      closeAllSelect(this);
		      this.nextSibling.classList.toggle("select-hide");
		      this.classList.toggle("select-arrow-active");
		    });
		}
		function closeAllSelect(elmnt) {
		  /*a function that will close all select boxes in the document,
		  except the current select box:*/
		  var x, y, i, arrNo = [];
		  x = document.getElementsByClassName("select-items");
		  y = document.getElementsByClassName("select-selected");
		  for (i = 0; i < y.length; i++) {
		    if (elmnt == y[i]) {
		      arrNo.push(i)
		    } else {
		      y[i].classList.remove("select-arrow-active");
		    }
		  }
		  for (i = 0; i < x.length; i++) {
		    if (arrNo.indexOf(i)) {
		      x[i].classList.add("select-hide");
		    }
		  }
		}
		/*if the user clicks anywhere outside the select box,
		then close all select boxes:*/
		document.addEventListener("click", closeAllSelect);
		</script>
		<br/>
		<br/>
		<br/>
		<br/>
		<button type="submit">Sign Up</button>
	</form>
</body>
</html>