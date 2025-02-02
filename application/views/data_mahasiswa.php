<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Mahasiswa</title>
    <style>
      body {
        background-color:rgb(178, 210, 243); 
      }
      .card {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }
      .card-header {
        background-color: #007bff;
        color: white;
        font-weight: bold;
      }
      .table-hover tbody tr:hover {
        background-color: #f1f1f1;
      }
    </style>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header text-center">
              DATA MAHASISWA
            </div>
            <div class="card-body">
              <a href="<?php echo base_url() ?>index.php/mahasiswa/tambah" class="btn btn-md btn-success mb-3">+ TAMBAH DATA</a>
              <table class="table table-bordered table-hover" id="myTable">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NPM</th>
                    <th scope="col">NAMA LENGKAP</th>
                    <th scope="col">JURUSAN</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col" class="text-center">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $no = 1;
                    foreach($data_mahasiswa as $mahasiswa) { ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $mahasiswa->npm ?></td>
                      <td><?php echo $mahasiswa->nama_lengkap ?></td>
                      <td><?php echo $mahasiswa->jurusan ?></td>
                      <td><?php echo $mahasiswa->alamat ?></td>
                      <td class="text-center">
                        <a href="<?php echo base_url() ?>index.php/mahasiswa/edit/<?php echo $mahasiswa->id ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="#" onclick="confirmDelete('<?php echo base_url() ?>index.php/mahasiswa/hapus/<?php echo $mahasiswa->id ?>')" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
        $('#myTable').DataTable({
          "language": {
            "search": "Cari:",
            "lengthMenu": "Tampilkan _MENU_ data",
            "info": "Menampilkan _START_ hingga _END_ dari _TOTAL_ data",
            "paginate": {
              "first": "Pertama",
              "last": "Terakhir",
              "next": "Berikutnya",
              "previous": "Sebelumnya"
            }
          }
        });
      });

      function confirmDelete(url) {
        if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
          window.location.href = url;
        }
      }
    </script>
  </body>
</html>
