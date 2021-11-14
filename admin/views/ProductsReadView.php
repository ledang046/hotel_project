    <?php 
    //load file Layout.php
    $this->layoutPath = "Layout.php";
 ?>
<div class="col-md-12">  
        <div class="content-panel">
            <table class="table table-hover">
                 <div style="margin-bottom:5px; margin-left:15px;">
                            <a href="index.php?controller=products&action=create" style="border-radius:20px; font-size: 15px;" class="btn btn-warning"><i class="fas fa-plus"></i> Add product</a>
                             </div>
                                     <hr>
                <tr>
                    <th style="width:80px;">Ảnh</th>
                    <th style="width:80px;">Tên Phòng</th>
                    <th style="width:80px;">Loại phòng</th>
                    <th style="width:150px;">Chi tiết</th>
                    <th style="width:70px">Giá</th>
                    <th style="width:70px">Giảm giá</th>
                    <th style="width:70px">Trạng thái</th>
                    <th style="width:60px">Hot</th>
                    <th style="width:60px;"></th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td>
                        <?php if($rows->photo != "" && file_exists("../assets/upload/products/".$rows->photo)): ?>
                            <img src="../assets/upload/products/<?php echo $rows->photo; ?>" style="width:100px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $rows->name; ?></td>
                    <td>
                        <?php 
                       
                            $category = $this->modelGetCategory($rows->category_id);
                            echo isset($category->name) ? $category->name : "";
                       
                         ?>
                    </td>
                    <td><?php echo $rows->description ?></td>
                    <td ><?php echo number_format($rows->price); ?></td>
                     <td style="text-align: center;"><?php echo $rows->discount; ?></td>
                    <td style="text-align: center;">
                        <?php if(isset($rows->status)&&$rows->status == 1): ?>
                            <span class="fa fa-check"></span>
                        <?php else: ?>
                            <span><i class="far fa-times-circle"></i></span>
                        <?php endif; ?>
                        
                    </td>
                    <td>
                        <?php if(isset($rows->hot)&&$rows->hot == 1): ?>
                            <span class="fa fa-check"></span>
                        <?php else: ?>
                            <span><i class="far fa-times-circle"></i></span>
                        <?php endif; ?>
                        
                    </td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=products&action=update&id=<?php echo $rows->id; ?>"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;
                        <a href="index.php?controller=products&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <!-- liet ke cac trang -->
            <ul class="pagination">
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item">
                    <a href="index.php?controller=products&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                </li>
                <?php endfor; ?>
            </ul>
        </div>
  
</div>