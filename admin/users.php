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
           Users
           <a href="add_user.php" class="btn btn-primary">Add User</a>
        </h1>
      
      
            <div class="col-md-12">
            
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Photo</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                        </tr>
                    
                    
                    </thead>

                    <tbody>
                    
                    <?php 
                        
                        $users = User::find_all();

                        foreach($users as $user){
                            
                            echo "
                            
                            <tr>
                                <td>{$user->id}</td>
                                
                                <td><img width='62px' height='62px' src='{$user->image_path_placeholder()}'>
                                <td>{$user->username}
                                    <div class='actions_links'>

                                    <a class='delete_link' href='delete_user.php?id={$user->id}'>Delete</a>
                                    <a href='edit_user.php?id={$user->id}'>Edit</a>

                                    </div></td>
                              
                                <td>{$user->password}</td>
                                <td>{$user->first_name}</td>
                                <td>{$user->last_name}</td>
                            </tr>
                            ";

                        }
                       
                    
                    
                    ?>
                    
                    
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