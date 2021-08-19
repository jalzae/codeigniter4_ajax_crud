<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Sinopsis</th>
            <th>Penulis</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($buku as $obj) {
        ?>
            <tr>
                <td> <?= $no++ ?> </td>
                <td> <?= $obj->judul ?> </td>
                <td><?= $obj->sinopsis ?> </td>
                <td><?= $obj->penulis ?> </td>
                <td>
                    <button type="button" value='<?= $obj->id ?>' class="deletethis btn btn-danger">Delete</button>
                    <br>
                    <button type="button" value='<?= $obj->id ?>' class="editthis btn btn-primary">Edit</button>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<script type="text/javascript">
    $(".editthis").click(function(e) {
        var id = $(this).attr('value');
        $.ajax({
            type: "POST",
            url: "<?= base_url('home/detailbuku') ?>",
            data: {
                id: id
            },
            success: function(response) {
                window.location.href = "#";
                $("#replaceform").html(response);
            }
        });
    });
    $(".deletethis").click(function(e) {
        var id = $(this).attr('value');
        $.ajax({
            type: "POST",
            url: "<?= base_url('home/deletebuku') ?>",
            data: {
                id: id
            },
            success: function(response) {
                window.location.href = "#";
                reloadtable();
            }
        });
    });
</script>