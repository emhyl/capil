<div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Vertical Form</div>
           <hr>
            <form action="<?= base_url('admin/data_master/home/edit/'.$id) ?>" method="post">
              <?= $input ?>
           <div class="form-group">
            <button type="submit" name="btn-save" class="btn btn-light px-5"><i class="zmdi zmdi-square-down"></i> save</button>
          </div>
          </form>
         </div>
         </div>
      </div>
    </div><!--End Row-->

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->