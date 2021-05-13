<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="../css/general.css" rel="stylesheet">
    <link href="../css/checkout.css" rel="stylesheet">
</head>
<body>
    <?php include './views/common/header.php';?>
    <div class="container pb-5 pt-5">
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Giỏ Hàng</span>
                </h4>
                <ul class="list-group mb-3 sticky-top">
                    <?php
                         if(isset($details)){
                            foreach($details as $index => $detail){
                                $product = $products[$index];
                                $subtotal = $detail->amount * $detail->price;  
                                echo "<li class='list-group-item d-flex justify-content-between lh-condensed'>
                                <div class='col-sm-2 col-xs-2 p-0'>
                                    <img class='img-fluid d-none d-md-block rounded shadow ' src='../assets/img/product/asus1.jpg'>
                                    <span class='product-thumbnail-quantity' aria-hidden='true'>$detail->amount</span>
                                </div>
                                <div class='col-sm-6 col-xs-6 pl-3'>
                                    <h6 class='my-0'>$product->name</h6>
                                    <small class='text-muted'>$product->brandName</small>
                                </div>
                                <span class='col-sm-4 col-xs-4 text-muted p-0'>$detail->price</span>
                            </li>";
                            }
                        }  
                    ?>
                    <!-- <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Product name</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$12</span>
                    </li> -->
                </ul>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Thông Tin Giao Hàng</h4>
                <form class="needs-validation" novalidate="">   
                    <div class="mb-3">
                        <label for="firstName">Họ Tên</label>
                        <input type="text" class="form-control" id="fullname" placeholder="Nguyễn Văn A" value="" required="">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Địa Chỉ</label>
                        <input type="text" class="form-control" id="address" placeholder="1234 đường 30/4" required="">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label for="address2">Địa Chỉ 2<span class="text-muted">(Không Bắt Buộc)</span></label>
                        <input type="text" class="form-control" id="address2" placeholder="Địa chỉ cơ quan">
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Hoàn Tất Đặt Hàng</button>
                </form>
            </div>
        </div>
    </div>


    <?php include './views/common/footer.php'; ?>






    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../script/common.js"></script>
    <script src="../script/checkout.js"></script>
    
</body>
</html>