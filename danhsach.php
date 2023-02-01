<div class="container-fluid">
        <div class="card">
            <div class="card-header text-center">
                <h2>Danh sách sản phẩm</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <?php 
                        // session_start();
                        if(isset($_SESSION['user'])==""){
                            header('location:quanly.php?page_layout=login');
                        }
                        $_SESSION['user'];
                        
                        // if(isset($_SESSION['role'])){

                        //     $_SESSION['role'];
                        // }
                        // $_admin = header('location:quanly.php?page_layout=danhsach');
                        // if($_SESSION['role']==0){
                        //     $_admin= header("location:quanly.php?page_layout=index");
                        // }
                    
                    ?>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>tên món ăn</th>
                            <th>chi tiết món ăn</th>
                            <th>số tiền</th>
                            <th>hình ảnh</th>
                            <th>sửa</th>
                            <th>xoá</th>

                        </tr>
                        <tbody >
                            <?php
                            $i =1;
                                while($row = mysqli_fetch_assoc($query)){?>
                                    <tr >
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['tenmonan']; ?></td>
                                        <td><?php echo $row ['mota'];  ?></td>
                                        <td><?php echo $row ['tien']; ?></td>

                                        <td>
                                            <img style="width:100px;" src="./shopping_img/<?php echo $row['hinhanh'] ?>" alt="">
                                            
                                        </td>

                                        <td>
                                            <a class="btn btn-success" href="quanly.php?page_layout=sua&id=<?php echo $row['id']; ?>">sửa</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger" onclick ="return Del('<?php echo $row['id']; ?>')" href="quanly.php?page_layout=xoa&id=<?php echo $row['id']; ?>">xoá</a>

                                        </td>
                                    </tr>
                            <?php } ?>

                            
                        </tbody>
                    </thead>
                </table>
                <div class="container mt-5">
                    <div class="row justify-content-between">
                        <a class="btn btn-primary" href="quanly.php?page_layout=them">Thêm mới</a>
                        <a class="btn btn-primary" href="quanly.php?page_layout=shopping">Lưu</a>
                        
                    </div>

                </div>
                
            </div>
        </div>
    </div>

    <script>
        function Del(name){
            return confirm("ban co chac muon xoa san pham " + name +"?");
        }
    </script>