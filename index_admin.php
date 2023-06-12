<html>

<head>
    <title>Portal Berita</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" type="text/css" />

    <link rel="stylesheet" href="<?= base_url() ?>admin/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <h3>Buku Tamu</h3>
   <br>
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Judul</th>
                    <th>Isi Pesan</th>
                    <th>Tanggal Kirim</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1;
        foreach ($bukutamu as $row) : ?>
         <tr>
        <td><?= $no ?></td>
        <td><?= $row->nama; ?></td>
        <td><?= $row->email; ?></td>
        <td><?= $row->judul; ?></td>
        <td><?= $row->isi_bukutamu; ?></td>
        <td><?= $row->tanggal_kirim; ?></td>
        <td><a href="">hapus</a></td>
    </tr> 

<?php
    $no++;
endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Judul</th>
                    <th>Isi Pesan</th>
                    <th>Tanggal Kirim</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>

    </div>


    <!-- Modal Add -->
    <form action="/berita/save" method="post">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add berita</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label>judul</label>
                            <input type="text" class="form-control" name="judul" placeholder="judul berita">
                        </div>

                        <div class="form-group">
                            <label>Isi Berita</label>
                            <textarea class="form-control" placeholder="isi berita" name="isi"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End Modal Add -->


    <script src="<?= base_url() ?>admin/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>admin/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>
