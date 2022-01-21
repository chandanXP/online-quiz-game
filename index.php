<?php 
if(session_id()){
     session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Chakra+Petch:wght@300&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="index.css">
     <title>Online Quiz</title>
</head>

<body>
     <div class="container">
          <div class="nav heading mt-1">
               <h1>O n l i n e  Q u i z</h1>
               <a class="leaderBoard" href="./index.php" > Home </a>
               <a class="leaderBoard" href="#">L e a d e r    B o a r d</a>

          </div>
          <div class="row row-cols-2 body">
               <div class="card shadow p-1 mx-3 mb-3 bg-body rounded " style="max-width: 500px;">
                    <div class="row g-0">
                         <div class="col-md-4 quizIcon">
                              <img src="https://i1.wp.com/www.elkovan.com.sg/wp-content/uploads/2019/02/Math-Square-Logo.png?ssl=1" alt="...">
                         </div>
                         <div class="col-md-8 bodyCard">
                              <div class="card-body mx-4">
                                   <h5 class="card-title">Maths Quiz</h5>
                                   <p class="card-text">In online math quiz we will practice various types of questions on math quizzes. Quiz provides numerous Questions to boost your knowledge.</p>
                                   <form method="post" action="./Components/mathsQuiz.php">
                                        <button type="submit" class="btn" name = "mathsQuestions" value= "mathsQuestions"<?php setcookie("Subject", "Maths", time() + 2 * 24 * 60 * 60); ?>>Start Quiz</button>
                                   </form>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="card  mx-3 mb-3 shadow p-1  bg-body rounded " style="max-width: 500px;">
                    <div class="row g-0">
                         <div class="col-md-4 quizIcon">
                              <img src="https://th.bing.com/th/id/R664a26675976fc8fe694ad9892806b82?rik=B%2fxgH63jsVWycg&riu=http%3a%2f%2fmandoraschihouse.co.uk%2fwp-content%2fuploads%2f2015%2f11%2fknowledge_icon.png&ehk=ipGT0D7ldofIg7%2bCr0BVMXdPXYAYXYXKi237tTCSTLQ%3d&risl=&pid=ImgRaw" alt="...">
                         </div>
                         <div class="col-md-8 bodyCard">
                              <div class="card-body mx-4">
                                   <h5 class="card-title">General Knowledge Quiz</h5>
                                   <p class="card-text">Test your General knowledge of 2021, Questions will be based on History, Geography, Science and Important events. Take this quiz to improve you knowledge..</p>
                                   <form method="post" action="./Components/mathsQuiz.php">
                                        <button type="submit" class="btn" name = "gkQuestions" value= "gkQuestions">Start Quiz</button>
                                   </form>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="card  mx-3 mb-3  shadow p-1 bg-body rounded " style="max-width: 500px;">
                    <div class="row g-0">
                         <div class="col-md-4 quizIcon">
                              <img src="https://th.bing.com/th/id/OIP.qhfHE80M3c1Le0myC6U0iQHaHa?pid=ImgDet&rs=1" alt="...">
                         </div>
                         <div class="col-md-8 bodyCard">
                              <div class="card-body mx-4">
                                   <h5 class="card-title">Cricket Quiz</h5>
                                   <p class="card-text">Ultimate Cricket Quiz Questions, Put your skills to the test with this sports quiz! Apply some sunscreen to your face and try out this series of cricket questions!</p>
                                   <form method="post" action="./Components/mathsQuiz.php">
                                        <button type="submit" class="btn" id="quizBtn" name = "cricketQuestions" value= "cricketQuestions">Start Quiz</button>
                                   </form>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="card mx-3 mb-3 shadow p-1 2 bg-body rounded " style="max-width: 500px;">
                    <div class="row g-0">
                         <div class="col-md-4 quizIcon">
                              <img src="https://th.bing.com/th/id/R061169787c9201fa76fdc08c7304ed59?rik=F0BVzhd0V1y3pA&riu=http%3a%2f%2fwww.gc-animalwelfare.org%2fwp-content%2fthemes%2fgcaw%2fdist%2fimages%2flogo.png&ehk=3%2bx6zLPXIxJ0eC2cZ7aoCMs9gUM9D%2fPQlv7Lg7bUiHg%3d&risl=&pid=ImgRaw" alt="...">
                         </div>
                         <div class="col-md-8 bodyCard">
                              <div class="card-body mx-4">
                                   <h5 class="card-title">Wild Life Quiz</h5>
                                   <p class="card-text">Guess that animal? We’ll be give you some hints as to what animal we’re thinking of and expect you to be able to tell us exactly what animal it is!</p>
                                   <form method="post" action="./Components/mathsQuiz.php">
                                        <button type="submit" class="btn " name = "wildlifeQuestions" value= "wildlifeQuestions">Start Quiz</button>
                                   </form>
                              </div>
                         </div>
                    </div>
               </div>

          </div>
          <div class="footer">
               <div class="footerContainer">
                    <div class="blankDiv"></div>
                    <div class="followDiv">
                         <div>
                              <h6>About Us:</h6>
                              <p>Our quiz games put the fun into learning. Your knowledge will be tested regarding a variety of subjects, including geography, cultures, and cartoons. Well-traveled players will love showcasing their map skills in every continent. </p>
                         </div>
                         <div class="follow">
                              <ul>
                                   <li>Follow Us: </li>
                                   <li><i class="fab fa-instagram"></i></li>
                                   <li><i class="fab fa-facebook-square"></i></li>
                                   <li><i class="fab fa-twitter"></i></li>

                              </ul>
                         </div>
                    </div>
               </div>
               
          </div>
     </div>
</body>

</html>