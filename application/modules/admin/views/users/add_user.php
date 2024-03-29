          <div class="padd">
            <!-- Adding Errors -->
            <?php
            if(isset($error)){
                echo '<div class="alert alert-danger"> Oh snap! Change a few things up and try submitting again. </div>';
            }
            
            $validation_errors = validation_errors();
            
            if(!empty($validation_errors))
            {
                echo '<div class="alert alert-danger"> Oh snap! '.$validation_errors.' </div>';
            }
            ?>
            
            <?php echo form_open($this->uri->uri_string(), array("class" => "form-horizontal", "role" => "form"));?>
            <!-- First Name -->
            <div class="form-group">
                <label class="col-lg-4 control-label">First Name</label>
                <div class="col-lg-4">
                	<input type="text" class="form-control" name="first_name" placeholder="First Name" value="<?php echo set_value('first_name');?>">
                </div>
            </div>
            <!-- Other Names -->
            <div class="form-group">
                <label class="col-lg-4 control-label">Last Name</label>
                <div class="col-lg-4">
                	<input type="text" class="form-control" name="other_names" placeholder="Last Name" value="<?php echo set_value('other_names');?>">
                </div>
            </div>
            <!-- Email -->
            <div class="form-group">
                <label class="col-lg-4 control-label">Email</label>
                <div class="col-lg-4">
                	<input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('email');?>">
                </div>
            </div>
            <!-- Password -->
            <div class="form-group">
                <label class="col-lg-4 control-label">Password</label>
                <div class="col-lg-4">
                	<input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo set_value('password');?>">
                </div>                
            </div>
            <!-- State -->
            <div class="form-group">
                <label class="col-lg-4 control-label">School</label>
                <div class="col-lg-4">
                    <select name="school_id" id="school_id" class="form-control" required>
                        <?php
                        if($schools->num_rows() > 0)
                        {
                            $result = $schools->result();
                            
                            foreach($result as $res)
                            {
                                if($res->school_id == set_value('school_id'))
                                {
                                    echo '<option value="'.$res->school_id.'" selected>'.$res->school_name.'</option>';
                                }
                                else
                                {
                                    echo '<option value="'.$res->school_id.'">'.$res->school_name.'</option>';
                                }
                            }
                        }
                        ?>
                    </select>
                </div>
            </div> 
            <!-- User Level -->
            <div class="form-group">
                <label class="col-lg-4 control-label">User Type</label>
                <div class="col-lg-4">
                    <select name="user_type_id" class="form-control">
                        <option value="0">Administrator</option>
						<?php
                        if($user_types->num_rows() > 0)
                        {
                            $result = $user_types->result();
                            
                            foreach($result as $res)
                            {
                                if($res->user_type_id == set_value('user_type_id'))
                                {
                                    echo '<option value="'.$res->user_type_id.'" selected>'.$res->user_type_name.'</option>';
                                }
                                else
                                {
                                    echo '<option value="'.$res->user_type_id.'">'.$res->user_type_name.'</option>';
                                }
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <!-- Activate checkbox -->
            <div class="form-group">
                <label class="col-lg-4 control-label">Activate User?</label>
                <div class="col-lg-4">
                    <div class="radio">
                        <label>
                            <input id="optionsRadios1" type="radio" checked value="1" name="activated">
                            Yes
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input id="optionsRadios2" type="radio" value="0" name="activated">
                            No
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-actions center-align">
                <button class="submit btn btn-primary" type="submit">
                    Add User
                </button>
            </div>
            <br />
            <?php echo form_close();?>
		</div>