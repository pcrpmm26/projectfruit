<?php 
    include("connect.php");
    $query = "SELECT * FROM categories ";
    $result = mysqli_query($conn,$query);
    mysqli_num_rows($result);
?>
    <!-- Start Hero Image -->
    <div class="hero-image">
        <div class="hero-text">
           
           <br><br><br><br><br>
           
        </div>
    </div>
    <!-- End Hero Image -->
    <div class="container">
        <!-- Modal Confirm Delete -->
        <div class="modal fade" id="modal-delete">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><i class="fa fa-trash"></i> Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Do you want to delete product <strong>Product name</strong> ?</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-outline-success">Save changes</a>
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->
        <!-- Create Form -->
        <div class="card border-danger">
            <div class="card-header bg-danger text-white">
                <strong><i class="fa fa-plus"></i> Add New Product</strong>
            </div>
            <div class="card-body">
                <form action="saveproduct.php" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <!-- <div class="form-group col-md-6">
                            <label for="barcode" class="col-form-label">ID</label>
                            <input type="text" class="form-control" id="pID" name="pID" placeholder="Insert ID" required>
                        </div> -->
                        <div class="form-group col-md-6">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="price" class="col-form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Price" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="qty" class="col-form-label">Qty</label>
                            <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" required>
                        </div>


                        <div class ="form-group col-md-4">
                            <label for="catID" class="col-form-label">Choose Categories:</label>
                            <select name="catID" id="catID" class="form-control">

                                <?php while($row  = mysqli_fetch_array($result)) { ?>
                                <option  value=" <?php echo $row['catid'] ; ?>"> <?php echo $row['catid'] ; ?></option>
                                <?php } ?>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="note" class="col-form-label">Description</label>
                        <textarea name="description" id="" rows="5" class="form-control" placeholder="Description"></textarea>
                        
                    <label for="name" class="col-md-3 control-label">Picture: </label>
                    <div class="col-md-9">
                    <!--หากจะอัปโหลดไฟล์จะต้องใส่ type ใน input เป็น file-->
                    <!--accept="image/*" สำหรับกำหนดว่าไฟล์ที่อัปโหลดเป็นไฟล์รูปภาพที่มีนามสกุลอะไรก็ได้-->
                        <input type="file" name="filepic" id="" class="form-control-file" accept="image/*">
                    
                    </div>
                    
                </div>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Save</button>
                </form>
            </div>
            
        </div>
        <!-- End create form -->
        <br>
        <!-- Table Product -->
       
        
      </div>
      <!-- End Table Product -->
      <br>


        <br>
    </div>
    </div>


   
