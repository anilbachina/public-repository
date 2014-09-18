<?php
$ROOT_FOLDER = $_SERVER["DOCUMENT_ROOT"]."/";
$PRIMARY_URL = "http://localhost:8081/";

$ADMIN_TEMPLATE_FOLDER = $ROOT_FOLDER."quiz/static/templates/";
$SITE_TEMPLATE_FOLDER = $ROOT_FOLDER."static/template/site/";
$USER_LOGIN_TEMPLAGE = $ADMIN_TEMPLATE_FOLDER."login.html";
$LANDING_TEMPLATE = $ADMIN_TEMPLATE_FOLDER."landing.html";
$PROGRESS_TEMPLATE = $ADMIN_TEMPLATE_FOLDER."quiz_progress_template.html";
$QUESTION_TEMPLATE = $ADMIN_TEMPLATE_FOLDER."quiz_question_template.html";
$REGISTER_TEMPLATE = $ADMIN_TEMPLATE_FOLDER."register_template.html";
$USER_INFO_MAP= array('first_name'=>'fname', 'last_name'=>'lname', 'email'=>'email', 'password'=>'regpwd', 'confirmpwd'=>'confirmpwd',
    'employment'=>'emp_select', 'sub_employment'=>'sub_emp_options', 'nurse_type'=>'nurse_type');
$QUESTION_OPTION_TEMPLATE ='<div class="radio">
                        <label>
                            <input type="radio" name="answer" value="<!--qa_id-->"><!--qa_answer-->
                        </label>
                    </div>';

$VIDEO_TEMPLATE = $ADMIN_TEMPLATE_FOLDER."quiz_video_template.html";
$VIDEO_PROGRESS_TEMPLATE = $ADMIN_TEMPLATE_FOLDER."video_prgress_template.html";
$VIDEO_PLAYER_TEMPLATE = $ADMIN_TEMPLATE_FOLDER."video_player_template.html";
$VIDEO_DONE_TEMPLATE = $ADMIN_TEMPLATE_FOLDER."videos_done_template.html";


$sjfdhsjfhsdfjhsdf="";



?>