<?php
    include("admin/config/db.php");
    session_start();
    include("template/header.php");
?>
    <a class="btnLogin" href="admin/login.php">
        <button class="btn btn-outline-success">Login</button>
    </a>
    <section class="main">
        <h3>Tra cứu thông tin cán bộ</h3>
        <?php 
            if(isset($_GET["search"]) && !empty($_GET["search"])){
                $key = addslashes($_GET["search"]);
                $sql = "select * from canbo where id like '%$key%' or ten like '%$key%'
                or chucvu like '%$key%' or sdtCoquan like '%$key%' or email like '%$key%' or sdt like '%$key%' order by id";
            }
            else {
                $sql = "select * from canbo";
            }
            $result = mysqli_query($conn,$sql);
        ?>
        <table class="tblsearch">
            <tr>
                <td>
                    <form action="" method="post">
                        <input type="text" name="seach" placeholder="Nhập từ khoá"
                        value ="<?php if (isset($_GET["search"])) echo $_GET["search"]; ?>">
                        <input type="submit" value="Tìm">
                        <input type="button" value="Tất cả">
                    </form>
                </td>
            </tr>
        </table>
        <table class="table" cellspacing="0" cellpadding="5">
            <tr>
                <th>ID</th>
                <th>Họ tên</th>
                <th>Chức vụ</th>
                <th>Điện thoại cơ quan</th>
                <th>Email</th>
                <th>Điện thoại di động</th>
            </tr>
            <?php 
                while($row = mysqli_fetch_assoc($result)) {
                    $id = $row["id"];
                    $ten = $row["ten"];
                    $chucvu = $row["chucvu"];
                    $dtCq = $row["sdtCoquan"];
                    $email = $row["email"];
                    $sdt = $row["sdt"];
                    echo '<tr>';
                    echo "<td>$id</td>";
                    echo "<td>$ten</td>";
                    echo "<td>$chucvu</td>";
                    echo "<td>$dtCq</td>";
                    echo "<td>$email</td>";
                    echo "<td>$sdt</td>";
                    echo '</tr>';
                }
            ?>
        </table>
    </section>
<?php include 'template/footer.php'?>