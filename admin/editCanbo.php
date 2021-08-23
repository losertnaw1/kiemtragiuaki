<?php
    include("config/db.php");
    session_start();
    include("template/header.php");
    $id_can_sua = $_GET['id'];
    $sql = "select * FROM canbo WHERE id=$id_can_sua";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
?>

<h3 style="max-width:50%;margin : 1rem auto;">Sửa thông tin cán bộ</h3>
<form action="" method="post" style="max-width:50%;margin : 1rem auto;">
  <div class="mb-3">
    <label class="form-label">ID</label>
    <input type="text" class="form-control" value="<?php echo $row['id']; ?>" name="txtId" disabled>
  </div>
  <div class="mb-3">
    <label class="form-label">Mã cơ quan</label>
    <input type="text" class="form-control" value="<?php echo $row['id_Dvi']; ?>" name="txtId_Dvi">
  </div>
  <div class="mb-3">
    <label class="form-label">Họ tên</label>
    <input type="text" class="form-control" value="<?php echo $row['ten']; ?>" name="txtTen">
  </div>
  <div class="mb-3">
    <label class="form-label">Chức vụ</label>
    <input type="text" class="form-control" value="<?php echo $row['chucvu']; ?>" name="txtChucvu" list="datalistOptions">
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
    <label class="form-label">Số điện thoại cơ quan</label>
    <input type="text" class="form-control" value="<?php echo $row['sdtCoquan']; ?>" name="txtSdtCoquan">
  </div>
  <div class="mb-3">
    <label class="form-label">Số điện thoại</label>
    <input type="text" class="form-control" value="<?php echo $row['sdt']; ?>" name="txtSdt">
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" value="<?php echo $row['email']; ?>" name="txtEmail">
  </div>
  <input type="submit" name="btnEditCanbo" value="Save" class="btn btn-success">
</form>
<?php
    if(isset($_POST['btnEditCanbo'])){
        $id = $row['id'];
        $id_Dvi = $_POST['txtId_Dvi'];
        $ten = $_POST['txtTen'];
        $chucvu = $_POST['txtChucvu'];
        $sdtcoquan = $_POST['txtSdtCoquan'];
        $sdt = $_POST['txtSdt'];
        $email= $_POST['txtEmail'];
        $sql1 = "update canbo
                set id_Dvi='$id_Dvi',ten=N'$ten',chucvu=N'$chucvu',sdtCoquan='$sdtcoquan',email='$email',sdt='$sdt' where id_Dvi=$id";
        if(mysqli_query($conn,$sql1)){
            header('location:'.siteurl.'/admin/index.php');
        }
    }
?>