<?php
    include("config/db.php");
    session_start();
    include("template/header.php");
    $id_can_sua = $_GET['id_Dvi'];
    $sql = "select * FROM coquan WHERE id_Dvi=$id_can_sua";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
?>

<h3 style="max-width:50%;margin : 1rem auto;">Sửa thông tin cơ quan</h3>
<form action="" method="post" style="max-width:50%;margin : 1rem auto;">
  <div class="mb-3">
    <label class="form-label">ID</label>
    <input type="text" class="form-control" value="<?php echo $row['id_Dvi']; ?>" name="txtId" disabled>
  </div>
  <div class="mb-3">
    <label class="form-label">Tên đơn vị</label>
    <input type="text" class="form-control" value="<?php echo $row['tenDvi']; ?>" name="txtTen">
  </div>
  <div class="mb-3">
    <label class="form-label">Địa chỉ</label>
    <input type="text" class="form-control" value="<?php echo $row['diaChi']; ?>" name="txtDiachi">
  </div>
  <div class="mb-3">
    <label class="form-label">Số điện thoại</label>
    <input type="text" class="form-control" value="<?php echo $row['sdt']; ?>" name="txtSdt">
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" value="<?php echo $row['email']; ?>" name="txtEmail">
  </div>
  <div class="mb-3">
    <label class="form-label">Website</label>
    <input type="text" class="form-control" value="<?php echo $row['website']; ?>" name="txtWebsite">
  </div>
  <div class="mb-3">
    <label class="form-label">Đơn vị cấp trên</label>
    <input type="text" class="form-control" value="<?php echo $row['parent_idDvi']; ?>" name="txtParentid">
  </div>
  <input type="submit" name="btnEditCoquan" value="Save" class="btn btn-success">
</form>
<?php
    if(isset($_POST['btnEditCoquan'])){
        $id = $row['id_Dvi'];
        $ten = $_POST['txtTen'];
        $diachi = $_POST['txtDiachi'];
        $sdt = $_POST['txtSdt'];
        $email = $_POST['txtEmail'];
        $website= $_POST['txtWebsite'];
        $parent = $_POST['txtParentid'];
        $sql1 = "update coquan
                set tenDvi=N'$ten',diaChi=N'$diachi',sdt='$sdt',email='$email',website='$website',parent_idDvi='$parent' where id_Dvi=$id";
        if(mysqli_query($conn,$sql1)){
            header('location:'.siteurl.'/admin/index.php');
        }
        
    }

?>