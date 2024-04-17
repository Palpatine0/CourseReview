<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/5.3.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Course Review</title>
    </head>
    <body>
        <?php include 'inc/header.php'; ?>
        <?php include 'config/db.php'; ?>


        <main>
            <div class="container d-flex flex-column align-items-center">
                <?php
                $name = $email = $courseName = $content = '';
                $nameErr = $emailErr = $courseNameErr = $contentErr = '';

                if (isset($_POST['submit'])) {
                    if (empty($_POST['name'])) {
                        $nameErr = "Enter your name!";
                    } else {
                        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    }

                    if (empty($_POST['email'])) {
                        $emailErr = "Enter your email!";
                    } else {
                        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    }
                    if (empty($_POST['course'])) {
                        $courseNameErr = "Enter the course name!";
                    } else {
                        $courseName = filter_input(INPUT_POST, 'course', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    }

                    if (empty($_POST['body'])) {
                        $contentErr = "Enter the review content!";
                    } else {
                        $content = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    }
                    echo $nameErr;
                    echo $name;
                    echo $email;
                    echo $emailErr;
                    echo $courseName;
                    echo $courseNameErr;
                    echo $content;
                    echo $contentErr;
                }
                ?>
                <img src="/course-review-app/img/logo.png" class="w-25 mb-3" alt="">
                <h2>Course Review</h2>
                <p class="lead text-center">Leave a review for the course you have taken</p>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="mt-4 w-75">
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control <?php echo $nameErr ? 'is-invalid' : null; ?>" id="name" name="name" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control <?php echo $emailErr ? 'is-invalid' : null; ?>" id="email" name="email" placeholder="Enter your email">
                    </div>

                    <div class="mb-3">
                        <label for="course" class="form-label">Course Name</label>
                        <input type="text" class="form-control <?php echo $courseNameErr ? 'is-invalid' : null; ?>" id="course" name="course" placeholder="Enter course name">
                    </div>
                    <div class="mb-3">

                        <label for="body" class="form-label">Review Content</label>
                        <textarea class="form-control <?php echo $contentErr ? 'is-invalid' : null; ?>" id="body" name="body" rows="4" placeholder="Enter your review"></textarea>
                    </div>


                    <div class="mb-3">
                        <input type="submit" name="submit" value="Submit Review" class="btn btn-dark w-100">
                    </div>
                </form>
            </div>
        </main>


        <?php include 'inc/footer.php'; ?>
    </body>
</html>