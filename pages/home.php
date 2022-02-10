<?php include 'header.php' ?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Prime number</div>
                    <div class="card-body">

                        <form method="POST" action="action.php" >
                            <div class="form-group row">
                                <label class="col-md-3">Enter number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="given_number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo isset($result) ? $result : ''; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-block btn-outline-success" name="btn" value="submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php' ?>
