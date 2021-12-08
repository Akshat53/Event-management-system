<!DOCTYPE html>
<html lang="en">

<?php
include('plugins/session.php');
include('plugins/head.php');

if(isset($_SESSION['role']) && $_SESSION['role']!='admin'){
    header('location: 404.php');
}
?>

<body class="">
<div class="wrapper ">
        <?php
        include('plugins/header.php')
        ?>

            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header" >
                              <center>
                              <img src="../images/n.gif"></center>
                                <h5 class="title" style="text-align: center;">Welcom To Abhiruchi dashboard</h5>

                            </div>
                            
                        </div>
                        <div class="container">
                             <iframe src="http://Abhiruchi.club" title="Abhiruchi Club" width="100%" height="500px">
</iframe>
                               </div>
                    </div>
                </div>
            </div>
        </div>
      
        
<?php
include('plugins/footer.php');
?>
</body>

</html>