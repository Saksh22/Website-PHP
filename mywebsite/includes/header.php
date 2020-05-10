<header>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-inverse fixed-top">
                <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                            
                            <?php
                                $sel_cat="SELECT * FROM category";
                                $run_cat=mysqli_query($conn,$sel_cat);
                                while($rows=mysqli_fetch_assoc($run_cat)){

                                    if(isset($_GET['c_name'])){
                                        if($_GET['c_name'] == $rows['c_name']){
                                            $class='active';

                                        }else{
                                            $class='';
                                        }
                                    }else{
                                        $class='';
                                    }

                                    if($rows['c_name'] == 'home'){
                                        if($_SERVER['PHP_SELF'] == '/mywebsite/homepage.php'){
                                            echo '<li class="nav-item active">
                                            <a class="nav-link" href="homepage.php">'.ucfirst($rows['c_name']).'</a></li>';
                                        }else{
                                            echo '<li class="nav-item">
                                            <a class="nav-link" href="homepage.php">'.ucfirst($rows['c_name']).'</a></li>';
                                        }
                                    }else{

                                        echo '<li class="nav-item '.$class.'">
                                    <a class="nav-link" href="menu.php?c_name='.$rows['c_name'].'">'.ucfirst($rows['c_name']).'</a></li>';


                                    }

                                    

                                }
                            ?>
                           
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Users
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="registration.php">Register</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            
                            </ul>
                            <form class="form-inline my-2 my-lg-0" action="search.php" role="form">
                            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" name="search_submit" type="submit">Search</button>
                            </form>
                        </div>
                </nav>
            </header>