<div class="graphs">
    <h3 class="blank1">Malumot kiritish</h3>

    <div class="bs-example" data-example-id="form-validation-states-with-icons">
        <form enctype="multipart/form-data" method="post">
            <div class="form-group has-success has-feedback">
                <label class="control-label" >Yangilik mavzusi</label>
                <input type="text" value="<?= $data['item']['mavzu'] ?>" name="mavzu" class="form-control1">
            </div>

            <div class="form-group has-warning has-feedback">
                <label class="control-label">Yangilik matni</label>
                <textarea name="matn"  rows="10" cols="203"><?= $data['item']['matn'] ?></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputFile">Yangilik rasmi</label>
                <input type="file" name="rasm" value="<?= $data['item']['thumb'] ?>">
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <button type="submit" class="btn-success btn">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>