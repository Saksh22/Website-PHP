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
            <div class="jumbotron"><h1>New Posts</h1></div>
            <div class="container-fluid">
            <form class="form-horizontal" action="new_post.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="file">Upload a file</label>
                <input type="file" name="file" class="form-control-file" id="file">
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Enter the title" name="title">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" id="category" name="category">
                <option value="notice">Notice</option>
                <option value="event">Event</option>
                <option value="project">Project</option>
                <option value="article">Article</option>
                <option value="paper">Paper</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Enter Description</label>
                <textarea  id="description" class="form-control" rows="10" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                <option value="publish">Publish</option>
                <option value="draft">Draft</option>
                
                </select>
            </div>
            <button type="submit" name="submit_post" class="btn btn-primary">Submit</button> 
                </form>

            
            </div>
                

            </div>
            </div>
            
            <footer></footer>

        </body>
</html>