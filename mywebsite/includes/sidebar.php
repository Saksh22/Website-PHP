<aside class="col-lg-3" style="padding-top:70px;">
                    <form style="padding-bottom: 20px;"  role="form" action="accounts/login.php" method="post">
                    <div class="card" >
                                    <div class="card-header">
                                        Login
                                    </div>
                                    <div class="card-body">
                                    
                                    <div class="form-group">
                                            <label for="user_name">Email address</label>
                                            <input type="email" class="form-control" id="user_name" name="user_name"  placeholder="Enter email">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                        </div>
                                        
                                        <button type="submit" name="submit_login" class="btn btn-success">Submit</button>
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










