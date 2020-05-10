<?php include 'includes/db.php';

    if(isset($_POST['submit_contact'])){
        $date=date('Y-m-d h:i:s');
        $insert_sql="INSERT INTO comments  (name, email, subject, comment, date) VALUES ('$_POST[name])','$_POST[email])','$_POST[subject])','$_POST[comment])','$date')";
        $run_sql=mysqli_query($conn,$insert_sql);

        
    }




?>
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
        
                <article class="row">
                    <section class="card col-lg-9">
                        <div class="jumbotron" style="padding-top: 100px;">
                            <h2>Contact Us Form</h2>
                        </div>
                        <form class="form-horizontal" action="contact.php" method="post" role="form">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name" placeholder="Insert your name" id="name"></input>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email Address</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="email" placeholder="Insert your email" id="email"></input>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject" class="col-sm-2 control-label">Subject</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="subject" placeholder="Insert subject" id="subject"></input>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="comment" class="col-sm-2 control-label">Comments</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" rows="10" name="comment" placeholder="Type here" style="resize:none;"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-8">
                                <button type="submit" class="btn btn-success" name="submit_contact">Submit</button>
                                </div>
                            </div>
                            
                        </form>
                    </section>

                    <aside class="col-lg-3">
                    <form style="padding-bottom: 20px;">
                    <div class="card" style="padding-top: 60px;" >
                                    <div class="card-header">
                                        Login
                                    </div>
                                    <div class="card-body">
                                    
                                    <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                    </div>
                    <h2 style="padding-top: 20px;">Upcoming Events</h2>
                    <div class="list-group" >
                    <?php

                                $sel_side="SELECT * FROM posts";
                                $run_side=mysqli_query($conn,$sel_side);
                                while($rows=mysqli_fetch_assoc($run_side)){

                                    if(isset($_GET['post_id'])){
                                        if($_GET['post_id'] == $rows['id']){

                                            $class='active';
                                        }else{
                                            $class='';
                                        }

                                    }else{
                                        $class='';
                                    }
                                    echo '<a href="notice.php?post_id='.$rows['id'].'" class="list-group-item '.$class.'">
                                    <h4 class="list-group-item-heading">'.$rows['title'].'</h4>
                                    <p class="list-group-item-text">'.substr($rows['description'],0,100).'</p></a>
                                ';

}
?>
                            </div>
                    
                        </div>
                        
                        
                        
                    </form>
                    </aside>
                    
                    
                </article>
            </div>
            <?php include 'includes/footer.php';?>
        </body>

</html>