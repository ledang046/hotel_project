     <?php 
    //load file Layout.php
    $this->layoutPath = "Layout.php";
 ?>     
                    <div class="col-md-12">
                        <div class="panel panel-primary" style="border-color: #d1ae50;">
                            <div class="panel-heading" style="background-color:#d1ae50;border-color: #d1ae50;">Edit user</div>
                            <div class="panel-body" >
                            <form method="post" action="<?php echo $action; ?>">
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Name</div>
                                    <div class="col-md-10">
                                        <input type="text" value="<?php echo isset($record->name)?$record->name:''; ?>" name="name" required class="form-control">
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Email</div>
                                    <div class="col-md-10">
                                        <input type="email" value="<?php echo isset($record->email)?$record->email:''; ?>" name="email" <?php if(isset($record->email)): ?> disabled <?php else: ?> required <?php endif; ?> class="form-control">
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Password</div>
                                    <div class="col-md-10">
                                        <input type="password" name="password" <?php if(isset($record->email)): ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else: ?> required <?php endif; ?> class="form-control" >
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10" style="margin-top: 5px;">
                                        <input type="submit" value="Process" class="btn btn-warning">
                                    </div>
                                </div>
                                <!-- end rows -->
                            </form>
                            </div>
                        </div>
                    </div>