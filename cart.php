

<?php
    session_start();
?>

<?php
    include("connect.php");
    $sql ="SELECT * FROM orderdetail WHERE id";
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

        <?php 
                    if(isset($_SESSION['uid'])){

            ?>
<div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="card-title float-left ">Your Order</h5>
                    <a href="index.php?menu=menu" class="btn btn-success float-right mb-3"><i class="fa fa-plus"></i>Shop</a>
                </div>
            
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                       
                        <th>Order ID</th>
                        <th>Price</th>
                        <th>Qty / KG</th>
                        <th>Picture</th>
                        <th>Action</th>
                        <!-- <th>Total</th> -->
                        <!-- <th>Total</th> -->
                    <?php if(isset($_SESSION['uid'] )){
									  if($_SESSION['username']== "admin"){ ?>
                        <th style="width: 20%;">Actions ใส่ปุ่มว่ายืนยันแล้วทำารเช็ค</th>

                        <?php } ?>
                    </tr>
                </thead>
               <?php
                        $total=0;
                        while($prd = mysqli_fetch_array($result)){
                ?>  
                <tbody>
                    <tr>
                        <?php if($prd['id'] == $prd['id']){ ?>
                   
                        <td> <?php echo $prd['id']; ?></td>
     <!-- ราคาคิดรวม -->  <td> <?php echo $prd['order_detail_price']; ?></td>


                        <td> <?php echo $prd['order_detail_quantity']; ?></td>
                        <td> <img src="img/product/<?php echo $prd['pic']; ?>" style="margin-bottom:10px" class="img-rounded col-md-7 col-sm-7 col-xs-7 " alt=""></td>
                        <td><a href="deleteOder.php?id=<?php echo $prd['id']; ?>" class="btn btn-danger">Remove</a></td>
                        
                        <?php if(isset($_SESSION['uid'] )){
									  if($_SESSION['username']== "admin"){ ?>
                        <td><button class="btn btn-success">ปั่มยืนยันว่าชำระ ทำใน admin</button></td>
                       <?php } ?> <?php } ?>
                        <?php
                            $total=($prd['order_detail_price'] * $prd['order_detail_quantity'] )+$total;
                    } ?>
                       
                        
                    </tr>
                    
                    
                </tbody>
                <?php } ?>
                <?php } ?>
                
               
            </table>
              

           <div class ="btn btn-danger">
           <th style="width : 20% ;">Total</th>
            <td style = "width : 100% ;"><?php echo $total; ?></td>

           </div>

           <div>
            <br><p style="font-size: 20px">กรุณาชำระเงินได้ที่นี่</p>
            <img src="images/QR-CODE.jpg" width="300" height="300"><br>
        </div><br>
           
            <form action="odercheckout.php" method="post" enctype="multipart/form-data">
             <input type="file" name="filepic">
             <input type="hidden" value="<?php echo $total; ?>"name="totle">
             <input type="hidden" value="<?php echo $_SESSION['uid'] ?>"name="custid">
             <button class ="btn btn-success">Payment</button>
            </form>
            <?php } ?>
           
</div>
