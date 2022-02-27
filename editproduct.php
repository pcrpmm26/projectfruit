

<?php
    // include("connect.php");
    // $sql ="SELECT * FROM products WHERE id ";
    // $result = mysqli_query($conn,$sql);
    // if(!$result){
    //     echo "Error:";
    // }
    // else{
    //     if(mysqli_num_rows($result) > 0){
    //         $prd =mysqli_fetch_array($result);
    //     }
    //     else{
    //         $prd=NULL;
    //     }
    // }
?>

<?php
    include("connect.php");
    $sql ="SELECT * FROM products WHERE id";
    $result = mysqli_query($conn,$sql);
    if(!$result){
        echo "Error:";
    }
    else{
        $row = mysqli_num_rows($result);
    }
?>
<br><br><br><br><br><br>
<div class="">
        <!-- Modal Confirm Delete -->
        <div class="modal fade" id="modal-delete">
        </div>
<div class="container text-center " >
        <h1>จัดการรายการสินค้า</h1>
        <div class="row">
            <div class="col-md-12">
                <form action="" method="post" style="padding-bottom:20px">
                    <div class="form-group">
                    </div>
                </form>
            </div>
        </div>


<div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="card-title float-left ">Table Products</h5>
                    <a href="index.php?menu=insertpro" class="btn btn-success float-right mb-3"><i class="fa fa-plus"></i> Add New</a>
                </div>  
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                       
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Picture</th>
                        <th style="width: 20%;">Actions</th>
                    </tr>
                </thead>
               <?php
                        while($prd = mysqli_fetch_array($result)){
                    ?>  
                <tbody>
                    <tr>
                   
                        <td> <?php echo $prd['product_name']; ?></td>
                        <td> <?php echo $prd['product_price']; ?></td>
                        <td> <?php echo $prd['qty']; ?></td>
                        <td> <img src="img/product/<?php echo $prd['product_pic']; ?>" style="margin-bottom:10px" class="img-rounded col-md-7 col-sm-7 col-xs-7 " alt=""></td>
                        <td>
                            <!-- <a href="index.php?menu=editproduct2&&id" class="btn btn-sm btn-light"><i class="fa fa-th-list"></i></a> -->
                            <a href="index.php?menu=editproduct2&&pid=<?php echo $prd['id'] ?>" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                            <a href="deleteproduct.php?id=<?php echo $prd['id'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
</div>
