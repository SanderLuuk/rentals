<link href="assets/Components/Pikaday/css/pikaday.css" rel="stylesheet" type="text/css" />
<form method="post" role="form">

    <div class="form-group">
        <input type="text" class="form-control" name="" id="" placeholder="<?= __('Destination') ?>">
        <input type="text" id="datepicker">
        <input type="text" id="datepicker">


    </div>



    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src="assets/Components/Pikaday/pikaday.js"></script>
<script>
    var picker = new Pikaday({ field: document.getElementById('datepicker') });
</script>
