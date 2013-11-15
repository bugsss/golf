<div id="introCellWrapper">
    <div id="spacer1"></div>
    <div id="spacer2"></div>

    <div id="add_score_layer" style="display: none;">
        <form id="add_score_form" name="add_score" action="/main_dev.php/members.html" method="post">
            <fieldset>
                <input type="hidden" name="sf_method" value="put">
                <?php echo $sform->renderGlobalErrors() ?>
                <?php echo $sform->renderHiddenFields() ?>
                <div class="" style="padding-top:15px">
                    <?php echo $sform['score_date']->renderLabel('Date') ?>
                    <?php echo $sform['score_date']->renderError() ?>
                    <div class="" style="margin-top: -20px;"><?php echo $sform['score_date'] ?></div>
                </div>
                <div class="" style="padding-top:15px">
                    <?php echo $sform['state']->renderLabel('State') ?>
                    <?php echo $sform['state']->renderError() ?>
                    <div class="" style="margin-top: -20px;"><?php echo $sform['state'] ?></div>
                </div>
                <div class="" style="padding-top:15px">
                    <?php echo $sform['course']->renderLabel('Course') ?>
                    <?php echo $sform['course']->renderError() ?>
                    <div class="" style="margin-top: -20px;">
                        <img src="../images/loader5.gif" border="0" style="display:none; margin-left: 155px;" id="course_loader"/>
                        <?php echo $sform['course'] ?>
                    </div>
                </div>
                <div class="" style="padding-top:15px">
                    <?php echo $sform['teese']->renderLabel('Tees') ?>
                    <?php echo $sform['teese']->renderError() ?>
                    <div class="" style="margin-top: -20px;">
                        <img src="../images/loader5.gif" border="0" style="display:none; margin-left: 155px;" id="teese_loader"/>
                        <?php echo $sform['teese'] ?>
                    </div>
                </div>
                <div class="" style="padding-top:15px">
                    <?php echo $sform['score']->renderLabel('Score') ?>
                    <?php echo $sform['score']->renderError() ?>
                    <div class="" style="margin-top: -20px;"><?php echo $sform['score'] ?></div>
                </div>
            </fieldset>
        </form>
    </div>
    
    <div id="add_foto_layer" style="display: none;">
        <form class="fotoForm" action="/main_dev.php/members.html<?php //echo url_for('@register') ?>" method="post" id="foto_form" enctype='multipart/form-data'>
            <fieldset>
                <input type="hidden" name="sf_method" value="put">
                <?php echo $fform->renderGlobalErrors() ?>
                <?php echo $fform->renderHiddenFields() ?>
                <div class="" style="margin-top:30px; margin-bottom:30px;">
                    <?php echo $fform['image']->renderLabel(' ') ?>
                    <?php echo $fform['image']->renderError() ?>
                    <div class=""><?php echo $fform['image'] ?></div>
                </div>
            </fieldset>
        </form>
    </div>
    
    <div id="profilePictureColumn">
        <div id="profilePictureCanvas">

            <div id="profilePicture">
                <img src="<?php echo ( trim($user->getImage()) != "" ? "../uploads/assets/pimages/" . $user->getImage() : "../images/defaultProfilePicture.jpg") ?>" border="0" style="width: 100%;"/>
            </div><!--End profilePicture-->

            <div id="playerNameAndHandicapWrapper">
                <div id="playerName">
                    <?php echo $user->getFullName(); ?>
                </div><!--End playerName-->

                <div id="handicap">
                    <?php echo $user->getHandicap(); ?>
                </div><!--End handicap-->
            </div><!--End playerNameAndHandiCapWrapper-->

            <div id="cityState">
                <?php echo $user->getAddress(); ?>
            </div><!--End cityState-->

            <div id="homeGolfCourse">
                <?php echo $user->getHomeCourseName(); ?>
            </div><!--End homeGolfCourse"-->

        </div><!--End profilePictureCanvas-->
    </div><!--End ProfilePictureColumn-->


    <div id="formColumn">
        <div id="container">
            <ul class="tabs">
                <li><a href="#Score" id="tab_score">SCORE</a></li>
                <li><a href="#Friends" id="tab_friends">FRIENDS</a></li>
                <li><a href="#Account" id="tab_account">ACCOUNT</a></li>
                <li><a href="#Password" id="tab_password">PASSWORD</a></li>
                <li><a href="#SubmitCourse" id="tab_scourse">SUBMIT A COURSE</a></li>
                
            </ul>

            <div id="Score" class="whiteBackground">
                <div id="scores_div" style=" height: 358px; margin-top: 5px; overflow: auto; width: 96%;">
                    <img src="../images/loading.gif" border="0" style="margin-left: auto; margin-right: auto; display: block; margin-top: 125px;"/>
                </div>
                <div class="">
                    <input id="add_score_button" name="add_score_button" type="button" value="Add Score" class="customButton" style="width: 130px !important; height: 35px !important;"/>
                </div>
            </div>

            <div id="Friends" class="whiteBackground">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>

            <div id="Account" class="whiteBackground">
                <form class="customProfileForm" action="/main_dev.php/members.html<?php //echo url_for('@register') ?>" method="post" id="profile_form">
                    <fieldset>
                        <input type="hidden" name="sf_method" value="put">
                        <?php echo $pform->renderGlobalErrors() ?>
                        <?php echo $pform->renderHiddenFields() ?>
                        <div class="profileform_cell">
                            <?php echo $pform['first_name']->renderLabel('First name') ?>
                            <?php echo $pform['first_name']->renderError() ?>
                            <div class=""><?php echo $pform['first_name'] ?></div>
                        </div>
                        <div class="profileform_cell">
                            <?php echo $pform['last_name']->renderLabel('Last name') ?>
                            <?php echo $pform['last_name']->renderError() ?>
                            <div class=""><?php echo $pform['last_name'] ?></div>
                        </div>
                        <div class="profileform_cell">
                            <?php echo $pform['email']->renderLabel('Email') ?>
                            <?php echo $pform['email']->renderError() ?>
                            <div class=""><?php echo $pform['email'] ?></div>
                        </div>
                        <div class="profileform_cell">
                            <?php echo $pform['gender']->renderLabel('Gender') ?>
                            <?php echo $pform['gender']->renderError() ?>
                            <div class=""><?php echo $pform['gender'] ?></div>
                        </div>
                        <div class="profileform_cell">
                            <?php echo $pform['state']->renderLabel('State') ?>
                            <?php echo $pform['state']->renderError() ?>
                            <div class=""><?php echo $pform['state'] ?></div>
                        </div>
                        <div class="profileform_cell">
                            <?php echo $pform['city']->renderLabel('City') ?>
                            <?php echo $pform['city']->renderError() ?>
                            <div class=""><?php echo $pform['city'] ?></div>
                        </div>
