<form action="#" id="formadd" method="POST" role="form">
    <legend>Form Edit</legend>

    <div class="form-group">
        <label for="">Judul</label>
        <input type="hidden" name="id" value='<?= $id ?>' required class="form-control" id="" placeholder="Input field">
        <input type="text" name="judul" value='<?= $judul ?>' required class="form-control" id="" placeholder="Input field">
    </div>
    <div class="form-group">
        <label for="">Sinopsis</label>
        <input type="text" name="sinopsis" value='<?= $sinopsis ?>' required class="form-control" id="" placeholder="Input field">
    </div>
    <div class="form-group">
        <label for="">Penulis</label>
        <input type="text" name="penulis" value='<?= $penulis ?>' required class="form-control" id="" placeholder="Input field">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <button type="reset" class="btn btn-danger">Cancel</button>
</form>


<script type="text/javascript">
    $("#formadd").submit(function(e) {
        var data = $(this).serialize();
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "<?= base_url('home/updatebuku') ?>",
            data: data,
            success: function(response) {
                alert(response);
                reloadtable();
                loadformadd();
            }
        });
    });
</script>