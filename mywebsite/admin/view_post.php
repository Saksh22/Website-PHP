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
            <div class="col-lg-10">
            <div class="jumbotron"><h1>Posts</h1></div>
            <div class="container-fluid">
            
            <div class="panel panel-default" style="padding-top:30px;">
                            <div class="panel-heading"><h3>Posts</h3></div>
                            <div class="panel-body">
                            <table class="table">
                                <thead>
                                    <tr class="text-white bg-primary">
                                        <th>Sr.No</th>
                                        <th>Date</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Edit Post</th>
                                        <th>View Post</th>
                                        <th>Delete Post</th>
                                    
                                    </tr>
                                    
                                </thead>
                            <tbody>
                                <tr class="table">
                                        <td>1</td>
                                        <td>22-06-2020</td>
                                        <td>Euphoria</td>
                                        <td>Hidndlkdkcmljdlkcdkcm</td>
                                        <td>Events</td>
                                        <td>Publish</td>
                                        <td><a href="#" class="btn btn-warning btn-sm text-white"><i class="fa fa-edit"></i>  Edit Post</a></td>
                                        <td><a href="#" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> View Post</a></td>
                                        <td><a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete Post</a></td>
                                        
                                </tr>
                                <tr class="table">
                                        <td>2</td>
                                        <td>14-01-2020</td>
                                        <td>Unit Tests</td>
                                        <td>Hidndlkdkcmljdlkcdkcm</td>
                                        <td>Notice</td>
                                        <td>Draft</td>
                                        <td><a href="#" class="btn btn-warning btn-sm text-white"><i class="fa fa-edit"></i>  Edit Post</a></td>
                                        <td><a href="#" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> View Post</a></td>
                                        <td><a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete Post</a></td>
                                        
                                </tr>
                                
                            </tbody>
                            
                            </table>
                            <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
                            
                           
                            
                            </div>
            
                        </div>
                    

            
            </div>
                

            </div>
            </div>
            
            
            <footer></footer>

        </body>
</html>