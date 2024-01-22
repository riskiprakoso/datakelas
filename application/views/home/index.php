<div class="container">
  <div class="row">
    <h3>Table Kelas</h3>
    <div class="col-md">
    <table class="table table-striped" id="example">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">nama siswa</th>
          <th scope="col">jenis gender</th>
          <th scope="col">alamat</th>
          <th scope="col">nama kelas</th>
        </tr>
      </thead>
      <tbody>
        <?php $i=0; foreach($datakelas as $dk):?>
        <tr>
          <th scope="row"><?= ++$i ?></th>          
          <td><?= $dk["Nama_Siswa"] ?></td>
          <td><?= $dk["Gender"] ?></td>
          <td><?= $dk["Alamat"] ?></td>
          <td><?= $dk["Nama_kelas"] ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>`
    </div>
  </div>
</div>
    