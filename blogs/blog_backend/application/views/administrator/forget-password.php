
            <section class="login p-fixed d-flex text-center bg-primary" style="background:#c8ccca !important">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
	
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body">

					        
							<div class="col-md-10">
								<p class="text-left txt-primary" style="color: black;"><?php echo validation_errors(); ?></p>
							   
							</div>
                            <div class="auth-box">
							    <div class="text-center col-lg-12">
									<img src="<?php echo base_url(); ?>assets/images/kvch_logo.png" alt="logo.png">
								</div>
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left txt-primary">Forget password</h3>
                                    </div>
                                </div>
                                <hr/>
                                  <?php echo form_open('administrator/forget_password_mail'); ?>
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your Username">
                                    <span class="md-line"></span>
                                </div>
                               
                                <div class="row m-t-25 text-left">
                                    <div class="col-sm-7 col-xs-12">
                                        <div class="checkbox-fade fade-in-primary">
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-xs-12 forgot-phone text-right">
                                        <a href="<?php echo base_url(); ?>administrator/index" class="text-right f-w-600 text-inverse"> Login?</a>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Submit</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                       
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        
        <!-- end of container-fluid -->
    </section>    
    
   