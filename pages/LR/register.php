<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/register.css">
    <title>Registration</title>
</head>
<body>
    <section class="register">
        <div class="container">
            <div class="row">
                <div class="register">
                    <div class="container">
                        <div class="content">
                            <div class="block">
                                <div class="header">Registration type</div>
                                <div class="list">
                                    <input id="teacher_radio" class="radio" type="radio" name="reg_type" value="teacher" required>
                                    <label for="teacher_radio" class="teacher_block">
                                        <div class="condition">
                                            <div class="teacher_cond"></div>
                                        </div>
                                        <div class="teacher_img"></div>
                                        <div class="text">Teacher</div>
                                    </label>
                                    <input id="student_radio" class="radio" type="radio" name="reg_type" value="student" required>
                                    <label for="student_radio" class="student_block">
                                        <div class="condition">
                                            <div class="student_cond"></div>
                                        </div>
                                        <div class="student_img"></div>
                                        <div class="text">Student</div>
                                    </label>
                                </div>
                                <div class="continue">
                                    <button onclick="start_registration()" class="continue_btn"  name="submit_reg_type">Continue</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function start_registration() {
            if(document.getElementById('teacher_radio').checked) {
                window.location.replace("teacher.php");
            }
            else if(document.getElementById('student_radio').checked) {
                window.location.replace("student.php");
            }
        }
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>