<div>
  <header class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
            <p>Free shipping toàn quốc cho mọi mặt hàng</p>
            <ul class="social-network">
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>

        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
          <div class="container">
            <a class="navbar-brand" rel="nofollow" target="_self" href="../../index.php">
                <img class="web-logo" src="https://3.bp.blogspot.com/-OEOqzY83X0g/WZ2tZzg3fQI/AAAAAAAABgo/Yk8mMHqzNAAU5iXzgcPo642C4umKR4d2QCEwYBhgL/s1600/Mangeky%25C5%258D_Sharingan_Sasuke.png">
            </a>
            <div>
      
              <ul class="navbar-nav ml-auto ">
      
                <li class="nav-item active">
                    <div class="navbar-search">
                        <div class="searchbar mr-3">
                            <input class="search_input" type="text" name="" placeholder="Search...">
                            <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </li>
                <li class="nav-item active">
                    <?php
                      if(isset($user)){
                        echo "<ul>
                          <li class='dropdown'>
                            <a class='links btn btn-dark button mr-3 dropdown-toggle text-white' data-toggle='dropdown'>
                              $user->fullname
                            </a>
                            <ul class='dropdown-menu'>
                              <li?><a class='nav-link' href='../myaccount.php'>Tài Khoản Của Tôi</a></li>
                              <li><a class=' nav-link' href='../logout.php'>Đăng Xuất</a></li>
                            </ul>
                          </li>
                        </ul>";
                      } else{
                        echo "<a class='links btn btn-dark button mr-3' href='../login.php'>Tài Khoản</a>";
                      }
                    ?>
                    <!-- <a class="links btn btn-dark button mr-3" href="../login.php">Tài Khoản</a> -->
                </li>
                <li class="nav-item active">
                    <a class="cart-button d-flex justify-content-center align-content-center" href="/view-cart.php"> 
                        <i class="fas fa-shopping-cart cart"></i> 
                        <span class="item-number d-inline"></span> 
                    </a> 
                </li>
              </ul>
            </div>
          </div> 
        </nav>
  </header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link text-black" href="#">Khuyến Mãi</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-black"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Danh Mục Sản Phẩm
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
  
            
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4">
                  <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link active" href="./product_grid.php">Laptop</a>
                    <?php foreach ($ds_thuonghieu as $thuonghieu) {
                                $checked = (isset($brand_code) && $thuonghieu->code == $brand_code)? 'checked': '';
                                echo "<li class='nav-item'><a class='nav-link' href='/product_grid.php?brand=$thuonghieu->code' $checked>
                                $thuonghieu->name
                                </a></li>";
                            } 
                      ?>
                  <!-- </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">ASUS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">MSI</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">LENOVO</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">ACER</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">DELL</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">HP</a>
                  </li> -->
                </ul>
                </div>
                <div class="col-md-4">
                  <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link active">MACBOOK</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">MACBOOK</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">MACBOOK AIR</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">MACBOOK PRO</a>
                  </li>
                </ul>
                </div>
                <div class="col-md-4">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link active">Khoảng Giá</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">DƯỚI 10 TRIỆU</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">10 - 15 TRIỆU</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">15 - 20 TRIỆU</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">20 - 25 TRIỆU</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">25 - 30 TRIỆU</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">TRÊN 30 TRIỆU</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
  
  
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Khác
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
  
  
            <div class="container">
              <div class="row">
                <div class="col">
                  <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link active">PHỤ KIỆN</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">ĐẾ TẢN NHIỆT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">TÚI CHỐNG SỐC</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">BALO</a>
                  </li>
                </ul>
                </div>
              </div>
            </div>
  
  
          </div>
        </li>
      </ul>
    </div>
  </nav>
</div>

<!-- End Header -->