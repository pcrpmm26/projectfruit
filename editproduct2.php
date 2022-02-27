<?php
    include("connect.php");
    if(!isset($_GET['pid'])|| $_GET['pid']==""){
        header("location:index.php");
    }
    else{
        $pid = $_GET['pid'];
    }
  echo  $sql="SELECT * FROM products Where id=$pid"; //SELECT products.*,categories. * from products,categories where products.id=$id = categories.catid=$catid;
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "ERROR : ";
    }
    else{
        if(mysqli_num_rows($result)>0){
            $prd = mysqli_fetch_array($result);
        }
        else{
            $prd=NULL;
        }
    }
?>
<br><br><br><br><br><br>
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
<div class="card border-danger">
            <div class="card-header bg-danger text-white">
                <strong><i class="fa fa-plus"></i> Update Product</strong>
            </div>
            <div class="card-body">
                <form action="updateproduct.php" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <!-- <div class="form-group col-md-6">
                            <label for="barcode" class="col-form-label">ID</label>
                            <input type="text" class="form-control" id="pID" name="pID" placeholder="Insert ID" required>
                        </div> -->
                        <div class="form-group col-md-6">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value ="<?php echo  $prd['product_name']; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="price" class="col-form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price"  value ="<?php echo $prd['product_price']; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="qty" class="col-form-label">Qty</label>
                            <input type="number" class="form-control" name="qty" id="qty" value ="<?php echo $prd['qty']; ?>">
                        </div>


                        <div class ="form-group col-md-4">
                            <label for="catid" class="col-form-label">Choose Categories:</label>
                            <input type="text" class="form-control" name="catid" id="catid" value ="<?php echo $prd['catid']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="note" class="col-form-label">Description</label>
                        <textarea id="description" name = "description" cols="" rows="5" class="form-control" ><?php echo $prd['product_description'];?></textarea>
                        
                    <label for="name" class="col-md-3 control-label">Picture: </label>
                    <div class="col-md-9">
                    <!--หากจะอัปโหลดไฟล์จะต้องใส่ type ใน input เป็น file-->
                    <!--accept="image/*" สำหรับกำหนดว่าไฟล์ที่อัปโหลดเป็นไฟล์รูปภาพที่มีนามสกุลอะไรก็ได้-->
                        <input type="file" name="filepic" id="" class="form-control-file" accept="image/*">
                    
                    </div>
                    <input type="hidden" name="ppid" value="<?php echo $prd['id'];?>">
                    <input type="hidden" name="ProductPic" value="<?php echo $prd['product_pic'];?>">
                    
                </div>
                    
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Update</button>
                </form>
            </div>
            
        </div>
        <br>