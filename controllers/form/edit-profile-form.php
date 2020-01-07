<form action="components/update-profile.php" method="post" enctype="multipart/form-data" id="UploadForm">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
      <li class="active"><a href="#general" data-toggle="tab">General</a></li>
      <li><a href="#personal" data-toggle="tab">Personal</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade in active" id="general">
            <div class="col-md-6">
                <div class="form-group float-label-control">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['FirstName'];?>" name="FirstName" value="<?php echo $rws['FirstName'];?>">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Last Name</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['LastName'];?>" name="LastName" value="<?php echo $rws['LastName'];?>">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Avatar</label>
                    <input name="ImageFile" type="file" id="uploadFile"/>
                    <div class="col-md-6">
                        <div class="shortpreview">
                            <label for="">Previous Avatar </label>
                            <br>
                            <img src="userfiles/avatars/<?php echo $rws['user_avatar'];?>" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="shortpreview" id="uploadImagePreview">
                            <label for="">Current Uploaded Avatar </label>
                            <br>
                            <div id="imagePreview"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <label for="">Username</label>
                <div class="form-group float-label-control">
                    <a href="http://<?php echo $rws['domain_websiteaddress'];?>/<?php echo $rws['username'];?>">
                        <div class="input-group">
                            <span class="input-group-addon">http://<?php echo $rws['username'];?>/</span>
                            <fieldset disabled>
                                <input type="text" class="form-control" placeholder="<?php echo $rws['username'];?>" name="username" value="<?php echo $rws['username'];?>" id="disabledTextInput" autocomplete="off">
                            </fieldset>
                        </div>
                    </a>
                </div>
                <div class="form-group float-label-control">
                    <label for="">Password</label>
                    <input type="password" class="form-control" placeholder="<?php echo $rws['password'];?>" name="password" value="<?php echo $rws['password'];?>">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Email</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['email'];?>" name="email" value="<?php echo $rws['email'];?>">
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="personal">
            <div class="col-md-6">
                <div class="form-group float-label-control">
                    <label for="">Short Bio</label>
                    <textarea class="form-control" placeholder="<?php echo $rws['user_shortbio'];?>" rows="10" placeholder="<?php echo $rws['user_shortbio'];?>" name="user_shortbio" value="<?php echo $rws['user_shortbio'];?>"><?php echo $rws['user_shortbio'];?></textarea>
                </div>
                <div class="form-group float-label-control">
                    <label for="">Birthday</label>
                    <input type="date" class="form-control" placeholder="<?php echo $rws['user_dob'];?>" name="user_dob" value="<?php echo $rws['user_dob'];?>">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Profession</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_profession'];?>" name="user_profession" value="<?php echo $rws['user_profession'];?>" id="profession">
                </div>
                <label for="">Gender</label>
                <div class="form-group float-label-control">
                    <div class="radio-inline">
                        <label>
                            <input type="radio" name="user_gender" id="optionsRadios1" value="Male" checked>Male</label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input type="radio" name="user_gender" id="optionsRadios1" value="Female">Female</label>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="form-group float-label-control">
                    <label for="">Address</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_address'];?>" name="user_address" value="<?php echo $rws['user_address'];?>">
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="submit">
        <center>
            <button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />Save Your Profile</button>
        </center>
    </div>
</form>
