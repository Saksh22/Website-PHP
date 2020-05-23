<?php include 'includes/db.php';?>


<html>
        <head>
                <title>My First Website</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                <script src="https://cdn.tiny.cloud/1/27z59090yqycp7c2jpaicinq4o62usl0bt5so2oasw96utiz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
                <script>tinymce.init({selector:'textarea#description'});</script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>
        <body>
            <?php include 'includes/header.php';?>
            <div style="width:60px; height:60px;"></div>
            <div class="row">
            <?php include 'includes/sidebar.php';?>
            <div class="col-lg-8">
            
            <div class="container-fluid" style="padding-top:70px;">
            <div class="page-header"><h3> My Profile</h3></div>
            <div class="card mb-5 bg-info text-white" >
                <div class="row no-gutters">
                    <div class="col-md-4" style="padding:10px;">
                    <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" class="card-img" >
                    </div>
                    <div class="col-md-8">
                    <div class="card-body" style="padding-top:50px;">
                        <h1 class="card-title">Sakshi Khochare</h1>
                        <p class="card-text"><i class="fa fa-envelope"></i> Email: sakshi.khochare@gmail.com.</p>
                        <p class="card-text">Roll no: 8402</p>
                        <p class="card-text">Branch: Information Technology</p>
                        <p class="card-text">Year: Third Year</p>
                        <p class="card-text"><i class="fa fa-phone-square"></i> Contact no: 9167374948</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            
            </div>
                

            </div>
            </div>
            
            
            

        </body>
</html>