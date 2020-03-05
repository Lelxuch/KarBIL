<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/register_student.css">
    <title>Student registration</title>
</head>
<body>
    <a href="register.php" class="back"></a>
    <section class="register">
        <div class="container">
            <div class="row">
                <div class="content">
                    <form action="student.php">
                        <div class="block">
                            <div class="header">Student registration</div>
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
                                    <div class="date_title">Date of birth</div>
                                    <input  type="date" min="1900-01-01">
                                </div>
                            </div>
                            <div class="subtitle">
                                <div class="sub_num">
                                    2
                                </div>
                                <div class="sub_text">Education</div>
                            </div>
                            <div class="data">
                                <div class="edu_years">
                                    <div class="edu_title">Education years in lyceum</div>
                                    <div class="sel_edu">
                                        <select name="student_graduation_year" required>
                                            <option>Years</option>
                                            <?php
                                            (date('m') <= 5) ? $from = date('Y') : $from = date('Y') + 1;
                                            $to = $from + 4;
                                            while ($to >= $from) {
                                                $generation = $from-5 . '-' .$from;
                                                echo "<option value=$from>$generation</option>";
                                                $from++;
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="class">
                                    <div class="edu_title">Choose your class</div>
                                    <div class="sel_edu_class">
                                        <label><input type="radio" name="student_parallel" value="A" required>A</label>
                                        <label><input type="radio" name="student_parallel" value="B" required>B</label>
                                    </div>
                                </div>
                                <div class="olympiad">
                                    <div class="edu_title">Your olympiad subject</div>
                                    <div class="sel_edu">
                                        <select name="olympiad_subject" required>
                                            <option value="0">I don't have any olympiad subject</option>
                                            <?php
                                            $sql = "SELECT id, name_ru FROM subject";
                                            $classes_query = mysqli_query($connection, $sql);
                                            while ($olympiad = mysqli_fetch_assoc($classes_query)) {
                                                echo '<option value=' . $olympiad['id'] . '>' . $olympiad['name_ru'] . '</option>';
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="club">
                                    <div class="edu_title">Choose your clubs</div>
                                    <div class="sel_edu">
                                        <?php
                                            $sql = 'SELECT id, name_ru FROM club';
                                            $clubs = mysqli_query($connection, $sql);
                                            while ($club = mysqli_fetch_assoc($clubs)) {
                                                $ID = $club['id'];
                                                $name = $club['name_ru'];
                                                echo "<label><input type=checkbox name=$ID>$name</label><br>";
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="subtitle">
                                <div class="sub_num">
                                    3
                                </div>
                                <div class="sub_text">Security</div>
                            </div>
                            <div class="data">
                                <div class="email">
                                    <div class="email_title">Enter your mail</div>
                                    <div class="email_item">
                                        <label>Email: <input type="email" name="email" placeholder="email" required></label>
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
                                                <label class="repass">Repeat Password:</label>
                                            </div>
                                            <div class="password_input_inputs">
                                                <input type="password" name="pass" id ="pass" title="<?php echo $lang['reg_pass_hint']; ?>" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,32}$" minlength="8" maxlength="32" placeholder="<?php echo $lang['reg_pass_ph']; ?>" required>
                                                <input type="password" name="pass_conf" id="pass_conf" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,32}$" minlength="8" maxlength="32" placeholder="<?php echo $lang['reg_pass_conf_ph']; ?>" required>
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
    </section>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>