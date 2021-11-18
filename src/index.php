<?php include 'header.php';?>
<nav class="navbar navbar-light bg-light" style="padding-top:0px;">
    <div class="container-fluid">
        <a class="navbar-brand">IDEA Bookstore</a>
        <div class="col-8">
            <br>
            <form class="d-flex idea-br" style="border-radius: 5px; background-color: white;" action="template.php" method="post">
                <input id="inp" class="form-control me-2" style="border:0px;" type="sumbit" placeholder="Nhập sách cần tìm" aria-label="Search">
                <i class="fas fa-search idea-color" style="font-size:1.5em; padding: 5px 5px 0px 0px;"></i>
            </form>
        </div>
        <div class="col text-center idea-color" style="padding-top:8px;">
            <div class="row">
                <i class="far fa-bell"></i>
            </div>
            <div class="row">
                <a class="nav-link idea-color"  href="http://">Thông báo</a>
            </div>
        </div>
        <div class="col text-center idea-color" style="padding-top:8px;">
            <div class="row">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <div class="row">
                <a class="nav-link idea-color"  href="http://">Giỏ hàng</a>
            </div>
        </div>
        <div class="col text-center idea-color" style="padding-top:8px;">
            <div class="row">
                <i class="fas fa-sign-in-alt"></i>
            </div>
            <div class="row">
                <a class="nav-link idea-color" href="http://">Đăng nhập</a>
            </div>
        </div>
    </div>
</nav>

<?php include 'footer.php';?>