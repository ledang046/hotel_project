    <?php 
    //load file Layout.php
    $this->layoutPath = "Layout.php";
 ?>
<div class="col-md-12">  
  <h3>Activity Manager</h3>
        <div class="content-panel">

            <table class="table table-hover">
                 <div style="margin-bottom:5px; margin-left:15px;">
                
                            <a  href="index.php?controller=activities&action=create" style="border-radius:20px; font-size: 15px;justify-content: right;" class="btn btn-warning"><i class="fas fa-plus"></i> Add activities</a>
                             </div>
                                     <hr>
                <tr>
                    <th style="width:80px;">Photo</th>
                    <th style="width:100px;">Name</th>
                    <th style="width:400px;">Description</th>
                    <th style="width:400px;">Content</th>
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
                    <td><?php echo $rows->description ?></td>
                    <td><?php echo $rows->content ?></td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=activities&action=update&id=<?php echo $rows->id; ?>"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;
                        <a href="index.php?controller=activities&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px; margin-left: 10px;}
            </style>
            <!-- liet ke cac trang -->
            <ul class="pagination">
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item">
                    <a href="index.php?controller=activities&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                </li>
                <?php endfor; ?>
            </ul>
        </div>
  
</div>