<!--                        <div class="profileform_cell">
                            <?php //echo $pform['handicap']->renderLabel('Handicap') ?>
                            <?php// echo $pform['handicap']->renderError() ?>
                            <div class=""><?php //echo $pform['handicap'] ?></div>
                        </div>-->
                        <div class="profileform_cell">
                            <?php echo $pform['home_course_name']->renderLabel('Home Golf Course') ?>
                            <?php echo $pform['home_course_name']->renderError() ?>
                            <div class="">
                                <img src="../images/loader5.gif" border="0" style="display:none;" id="home_course_loader"/>
                                <?php echo $pform['home_course_name'] ?>
                            </div>
                        </div>
                        <div class="profileform_cell">
                            <input name="Submit" type="submit" value="Submit" class="customButton"/>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div id="Password" class="whiteBackground">
                <form class="customProfileForm" action="/main_dev.php/members.html<?php //echo url_for('@register') ?>" method="post" id="credential_form">
                    <fieldset>
                        <input type="hidden" name="sf_method" value="put">
                        <?php echo $cform->renderGlobalErrors() ?>
                        <?php echo $cform->renderHiddenFields() ?>
                        <?php if( isset( $c_errors ) ): ?>
                            <?php if( count( $c_errors ) > 0 ): ?>
                                <?php foreach( $c_errors as $field => $error) : ?>
                                        <span style="color: red"><?php echo ucwords( str_replace("_", " ", $field) ) . ": " . $error ?></span><br/>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <span style="color: green;">Password successfully changed.</span>
                            <?php endif; ?>
                        <?php endif; ?>
                        <div class="">
                            <?php echo $cform['old_password']->renderLabel('Old Password') ?>
                            <div class=""><td align="left" width="50%"><?php echo $cform['old_password'] ?></div>
                        </div>
                        <div class="">
                            <?php echo $cform['new_password']->renderLabel('New Password') ?>
                            <div class=""><?php echo $cform['new_password'] ?></div>
                        </div>
                        <div class="">
                            <?php echo $cform['confirm_password']->renderLabel('Confirm New Password') ?>
                            <div class=""><?php echo $cform['confirm_password'] ?></div>
                        </div>
                        <div class="">
                            <input name="Submit" type="submit" value="Submit" class="customButton"/>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div id="SubmitCourse" class="whiteBackground">
                <form class="courseForm" action="<?php echo url_for('@members') ?>" method="post" id="course_form" enctype='multipart/form-data'>
                    <input type="hidden" name="sf_method" value="put">
                    <?php echo $scform->renderGlobalErrors() ?>
                    <?php echo $scform->renderHiddenFields() ?>
                    <div class="" style="margin-top:30px; margin-bottom:30px;">
                        <?php if( isset( $sc_errors ) ): ?>
                            <?php if( count( $sc_errors ) > 0 ): ?>
                                <span style="color: red">Upload error.</span><br/>
                            <?php else: ?>
                                <span style="color: green;">Upload successfull.</span>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php echo $scform['image']->renderLabel(' ') ?>
                        <?php echo $scform['image']->renderError() ?>
                        <div class=""><?php echo $scform['image'] ?></div>
                    </div>
                    <div class="">
                        <input id="upload_button" name="upload_button" type="submit" value="Upload" class="customButton" style="width: 130px !important; height: 35px !important;"/>
                    </div>
                </form>
            </div><!--End Account-->
        </div><!--End container-->
        </div><!--End container-->
    </div><!--End FormColumn-->
