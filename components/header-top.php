<?php
session_start();

// if (isset($_SESSION['username'])) {
//     $user_id = $_SESSION['username'];
//     echo "User ID: $user_id";
//     echo "<script>alert('User ID: $user_id')</script>";
// } else {
//     echo "User ID not set in session.";
// }
?>
<div class="impx-top-header style2">
    <div class="uk-container uk-container-expand">

        <div class="uk-grid">
            <!-- header phone -->
            <div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                <div class="impx-top-phone">
                    <p><i class="fa fa-phone"></i> Phone : +62 123456789</p>
                </div>
            </div><!-- header phone end-->
            <!-- header social media -->
            <div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                <div class="impx-top-social">
                    <ul>
                        <?php
                        if (isset($_SESSION["username"])) {
                            ?>

                            <li class="uk-parent uk-active">
                                <a href="logout.php" class="uk-navbar-nav-subtitle">
                                    <div style="font-size: 2rem;color: yellow">
                                        Welcome
                                        <?php echo $_SESSION["username"] ?>
                                    </div>

                                </a>

                            </li>
                            <?php
                        } else {
                            ?>
                            <li>
                                <button class="btn btn-dark btn-lg btn-block" type="button"
                                    onclick="location.href='signup.php'">Register</button>
                                <button class="btn btn-dark btn-lg btn-block" type="button"
                                    onclick="location.href='login.php'">Login</button>
                            </li>

                            <?php
                        }
                        ?>

                    </ul>
                </div>
            </div><!-- header social media end -->
        </div>

    </div>
</div>