<?php
    include("config/db.php");
    session_start();
    include("template/header.php")
?>
<h3 style="max-width:50%;margin : 1rem auto;">Thêm cán bộ</h3>
<form action="" method="post" style="max-width:50%;margin : 1rem auto;">
  <div class="mb-3">
    <label class="form-label">ID</label>
    <input type="text" class="form-control" name="txtId">
  </div>
  <div class="mb-3">
    <label class="form-label">Họ Tên</label>
    <input type="text" class="form-control" name="txtHoten">
  </div>
  <div class="mb-3">
    <label class="form-label">Chức vụ</label>
    <input type="text" class="form-control" list="datalistOptions" name="txtChucvu">
    <datalist id="datalistOptions">
      <option value="Trưởng khoa">
      <option value="P.Trưởng khoa">
      <option value="Trợ lý khoa">
      <option value="Trưởng BM">
      <option value="Phó BM">
      <option value="Giảng viên">
  </datalist>
  </div>
  <div class="mb-3">
    <label class="form-label">Điện thoại cơ quan</label>
    <input type="text" class="form-control" name="txtSdtCoquan">
  </div>
  <div class="mb-3">
    <label class="form-label">Điện thoại di động</label>
    <input type="text" class="form-control" name="txtSdt">
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="txtEmail">
  </div>
  <input type="submit" name="btnAddCanbo" value="Save" class="btn btn-success">
</form>
<?php
    if(isset($_POST['btnAddCanbo'])){
        $id = $_POST['txtId'];
        $hoTen = $_POST['txtHoten'];
        $chucVu = $_POST['txtChucvu'];
        $sdtCoquan = $_POST['txtSdtCoquan'];
        $email = $_POST['txtEmail'];
        $sdt = $_POST['txtSdt'];
        $sql = "INSERT INTO canbo(id,ten,chucvu,sdtCoquan,sdt,email)
                VALUES ('$id','$hoTen','$chucVu','$sdtCoquan','$sdt','$email')";
        if(mysqli_query($conn,$sql)){
            header('location:'.siteurl.'/admin/index.php');
        }
        
    }

?>