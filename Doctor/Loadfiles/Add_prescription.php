
<!-- Form -->



<div class="panel panel-default">
    <div class="panel-body">
<div class="col-md-12">
    <!-- /.panel-heading -->
    <form name="form1" class="form-signin" method="post" id="form_add_p" action="Loadfiles/AddAppointmentSubmit.php" enctype="multipart/form-data">
        <div class="col-md-6">
            <div class="form-group">
                <label>Case_Histroy</label>
                <textarea class="form-control" id="Case_Histroy" name="Case_Histroy" rows="4" placeholder="Case_Histroy"></textarea>
            </div>
            <div class="form-group">
                <label>Medication</label>
                <textarea class="form-control" id="Medication" name="medication" rows="4" placeholder="Medication"></textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Note</label>
                <textarea class="form-control" id="Note" name="Note" rows="7" placeholder="Note"></textarea>
            </div>
            <button class="btn btn-lg btn-primary btn-block" name="submit" id="button_Add_p">Submit</button>
        </div>
        <?php
        $_POST['pname']=$patient->getUsername();
        $_POST['dname']=$doctor->getUsername();
        $_POST['id']=$id;
        ?>
    </form>
    </form>
    <!-- /.col-lg-12 -->
</div>
    </div>
</div>
