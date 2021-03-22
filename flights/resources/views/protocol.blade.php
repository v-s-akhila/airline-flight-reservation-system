<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
background-image:url('../img/c3.jpg');
background-size:cover;
    
}
#myBtn
{
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: grey;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>
@include('nav')

<br><br><br><br><br><br><br><br><br>
    <span class="close">&times;</span>
    <p>COVID-19, caused by a novel virus, the coronavirus or SARS-CoV-2 is a respiratory illness that has become a pandemic. This virus was first detected in Wuhan, Hubei Province, China.
     Tens of thousands of people were infected with COVID-19 in many parts of China, as reported by the Chinese officials. 
     Cases of COVID-19 have since then been reported internationally, in many countries. 
     sustained community-level or person-to-person transmission is the cause of the spread of the infection. 
     The reason that COVID 19 is so dangerous is that it can spread through droplets or even stay in the air as an aerosol making it impossible to detect. 
     The other factor is that many carriers of the disease may be asymptomatic so they may not take the precautions necessary to not spread the disease</p>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
