<?php include("includes/header.php"); ?>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->

            <?php include("includes/top_nav.php"); ?>


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
       
            <?php include("includes/side_nav.php"); ?>

            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

        <div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
                
            <?php 

            if($message){   

            echo "<div class='alert alert-info'>" .$message . "</div>";
            }
            ?>

        <h1 class="page-header">
           Photos
            <small>All Photos</small>
        </h1>
      
      
            <div class="col-md-12">
            
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Photo</th>
                            <th>File Name</th>
                            <th>Title</th>
                            <th>Size</th>
                            <th>Comments</th>
                        </tr>
                    
                    
                    </thead>

                    <tbody>
                    
                    <?php 
                        
                        $photos = Photo::find_all();
                    ?>


                   <?php     foreach($photos as $photo): ?>
                            
    
                            
                            <tr>
                                <td><?php echo $photo->id; ?></td>
                                <td><img width='200px' src='includes/images/<?php echo $photo->filename; ?>'>
                                    <div class='picture_links'>

                                    <a class="delete_link" href='delete_photo.php?id=<?php echo $photo->id; ?>'>Delete</a>
                                    <a href='edit_photo.php?id=<?php echo $photo->id; ?>'>Edit</a>
                                    <a href='../photo.php?id=<?php echo $photo->id; ?>'>View</a>
                                    
                                    </div></td>

                                <td><?php echo $photo->title; ?></td>
                                <td><?php echo $photo->filename ?></td>
                                <td><?php echo $photo->size; ?></td>

                                <td>

                                <a href="comment_photo.php?id=<?php echo $photo->id; ?>">
                                    <?php 
                                
                                $comments = Comment::find_the_comments($photo->id);

                                echo count($comments); 

                                ?>
                                </a>
                            
                            </td>


                            </tr>
                      

                        <?php endforeach; ?>
                       
                    
              
                    
                    
                    </tbody>
                
                
                </table>
            
            
            </div>



    </div>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->


        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>