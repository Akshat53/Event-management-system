<?php

include('../dbs/connect.php');


$query=mysqli_query($connect,"select * from admin where username='".$_SESSION['username']."'");
while ($final=mysqli_fetch_array($query)) {
$role= $final['role']; 
}
if ($role=='admin') { ?>

   <!-- admin -->
<div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="index.php" class="simple-text logo-normal">
          ADMIN PANEL
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          
          <li>
            <a href="dashboard.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
            <div class="logo">
        <a href="panache.php" class="simple-text logo-normal">
          PANACHE
        </a>
      </div>
          <li>
            <a href="panache.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Panache</p>
            </a>
          </li>
          <li>
            <a href="panachelist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
            <div class="logo">
        <a href="stride.php" class="simple-text logo-normal">
          STRIDE
        </a>
      </div>
          <li>
          <a href="stride.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Stride</p>
            </a>
          </li>
          <li>
            <a href="stridelist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
            <div class="logo">
        <a href="itech.php" class="simple-text logo-normal">
          I-TECH
        </a>
      </div>
          <li>
          <a href="itech.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>I-Tech</p>
            </a>
          </li>
          <li>
            <a href="itechlist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
            <div class="logo">
        <a href="rockon.php" class="simple-text logo-normal">
         ROCK-ON
        </a>
      </div>
          <li>
          <a href="rockon.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Rock-On</p>
            </a>
          </li>
          <li>
            <a href="rockonlist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
            <div class="logo">
        <a href="images.php" class="simple-text logo-normal">
          IMAGES
        </a>
      </div>
          <li>
          <a href="images.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Images</p>
            </a>
          </li>
          <li>
            <a href="imageslist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
            <div class="logo">
        <a href="mfactor.php" class="simple-text logo-normal">
          M-FACTOR
        </a>
      </div>
          <li>
          <a href="mfactor.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>M-Factor</p>
            </a>
          </li>
          <li>
            <a href="mfactorlist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
            <div class="logo">
        <a href="responsible.php" class="simple-text logo-normal">
          The Responsible Invertian
        </a>
      </div>
          <li>
          	<a href="responsible.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>The Responsible Invertian</p>
            </a>
          </li>
          <li>
            <a href="responsiblelist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Admin Panel</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link" href="plugins/logout.php">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Sign Out</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <!-- stride -->


    <?php }elseif ($role=="stride") { ?>
      <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="index.php" class="simple-text logo-normal">
          ADMIN PANEL
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          
        
            <div class="logo">
        <a href="../stride.php" class="simple-text logo-normal">
stride
        </a>
      </div>
          <li>
          <a href="stride.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>POST EVENT</p>
            </a>
          </li>
          <li>
            <a href="stridelist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
            
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Welcome to Stride CLUB</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link" href="plugins/logout.php">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Sign Out</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <!-- panache -->


<?php }elseif ($role=="panache") { ?>
      <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="index.php" class="simple-text logo-normal">
          ADMIN PANEL
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          
        
            <div class="logo">
        <a href="../panache.php" class="simple-text logo-normal">
        Panache
        </a>
      </div>
          <li>
          <a href="panache.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>POST EVENT</p>
            </a>
          </li>
          <li>
            <a href="panachelist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
            
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Welcome to Panache CLUB</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link" href="plugins/logout.php">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Sign Out</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <!-- itech -->


    <?php }elseif ($role=="itech") { ?>
      <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="index.php" class="simple-text logo-normal">
          ADMIN PANEL
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          
        
            <div class="logo">
        <a href="../itech.php" class="simple-text logo-normal">
        I-tech
        </a>
      </div>
          <li>
          <a href="itech.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>post event</p>
            </a>
          </li>
          <li>
            <a href="itechlist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
            
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Welcome to I-TECH CLUB</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link" href="plugins/logout.php">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Sign Out</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <!-- rockon -->

        <?php }elseif ($role=="rockon") { ?>
          <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="index.php" class="simple-text logo-normal">
          ADMIN PANEL
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          
         
            <div class="logo">
        <a href="../rockon.php" class="simple-text logo-normal">
         ROCK-ON
        </a>
      </div>
          <li>
          <a href="rockon.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>post event</p>
            </a>
          </li>
          <li>
            <a href="rockonlist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
            
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Welcome to Rock-on Club</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link" href="plugins/logout.php">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Sign Out</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>



        <!-- images -->

          <?php }elseif ($role=="images") { ?>
      <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="index.php" class="simple-text logo-normal">
          ADMIN PANEL
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          
        
            <div class="logo">
        <a href="../images.php" class="simple-text logo-normal">
        images
        </a>
      </div>
          <li>
          <a href="images.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>post event</p>
            </a>
          </li>
          <li>
            <a href="imageslist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
            
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Welcome to IMAGES CLUB</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link" href="plugins/logout.php">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Sign Out</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>



      <!-- responsible -->

          <?php }elseif ($role=="responsible") { ?>
      <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="index.php" class="simple-text logo-normal">
          ADMIN PANEL
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          
        
            <div class="logo">
        <a href="../responsible.php" class="simple-text logo-normal">
        The Responsible Invertian
        </a>
      </div>
          <li>
          <a href="responsible.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>POST EVENT</p>
            </a>
          </li>
         
            
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Welcome to The Responsible Invertian CLUB</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link" href="plugins/logout.php">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Sign Out</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>



      <!-- mfactor -->

         

          <?php }elseif ($role=="mfactor") { ?>
      <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="index.php" class="simple-text logo-normal">
          ADMIN PANEL
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          
        
            <div class="logo">
        <a href="../mfactor.php" class="simple-text logo-normal">
        M-Factor
        </a>
      </div>
          <li>
          <a href="mfactor.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>POST EVENT</p>
            </a>
          </li>
          <li>
            <a href="mfactorlist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
            
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Welcome to M-Factor CLUB</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link" href="plugins/logout.php">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Sign Out</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

        <?php } ?>
      
    
      <!-- End Navbar -->
