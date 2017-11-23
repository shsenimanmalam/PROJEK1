
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">

    <div class=col-md-9 id="content">

        <button class="btn btn-success" id="btnn" onclick="add_siswa()"><i class="glyphicon glyphicon-plus"></i> TAMBAH SISWA</button>
        <button class="btn btn-default" id="btnn2" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> REFRESH</button>
        <br />
        <br />

        <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">

            <thead>
                <tr>
                    <th>NIS</th>
                    <th>NAMA SISWA</th>
                    <th>JENIS KELAMIN</th>
                    <th>KELAS</th>
                    <th>TEMPAT LAHIR</th>
                    <th>TANGGAL LAHIR</th>
                    <th>NAMA ORANG TUA</th>
                    <th>TAHUN</th>
                    <th style="width:125px;">Action</th>
                </tr>
            </thead>

            <tbody>
            </tbody>

            <tfoot>
            <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                <th></th>
            </tr>
            </tfoot>

        </table>

        <script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>


<script type="text/javascript">

var save_method; //for save method string
var table;

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('index.php/siswa/ajax_list')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });

    //datepicker
    $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
        todayHighlight: true,  
    });

});



function add_siswa()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('TAMBAH SISWA'); // Set Title to Bootstrap modal title
}

function edit_siswa(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('index.php/siswa/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="nis"]').val(data.nis);
            $('[name="nama_siswa"]').val(data.nama_siswa);
            $('[name="jenis_kelamin"]').val(data.jenis_kelamin);
            $('[name="kelas"]').val(data.kelas);
            $('[name="tempat_lahir"]').val(data.tempat_lahir);
            $('[name="tanggal_lahir"]').datepicker('update'.tanggal_lahir);
            $('[name="nama_orang_tua"]').val(data.nama_orang_tua);
            $('[name="tahun"]').val(data.tahun);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit siswa'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}

function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;

    if(save_method == 'add') {
        url = "<?php echo site_url('index.php/siswa/ajax_add')?>";
    } else {
        url = "<?php echo site_url('index.php/siswa/ajax_update')?>";
    }

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                reload_table();
            }

            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

        }
    });
}

function delete_siswa(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('index.php/siswa/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}

</script>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">SISWA FORM</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 


                        <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">NIS</label>
                            <div class="col-md-7">
                                <input name="nis" placeholder="NIS" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">NAMA SISWA</label>
                            <div class="col-md-7">
                                <input name="nama_siswa" placeholder="NAMA SISWA" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">JENIS KELAMIN</label>
                            <div class="col-md-7">
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="">--Select Gender--</option>
                                    <option value="L">LAKI - LAKI</option>
                                    <option value="P">PEREMPUAN</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">KELAS</label>
                            <div class="col-md-7">
                                <input name="kelas" placeholder="KELAS" class="form-control"></textarea>
                                <span class="help-block"></span>
                            </div>
                        </div><div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">TEMPAT LAHIR</label>
                            <div class="col-md-7">
                                <input name="tempat_lahir" placeholder="TEMPAT LAHIR" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">TANGGAL LAHIR</label>
                            <div class="col-md-7">
                                <input name="tanggal_lahir" placeholder="TANGGAL LAHIR" class="form-control datepicker" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">NAMA ORANG TUA</label>
                            <div class="col-md-7">
                                <input name="nama_orang_tua" placeholder="NAMA ORANG TUA" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" style="text-align: left;">TAHUN</label>
                            <div class="col-md-7">
                                <input name="tahun" placeholder="TAHUN" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->    


    </div>

