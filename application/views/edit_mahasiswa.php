<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Mahasiswa</title>
    <style>
      body {
        background-color:rgb(178, 210, 243); ;
      }
      .card {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }
      .card-header {
        background-color: #007bff;
        color: white;
        font-weight: bold;
        text-align: center;
      }
      .form-control {
        border-radius: 8px;
      }
      button {
        border-radius: 8px;
      }
    </style>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT MAHASISWA
            </div>
            <div class="card-body">
              <form action="<?php echo base_url() ?>index.php/mahasiswa/update" method="POST">
                
                <div class="form-group">
                  <label>NPM</label>
                  <input type="text" name="npm" value="<?php echo $data_mahasiswa->npm ?>" placeholder="Masukkan NPM" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $data_mahasiswa->id ?>">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" value="<?php echo $data_mahasiswa->nama_lengkap ?>" placeholder="Masukkan Nama Lengkap" class="form-control">
                </div>

                <div class="form-group">
                  <label>Jurusan</label>
                  <input type="text" name="jurusan" value="<?php echo $data_mahasiswa->jurusan ?>" placeholder="Masukkan Jurusan" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Mahasiswa" rows="4"><?php echo $data_mahasiswa->alamat ?></textarea>
                </div>
                <div class="d-flex justify-content-between">
                <a href="<?php echo base_url() ?>index.php/mahasiswa" class="btn btn-primary">KEMBALI</a>    
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>