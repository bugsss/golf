<div id="introCellWrapper">
    <div id="spacer1"></div>
    <div id="spacer2"></div>

    <div id="add_score_layer" style="display: none;">
        <form id="Add Score" name="Add Score" method="post" action="addScore.php?action=email_us">
            <table width="425" border="0" cellspacing="3" align="left">
                <tr>
                    <td align="left" width="50%">Date</td>
                    <td align="left" width="50%"><input type="text" name="date" id="Date" value="" /></td>
                </tr>
                <tr>
                    <td align="left" width="50%">State</td>
                    <td align="left" width="50%">
                        <select name="state_input_field">
                            <option value="Select Stage">Select Stage</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="left" width="50%">Home Golf Course</td>
                    <td align="left" width="50%">
                        <select name="course_input_field">
                            <option value="Select Course">Select Course</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="left" width="50%">Tees</td>
                    <td align="left" width="50%">
                        <select name="tees_input_field">
                            <option value="Select Tees">Select Tees</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="left" width="50%">Score</td>
                    <td align="left" width="50%"><input type="text" name="score" id="Score" value="" /></td>
                </tr>
                <tr>
                    <td><input name="Submit" type="submit" value="Submit" class="customButton"/></td>
                    <td></td>
                </tr>
            </table>
        </form>
    </div>
    
    <div id="profilePictureColumn">
        <div id="profilePictureCanvas">

            <div id="profilePicture">
                <img src="../images/no_user_pic.jpg" border="0" style="width: 100%;"/>
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
                <li><a href="#Password" id="tab_account">PASSWORD</a></li>
            </ul>

            <div id="Score" class="whiteBackground">
                <div id="scores_div" style=" height: 358px; margin-top: 5px; overflow: auto; width: 96%;">
                    <table>
                        <?php foreach( $user->getScores() as $score ): ?>
                            <tr>
                                <td rowspan="2" ><?php echo $score["total_score"];?></td>
                                <td ><?php echo $score["course_name"];?></td>
                            </tr>
                            <tr>
                                <td ><?php echo $score["event_date"]; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
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
                        <div class="profileform_cell">
                            <?php echo $pform['handicap']->renderLabel('Handicap') ?>
                            <?php echo $pform['handicap']->renderError() ?>
                            <div class=""><?php echo $pform['handicap'] ?></div>
                        </div>
                        <div class="profileform_cell">
                            <?php echo $pform['home_course_name']->renderLabel('Home Golf Course') ?>
                            <?php echo $pform['home_course_name']->renderError() ?>
                            <div class=""><?php echo $pform['home_course_name'] ?></td>
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
                        <div class="">
                            <?php echo $cform['old_password']->renderLabel('Old Password') ?>
                            <?php echo $cform['old_password']->renderError() ?>
                            <div class=""><td align="left" width="50%"><?php echo $cform['old_password'] ?></div>
                        </div>
                        <div class="">
                            <?php echo $cform['new_password']->renderLabel('New Password') ?>
                            <?php echo $cform['new_password']->renderError() ?>
                            <div class=""><?php echo $cform['new_password'] ?></div>
                        </div>
                        <div class="">
                            <?php echo $cform['confirm_password']->renderLabel('Confirm New Password') ?>
                            <?php echo $cform['confirm_password']->renderError() ?>
                            <div class=""><?php echo $cform['confirm_password'] ?></div>
                        </div>
                        <div class="">
                            <input name="Submit" type="submit" value="Submit" class="customButton"/>
                        </div>
                    </fieldset>
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
	$( "#player_home_course_name" ).autocomplete({
              minLength: 3,
              source: "get_courses.html"
	    });
            
    })
</script>
