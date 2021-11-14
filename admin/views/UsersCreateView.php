 <?php 
    //load file Layout.php
    $this->layoutPath = "Layout.php";

 ?>     
                    <div class="col-md-12" style="width:60%;margin-left: 265px;">  
                        <div class="col-md-10">
                              
                            <div class="content-panel" style="padding: 20px; border:2px solid #d1ae50;">
                            <form method="post" action="<?php echo $action; ?>">
                                <!-- rows -->
                                <p style="font-size: 20px;">Your infomation</p>
                                

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
                                    <div class="col-md-10">
                                        <input type="submit" value="Regist" class="btn btn-warning" style="margin-top: 20px">
                                    </div>
                                </div>
                                <!-- end rows -->
                            </form>
                            </div>
                        </div>
                    </div>