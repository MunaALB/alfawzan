<?php
include 'global_functions/functions.php';
include 'includes/db_connection.php';
ob_start();
session_start();
if (!$_SESSION['isLogged']) {
    header("location:login.php");
    die();
}
include 'includes/header.php';
$categories = getAllFrom('*', 'categories', null, null, 'name', 'desc');
$projects = getAllFromWithJoin('projects.ID,projects.title,projects.description,projects.image,categories.name', 'projects', null, null, 'title', 'desc', 'categories', 'categories.id', 'projects.category_id');

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
                        <h2> عرض كل الاعمال </h2>
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
<section id="projects" class="projects-grid projects-3col">
    <div class="container">

        <!-- .row end -->
        <div class="row">

            <!-- Projects Filter
					============================================= -->
            <div class="col-xs-12 col-sm-12 col-md-12 projects-filter">
                <ul class="list-inline">
                    <li>
                        <a class="active-filter" href="#" data-filter="*">كل المشاريع</a>
                    </li>
                    <?php

                    foreach ($categories as $category) {
                    ?>

                        <li>
                            <a href="#" data-filter=".<?php echo $category['Name']; ?>"><?php echo $category['Name']; ?></a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <!-- .projects-filter end -->
        </div>
        <!-- .row end -->

        <!-- Projects Item
			============================================= -->
        <div id="projects-all" class="row">

            <?php

            foreach ($projects as $project) {
                echo '<div class="col-xs-12 col-sm-6 col-md-4 project-item '.$project['name'].'">
            <div class="project-img">
                    <img class="" src="../assets/images/' . $project["image"] .  '" alt="project" />
                    <div class="project-hover">
                    <div class="project-meta">
                        <h6>' . $project['title'] . '</h6>
                        <h4> 
                                <a href="#">' . $project['name'] . '</a>
                            </h4>
                    </div>
                  <div class="project-zoom">
                            <a class="img-popup" href="../assets/images/' . $project['image'] . '" title="' . $project['description'] . '"><i class="fa fa-search control"></i></a>
                            <a  title="edit-project" href="edit.php?id=' . $project['ID'] . '"><i class="fa fa-edit control"></i></a>
                            <a  title="delete-project" id="delete" data-id="' . $project['ID'] . '" ><i class="fa fa-trash control"></i></a>
                        </div>
                    </div> 
                </div>
            </div>
                
                ';
            }
            ?>

            <!-- .project-item end -->

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