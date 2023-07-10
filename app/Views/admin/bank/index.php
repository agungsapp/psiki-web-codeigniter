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
                  <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 385.484px;">Soal</th>
                  <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 184.828px;">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data as $item) : ?>
                  <tr role="row" class="odd">
                    <td class="sorting_1"><?= $i++; ?></td>
                    <td><?= $item['soal']; ?></td>
                    <td>
                      <a href="#" class="btn btn-warning">Edit</a>
                      <a href="#" class="btn btn-danger text-white">Delete</a>
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

<!-- numpang wp -->

[fusion_table fusion_table_type="2" fusion_table_rows="2" fusion_table_columns="9" animation_type="" animation_direction="left" animation_speed="0.3" animation_offset="" hide_on_mobile="small-visibility,medium-visibility,large-visibility" class="" id=""]
<div class="table-1">
  <table width="100%">
    <thead>
      <tr>
        <th align="left">Column 1</th>
        <th align="left">Column 2</th>
        <th align="left">Column 3</th>
        <th align="left">Column 1</th>
        <th align="left">Column 2</th>
        <th align="left">Column 3</th>
        <th align="left">Column 1</th>
        <th align="left">Column 2</th>
        <th align="left">Column 3</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td align="left">Column 1 Value</td>
        <td align="left">Column 2 Value</td>
        <td align="left">Column 3 Value</td>
        <td align="left">Column 1 Value</td>
        <td align="left">Column 2 Value</td>
        <td align="left">Column 3 Value</td>
        <td align="left">Column 1 Value</td>
        <td align="left">Column 2 Value</td>
        <td align="left">Column 3 Value</td>
      </tr>
    </tbody>
  </table>
</div>
[/fusion_table]