<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/updatestyle.css">
<style>
  .update{
    text-align:center;
  }
</style>
</head>


<body>
<div class="update">
<h2>Admin update price</h2>

<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Update</button>

<form action="index.php" method="post">
<button type="submit" class="cancelbtn">Cancel</button>
</div>
</form>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="updatephpdatabase.php" method="post">
    
    <div class="container">
      <label for="uname"><b>Date</b></label>
      <input type="date" placeholder="Date" name="date" required>

      <label for="uname"><b>Name</b></label>
      <input type="text" placeholder="Item name" name="uname" required>

      <label for="psw"><b>Minimum price</b></label>
      <input type="number" placeholder="Minimum price" name="psw1" required>
      
      <label for="psw"><b>Maximum price</b></label>
      <input type="number" placeholder="Maximum price" name="psw2" required>
      
      <button type="submit" name="submit">Upadate</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    
    </div>
  </form>
</div>

<!-- <script>
function myFunction() {
  alert("Update successfully!");
}
</script> -->

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



</body>
</html>