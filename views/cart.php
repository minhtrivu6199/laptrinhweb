<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="../css/general.css" rel="stylesheet">
</head>
<body>
    <?php include './views/common/header.php';?>
    <section class="pt-5 pb-5">
  <div class="container">
    <div class="row w-100">
        <div class="col-lg-12 col-md-12 col-12">
            <h3 class="display-5 mb-2 text-center">Giỏ Hàng</h3>
            <p class="mb-5 text-center">
                <i class="text-info font-weight-bold">3</i> sản phẩm trong giỏ hàng của bạn</p>
            <table id="shoppingCart" class="table table-condensed table-responsive">
                <thead>
                    <tr>
                        <th style="width:50%">Sản Phẩm</th>
                        <th style="width:10%">Giá</th>
                        <th style="width:10%">Số Lượng</th>
                        <th style="width:20%">Thành Tiền</th>
                        <th style="width:10%"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(isset($details)){
                            foreach($details as $index => $detail){
                                $product = $products[$index];
                                $subtotal = $detail->amount * $detail->price;   
                                echo "<tr>
                                <td data-th='Product'>
                                    <div class='row'>
                                        <div class='col-md-3 text-left'>
                                            <img src='../assets/img/product/asus1.jpg' alt='' class='img-fluid d-none d-md-block rounded mb-2 shadow '>
                                        </div>
                                        <div class='col-md-9 text-left mt-sm-2'>
                                            <h4>$product->name</h4>
                                            <p class='font-weight-light'>Brand &amp; Name</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-th='Price'>$detail->price đ</td>
                                <td data-th='Quantity'>
                                    <input productId='$detail->productId' type='number' class='form-control form-control-lg text-center amount-input' value='$detail->amount' min=1>
                                </td>
                                <td data-th='Subtotal' class='text-center'>$subtotal đ</td>
                                <td class='actions' data-th=''>
                                    <div class='text-right'>
                                        <button productId='$detail->productId' class='btn btn-white border-secondary bg-white btn-md mb-2 btn-delete'>
                                            <i class='fas fa-trash'></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>";
                            }
                        } 
                    ?> 
                    <!-- <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                    <img src="../assets/img/dell1.jpg" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                </div>
                                <div class="col-md-9 text-left mt-sm-2">
                                    <h4>DELL1</h4>
                                    <p class="font-weight-light">Brand &amp; Name</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">18.000.000</td>
                        <td data-th="Quantity">
                            <input type="number" class="form-control form-control-lg text-center" value="1">
                        </td>
                        <td class="actions" data-th="">
                            <div class="text-right">
                                <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                    <i class="fas fa-sync"></i>
                                </button>
                                <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr> -->
                    
                </tbody>
            </table>
            <div class="float-right text-right">
                <h4>TỔNG TIỀN:</h4>
                <h1><?php if (isset($total)) echo "$total đ"; ?></h1>
            </div>
        </div>
    </div>
    <div class="row mt-4 d-flex align-items-center">
        <div class="col-sm-6 order-md-2 text-right">
            <a href="catalog.html" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">THANH TOÁN</a>
        </div>
        <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
            <a href="./product_list.php">
                <i class="fas fa-arrow-left mr-2"></i>Tiếp tục mua sắm</a>
        </div>
    </div>
</div>
</section>








    <?php include './views/common/footer.php'; ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../script/common.js"></script>
    <script src="../script/shopping_cart.js"></script>
    
</body>
</html>