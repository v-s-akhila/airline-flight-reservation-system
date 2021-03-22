<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
}
</style>
</head>
<body>



<div class="content">

<a href="http://127.0.0.1:8000">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="/edit">Edit/View</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="/singleuser">View Pearsonal Details</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="/search">Booking</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="/logout">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;


</div>

</script>

</body>
</html>
