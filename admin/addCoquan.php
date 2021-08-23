<?php
    include("config/db.php");
    session_start();
    include("template/header.php")
?>
<h3 style="max-width:50%;margin : 1rem auto;">Thêm cơ quan</h3>
<form action="" method="post" style="max-width:50%;margin : 1rem auto;">
  <div class="mb-3">
    <label class="form-label">ID</label>
    <input type="text" class="form-control" name="txtId">
  </div>
  <div class="mb-3">
    <label class="form-label">Tên đơn vị</label>
    <input type="text" class="form-control" name="txtTen">
  </div>
  <div class="mb-3">
    <label class="form-label">Địa chỉ</label>
    <input type="text" class="form-control" name="txtDiachi">
  </div>
  <div class="mb-3">
    <label class="form-label">Số điện thoại</label>
    <input type="text" class="form-control" name="txtSdt">
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="txtEmail">
  </div>
  <div class="mb-3">
    <label class="form-label">Website</label>
    <input type="text" class="form-control" name="txtWebsite">
  </div>
  <div class="mb-3">
    <label class="form-label">Đơn vị cấp trên</label>
    <input type="text" class="form-control" name="txtParentid">
  </div>
  <input type="submit" name="btnAddCoquan" value="Save" class="btn btn-success">
</form>
<?php
    if(isset($_POST['btnAddCoquan'])){
        $id = $_POST['txtId'];
        $ten = $_POST['txtTen'];
        $diachi = $_POST['txtDiachi'];
        $sdt = $_POST['txtSdt'];
        $email = $_POST['txtEmail'];
        $website= $_POST['txtWebsite'];
        $parent = $_POST['txtParentid'];
        $sql1 = "INSERT INTO coquan
                VALUES ('$id','$ten','$diachi','$sdt','$email','$website','$parent')";
        if(mysqli_query($conn,$sql1)){
            header('location:'.siteurl.'/admin/index.php');
        }
        
    }

?>