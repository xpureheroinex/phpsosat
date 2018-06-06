<?php
session_start();
  if (isset($_GET['action'])) {
    add();
}

function add()
{
    if (isset($_POST['amount'])) {
        foreach ($_POST['amount'] as $item => $amount)
            if ($amount != 0)
                if (isset($_SESSION[$item])) {
                    $_SESSION[$item] = $_SESSION[$item] + $amount;
                  }
                else
                    $_SESSION[$item] = $amount;
    }
}
?>

<?php
include("header.html");
if (isset($_COOKIE["user_name"])) {


    switch ($_GET['action']) {
        case "":
        case "homepage":
            include("homepage.html");
            break;
        case "cart":
            include("cart.phtml");
            case "order":
                include("order.phtml");
            break;
        case "shopping":
            include("shopping.phtml");
            break;
        case "pay":
                include("pay.phtml");
                break;
        case "logout":
                include("logout.php");
                break;
                case "profile":
          include("profile.phtml");
          break;
          }
        }
          else
      {
          include("login.phtml");
      }

        include("footer.html");
        ?>
