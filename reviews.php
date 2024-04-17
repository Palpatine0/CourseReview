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
        <main>
            <div class="container d-flex flex-column align-items-center">
                <?php
                /*                    $reviews=[
                                        [
                                            'name'=>'Zhang San',
                                            'course'=>'Python Programming Introduction',
                                            'body'=>'This is a very practical course that introduces the basics of programming in a simple and understandable way. The teacher explains clearly, the supporting materials are rich, and it is highly recommended for programming novices.'
                                        ],
                                        [
                                            'name'=>'Li Si',
                                            'course'=>'Data Analysis in Action',
                                            'body'=>'I mastered the core technology of data analysis through this course. The course content covers a wide range, and the case practice has benefited me a lot and is worth learning.'
                                        ],
                                        [
                                            'name'=>'Wang Wu',
                                            'course'=>'Machine Learning Algorithms',
                                            'body'=>'This course explains the basic principles and common algorithms of machine learning. The teacher explains in a simple and understandable way, which gives me a deeper understanding of machine learning.'
                                        ]
                                    ]
                                */?>
                <?php if(empty($reviews)): ?>
                    <p class="lead mt3">There are currently no course reviews!</p>
                <?php endif; ?>
                <h2>Course Reviews</h2>
                <div class="card my-3" style="width: 18rem;">
                    <div class="card-body">
                        This is a very practical course that introduces the basics of programming in a simple and understandable way. The teacher explains clearly, the supporting materials are rich, and it is highly recommended for programming novices.
                    </div>
                </div>
                <div class="card my-3" style="width: 18rem;">
                    <div class="card-body">
                        I mastered the core technology of data analysis through this course. The course content covers a wide range, and the case practice has benefited me a lot and is worth learning.
                    </div>
                </div>
                <div class="card my-3" style="width: 18rem;">
                    <div class="card-body">
                        As a student with a design background, this course opened the door to front-end development for me. The course structure is reasonable, from simple to deep, allowing me to build my own website in a short time.
                    </div>
                </div>
            </div>
        </main>


        <script src="https://cdn.bootcdn.net/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
<?php
