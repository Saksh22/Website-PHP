

<?php include 'includes/db.php';?>


<html>
        <head>
                <title>My First Website</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>

        <body>
            <?php include 'includes/header.php';?>
            <div style="width:60px; height:60px;"></div>
            <div class="row">
            <div class="col-lg-2" >
                <nav class="navbar bg-light">
                        <ul class="navbar-nav" style="height:2000px;">
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-cloud"></i> Dashboard</a></li>
                        <li class="nav-item" style="padding-top:1px;padding-bottom:10px;"><a class="navbar-link" href="#" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><i class="fa fa-plus-square"></i> New Items</a>
                            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav" id="new-items">
                                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-pencil"></i> New Post</a></li>
                                 <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-plus-square-o"></i> New Category</a></li>
                            </ul>
                            </div>
                            
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-list"></i> Posts</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-th-list"></i> Categories</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-user-circle"></i> Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-quote-left"></i> Comments</a></li>
                        </ul>

                </nav>
                
            </div>
            
            <div class="col-lg-10">
            <div class="row">
                <div class="col-md-3" style="padding-top:20px;">
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                
                    <div class="card-body">
                    <div class="row">
                        <div class="col-xs-3"><i class="fa fa-signal" style="font-size:5.5em;padding-left:20px;"></i></div>
                        <div class="col-xs-9 text-right">
                            <div style="font-size:3.5em; padding-left:20px;">20</div>
                            <div style="font-size:30px;">Posts</div> 

                        </div>
                        
                        
                    </div>
                   
                    </div>
                    <a href="#"><div class="card-footer text-white bg-transparent">View Posts</div></a>
                    
                    </div>
                        
                    </div>
                    <div class="col-md-3" style="padding-top:20px;">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                
                    <div class="card-body">
                    <div class="row">
                        <div class="col-xs-3"><i class="fa fa-list-ul" style="font-size:5.5em;padding-left:20px;"></i></div>
                        <div class="col-xs-9 text-right">
                            <div style="font-size:3.5em; padding-left:20px;">5</div>
                            <div style="font-size:30px;">Categories</div> 

                        </div>
                        
                        
                    </div>
                   
                    </div>
                    <a href="#"><div class="card-footer text-white bg-transparent">View Categories</div></a>
                    
                    </div>
                        
                    </div>
                    <div class="col-md-3" style="padding-top:20px;">
                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                
                    <div class="card-body">
                    <div class="row">
                        <div class="col-xs-3"><i class="fa fa-user-circle-o" style="font-size:5.5em;padding-left:20px;"></i></div>
                        <div class="col-xs-9 text-right">
                            <div style="font-size:3.5em; padding-left:20px;">10</div>
                            <div style="font-size:30px;">Users</div> 

                        </div>
                        
                        
                    </div>
                   
                    </div>
                    <a href="#"><div class="card-footer text-white bg-transparent">View Users</div></a>
                    
                    </div>
                        
                    </div>
                    <div class="col-md-3" style="padding-top:20px;">
                <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                
                    <div class="card-body">
                    <div class="row">
                        <div class="col-xs-3"><i class="fa fa-comments-o" style="font-size:5.5em;padding-left:20px;"></i></div>
                        <div class="col-xs-9 text-right">
                            <div style="font-size:3.5em; padding-left:20px;">16</div>
                            <div style="font-size:30px;">Comments</div> 

                        </div>
                        
                        
                    </div>
                   
                    </div>
                    <a href="#"><div class="card-footer text-white bg-transparent">View Comments</div></a>
                    
                    </div>
                        
                    </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                    <div class="col-lg-6" >
                        
                            <div class="panel panel-default" style="padding-top:50px;">
                            <div class="panel-heading"><h3>Users List</h3></div>
                            <div class="panel-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="text-white bg-primary">
                                        <th>Sr.No</th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        
                                    
                                    </tr>
                                    
                                </thead>
                            <tbody>
                                <tr class="table-info">
                                        <td>1</td>
                                        <td>Sakshi</td>
                                        <td>Mishi bb</td>
                                        
                                        
                                </tr>
                                <tr class="table-info">
                                        <td>2</td>
                                        <td>Surya</td>
                                        <td>BB chii</td>
                                        
                                        
                                </tr>
                                
                            </tbody>
                            
                            </table>
                            
                           
                            
                            </div>
            
                        </div>
                    </div> 
                    <div class="col-lg-6" >
                    <div class="col-md-8" style="padding-top:50px;">
                    <div class="page-header"><h3>Profile</h3></div>
                <div class="card text-white bg-primary mb-3">
                
                
                    <div class="card-body">
                    <div class="row">
                        <div class="col-xs-9 text-center">
                        <div class="avatar mx-auto white"><img class="rounded-circle img-responsive" src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"  width="30%"></div>
                            <div style="font-size:30px;">Sakshi Khochare</div>
                            <table class="table table-condensed text-white text-center">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>Sakshi Khochare</td>
                                
                                </tr>
                                <tr>
                                    <th>Roll no</th>
                                    <td>8402</td>
                                
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>sakshi.khochare@gmail.com</td>
                                
                                </tr>
                                <tr>
                                    <th>Branch</th>
                                    <td>I.T</td>
                                
                                </tr>
                                <tr>
                                    <th>Year</th>
                                    <td>Third Year</td>
                                
                                </tr>
                                <tr>
                                    <th>Contact No</th>
                                    <td>9167374936</td>
                                
                                </tr>
                            </tbody>
                            </table> 

                        </div>
                        
                        
                    </div>
                   
                    </div>
                    <a href="#"><div class="card-footer text-white bg-transparent">View Profile</div></a>
                    
                    </div>
                        
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-10" >
                        
                            <div class="panel panel-default" style="padding-top:50px;">
                            <div class="panel-heading"><h3>Latest Posts</h3></div>
                            <div class="panel-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="text-white bg-danger">
                                        <th>Sr.No</th>
                                        <th>Date</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                    
                                    </tr>
                                    
                                </thead>
                            <tbody>
                                <tr class="table-danger">
                                        <td>1</td>
                                        <td>22-06-2020</td>
                                        <td>Euphoria</td>
                                        <td>Hidndlkdkcmljdlkcdkcm</td>
                                        <td>Events</td>
                                        <td>Mishi bb</td>
                                        
                                </tr>
                                <tr class="table-danger">
                                        <td>2</td>
                                        <td>22-06-2020</td>
                                        <td>Euphoria</td>
                                        <td>Hidndlkdkcmljdlkcdkcm</td>
                                        <td>Events</td>
                                        <td>Mishi bb</td>
                                        
                                </tr>
                                
                            </tbody>
                            
                            </table>
                            
                           
                            
                            </div>
            
                        </div>
                    </div> 
                    <div class="col-lg-10" >
                        
                            <div class="panel panel-default" style="padding-top:50px;">
                            <div class="panel-heading"><h3>Latest Comments</h3></div>
                            <div class="panel-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="text-white bg-warning">
                                        <th>Sr.No</th>
                                        <th>Date</th>
                                        <th>Author</th>
                                        <th>Email</th>
                                        <th>Posts</th>
                                        <th>Comments</th>
                                    
                                    </tr>
                                    
                                </thead>
                            <tbody>
                                <tr class="table-warning">
                                        <td>1</td>
                                        <td>22-06-2020</td>
                                        <td>BB chii</td>
                                        <td>suryabarca8@gmail.com</td>
                                        <td>Euphoria</td>
                                        <td>I Love You</td>
                                        
                                </tr>
                                <tr class="table-warning">
                                        <td>1</td>
                                        <td>22-06-2020</td>
                                        <td>BB chii</td>
                                        <td>suryabarca8@gmail.com</td>
                                        <td>Euphoria</td>
                                        <td>I Love You</td>
                                        
                                </tr>
                                
                            </tbody>
                            
                            </table>
                            
                            </div>
                            
                            
            
                        </div>
                    </div> 
                    <!-- Latest post ends -->
                </div>
                
            </div>
            
            <footer></footer>
        
        </body>

</html>