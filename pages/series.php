<?php include 'header.php'?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center" >Sum of series</div>
                    <div class="card-body">

<!--//   ?php //session_start(); unset($_SESSION['name']); ?> unsend kora-->

                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-md-3">starting Number</label>
                                <div class="col-md-9">
                                    <input type="number" required class="form-control" name="starting_number" value="<?php echo isset($result['starting_number']) ? $result['starting_number'] : ''; ?>"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Ending Number</label>
                                <div class="col-md-9">
                                    <input type="number" required class="form-control" name="ending_number" value="<?php echo isset($result['ending_number']) ? $result['ending_number'] : ''; ?>"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" cols="30" rows="10"><?php echo isset($result['result']) ? $result['result'] : ''; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-block btn-outline-success" name="series_btn" value="submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include 'footer.php'?>
