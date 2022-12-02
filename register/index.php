<?php

session_start();
include ('header.php');
include ('helper.php');

$user = array();


if(isset($_SESSION['userID'])){
    require ('mysqli_connect.php');
    $user = get_user_info($con, $_SESSION['userID']);
}

?>

<section id="main-site">
    <div class="container py-1 pb-0">
        <div class="row">
            <div class="col-2 shadow">
                <div class="upload-profile-image d-flex justify-content-center pb-1">
                    <div class="text-center">
                        <img class="img rounded-circle" style="width: 100px; height: 100px;" src="<?php echo isset($user['profileImage']) ? $user['profileImage'] : './assets/profile/beard.png'; ?>" alt="">
                        <h4 class="">
                            <?php
                            if(isset($user['firstName'])){
                                printf('%s %s', $user['firstName'], $user['lastName'] );
                            }
                            ?>
                        </h4>
                    </div>
                </div>

          
            </div>
        </div>
    </div>
</section>

<?php
include "footer.php";
?>
