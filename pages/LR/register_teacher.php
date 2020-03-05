<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/register_teacher.css">
    <title>Teacher registration</title>
</head>
<body>
    <a href="register.php" class="back"></a>
    <div class="registration">
        <div class="container">
            <div class="row">
                <div class="content">
                    <form action="teacher.php">
                        <div class="block"> 
                            <div class="header">Teacher registration</div>
                            <div class="list" action="register.php">
                                <div class="subtitle">
                                    <div class="sub_num">
                                        1
                                    </div>
                                    <div class="sub_text">Personal data</div>
                                </div>
                                <div class="data">
                                    <div class="name">
                                        <div class="name_title">Full name</div>
                                        <div class="name_item">
                                            <div class="name_subtitle"></div>
                                            <div class="name_input">
                                                <div class="name_inputs_label">
                                                    <label>Last name:</label>
                                                    <label>First name:</label>
                                                    <label>Middle name:</label>
                                                </div>
                                                <div class="name_input_inputs">
                                                    <input type="text" name="ln_cyrl" placeholder="Last name" required>
                                                    <input type="text" name="fn_cyrl" placeholder="First name" required>
                                                    <input type="text" name="mn_cyrl" placeholder="Middle name" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="date_b">
                                        <div class="date_title">Date of birth:</div>
                                        <input type="date" class="date_input">
                                    </div>
                                    <div class="gender">
                                        <div class="gender_title">Gender</div>
                                        <div class="gender_item">
                                            <label><input type="radio" name="gender" value="1" required> Male</label>
                                            <label><input type="radio" name="gender" value="0" required> Female</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="subtitle">
                                    <div class="sub_num">
                                        2
                                    </div>
                                    <div class="sub_text">
                                        Professional data
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="career">
                                        <div class="career_title">Start of teacher career:</div>
                                        <div class="career_item">
                                            <!-- MONTH PICKER -->
                                            <select name="career_start_month">
                                                <option value="January" selected><?php echo $config['ru']['January']; ?></option>
                                                <option value="February"><?php echo $config['ru']['February']; ?></option>
                                                <option value="March"><?php echo $config['ru']['March']; ?></option>
                                                <option value="April"><?php echo $config['ru']['April']; ?></option>
                                                <option value="May"><?php echo $config['ru']['May']; ?></option>
                                                <option value="June"><?php echo $config['ru']['June']; ?></option>
                                                <option value="July"><?php echo $config['ru']['July']; ?></option>
                                                <option value="August"><?php echo $config['ru']['August']; ?></option>
                                                <option value="September"><?php echo $config['ru']['September']; ?></option>
                                                <option value="October"><?php echo $config['ru']['October']; ?></option>
                                                <option value="November"><?php echo $config['ru']['November']; ?></option>
                                                <option value="December"><?php echo $config['ru']['December']; ?></option>
                                            </select>
                                            <!-- END OF MONTH PICKER -->

                                            <!-- YEAR PICKER -->
                                            <select name="career_start_year">
                                                <?php
                                                $i = 1980;
                                                $cur_year = date('Y');
                                                while ($i <= $cur_year-1) {
                                                    echo "<option value=$i>$i</option>";
                                                    $i++;
                                                }
                                                echo "<option value=$cur_year selected>$cur_year</option>";
                                                ?>
                                            </select>
                                            <!-- END OF YEAR PICKER -->
                                            <!-- END OF CAREER START PICKER -->
                                        </div>
                                    </div>
                                    <div class="bil_career">
                                        <div class="bil_career_title">Career start in our school:</div>
                                        <div class="bil_career_item">
                                            <!-- MONTH PICKER -->
                                            <select name="karbil_start_month">
                                                <option value="January" selected><?php echo $config['ru']['January']; ?></option>
                                                <option value="February"><?php echo $config['ru']['February']; ?></option>
                                                <option value="March"><?php echo $config['ru']['March']; ?></option>
                                                <option value="April"><?php echo $config['ru']['April']; ?></option>
                                                <option value="May"><?php echo $config['ru']['May']; ?></option>
                                                <option value="June"><?php echo $config['ru']['June']; ?></option>
                                                <option value="July"><?php echo $config['ru']['July']; ?></option>
                                                <option value="August"><?php echo $config['ru']['August']; ?></option>
                                                <option value="September"><?php echo $config['ru']['September']; ?></option>
                                                <option value="October"><?php echo $config['ru']['October']; ?></option>
                                                <option value="November"><?php echo $config['ru']['November']; ?></option>
                                                <option value="December"><?php echo $config['ru']['December']; ?></option>
                                            </select>
                                            <!-- END OF MONTH PICKER -->

                                            <!-- YEAR PICKER -->
                                            <select name="karbil_start_year">
                                                <?php
                                                $i = 1992;
                                                $cur_year = date('Y');
                                                while ($i <= $cur_year-1) {
                                                    echo "<option value=$i>$i</option>";
                                                    $i++;
                                                }
                                                echo "<option value=$cur_year selected>$cur_year</option>";
                                                ?>
                                            </select>
                                            <!-- END OF YEAR PICKER -->
                                            <!-- END OF WORKING AT CARBIL SINCE -->
                                        </div>
                                    </div>
                                    <div class="subject">
                                        <div class="subject_title">Your subject:</div>
                                        <div class="subject_item">
                                            <select name="subject">
                                                <?php
                                                $lang = 'name_ru';
                                                $sql = "SELECT id, $lang FROM subject ORDER BY $lang ASC";
                                                $subjects_list = mysqli_query($connection, $sql);
                                                while ($subject = mysqli_fetch_assoc($subjects_list)) {
                                                    $subjectID = $subject['id'];
                                                    $subject_name = $subject[$lang];
                                                    echo "<option value=$subjectID>$subject_name</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="category">
                                        <div class="category_title">Your category:</div>
                                        <div class="category_item">
                                            <select name="category">
                                                <option value="6"><?php echo $config['ru']['without_category']; ?></option>
                                                <option value="5"><?php echo $config['ru']['highest']; ?></option>
                                                <option value="4"><?php echo $config['ru']['teacher-researcher']; ?></option>
                                                <option value="3"><?php echo $config['ru']['teacher-expert']; ?></option>
                                                <option value="2"><?php echo $config['ru']['teacher-moderator']; ?></option>
                                                <option value="1"><?php echo $config['ru']['teacher-master']; ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="position">
                                        <div class="position_title">Additional position in lyceum:</div>
                                        <div class="position_item">
                                            <select name="position">
                                                <option value="0" selected>Нет</option>
                                                <option value="1"><?php echo $config['ru']['director']; ?></option>
                                                <option value="2"><?php echo $config['ru']['deputy_director']; ?></option>
                                                <option value="3"><?php echo $config['ru']['dormitory_manager']; ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="class">
                                        <div class="class_title">Your class:</div>
                                        <div class="class_item">
                                            <select name="class_teacher">
                                                <option value="0">I don't have</option>
                                                <option value="7_A">7 A</option>
                                                <option value="7_B">7 B</option>
                                                <option value="8_A">8 A</option>
                                                <option value="8_B">8 B</option>
                                                <option value="9_A">9 A</option>
                                                <option value="9_B">9 B</option>
                                                <option value="10_A">10 A</option>
                                                <option value="10_B">10 B</option>
                                                <option value="11_A">11 A</option>
                                                <option value="11_B">11 B</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="subtitle">
                                    <div class="sub_num">3</div>
                                    <div class="sub_text">
                                        Security
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="email">
                                        <div class="email_title">Enter email</div>
                                        <div class="email_item">
                                            <label>Email: <input type="email" name="email" placeholder="Email" required></label>
                                        </div>
                                    </div>
                                    <div class="phone">
                                        <div class="phone_title">Enter your phone</div>
                                        <div class="phone_item">
                                            <label>+7<input type="text" name="phone" pattern="[0-9]{10}" title="<?php echo $lang['reg_phone_hint']; ?>" minlength="10" maxlength="10" placeholder="(xxx)-xxx-xx-xx" required></label>
                                        </div>
                                    </div>
                                    <div class="login">
                                        <div class="login_title">Create login<span class="login_hint">(Login must consist: A-Z, a-z, 0-9)</span></div>
                                        <div class="login_item">
                                            <label>Login:<input type="text" name="username" title="<?php echo $lang['reg_login_hint']; ?>" minlength="6" maxlength="100" placeholder="Login" required></label>
                                        </div>
                                    </div>
                                    <div class="password">
                                        <div class="password_title">Create password<span class="password_hint">(Password must consist: A-Z, a-z, 0-9)</span></div>
                                        <div class="password_item">
                                            <div class="password_input">
                                                <div class="password_input_label">
                                                    <label class="pass">Password:</label>
                                                    <label class="repass">Repeat password:</label>
                                                </div>
                                                <div class="password_input_inputs">
                                                    <input type="password" name="pass" id ="pass" title="<?php echo $lang['reg_pass_hint']; ?>" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,32}$" minlength="8" maxlength="32" placeholder="Password" required>
                                                    <input type="password" name="pass_conf" id="pass_conf" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,32}$" minlength="8" maxlength="32" placeholder="Password" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="reg">
                                <button class="reg_btn" type="submit">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>