<?php
    include("config/db.php");
    session_start();
    include("template/header.php")
?>
<ul class="nav nav-justified nav-tabs justify-content-start" id="example-tabs" role="tablist">
    <li class="nav-item">
        <a id="tab1" class="nav-link active" data-toggle="tab" role="tab"  href="#pane-tab-1">Thông tin hệ thống</a>
    </li>
    <li class="nav-item">
        <a id="tab2" class="nav-link" data-toggle="tab" role="tab"  href="#pane-tab-2">Quản lý cán bộ</a>
    </li>
    <li class="nav-item">
        <a id="tab3" class="nav-link" data-toggle="tab" role="tab"  href="#pane-tab-3">Quản lý cơ quan</a>
    </li>
</ul>

<div class="tab-content">
    <div class="tab-pane fade show active system" id="pane-tab-1" role="tabpanel" aria-labelledby="tab1">
        <div class="count-user">
            <p>Số lượng người dùng</p>
            <span>
                <?php 
                $sql = "select count(*) from user";
                $result = mysqli_query($conn,$sql);
                $count_user = mysqli_num_rows($result);
                echo $count_user;
                mysqli_free_result($result);
                ?>
            </span>
        </div>
        <div class="count-canbo">
            <p>Số lượng cán bộ</p>
            <span>
                <?php 
                $sql4 = "select count(*) from canbo";
                $result4 = mysqli_query($conn,$sql4);
                $count_canbo = mysqli_num_rows($result4);
                echo $count_canbo;
                mysqli_free_result($result4);
                ?>
            </span>
        </div>
        <div class="count-coquan">
            <p>Số lượng cơ quan</p>
            <span>
                <?php 
                $sql5 = "select count(*) from coquan";
                $result5 = mysqli_query($conn,$sql5);
                $count_coquan = mysqli_num_rows($result5);
                echo $count_coquan;
                mysqli_free_result($result5);
                ?>
            </span>
        </div>
    </div>
    <div class="tab-pane fade" id="pane-tab-2" role="tabpanel" aria-labelledby="tab2">
        <h3>Danh sách cán bộ</h3>
        <button type="button" class="btn btn-success"><a style="text-decoration:none;color:white;" href="addCanbo.php">Thêm mới</a></button>
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Mã cơ quan</th>
                <th>Họ tên</th>
                <th>Chức vụ</th>
                <th>Điện thoại cơ quan</th>
                <th>Email</th>
                <th>Điện thoại di động</th>
                <th>Sửa</th>
                <th>Xoá</th>
            </tr>
            <?php 
                $sql2 = "select * from canbo";
                $result2 = mysqli_query($conn,$sql2);
                while($row = mysqli_fetch_assoc($result2)) { ?>
                    <tr>
                        <td> <?php echo $row['id']; ?> </td>
                        <td> <?php echo $row['id_Dvi']; ?> </td>
                        <td> <?php echo $row['ten']; ?> </td>
                        <td> <?php echo $row['chucvu']; ?> </td>
                        <td> <?php echo $row['sdtCoquan']; ?> </td>
                        <td> <?php echo $row['email']; ?> </td>
                        <td> <?php echo $row['sdt']; ?> </td>
                        <td><a href="editCanbo.php?id=<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                        <td><a href="deleteCanbo.php?id=<?php echo $row['id']; ?>"><i class="bi bi-archive-fill"></i></a></td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>
    <div class="tab-pane fade" id="pane-tab-3" role="tabpanel" aria-labelledby="tab3">
        <h3>Danh sách cơ quan</h3>
        <button type="button" class="btn btn-success"><a style="text-decoration:none;color:white;" href="addCoquan.php">Thêm mới</a></button>
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Tên đơn vị</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Website</th>
                <th>Đơn vị cấp trên</th>
                <th>Sửa</th>
                <th>Xoá</th>
            </tr>
            <?php 
                $sql3 = "select * from coquan";
                $result3 = mysqli_query($conn,$sql3);
                while($row = mysqli_fetch_assoc($result3)) { ?>
                    <tr>
                        <td> <?php echo $row['id_Dvi']; ?> </td>
                        <td> <?php echo $row['tenDvi']; ?> </td>
                        <td> <?php echo $row['diaChi']; ?> </td>
                        <td> <?php echo $row['sdt']; ?> </td>
                        <td> <?php echo $row['email']; ?> </td>
                        <td> <?php echo $row['website']; ?> </td>
                        <td> <?php echo $row['parent_idDvi']; ?> </td>
                        <td><a href="editCoquan.php?id_Dvi=<?php echo $row['id_Dvi']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                        <td><a href="deleteCoquan.php?id_Dvi=<?php echo $row['id_Dvi']; ?>"><i class="bi bi-archive-fill"></i></a></td>
                    </tr>
            <?php } ?>
        </table>
    </div>
</div>
<?php include 'template/footer.php'?>
