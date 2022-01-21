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
     <link rel="stylesheet" href="../../css/quizQuestion.css">
     <link rel="stylesheet" href="../../index.css">
     <title>Maths Quiz</title>
</head>

<body>
     <div class="container">
          <?php require "../nav.php" ?>
          <div class="row row-cols-2 body">
               <div class="card mx-auto shadow p-1 bg-body rounded " style="max-width: 500px;">
                    <?php
                    require "../../php/db/dbConnection.php";
                    session_start();//starting session
                    $confirm = $_SESSION['rownum'];
                    $rowNum1 = $_SESSION['rownum'];

                    if (isset($_POST['1'])) { 
                         $Post1 = $_POST['1'];
                         $insertRes = "INSERT INTO response (res, qid)  VALUES ($Post1, $rowNum1) ";
                         $insert = mysqli_query($conn, $insertRes);
                         require "../quiz_form.php";
                    } 
                    elseif (isset($_POST['2'])) { //name
                         $Post2 = $_POST['2'];
                         $insertRes = "INSERT INTO response (res, qid)  VALUES ($Post2, $rowNum1)";
                         $insert = mysqli_query($conn, $insertRes);
                         require "../quiz_form.php";
                    } 
                    elseif (isset($_POST['3'])) { //name
                         $Post3 = $_POST['3'];
                         $insertRes = "INSERT INTO response (res, qid)  VALUES ($Post3, $rowNum1) ";
                         $insert = mysqli_query($conn, $insertRes);
                         require "../quiz_form.php";

                    } 
                    elseif (isset($_POST['4'])) {  
                         $Post4 = $_POST['4'];
                         $insertRes = "INSERT INTO response (res, qid)  VALUES ($Post4, $rowNum1) ";
                         $insert = mysqli_query($conn, $insertRes);
                         require "../quiz_form.php";


                    } 
                    else if (isset($_POST['submit'])) {
                         echo "submitted! ";
                         echo "
                         <div class='quizQuit  rounded m-1 mx-auto absolute-bottom'>
                              <h2>Submitted successfully!</h2>
                         </div>";

                         //evaluation of responses
                         // SELECT B from table_name WHERE A = 'a';
                         $score = 0;
                         for($i=1; $i<=$rowNum1;$i++){
                              $r = $i+1;
                              $evalRes = "SELECT * FROM response WHERE qid = $i";
                              $evalQuery = mysqli_query($conn, $evalRes);

                              $Question = "SELECT * FROM maths WHERE qid = $r";
                              $QuestionQuery = mysqli_query($conn, $Question);

                              if($evalQuery && $QuestionQuery){
                                   while( $row = mysqli_fetch_row($evalQuery) ){
                                        $response = $row[1];
                                   };
                                   while ( $row = mysqli_fetch_row($QuestionQuery) ) {
                                        $answer = $row[6];
                                   }
                                   if( number_format($response) == number_format($answer) ){
                                        $score++;
                                   }
                                   
                              }
                              else{
                                   echo "Erorr in evaluation";
                              }
                         }
                         echo $score;
                         echo "
                         <form class='mx-auto'>
                              <button type='submit' class='btn m-1' formaction='../../index.php' formmethod='post' value='submit' name='submit'>Home</button>
                         </form>
                         ";

                    }
                    else if (isset($_POST['prev'])) {
                         $rowNum1 = $_SESSION['rownum']; //getting value from session
                         $rowNum1--;
                         $_SESSION['rownum'] = $rowNum1; //updating value of session
                         require "../quiz_form.php";

                    }
                    else if (isset($_POST['next'])) {
                         $rowNum1 = $_SESSION['rownum'];
                         $rowNum1++;
                         $_SESSION['rownum'] = $rowNum1;
                         require "../quiz_form.php";
                    }
                    else if(intval($confirm) < 1){
                         echo"
                              <form class='mx-auto'>
                                   <button type='submit ' class='btn m-1' formaction='./mathsQuestions.php' formmethod='post' name='next' value='next'>Confirm</button>   
                              </form>";
                    }
                    ?>
               </div>
          </div>
          <?php require "../foot.php"; ?>
     </div>
</body>

</html>