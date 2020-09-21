<?php
$query = mysql_query("SELECT * FROM mahasiswa WHERE id_mahasiswa='".$_GET['id']."'");
?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>Ubah Mahasiswa</h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"> Home</i></a></li>
            <li class="active">Ubah Mahasiswa</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box-primary">
                    <form role="form" method="post" action="pages/mahasiswa/ubah_mahasiswa_proses.php">
                        <div >

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>