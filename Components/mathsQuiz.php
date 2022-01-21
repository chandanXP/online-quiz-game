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
     <link rel="stylesheet" href="../index.css">
     <link rel="stylesheet" href="../css/quiz.css">
     <title>Maths Quiz</title>
</head>

<body>
     <div class="container">
          <div class="nav heading mt-1">
               <h1>Online Quiz</h1>
               <a class="leaderBoard" href="../index.php"> Home </a>
               <a class="leaderBoard" href="#">Leader Board</a>
          </div>
          <div class="row row-cols-2 body">
               <div class="card mx-auto shadow p-1 bg-body rounded " style="max-width: 500px;">
                    <?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                         session_start();
                         $rowNum = 0;
                         $_SESSION['rownum'] = $rowNum;//creating variable row number in session
                         echo $_SESSION['rownum'];
                    }
                    if (isset($_POST['mathsQuestions'])) {
                         $Value = 'mathsQuestions';
                         $_SESSION['dbName'] = 'maths';
                         $Name = 'Maths';

                    }
                    else if(isset($_POST['gkQuestions'])){
                         $Value =  'mathsQuestions';
                         $_SESSION['dbName'] = 'gk';
                         $Name = 'General Knowledge';
                         
                    }
                    else if(isset($_POST['wildlifeQuestions'])){
                         $Value =  'mathsQuestions';
                         $_SESSION['dbName'] = 'wildlife';
                         $Name = 'Wild Life';
                    }
                    else if(isset($_POST['cricketQuestions'])){
                         $Value =  'mathsQuestions';
                         $_SESSION['dbName'] = 'cricket';
                         $Name = 'Cricket';
                         
                    }
                    echo "
                    <div class='quizHead rounded m-1'>
                         <h1 class='text-center'>$Name Quiz</h1>
                    </div>
                    <div class='quizBody rounded m-1 p-2'>
                         <h2 class='text-center'>Intstructions</h2>
                         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi quis est id harum nesciunt quia libero odit tempore suscipit deleniti earum aliquid eum, mollitia neque nobis atque ab quae! Nam?</p>
                    </div>
                    <div class='quizButton  rounded m-1 mx-auto'>
                         <form method='post' action='./quizQuestions/$Value.php'>
                              <button type='submit' class='btn' name=$Name value=$Name formmethod='post'>START</button>
                         </form>
                    </div>
                    ";
                    ?>
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