<?php include 'includes/db.php';?>
<html>
        
            <head>
                <title>My First Website</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            </head>
        <body>
            
        <?php include 'includes/header.php';?>
            <div class="container-fluid">
                <h1 style="padding-top: 60px;">Updates</h1>
                <article class="row">
                    <section class="card col-lg-9">
                    <?php

                        $sel_sql="SELECT * FROM posts WHERE category='$_GET[c_name]'";
                        $run_sql=mysqli_query($conn,$sel_sql);
                        while($rows=mysqli_fetch_assoc($run_sql)){
                            echo '<div class="card" style="padding-top: 20px;">
                                    <div class="card-header">
                                        '.ucfirst($rows['category']).'
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">'.$rows['title'].'</h5>
                                        <p class="card-text">'.substr($rows['description'],0,200).'....</p>
                                        <a href="notice.php?post_id='.$rows['id'].'" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>';
                        }
                    
                    
                    ?>
                        
                            
                            
                    

                    </section>
                    <?php include 'includes/sidebar.php';?>
                    
                    
                </article>
            </div>
            <?php include 'includes/footer.php';?>
        </body>

</html>