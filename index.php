<?php include "inc/header.php" ?>
<?php include "inc/navigation.php" ?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="page-header">
                Page Heading
                <small>Secondary Text</small>
            </h1>

            <!-- First Blog Post -->
            <h2>
                <a href="#">Blog Post Title</a>
            </h2>
            <p class="lead">
                by <a href="index.php">Start Bootstrap</a>
            </p>
            <p><span class="fa fa-clock"></span> Posted on August 28, 2013 at 10:00 PM</p>
            <hr>
            <img class="img-fluid" src="http://placehold.it/700x300" alt="">
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus
                inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum
                officiis rerum.</p>
            <a class="btn btn-primary" href="#">Read More <span class="fa fa-angle-right"></span></a>

            <hr>


            <!-- Pager -->
            <ul class="">
                <li class="btn  btn-outline-primary">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="btn float-md-right btn-outline-primary">
                    <a href="#">Newer &rarr;</a>
                </li>
            </ul>

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <?php include "inc/sidebar.php" ?>
            <!-- Blog Categories Well -->
            <div class="card bg-light mt-4">
                <div class="card-header">
                    <h4>Blog Categories</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>

            <!-- Side Widget Well -->
            <div class="card bg-light mt-4">
                <div class="card-header">
                    <h4>Side Widget Well</h4>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci
                        accusamus
                        laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>
            </div>

        </div>

    </div>
    <!-- /.row -->


<?php include "inc/footer.php" ?>
