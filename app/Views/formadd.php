<form action="#" id="formadd" method="POST" role="form">
    <legend>Form Buku</legend>

    <div class="form-group">
        <label for="">Judul</label>
        <input type="text" name="judul" required class="form-control" id="" placeholder="Input field">
    </div>
    <div class="form-group">
        <label for="">Sinopsis</label>
        <input type="text" name="sinopsis" required class="form-control" id="" placeholder="Input field">
    </div>
    <div class="form-group">
        <label for="">Penulis</label>
        <input type="text" name="penulis" required class="form-control" id="" placeholder="Input field">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-danger">Cancel</button>
</form>


<script type="text/javascript">
    $("#formadd").submit(function(e) {
        var data = $(this).serialize();
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "<?= base_url('home/createbuku') ?>",
            data: data,
            success: function(response) {
                alert(response);
                reloadtable();
                $("#formadd")[0].reset();
            }
        });
    });
</script>