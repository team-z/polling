<nav class="navbar navbar-default navbar-static-top animated zoomInDown" style="padding: 2%;box-shadow: 0px 2px 2px rgba(0,0,0,0.3);">
            <h1 style="letter-spacing: 5px;">Admin Panel</h1>
              <ul class="nav navbar-nav">
                   <li>
                   <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
  <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <?php echo $_SESSION['user']; ?>
    <span class="caret"></span>
  </a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#"><i class="fa fa-"></i>Details</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</li>
              </ul>
            </nav>