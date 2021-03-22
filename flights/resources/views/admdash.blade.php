<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
  background-image:url('../img/cu.jpg');
   background-size:cover;
}
* {
  box-sizing: border-box;
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.content {
  position: fixed;
  bottom: 100;
  background: rgba(0, 0, 0, 0.2);
  color: white;
  width: 100%;
  padding: 0px;
  height:70px;
  text-align:right;
  font-size:19px;
}

#myBtn {
  background: rgba(0, 0, 0, 0.2);
  font-size: 18px;
  padding: 10px;
  border: none;
  cursor: pointer;
  text-align:right;
 color:white;
}
a
{

  text-decoration:none;
}
#myBtn:hover {
  background: #ddd;
  
}
a
{
color:white;
text-decoration:none;
}
</style>
</head>
<body>
<div class="content">
    <a href="/dash">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="/adminviews">View</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="/flight">Add Flight</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="/flightrecord">View Flight</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="/air">Add Airport</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="/show">View Airport</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="/noti">Add Notification</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="/shownoti">View Notification</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="/logout">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <h3>Welcome To Admin Page</h3>
    
</div>

</body>
</html>
