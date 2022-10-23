
<div class="content-wrapper">
    <div class="container-fluid">
     
      <div class="row mt-3">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card-title">Data Admin</h5>
                <h5 class="card-title"><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">Tambah <i class="zmdi zmdi-plus-square"></i></button></h5>
              </div>
              <div class="alert alert-success" role="alert">
                <?= $this->session->flashdata('sukses_delete') ?>
                <?= $this->session->flashdata('sukses_edit') ?>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content" style="background: transparent;">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah data</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                      <div class="col-12">
                        <div class="card">
                           <div class="card-body">
                           <hr>
                            <form action="<?= base_url('admin/data_master/add') ?>" method="post">
                              <?= $table_input ?>
                           
                           <div class="form-group">
                            <button type="submit" name="btn-add" class="btn btn-light btn-round px-5"><i class="zmdi zmdi-plus-square"></i> Tambah</button>
                          </div>
                          </form>
                         </div>
                         </div>
                      </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>


              <div class="table-responsive">
               <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">NO</th>
                      <?php foreach($table_field as $rowField ){?>
                        <th scope="col"><?= $rowField ?></th>
                      <?php }?>
                        <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($table as $key => $rowTbl){?>
                      <tr>
                        <th scope="row"><?= ++$key ?></th>
                        <?php foreach($table_field as $subField ){?>
                          <td><?= $rowTbl[$subField] ?></td>
                        <?php }?>
                          <td>
                            <a href="<?= base_url('admin/data_master/delete/'.$rowTbl['id']) ?>" class="badge bg-danger"><i class="zmdi zmdi-block-alt"> hapus</i></a> / 
                            <a href="<?= base_url('admin/data_master/edit/'.$rowTbl['id']) ?>" class="badge bg-info"><i class="zmdi zmdi-brush"> edit</i></a>
                          </td>
                      </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        
      </div><!--End Row-->
