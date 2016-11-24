<?=$header;?>
    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="text-center">
                <a href="<?php echo site_url('auth/create_password/'.$this->uri->segment(3)); ?>" class="logo"><span><?=$this->config->item('auth_text')['text1'];?><span><?=$this->config->item('auth_text')['text2'];?></span></span></a>
                <h5 class="text-muted m-t-0 font-600"><?=$this->config->item('auth_text')['tagline'];?></h5>
            </div>
            <div class="m-t-40 card-box">
                <div class="text-center">
                    <h4 class="text-uppercase font-bold m-b-0">Create access</h4>
                    <h5 class="font-bold m-b-0" style="color: red;"><?=$this->session->flashdata('fail_m');?></h5>
                </div>
                <div class="panel-body">
                    <?php echo form_open('auth/create_access_process/'.$this->uri->segment(3), array('class' => 'form-horizontal m-t-20')); ?>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="username" required placeholder="Username" value="<?=$this->session->flashdata('fail');?>">
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" required placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group text-center m-t-40">
                            <div class="col-xs-12">
                                <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">
                                    Submit
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
            <!-- end card-box -->

            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="text-muted">Already have account?<a href="<?php echo site_url('auth'); ?>" class="text-primary m-l-5"><b>Sign In</b></a></p>
                </div>
            </div>

        </div>
        <!-- end wrapper page -->
<?=$footer;?>