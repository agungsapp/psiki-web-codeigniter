<?= $this->extend('/admin/layouts/main'); ?>
<?= $this->section('content'); ?>


<div class="card">
  <div class="card-body">

    <div class="table-responsive">
      <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

        <div class="row">
          <div class="col-sm-12">
            <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="zero_config_info">
              <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 246.609px;">No</th>
                  <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 385.484px;">Gejala</th>
                  <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 385.484px;">Saran</th>
                  <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 184.828px;">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>

                <?php
                function cekGejala($kode)
                {
                  $nama = '';
                  switch ($kode) {
                    case 0:
                      $nama = "normal";
                      break;
                    case 1:
                      $nama = "gangguan kecemasan";
                      break;
                    case 2:
                      $nama = "gangguan mood";
                      break;
                    case 3:
                      $nama = "skizofrenia";
                      break;
                    case 4:
                      $nama = "gangguan makan";
                      break;
                    case 5:
                      $nama = "obsessive Complusive Disorder";
                      break;
                    case 6:
                      $nama = "gangguan kepribadian";
                      break;
                    case 7:
                      $nama = "attention deficit hyperactive disorder";
                      break;
                    case 8:
                      $nama = "depresi";
                      break;
                    case 9:
                      $nama = "tourette syndrome";
                      break;
                    default:
                      echo "Gejala tidak dikenali";
                      break;
                  };

                  return $nama;
                }
                ?>

                <?php foreach ($data as $item) : ?>





                  <tr role="row" class="odd">
                    <td class="sorting_1"><?= $i++; ?></td>
                    <td><?= $item->gejala_id . " | " . cekGejala($item->gejala_id) ?></td>
                    <td><?= $item->saran ?></td>
                    <td>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $item->saran_id; ?>">
                        Edit
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal<?= $item->saran_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Saran</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="/admin/simpanSaran" method="POST">
                              <?= csrf_field() ?>
                              <div class="modal-body">
                                <input type="hidden" name="ids" value="<?= $item->saran_id; ?>">
                                <input type="hidden" name="gejala" value="<?= $item->gejala_id; ?>">
                                <div class="mb-3">
                                  <label for="isisaran">Isi Saran</label>
                                  <div class="form-floating">
                                    <textarea name="isisaran" class="form-control" placeholder="Leave a comment here" id="isisaran" style="height: 100px"><?= $item->saran; ?></textarea>

                                  </div>
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