<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Sản Phẩm</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="../css/general.css" rel="stylesheet">
    <link href="../css/product_list.css" rel="stylesheet">
</head>
<body>
    <div id="notificationContainer" class="notification">

    </div>    
    </div>
    <?php include './views/common/header.php';?>
    <div class="container-fluid"> <!-- container -->
        <div class="row"> <!-- row -->
            <div class="col-md-3 left pt-5">
                <h3>Thương hiệu:</h3>
                <ul class="list-group mb-2 ml-2">
                    <?php
                        foreach ($ds_thuonghieu as $thuonghieu) {
                            echo "<li class='list-group-item'>
                            <input type='checkbox' name='thuonghieu' value='$thuonghieu->code' id='$thuonghieu->id'>
                            <label for='$thuonghieu->id'>$thuonghieu->name</label>
                        </li>";
                        } 
                    ?>
                    <!-- <li class="list-group-item">
                        <input type="checkbox" name="a" id="asus">
                        <label for="asus">ASUS</label>
                    </li> -->
                </ul>
                <h3>Sắp xếp theo:</h3>
                <ul class="list-group mb-2 ml-2">
                    <li class="list-group-item">
                        <input type="radio" name="a" id="sort1">
                        <label for="sort1">Giá từ cao - thấp</label>
                    </li>
                    <li class="list-group-item">
                        <input type="radio" name="a" id="sort2">
                        <label for="sort2">Giá từ thấp - cao</label>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 right container pt-5"> <!-- col-md-9 -->
                <h3 class="h3">Danh Sách Sản Phẩm</h3>
                <div id="product-grid" class="row mb-3"> <!-- row mb-3 -->
                        
                    <?php
                        foreach ($ds_sanpham as $sp){
                            $images = $sp->images;
                            $imgSrc = '../assets/img/acer1.jpg';
                            $imgSrc1 = '../assets/img/acer2.jpg';
                            if (count($images) > 0) {
                                $imgSrc = $images[0];
                            }
                            if (count($images) > 1){
                                $imgSrc1 = $images[1];
                            }
                            echo "<div class='col-md-3 col-sm-6'>
                            <div class='product-grid'>
                                <div class='product-image'>
                                    <a href='#'>
                                        <img class='pic-1' src='$imgSrc'>
                                        <img class='pic-2' src='$imgSrc1'>
                                    </a>
                                    <a href='#' class='fa fa-search product-full-view'></a>
                                </div>
                                <div class='product-content'>
                                    <h3 class='title'><a href='#'>$sp->name</a></h3>
                                    <div class='price'>$sp->price</div>
                                    <a productId='$sp->id' class='add-to-cart' href=''>Thêm Vào Giỏ</a>
                                </div>
                            </div>
                        </div>";
                        } 
                    ?>
                    <!-- <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="../assets/img/asus1.jpg">
                                    <img class="pic-2" src="../assets/img/asus2.jpg">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">LAPTOP ASUS</a></h3>
                                <div class="price"> 15.000.000</div>
                                <a class="add-to-cart" href="">Đưa Vào Giỏ</a>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="../assets/img/acer1.jpg">
                                    <img class="pic-2" src="../assets/img/acer2.jpg">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">LAPTOP ACER</a></h3>
                                <div class="price"> 13.000.000 </div>
                                <a class="add-to-cart" href="">Đưa Vào Giỏ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="../assets/img/dell1.jpg">
                                    <img class="pic-2" src="../assets/img/dell2.jpg">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">LAPTOP DELL</a></h3>
                                <div class="price">18.000.000</div>
                                <a class="add-to-cart" href="">Đưa Vào Giỏ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="../assets/img/lenovo1.jpg">
                                    <img class="pic-2" src="../assets/img/lenovo2.jpg">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">LAPTOP LENOVO</a></h3>
                                <div class="price">11.000.000</div>
                                <a class="add-to-cart" href="">Đưa Vào Giỏ</a>
                            </div>
                        </div>
                    </div> -->
                    
                </div> <!-- end row mb-3 -->
            </div> <!-- end col-md-9 -->
            
        </div> <!-- end row -->
    </div> 
    <!-- end container -->




    <?php include dirname(__DIR__).'/views/common/footer.php'; ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../script/common.js"></script>
    <script src="../script/product_list.js"></script>
</body>
</html>