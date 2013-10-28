<div id="introCellWrapper">
    <div id="spacer1"></div>
    <div id="spacer2"></div>




    <div id="profilePictureColumn">
        <div id="profilePictureCanvas">


            <div id="profilePicture">
                <img src="images/JFProfilePicture.png" border="0" />
            </div><!--End profilePicture-->

            <div id="playerNameAndHandicapWrapper">
                <div id="playerName">
                    JF Bertrand
                </div><!--End playerName-->

                <div id="handicap">
                    2.8
                </div><!--End handicap-->
            </div><!--End playerNameAndHandiCapWrapper-->

            <div id="cityState">
                Scotsdale, Arizona
            </div><!--End cityState-->

            <div id="homeGolfCourse">
                The 500 Club
            </div><!--End homeGolfCourse"-->


        </div><!--End profilePictureCanvas-->
    </div><!--End ProfilePictureColumn-->




    <div id="formColumn">
        <div id="container">
            <ul class="tabs">
                <li><a href="#Score">SCORE</a></li>
                <li><a href="#Friends">FRIENDS</a></li>
                <li><a href="#Account">ACCOUNT</a></li>
            </ul>

            <div id="Score" class="whiteBackground">
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

            <div id="Friends" class="whiteBackground">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>

            <div id="Account" class="whiteBackground">
                <form id="Account" name="Account" method="post" action="addScore.php?action=email_us">
                    <table width="425" border="0" cellspacing="3" align="left">
                        <tr>
                            <td align="left" width="50%">First Name</td>
                            <td align="left" width="50%"><input type="text" name="first_name" id="Frist Name" value="" /></td>
                        </tr>
                        <tr>
                            <td align="left" width="50%">Last Name</td>
                            <td align="left" width="50%"><input type="text" name="last_name" id="Last Name" value="" /></td>
                        </tr>
                        <tr>
                            <td align="left" width="50%">E-Mail</td>
                            <td align="left" width="50%"><input type="text" name="email" id="Email" value="" /></td>
                        </tr>
                        <tr>
                            <td align="left" width="50%">Handicap</td>
                            <td align="left" width="50%"><input type="text" name="handicap" id="Handicap" value="" /></td>
                        </tr>
                        <tr>
                            <td align="left" width="50%">Gender</td>
                            <td align="left" width="50%"><input type="radio" name="m" value="male" /> Male&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="f" value="female" /> Female</td>
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
                            <td align="left" width="50%">City</td>
                            <td align="left" width="50%">
                                <select name="city_input_field">
                                    <option value="Select City">Select City</option>
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
                            <td align="left" width="50%">New Password</td>
                            <td align="left" width="50%"><input type="text" name="new_password" id="New Password" value="" /></td>
                        </tr>
                        <tr>
                            <td align="left" width="50%">Confirm New Password</td>
                            <td align="left" width="50%"><input type="text" name="confirm_new_password" id="Confirm New Password" value="" /></td>
                        </tr>
                        <tr>
                            <td><input name="Submit" type="submit" value="Submit" class="customButton"/></td>
                            <td></td>
                        </tr>
                    </table>
                </form>
            </div><!--End Account-->
        </div><!--End container-->
    </div><!--End FormColumn-->
</div>

<script type="text/javascript" language="JavaScript">
    $(document).ready(function(){
        $("#container").tabs();
        <?php if( $sf_user->hasFlash('new_register') ): ?>
                $("#container").tabs( "option", "active", 3 );
                <?php $sf_user->setFlash('new_register', null) ?>
        <?php endif; ?>
    })
</script>
