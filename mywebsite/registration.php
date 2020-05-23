<?php include 'includes/db.php';

    $match='';

    if(isset($_POST['submit_user'])){
        if($_POST['password'] == $_GET['con_password']){
            $date=date('Y-m-d h:i:s');
        $insert_sql="INSERT INTO users  (user_name,user_address, user_email,user_password,user_year,user_branch,user_contact,user_roll, date) VALUES ('$_POST[name])','$_POST[address])','$_POST[email])','$_POST[password])','$_POST[year])','$_POST[branch])','$_POST[contact])','$_POST[roll])','$date')";
        $run_sql=mysqli_query($conn,$insert_sql);
        }
        $match='<div class="alert alert-danger">Password does not match!!</div>';

        
    }
    else{

        $match='';


    
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
                            <h2>Registration Form</h2>
                        </div>
                        <?php echo $match;?>
                        <form class="form-horizontal" action="registration.php" method="post" role="form">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name*</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name" placeholder="Insert your name" id="name" required></input>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email Address*</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="email" placeholder="Insert your email" id="email" required></input>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-2 control-label">Password*</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="password" placeholder="Insert a Password" id="password" required></input>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="con_password" class="col-sm-2 control-label">Confirm Password*</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="con_password" placeholder="Re-Enter Password" id="con_password" required></input>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" rows="3" name="address" placeholder="Type here" style="resize:none;"></textarea>
                                </div>
                            </div>
                            <div class="form-group form-inline my-0 my-lg-0" style="padding-left:20px;">
                                <label for="address" class="col-sm-0 control-label">Year*</label>
                                <div class="col-sm-2">
                                <select class="form-control mr-sm-2" name="year" id="year" required>
                                <option value="">Select your year</option>
                                <option value="fy">First year</option>
                                <option value="sy">Second year</option>
                                <option value="ty">Third year</option>
                                <option value="be">Fourth year</option>
                                
                                
                                </select>
                                
                                
                                </div>
                                <label for="address" class="col-sm-1 control-label">Branch*</label>
                                <div class="col-sm-2">
                                <select class="form-control mr-sm-2" name="branch" id="branch" required>
                                <option value="">Select your branch</option>
                                <option value="comps">Computers</option>
                                <option value="it">IT</option>
                                <option value="elex">Electronics</option>
                                <option value="prod">Production</option>
                                
                                
                                </select>
                                
                                
                                </div>
                                
                            </div>
                            <div class="form-group" style="padding-top:20px;">
                                <label for="contact" class="col-sm-2 control-label">Contact Number</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="contact" placeholder="Enter contact number" id="contact"></input>
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="roll" class="col-sm-2 control-label">Roll Number*</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="roll" placeholder="Enter contact number" id="roll" required></input>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-8">
                                <button type="submit" class="btn btn-success" name="submit_user">Submit</button>
                                </div>
                            </div>

                            
                        </form>
                    </section>

                    
                    
                    <?php include 'includes/sidebar.php';?>
                    
                    
                    
                </article>
            </div>
            <?php include 'includes/footer.php';?>
        </body>

</html>