<?php
//load file Layout.php
$this->layoutPath = "Layout.php";
?>                      
                    <div class="col-md-12">
                        <h1>Categories Manager</h1>
                        <div class="col-md-12 mt">
                
                            <div class="content-panel">
                                  <table class="table table-hover">
                                    <div style="margin-bottom:5px; margin-left:15px;">
                            <a href="index.php?controller=categories&action=create" style="border-radius:20px; font-size: 15px;" class="btn btn-warning"><i class="fas fa-plus"></i> Add category</a>
                             </div>
                                     <hr>
                                    <thead>
                                      <tr> 
                                        <th>Name</th>
                                        </tr>
                                     </thead>
                  <tr>
                                     <?php foreach ($data as $rows): ?>
                                     <tr>
                                  
                                        <td><?php echo $rows->name; ?></td>
                                        
                                        <td style="text-align:center;">
                                            <a href="index.php?controller=categories&action=update&id=<?php echo $rows->id; ?>"><i class="fa fa-pencil"></i></a>&nbsp;
                                            <a href="index.php?controller=categories&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');"><i class="fa fa-trash"></i></a>
                                        </td>
                                        <?php 
                                        	$categoriesSub = $this->modelCategoriesSub($rows->id);
                                         ?>
                                         <?php foreach ($categoriesSub as $rowsSub):  ?>
                                        <tr>
                                        <td style="padding-left: 30px;"><?php echo $rowsSub->name; ?></td>
                                        <td style="text-align: center;">
                                        	 <a href="index.php?controller=categories&action=update&id=<?php echo $rowsSub->id; ?>"><i class="fa fa-pencil"></i></a>&nbsp;
                                            <a href="index.php?controller=categories&action=delete&id=<?php echo $rowsSub->id; ?>" onclick="return window.confirm('Are you sure?');"><i class="fa fa-trash"></i></a>
                                        </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tr>
                                <?php endforeach; ?>
                  </tr>
                 
                
              </table>
                                <style type="text/css">
                                    .pagination{padding:0px; margin:0px;}
                                </style>
                                <!-- liệt kê phân trang -->
                                <ul class="pagination" style="margin-left:15px;">
                                    <?php for ($i = 1;$i <= $numPage;$i++): ?>
                                    <li class="page-item">
                                        <a href="index.php?controller=categories&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                                    </li>
                                    <?php endfor; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
