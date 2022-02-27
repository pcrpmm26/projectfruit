<?php
    include("connect.php");
    $sql ="SELECT * FROM categories ";
    $result = mysqli_query($conn,$sql);
    if(!$result){
        echo "Error:";
    }
    else{
        $row = mysqli_num_rows($result);
    }
?>
<div class="container">
        
        <br><br><br><br><br>
        <!-- End Modal -->
        <!-- Create Form -->
        <div class="card border-danger">
            <div class="card-header bg-danger text-white">
                <strong><i class="fa fa-plus"></i> Add New Categories</strong>
            </div>
            <div class="card-body">
                <form action="savecategorie.php" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="catName" name="catName" placeholder="Name Categories" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="price" class="col-form-label">ID</label>
                            <input type="number" class="form-control" id="catid" name="catid" placeholder="Categories ID" required>
                        </div>
                    </div>
                </div>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Save</button>
                </form>
                </div>
                <br>
                <div class="card border-danger">
            <div class="card-header bg-danger text-white">
                <strong><i class="fa fa-database"></i> Show Categories</strong>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <table class="table table-bordered table-striped">
                            <?php 
                                    while($cate = mysqli_fetch_array($result)){
                                    // for($i=0;$i<$row;$i++){
                                    //     $cate = mysqli_fetch_array($result);
                            ?> 
                            <tr>
                           
                                <th>Categories</th>
                                <td><?php echo $cate['catid']; ?></td>
                                <th>Name Categories</th>
                                <td><?php echo $cate['catName']; ?></td>
                            
                            </tr>  
                             <?php } ?>
                        </table>
                    </div>
                   
                </div>
            </div>
        </div>
            </div>
            </div>
            </div>
            <br>