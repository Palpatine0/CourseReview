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

                }
                ?>
                <img src="/course-review-app/img/logo.png" class="w-25 mb-3" alt="">
                <h2>Course Review</h2>
                <p class="lead text-center">Leave a review for the course you have taken</p>
                <form action="" method="post" class="mt-4 w-75">
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control " id="name" name="name" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control " id="email" name="email" placeholder="Enter your email">
                    </div>

                    <div class="mb-3">
                        <label for="course" class="form-label">Course Name</label>
                        <input type="text" class="form-control " id="course" name="course" placeholder="Enter course name">
                    </div>
                    <div class="mb-3">

                        <label for="body" class="form-label">Review Content</label>
                        <textarea class="form-control " id="body" name="body" rows="4" placeholder="Enter your review"></textarea>
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