<?php
include("dbs/connect.php");
?>

<!doctype html>
<html lang="en">

<?php
include('plugins/head.php');
?>
<body>
  <?php
  include('plugins/header.php')
  ?>

<footer class="container-fluid">
  <div class="container">
    <br>
    <br>
    <div class="row">
      <div class="col-md-3 " data-wow-delay=".25s">
       
       
      </div>
      <div class="col-md-6 footer2 wow bounceInUp" data-wow-delay=".25s" id="contact">
        <div class="form-box">
          <h4>CONTACT US</h4>
          <table class="table table-responsive d-table">
            <tr>
              <form action="contacthandler.php" method="POST" onsubmit="myFunction()">
              <td><input type="text" class="form-control pl-0" placeholder="NAME"  name="name" required /></td>
              <td><input type="email" class="form-control pl-0" placeholder="EMAIL" name="email" required /></td>
            </tr>
            <tr>
              <td colspan="2"></td>
            </tr>
            <tr>
              <td colspan="2"><input type="text" class="form-control pl-0" placeholder="Enter Your Contact Number"  name="number" required /></td>
            </tr>
            <tr>
              <td colspan="2"><input type="text" class="form-control pl-0" placeholder="Enter Subject" name="subject" required /></td>
            </tr>
            <tr>
              <td colspan="2"></td>
            </tr>
            <tr>
              <td colspan="2"><input type="text" class="form-control pl-0" placeholder="MESSAGES" name="message" required /></td>
            </tr>
            <tr>
              <td colspan="2"></td>
            </tr>
            <tr>
              <td colspan="2" class="text-center pl-0"><button type="submit" class="btn btn-dark">SEND</button></td>
              </form>
            </tr>
             <script >
        function myFunction() {
          alert("Thank you for getting in touch! We appreciate you contacting us/ [Abhiruchi Team]. One of our colleagues will get back in touch with you soon!Have a great day!")
        }
      </script>

          </table>
        </div>
      </div>
      <div class="col-md-3 footer3 wow bounceInRight" data-wow-delay=".25s">
        
      </div>
    </div>
  </div>  
</footer>

<!--Carousel part2 end-->


<?php
include('plugins/footer.php');
?>
</body>
</html>