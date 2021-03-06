<!-- Navbar --> 
<?php
$active = (isset($_GET["content"])) ? $_GET["content"] : "";
?>
<nav class="navbar navbar-expand-md navbar-light bg-dark"> <img src="/img/Icon-76.png" width="100" height="75">
  <a class="navbar-brand" href="./index.php?content=home" style="color: white; ">George de wallen</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <?php
        if (isset($_SESSION["em"])) {
          switch ($_SESSION["userrole"]) {
            case 'docent':
              echo '<li class="nav-item '; echo (in_array($active, ["d-home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./docent-home.php"style="color: white; ">control panel <span class="sr-only">(current)</span></a>
                    </li>';
            break;
            case 'eigenaar':
              echo '<li class="nav-item '; echo (in_array($active, ["e-home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./eigenaar/owner-home" style="color: white; ">control panel <span class="sr-only">(current)</span></a>
                    </li>';
            break;
            case 'student':
              echo '<li class="nav-item '; echo (in_array($active, ["s-home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./student.php" style="color: white; ">control panel <span class="sr-only">(current)</span></a>
                    </li>';
            break;
            case 'begeleider':
              echo '<li class="nav-item '; echo (in_array($active, ["b-home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./begeleider/b-home.php" style="color: white; ">control panel <span class="sr-only">(current)</span></a>
                    </li>';
            break;
            default:
              echo '<li class="nav-item '; echo (in_array($active, ["home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=home" style="color: white; ">control panel <span class="sr-only">(current)</span></a>
                    </li>';
            break;

          }
        } else {
          echo '<li class="nav-item '; echo (in_array($active, ["home", ""])) ? "active" : ""; echo '">
                  <a class="nav-link" href="./index.php?content=home" style="color: white; ">home <span class="sr-only">(current)</span></a>
                </li>';
        }
      ?> 
      <li class="nav-item <?php echo ($active == "reservation") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=reservation" style="color: white; ">Reservation</a>
      </li>
      <li class="nav-item <?php echo ($active == "menu") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=menu"style="color: white; ">Our menu</a>
      </li>
      <li class="nav-item <?php echo ($active == "contact") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=contact"style="color: white; ">Contact</a>
      </li>
      <li class="nav-item <?php echo ($active == "about-us") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=about-us"style="color: white; ">About us </a>  
      </li>
      <li class="nav-item <?php echo ($active == "bookingform") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=bookingform"style="color: white; ">Book event</a>
      </li>
      <li class="nav-item <?php echo ($active == "gallery") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=gallery"style="color: white; ">Gallery</a>
      </li>
      <li class="nav-item <?php echo ($active == "careerpage") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=careerpage"style="color: white; ">Careers</a>
      </li>
      <li class="nav-item <?php echo ($active == "corona") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=corona"style="color: white; ">Corona</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <?php 
        if (isset($_SESSION["id"])) {
          switch($_SESSION["userrole"]) {
            case 'admin':
              echo '<li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle '; echo (in_array($active, ["a-users", "a-reset_password"])) ? "active" : ""; echo '" href="#" id="navbarDropdownMenuLinkRight" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        admin workbench
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkRight">
                        <a class="dropdown-item '; echo ($active == "a-users") ? "active" : ""; echo '" href="./index.php?content=a-users">users</a>
                        <a class="dropdown-item '; echo ($active == "a-reset_password") ? "active" : ""; echo '" href="./index.php?content=a-reset_password">reset password</a>
                      </div>
                    </li>';
            break;
            case 'root':
              echo '<li class="nav-item '; echo ($active == "r-rootpage") ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=r-rootpage">rootpage</a>
                    </li>';

            break;
            case 'moderator':
              // Maak hier de hyperlinks voor de gebruikersrol moderator

            break;
            case 'customer':
              // Maak hier de hyperlinks voor de gebruikersrol customer

            break;
            default:
            break;
          }
          echo '<li class="nav-item '; echo ($active == "logout") ? "active" : ""; echo '">
                  <a class="nav-link" href="./index.php?content=logout">uitloggen</a>
                </li>';
        } else {
          echo '<li class="nav-item '; echo ($active == "register")? "active" : ""; echo '">
                  <a class="nav-link" href="./index.php?content=register" style="color: white; ">register</a>
                </li>
                <li class="nav-item '; echo ($active == "login") ? "active" : ""; echo '">
                  <a class="nav-link" href="./index.php?content=login" style="color: white; ">log in</a>
                </li>';
        }
      ?>    
    </ul>
  </div>
</nav>
