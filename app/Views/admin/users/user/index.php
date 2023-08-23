<?= $this->extend('/admin/layouts/main'); ?>
<?= $this->section('content'); ?>


<div class="card">
  <div class="card-body">

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- /modal add -->
    <div class="table-responsive">
      <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

        <div class="row">
          <div class="col-sm-12">
            <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="zero_config_info">
              <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">nama</th>
                  <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">username</th>
                  <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">email</th>
                  <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Umur</th>
                  <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending">Phone</th>
                  <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($users as $item) : ?>
                  <tr role="row" class="odd">
                    <td class="sorting_1"><?= $item->first_name . " " . $item->last_name; ?></td>
                    <td><?= $item->username; ?></td>
                    <td><?= $item->email; ?></td>
                    <td><?= $item->umur; ?></td>
                    <td><?= $item->phone; ?></td>
                    <td>

                      <!-- Button  edit modal -->
                      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $item->id ?>">
                        Edit
                      </button>

                      <!-- <a href="" class="btn btn-danger text-white">Delete</a> -->
                      <!-- Button trigger modal delete -->
                      <button type="button" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#modalDelete<?= $item->id ?>">
                        Delete
                      </button>
                      <!-- Button trigger modal reset -->
                      <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalReset<?= $item->id ?>">
                        Reset
                      </button>

                      <!-- Modal reset -->
                      <div class="modal fade" id="modalReset<?= $item->id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="staticBackdropLabel">Reset data jawaban</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p>yakin akan menghapus seluruh data jawaban <?= $item->first_name . " " . $item->last_name; ?> ?</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <a href="reset/<?= $item->id; ?>" class="btn btn-primary">Ya</a>
                            </div>
                          </div>
                        </div>
                      </div>


                      <!-- Modal delete-->
                      <div class="modal fade" id="modalDelete<?= $item->id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="staticBackdropLabel">Yakin ?</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p>yakin akan menghapus data <?= $item->first_name . " " . $item->last_name; ?> ?</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <a href="deleteUsers/<?= $item->id; ?>" class="btn btn-primary">Yakin</a>
                            </div>
                          </div>
                        </div>
                      </div>


                      <!-- Modal edit -->
                      <div class="modal fade" id="modalEdit<?= $item->id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="staticBackdropLabel">Form Edit</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="updateUsers" method="post">
                              <div class="modal-body">
                                <?= csrf_field(); ?>
                                <div class="modal-body">
                                  <!-- hidden id -->
                                  <input type="hidden" name="ids" value="<?= $item->id ?>">

                                  <!-- first name -->
                                  <div class="mb-3">
                                    <label for="namadepan" class="form-label">Nama depan</label>
                                    <input type="text" class="form-control" id="namadepan" name="namadepan" placeholder="masukan nama depan ..." value="<?= $item->first_name; ?>">
                                  </div>

                                  <!-- last name -->
                                  <div class="mb-3">
                                    <label for="namabelakang" class="form-label">Nama belakang</label>
                                    <input type="text" class="form-control" id="namabelakang" name="namabelakang" placeholder="masukan nama belakang ..." value="<?= $item->last_name; ?>">
                                  </div>

                                  <!-- username -->
                                  <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="masukan username ..." value="<?= $item->username; ?>">
                                  </div>

                                  <!-- email -->
                                  <div class="mb-3">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="masukan email ..." value="<?= $item->email; ?>">
                                  </div>

                                  <!-- umur -->
                                  <div class="mb-3">
                                    <label for="umur" class="form-label">Umur</label>
                                    <input type="number" class="form-control" id="umur" name="umur" placeholder="masukan umur ..." value="<?= $item->umur; ?>">
                                  </div>

                                  <!-- nomor -->
                                  <div class="mb-3">
                                    <label for="phone" class="form-label">No. Telp</label>
                                    <input type="number" class="form-control" id="phone" name="phone" placeholder="masukan nomor telepon ..." value="<?= $item->phone; ?>">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                <?php endforeach ?>

              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>