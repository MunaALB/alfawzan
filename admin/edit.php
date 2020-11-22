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
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $project = getAllFrom('*', 'projects', 'WHERE id=' . $id, null, 'title', 'desc');
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
                            <h2>تعديل على الاعمال</h2>
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
                            <p class="mb-0">تعديل</p>
                            <h2>تعديل العمل</h2>
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
                                <form id="edit_form" action="request_functions/edit.php" method="post" enctype="multipart/form-data">
                                 <input type="text" value="<?php echo $project[0]['ID'];  ?>"  name="id" id="id"hidden required />
                                    <div class="col-md-6">
                                        <input type="text" value="<?php echo $project[0]['title'];  ?>" class="form-control mb-30" name="title" id="title" placeholder="العنوان" required />
                                    </div>
                                    <div class="col-md-6">

                                        <div class="images">
                                        <input type="text" name="old_image" hidden value="<?php echo $project[0]['image'] ?>">
                                            <div class="pic">
                                                اضف صورة للعمل
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <select class="form-control" name="category" id="category">

                                            <option disabled> اختر التصنيف</option>

                                            <?php
                                            foreach ($categories as $category) {
                                                echo '<option value="' . $category['ID'] . '">' . $category["Name"] . '</option>';

                                                if ($category['ID'] == $project[0]['category_id']) {
                                                    echo '<option selected value="' . $category['ID'] . '">' . $category["Name"] . '</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="form-control mb-30" name="description" id="description" rows="2">
                                            <?php echo $project[0]['description'] ?>
                                        </textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" id="submit-message" class="btn btn-primary btn-black btn-block">تعديل</button>
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
        <?php } ?>
        <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>

    <?php
    include 'includes/footer.php';
    ?>
    </body>

    </html>