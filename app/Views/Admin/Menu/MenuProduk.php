<?= $this->extend('Admin/Layout/AdminHeader');?>

<!-- Menu -->

<?= $this->section('content');?>
<div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Kategori</h6>
              <button id="btnTambahProduk1" class="btn btn-sm btn-primary">Tambah Produk</button>
              
            </div>
            <!-- Form Tambah Produk (Disembunyikan Awalnya) -->
    <div id="formTambahProduk" class="card-body" style="display: none;">
        <form action="<?= base_url('admin/tambah_produk') ?>" method="post">
            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" required>
            </div>
            <button type="submit" class="btn btn-success mt-2">Simpan</button>
        </form>
      </div> 
      <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                      <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th> -->
                      <!-- <th class="text-secondary opacity-7"></th> -->
                    </tr>
                  </thead>
                 
                 
                  <tbody>
                    <?php $nomor =1;
                    foreach($dataProduk as $row):
                    ?>
                  <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <?= $nomor++;  ?>
                        </div>
                      </td>
              
                      <td class="">
                        <?= $row['product_name'];?>
                      </td>
                    
                      <td class="text-center">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Delete
                        </a>
                      </td>
                    </tr>

                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <script>
  document.getElementById('btnTambahProduk1').addEventListener('click', function () {
    const form = document.getElementById('formTambahProduk');
    form.style.display = form.style.display === 'none' ? 'block' : 'none';
  });
  </script>
<?= $this->endSection();?>

<?= $this->include('Admin/Layout/AdminMenu');?>

<?= $this->include('Admin/Layout/AdminFoter');?>

