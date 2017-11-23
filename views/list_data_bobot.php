  <!-- Link Bootstrap --> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Datat table -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<?php echo form_open('http://localhost/projek/index.php/data_bobot/edit_simpan'); ?>
<?php echo form_hidden('id',$this->uri->segment(3)); ?>

      <div class="col-md-9" id="content"> <!--Awal Content -->
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12" style="padding-top: 20px;">

                        <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">PRESTASI</label>
                            <div class="col-md-7">
                                <input name="prestasi" placeholder="PRESTASI" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">KEDISIPLINAN</label>
                            <div class="col-md-7">
                                <input name="kedisiplinan" placeholder="KEDISIPLINAN" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">KEHADIRAN</label>
                            <div class="col-md-7">
                                <input name="kehadiran" placeholder="KEHADIRAN" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">STANDAR TOTAL BOBOT</label>
                            <div class="col-md-7">
                                <input name="stbobot" placeholder="STANDAR TOTAL BOBOT" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="btn1">
                          <button type="SUBMIT" class="btn btn-default" aria-label="Left Align" style="margin-left: 20px">
                          <span  aria-hidden="true">SIMPAN</span>
                          </button>
                        </div>
              		  

                    <table class="table table-bordered " style="margin-top: 30px" >
                      
                      <thead style="background-color:#004d40" >
                        <tr style="color: white; text-align:right;" >
                          <th>PRESTASI</th>
                          <th>KEDISIPLINAN</th>
                          <th>KEHADIRAN</th>
                          <th>STANDAR TOTAL BOBOT</th>
                        </tr>                        
                      </thead>

                        <?php
                          foreach ($data_bobot as $db) {
                            echo "<tr>
                            <td>$db->prestasi</td>
                            <td>$db->kedisiplinan</td>
                            <td>$db->kehadiran</td>
                            <td>$db->stbobot</td>
                            </tr>";
                          }
                          ?>
                    </table>

		              </div>
		          </div>
          </div>
	   </div>

<?php echo form_close(); ?>
     

