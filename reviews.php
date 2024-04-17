<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.bootcdn.net/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Course Reviews</title>
    </head>
    <body>
        <?php include 'inc/header.php'; ?>
        <?php include 'config/db.php'; ?>
        <main>
            <div class="container d-flex flex-column align-items-center">
                <?php
                /*$reviews = [
                    [
                        'name' => 'Palpatine',
                        'course' => 'Python Programming Introduction',
                        'content' => 'This is a very practical course that introduces the basics of programming in a simple and understandable way. The teacher explains clearly, the supporting materials are rich, and it is highly recommended for programming novices.'
                    ],
                    [
                        'name' => 'Don',
                        'course' => 'Data Analysis in Action',
                        'content' => 'I mastered the core technology of data analysis through this course. The course content covers a wide range, and the case practice has benefited me a lot and is worth learning.'
                    ],
                    [
                        'name' => 'Siri',
                        'course' => 'Machine Learning Algorithms',
                        'content' => 'This course explains the basic principles and common algorithms of machine learning. The teacher explains in a simple and understandable way, which gives me a deeper understanding of machine learning.'
                    ]
                ]*/
                $sql = 'SELECT * FROM review';
                $result = mysqli_query($conn, $sql);
                $reviews = mysqli_fetch_all($result, MYSQLI_ASSOC);
                ?>
                <?php if (empty($reviews)): ?>
                    <p class="lead mt3">There are currently no course reviews!</p>
                <?php endif; ?>
                <h2>Course Reviews</h2>

                <?php foreach ($reviews as $review): ?>
                    <div class="card my-3" style="width: 28rem;">
                        <div class="card-title text-center mt-2 ">
                            <b><?php echo $review['course']; ?></b>
                        </div>
                        <div class="card-body text-center">
                            <?php echo $review['content']; ?>
                            <div class="text-secondary mt-2">
                                From <?php echo $review['name']; ?>
                            </div>
                            <div class="text-secondary mt-2">
                                <?php echo $review['date'];?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>


            </div>
        </main>

        <?php include 'inc/footer.php'; ?>
        <script src="https://cdn.bootcdn.net/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
<?php
