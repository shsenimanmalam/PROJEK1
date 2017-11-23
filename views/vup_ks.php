  <!-- Link Bootstrap --> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Datat table -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<?php echo form_open('http://localhost/projek/index.php/up_ks/edit_simpan'); ?> 
<?php echo form_hidden('id',$this->uri->segment(3)); ?> 

      <div class="col-md-9" id="content"> <!--Awal Content -->
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12" style="padding-top: 20px;">


                        <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">PASSWORD LAMA</label>
                            <div class="col-md-7">
                                <input name="password_lama" placeholder="password" class="form-control" type="password">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">MASUKAN PASSWORD BARU</label>
                            <div class="col-md-7">
                                <input name="password_baru1" placeholder="password" class="form-control" type="password">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">MASUKAN ULANG PASSWORD BARU</label>
                            <div class="col-md-7">
                                <input name="password_baru2" placeholder="password" class="form-control" type="password">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <div class="btn1">
                          <button type="SUBMIT" class="btn btn-default" aria-label="Left Align" style="margin-left: 20px">
                          <span  aria-hidden="true">SIMPAN</span>
                          </button>
                        </div>

		              </div>
		          </div>
          </div>
	   </div>

<?php echo form_close(); ?>
     

