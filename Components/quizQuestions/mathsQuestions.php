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
     <link rel="stylesheet" href="../../index3.css">
     <link rel="stylesheet" href="../../css/quizQuestion.css">

     <!-- <link rel="stylesheet" href="../../css/quiz.css"> -->
     <title>Maths Quiz</title>
</head>

<body>
     <div class="container">
          <div class="nav heading mt-1">
               <h1>Online Quiz</h1>
               <a class="leaderBoard" href="../../index.php"> Home </a>
               <a class="leaderBoard" href="#">Leader Board</a>
          </div>
          <div class="row row-cols-2 body">
               <div class="card mx-auto shadow p-1 bg-body rounded " style="max-width: 500px;">

                    <?php
                    require "../../php/db/dbConnection.php";
                    session_start();

                    $_SESSION['res'] = array();
                    // $_SESSION['res'][0] = '34'; //pushing
                    // $_SESSION['res'][1] = '0'; //pushing

                    if (isset($_POST['1'])) { //name


                         $rowNum1 = $_SESSION['rownum']; //getting value from session
                         echo "<div class='questionNumber rounded m-1'>
                         <h2 class='text-center'>$rowNum1</h2>
                    </div>";

                         $getSql = "SELECT * FROM  `maths` LIMIT  $rowNum1 , 1";
                         $getques = mysqli_query($conn, $getSql);

                         if ($getques) {
                              while ($row = mysqli_fetch_row($getques)) {
                                   // print_r($_SESSION['res']['0']);
                                   $res = $row[0];
                                   // echo "row num: ".$res ." string: ".is_string($res);
                                   $opt1 = $_POST['1']; //value
                                   $_SESSION['res'][$res] = $opt1; //pushing
                                   array_push($_SESSION['res'], $opt1);
                                   print_r($_SESSION['res'][$res]);


                                   echo
                                   "
                                   <div class='quizQuestions rounded  p-1'>
                                        <p>$row[1]</p>
                                   </div>

                                   <div class='quizOptions rounded  p-1'>
                                        <form method='post' , action='./mathsQuestions.php'>
                                             <ul class='list-group options m-1 '>
                                                  <li><button type='submit' name='1' value='1' formaction='./mathsQuestions.php' class='btn m-1 '>$row[2]</button></li>

                                                  <li><button type='submit' name='2' value='2' formaction='./mathsQuestions.php' class='btn m-1 '>$row[3]</button></li>
                                                  <li><button type='submit' name='3' value='3' formaction='./mathsQuestions.php' class='btn m-1 '>$row[4]</button></i></li>
                                                  <li><button type='submit' name='4' value='4' formaction='./mathsQuestions.php' class='btn m-1 '>$row[5]</button></li>
                                             </ul>
                                        </form>
                                   </div>

                                   ";
                              }
                         }

                         // echo $opt1;//string
                         // trim($opt1);
                         // echo is_string($opt1);
                         // $test = "1";
                         // print_r($_SESSION['res'][0]);
                         // echo is_string($opt1);
                         // echo strcmp($opt1, $test);
                         // echo gettype($opt1);
                         // number_format($test);
                         // echo is_string($test);


                    } elseif (isset($_POST['2'])) { //name
                         $opt2 = $_POST['2']; //value
                         array_push($_SESSION['res'], $opt2); //pushing

                         $rowNum1 = $_SESSION['rownum']; //getting value from session
                         echo "<div class='questionNumber rounded m-1'>
                         <h2 class='text-center'>$rowNum1</h2>
                    </div>";

                         $getSql = "SELECT * FROM  `maths` LIMIT  $rowNum1 , 1";
                         $getques = mysqli_query($conn, $getSql);

                         if ($getques) {
                              while ($row = mysqli_fetch_row($getques)) {
                                   // print_r($_SESSION['res']['0']);
                                   $res = $row[0]; //index of associative array
                                   // echo "row num: ".$res ." string: ".is_string($res);
                                   $opt2 = $_POST['2']; //value
                                   $_SESSION['res'][$res] = $opt2; //pushing
                                   array_push($_SESSION['res'], $opt2);

                                   print_r($_SESSION['res'][$res]);

                                   echo
                                   "
                                   <div class='quizQuestions rounded  p-1'>
                                        <p>$row[1]</p>
                                   </div>

                                   <div class='quizOptions rounded  p-1'>
                                        <form method='post' , action='./mathsQuestions.php'>
                                             <ul class='list-group options m-1 '>
                                                  <li><button type='submit' name='1' value='1' formaction='./mathsQuestions.php' class='btn m-1 '>$row[2]</button></li>
                                                  <li><button type='submit' name='2' value='2' formaction='./mathsQuestions.php' class='btn m-1 '>$row[3]</button></li>
                                                  <li><button type='submit' name='3' value='3' formaction='./mathsQuestions.php' class='btn m-1 '>$row[4]</button></i></li>
                                                  <li><button type='submit' name='4' value='4' formaction='./mathsQuestions.php' class='btn m-1 '>$row[5]</button></li>
                                             </ul>
                                        </form>
                                   </div>

                                   ";
                              }
                         }

                         echo $opt2;
                    } elseif (isset($_POST['3'])) { //name
                         $opt3 = $_POST['3']; //value
                         array_push($_SESSION['res'], $opt3); //

                         $rowNum1 = $_SESSION['rownum']; //getting value from session
                         echo "<div class='questionNumber rounded m-1'>
                         <h2 class='text-center'>$rowNum1</h2>
                    </div>";

                         $getSql = "SELECT * FROM  `maths` LIMIT  $rowNum1 , 1";
                         $getques = mysqli_query($conn, $getSql);

                         if ($getques) {
                              while ($row = mysqli_fetch_row($getques)) {
                                   // print_r($_SESSION['res']['0']);
                                   $res = $row[0];
                                   // echo "row num: ".$res ." string: ".is_string($res);
                                   $opt3 = $_POST['3']; //value
                                   $_SESSION['res'][$res] = $opt3; //pushing
                                   array_push($_SESSION['res'], $opt3);

                                   print_r($_SESSION['res'][$res]);

                                   echo
                                   "
                                   <div class='quizQuestions rounded  p-1'>
                                        <p>$row[1]</p>
                                   </div>

                                   <div class='quizOptions rounded  p-1'>
                                        <form method='post' , action='./mathsQuestions.php'>
                                             <ul class='list-group options m-1 '>
                                                  <li><button  type='submit' name='1' value='1' formaction='./mathsQuestions.php' class='btn m-1 '>$row[2]</button></li>
                                                  <li><button  type='submit' name='2' value='2' formaction='./mathsQuestions.php' class='btn m-1 '>$row[3]</button></li>
                                                  <li><button  type='submit' name='3' value='3' formaction='./mathsQuestions.php' class='btn m-1 '>$row[4]</button></i></li>
                                                  <li><button  type='submit' name='4' value='4' formaction='./mathsQuestions.php' class='btn m-1 '>$row[5]</button></li>
                                             </ul>
                                        </form>
                                   </div>

                                   ";
                              }
                         }
                    } elseif (isset($_POST['4'])) { //name
                         $opt4 = $_POST['4']; //value
                         array_push($_SESSION['res'], $opt4);

                         $rowNum1 = $_SESSION['rownum']; //getting value from session
                         echo "<div class='questionNumber rounded m-1'>
                         <h2 class='text-center'>$rowNum1</h2>
                    </div>";

                         $getSql = "SELECT * FROM  `maths` LIMIT  $rowNum1 , 1";
                         $getques = mysqli_query($conn, $getSql);

                         if ($getques) {
                              while ($row = mysqli_fetch_row($getques)) {
                                   // print_r($_SESSION['res']['0']);
                                   $res = $row[0];
                                   // echo "row num: ".$res ." string: ".is_string($res);
                                   $opt4 = $_POST['4']; //value
                                   $_SESSION['res'][$res] = $opt4; //pushing
                                   array_push($_SESSION['res'], $opt4);
                                   print_r($_SESSION['res'][$res]);

                                   echo
                                   "
                                   <div class='quizQuestions rounded  p-1'>
                                        <p>$row[1]</p>
                                   </div>

                                   <div class='quizOptions rounded  p-1'>
                                        <form method='post' , action='./mathsQuestions.php'>
                                             <ul class='list-group options m-1 '>
                                                  <li><button type'submit' name='1' value='1' formaction='./mathsQuestions.php' class='btn m-1 '>$row[2]</button></li>
                                                  <li><button type'submit' name='2' value='2' formaction='./mathsQuestions.php' class='btn m-1 '>$row[3]</button></li>
                                                  <li><button type'submit' name='3' value='3' formaction='./mathsQuestions.php' class='btn m-1 '>$row[4]</button></i></li>
                                                  <li><button type'submit' name='4' value='4' formaction='./mathsQuestions.php' class='btn m-1 '>$row[5]</button></li>
                                             </ul>
                                        </form>
                                   </div>

                                   ";
                              }
                         }
                    } else if (isset($_POST['submit'])) {
                         print_r($_SESSION['res']);
                         echo "submitte! ";
                         echo "<div class='quizQuit  rounded m-1 mx-auto absolute-bottom'>
                         <h2>Submitted successfully!</h2>
                    </div>";
                    } else if (isset($_POST['prev'])) {
                         $rowNum1 = $_SESSION['rownum']; //getting value from session
                         $rowNum1--;
                         echo "<div class='questionNumber rounded m-1'>
                         <h2 class='text-center'>$rowNum1</h2>
                    </div>";

                         $getSql = "SELECT * FROM  `maths` LIMIT  $rowNum1 , 1";
                         $getques = mysqli_query($conn, $getSql);
                         $_SESSION['rownum'] = $rowNum1; //updating value of session

                         if ($getques) {
                              while ($row = mysqli_fetch_row($getques)) {
                                   echo
                                   "
                                   <div class='quizQuestions rounded  p-1'>
                                        <p>$row[1]</p>
                                   </div>

                                   <div class='quizOptions rounded  p-1'>
                                        <form method='post' , action='#'>
                                             <ul class='list-group options m-1 '>
                                                  <li><button class='btn m-1 '>$row[2]</button></li>
                                                  <li><button class='btn m-1 '>$row[3]</button></li>
                                                  <li><button class='btn m-1 '>$row[4]</button></i></li>
                                                  <li><button class='btn m-1 '>$row[5]</button></li>
                                             </ul>
                                        </form>
                                   </div>

                                   ";
                              }
                         }
                         // $_SERVER["REQUEST_METHOD"] == "POST" ||
                    } else if (isset($_POST['next'])) {
                         // echo "method is post..";

                         $rowNum1 = $_SESSION['rownum'];
                         $rowNum1++;
                         echo "<div class='questionNumber rounded m-1'>
                         <h2 class='text-center'>$rowNum1</h2>
                    </div>";
                         $getSql = "SELECT * FROM  `maths` LIMIT  $rowNum1 , 1";
                         $getques = mysqli_query($conn, $getSql);
                         $_SESSION['rownum'] = $rowNum1;
                         // echo "session['rownum'] " . $_SESSION['rownum'];

                         if ($getques) {
                              while ($row = mysqli_fetch_row($getques)) {
                                   echo
                                   "
                         <div class='quizQuestions rounded  p-1'>
                              <p>$row[1]</p>
                         </div>

                         <div class='quizOptions rounded  p-1'>
                              <form method='post' , action='./mathsQuestions.php'>
                                   <ul class='list-group options m-1 '>
                                        <li><button type ='submit' class='btn m-1 ' name='1' value='1' formaction='./mathsQuestions.php'>$row[2]</button></li>
                                        <li><button type ='submit' class='btn m-1 ' name='2' value='2' formaction='./mathsQuestions.php'>$row[3]</button></li>
                                        <li><button type ='submit' class='btn m-1 ' name='3' value='3' formaction='./mathsQuestions.php'>$row[4]</button></li>
                                        <li><button type ='submit' class='btn m-1 ' name='4' value='4' formaction='./mathsQuestions.php'>$row[5]</button></li>
                                   </ul>

                              </form>
                         </div>

                         ";
                              }
                         }
                    }
                    // $_SERVER["REQUEST_METHOD"] == "POST" ||


                    ?>
                    <div class="quizQuit  rounded m-1 mx-auto absolute-bottom">
                         <form class="mx-auto">
                              <button class="btn m-1" type="submit " formaction="./mathsQuestions.php" formmethod="post" name="prev" value="prev">
                                   < </button>
                                        <button type="submit " class="btn m-1" formaction="./mathsQuestions.php" formmethod="post" value="submit" name="submit">QUIT</button>
                                        <button class="btn m-1" type="submit " formaction="./mathsQuestions.php" formmethod="post" name="next" value="next"> > </button>
                         </form>
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