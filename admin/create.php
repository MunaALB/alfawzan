<?php

include 'global_functions/functions.php';
include './includes/db_connection.php';
ob_start(); // Output Buffering Start
session_start();
if (!$_SESSION['isLogged']) {
    header("location:login.php");
    die();
}
include 'includes/header.php';
$categories = getAllFrom('*', 'categories', null, null, 'name', 'desc');


?>
<section class="bg-overlay bg-overlay-gradient pb-0">
    <div class="bg-section">
        <img src="../assets/images/page-title/8.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center">
                    <div class="title-bg">
                        <h2>اضافة عمل جديد</h2>
                    </div>

                </div>
                <!-- .page-title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<section id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-4">
                    <div class="heading-bg heading-right">
                        <p class="mb-0">اضافة الاعمال</p>
                        <h2>اضف اعمالك الجديدة</h2>
                    </div>
                </div>
                <!-- .heading end -->
            </div>
            <!-- .col-md-12 end -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">


                    <!-- .col-md-4 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="row">
                            <form id="create_form" action="request_functions/create.php" method="post" enctype="multipart/form-data">
                                <div class="col-md-6">
                                    <input type="text" class="form-control mb-30" name="title" id="title" placeholder="العنوان" required />
                                </div>
                                <div class="col-md-6">
                                    <div class="images">
                                        <div class="pic">
                                            اضف صورة للعمل
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <select class="form-control" name="category" id="category">
                                        <option selected disabled> اختر التصنيف</option>
                                        <?php
                                        foreach ($categories as $category) {
                                            echo '<option value="' . $category['ID'] . '">' . $category["Name"] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control mb-30" name="description" id="description" rows="2" placeholder="الوصف" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" id="submit-message" class="btn btn-primary btn-black btn-block">اضافة</button>
                                </div>
                            </form>
                            <div id="result"></div>
                        </div>
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<?php
include 'includes/footer.php';
?>
</body>

</html>