</div>

<script type="text/javascript" language="JavaScript">
    $(document).ready(function(){
        $("#container").tabs();
        <?php if( $sf_user->hasFlash('select_tab') ): ?>
                $("#tab_" + "<?php echo $sf_user->getFlash('select_tab') ?>").trigger( "click" );
                <?php $sf_user->setFlash('select_tab', null) ?>
        <?php endif; ?>
            
        <?php if( $sf_user->hasFlash('has_selected_home_course') ): ?>
                $.post(
                        "<?php echo url_for('@get_state_courses'); ?>",
                        { term : $("#player_state").val() },
                        function(data){
                            var opts = ""
                            $.each( data, function(i, e){
                                var selected = "";
                                if( e.id == "<?php echo $sf_user->getFlash('has_selected_home_course') ?>") selected = "selected='selected'";
                                opts += "<option value='" + e.id + "' " + selected + ">" + e.label + "</option>";
                            })
                            $("#player_home_course_name").html("<option selected='selected' value=''>Select course</option>" + opts);
                            $("#player_home_course_name").show();
                            $("#home_course_loader").hide();
                        },
                        "json"
                )
        <?php endif; ?>
            
        <?php if( $sf_user->hasFlash('show_file_upload') && $sf_user->hasFlash('show_file_upload') ): ?>
                $("#profilePicture").trigger( "click" );
                <?php $sf_user->setFlash('show_file_upload', null) ?>
        <?php endif; ?>
            
        <?php if( $sf_user->hasFlash('show_add_score') && $sf_user->hasFlash('show_add_score') ): ?>
                $("#add_score_button").trigger( "click" );
                <?php $sf_user->setFlash('show_add_score', null) ?>
        <?php endif; ?>
            
            
	$( "#player_home_course_name" ).autocomplete({
              minLength: 3,
              source: "get_courses.html"
	    });

        $(document).on("click", "#add_score_button", function(){ $("#add_score_layer").dialog("open" ); });
        $("#add_score_layer").dialog({
            autoOpen: false,
            height: 400,
            width: 500,
            modal: true,
            title: "Add new score",
            buttons: {
                       "Add score": function() {
                           var ok = true;
                           
                           if( $("#score_score_date").val().length == 0 ){
                               ok = false;
                               $("label[for='score_score_date']").css("color", "red");
                               $("#score_score_date").focus();
                           }else{
                               $("label[for='score_score_date']").css("color", "white");
                           }
                           
                           if( $("#score_state").val().length == 0 ){
                               ok = false;
                               $("label[for='score_state']").css("color", "red");
                               $("#score_state").focus();
                           }else{
                               $("label[for='score_state']").css("color", "white");
                           }
                           
                           if( $("#score_course").val().length == 0 ){
                               ok = false;
                               $("label[for='score_course']").css("color", "red");
                               $("#score_course").focus();
                           }else{
                               $("label[for='score_course']").css("color", "white");
                           }
                           
                           if( $("#score_teese").val().length == 0 ){
                               ok = false;
                               $("label[for='score_teese']").css("color", "red");
                               $("#score_teese").focus();
                           }else{
                               $("label[for='score_teese']").css("color", "white");
                           }
                           
                           if( $("#score_score").val().length == 0 ){
                               ok = false;
                               $("label[for='score_score']").css("color", "red");
                               $("#score_score").focus();
                           }else{
                               $("label[for='score_score']").css("color", "white");
                           }
                           if(ok) $("#add_score_form").submit();
                        },
                        Cancel: function() {
                            $( this ).dialog( "close" );
                        }
            }
        });
        
        $(document).on("click", "#profilePicture", function(){ $("#add_foto_layer").dialog("open" ); });
        $("#add_foto_layer").dialog({
            autoOpen: false,
            height: 300,
            width: 350,
            modal: true,
            title: "Upload profile photo",
            buttons: {
                       "Upload photo": function() {
                           if( $("#foto_image").val().length == 0 ) 
                                $("#foto_image").trigger("click")
                           else
                                $("#foto_form").submit();
                        },
                        Cancel: function() {
                            $( this ).dialog( "close" );
                        }
            }
        });
        
        $.post(
                "<?php echo url_for('@get_scores'); ?>",
                {},
                function(data){
                    var tbl = ""
                    $.each( data, function(i, e){
                        tbl += "<tr><td rowspan='2' class='golf_score_number'>" + e.total_score + "</td><td >" + e.course_name + "</td></tr><tr><td >" + e.event_date + "</td></tr><tr class='score_separator'><td colspan='2'> </td></tr>";
                    })
                    $("#scores_div").html("<table>" + tbl + "</table>");
                },
                "json"
        )
            
        $("#score_score_date").datepicker({
            dateFormat : "yy-mm-dd"
        })
            
        $(document).on("change", "#score_state", function(){
            $("#score_course").hide();
            $("#course_loader").show();
            if( $("#score_state").val() != ''){
                $.post(
                        "<?php echo url_for('@get_state_courses'); ?>",
                        { term : $("#score_state").val() },
                        function(data){
                            var opts = ""
                            $.each( data, function(i, e){
                                opts += "<option value='" + e.id + "'>" + e.label + "</option>";
                            })
                            $("#score_course").html("<option selected='selected' value=''>Select course</option>" + opts);
                            $("#score_course").show();
                            $("#course_loader").hide();
                        },
                        "json"
                )
            }else{
                $("#score_course").show();
                $("#course_loader").hide();
            }
        })
        
        $(document).on("change", "#player_state", function(){
            $("#player_home_course_name").hide();
            $("#home_course_loader").show();
            if( $("#player_state").val() != ''){
                $.post(
                        "<?php echo url_for('@get_state_courses'); ?>",
                        { term : $("#player_state").val() },
                        function(data){
                            var opts = ""
                            $.each( data, function(i, e){
                                opts += "<option value='" + e.id + "'>" + e.label + "</option>";
                            })
                            $("#player_home_course_name").html("<option selected='selected' value=''>Select course</option>" + opts);
                            $("#player_home_course_name").show();
                            $("#home_course_loader").hide();
                        },
                        "json"
                )
            }else{
                $("#player_home_course_name").show();
                $("#home_course_loader").hide();
            }
        })
        
        $(document).on("change", "#score_course", function(){
            $("#score_teese").hide();
            $("#teese_loader").show();
            if( $("#score_course").val() != '')
                $.post(
                        "<?php echo url_for('@get_course_tees'); ?>",
                        { term : $("#score_course").val() },
                        function(data){
                            var opts = ""
                            $.each( data, function(i, e){
                                opts += "<option value='" + e.id + "'>" + e.label + "</option>";
                            })
                            $("#score_teese").html("<option selected='selected' value=''>Select course</option>" + opts);
                            $("#score_teese").show();
                            $("#teese_loader").hide();
                        },
                        "json"
                )
        })
        
    })
</script>
