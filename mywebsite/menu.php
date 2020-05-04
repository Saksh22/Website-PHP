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
            <header>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-inverse fixed-top">
                <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <?php
                                $sel_cat="SELECT * FROM category ";
                                $run_cat=mysqli_query($conn,$sel_cat);
                                while($rows=mysqli_fetch_assoc($run_cat)){

                                    if($_GET['c_name'] == $rows['c_name']){

                                        $class='active';
                                    }
                                    else{

                                        $class='';
                                    }


                                    echo '<li class="nav-item '.$class.'" >
                                    <a class="nav-link" href="menu.php?c_name='.$rows['c_name'].'">'.ucfirst($rows['c_name']).'</a></li>';

                                }
                            ?>
                           
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                </nav>
            </header>
            
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

                    <aside class="col-lg-3">
                    <form style="padding-bottom: 20px;">
                    <div class="card" >
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

                            echo '<a href="notice.php?post_id='.$rows['id'].'" class="list-group-item">
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
            <footer class="navbar navbar-dark bg-dark navbar-default static-bottom">
            <div class="container-fluid">
            <p class="navbar-text pull-left">Created by Sakshi Khochare</p>
            <a href="#" class="btn btn-success pull-right">Contact</a>
            
            </div>

            </footer>
        </body>

</html>