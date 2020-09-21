<div class="content-wrapper">
    <section class="content-header">
        <h1>Tambah Mahasiswa</h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Mahasiswa</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <form role="form" method="post" action="pages/mahasiswa/tambah_mahasiswa_proses.php">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">NIM</label>
                                <input type="text" name="nim" class="form-control" placeholder="NIM" required>
                            </div>
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="">Kelas</label>
                                <select name="kelas" class="form-control" id="">
                                    <option value="">- Pilih Kelas -</option>
                                    <option value="Pagi">Pagi</option>
                                    <option value="Siang">Siang</option>
                                    <option value="Malam">Malam</option>
                                    <option value="Karyawan">Karyawan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Jurusan</label>
                                <select name="jurusan" class="form-control" id="">
                                    <option value="">- Pilih Jurusan -</option>
                                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                                    <option value="Sistem Informatika">Sistem Informatika</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Sistem Komputer">Sistem Komputer</option>
                                    <option value="Akutansi">Akutansi</option>
                                </select>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" title="Simpan Data"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>