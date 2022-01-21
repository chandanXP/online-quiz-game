<?php
    $rowNum1 = $_SESSION['rownum']; 
    $dbName = $_SESSION['dbName'];
    $getSql = "SELECT * FROM  `$dbName` LIMIT  $rowNum1 , 1";
    $getques = mysqli_query($conn, $getSql);
    
    if ($getques) {
        while ($row = mysqli_fetch_row($getques)) {
            ?>
            <div class='questionNumber rounded m-1'>
                <h2 class='text-center'><?php echo"$rowNum1" ?></h2>
            </div>
            <form method='post' class='rounded p-1'  action='./mathsQuestions.php'>
                <div class='quizQuestions rounded  p-1' style='height: 100px;' > <p><?php echo"$row[1]" ?></p> </div>
                <div class='quizOptions rounded  p-1'  >
                    <ul class='list-group options m-1 '>
                        <li><button type='submit' name='1' value='1' class='btn m-1 '><?php echo"$row[2]" ?></button></li>
                        <li><button type='submit' name='2' value='2' class='btn m-1 '><?php echo"$row[3]" ?></button></li>
                        <li><button type='submit' name='3' value='3' class='btn m-1 '><?php echo"$row[4]" ?></button></li>
                        <li><button type='submit' name='4' value='4' class='btn m-1 '><?php echo"$row[5]" ?></button></li>
                    </ul>
                </div>
                <div class="quizQuit  rounded m-1 mx-auto absolute-bottom">
                    <?php
                    if($rowNum1 == 1){
                        echo "
                            <form class='mx-auto'>
                                <button type='submit' class='btn m-1' formaction='./mathsQuestions.php' formmethod='post' value='submit' name='submit'>QUIT</button>
                                <button class='btn m-1' type='submit' formaction='./mathsQuestions.php' formmethod='post' name='next' value='next'> > </button>
                            </form>";
                    }
                    else if ($rowNum1 == 10 ){
                        echo "
                        <form class='mx-auto'>
                             <button class='btn m-1' type='submit' formaction='./mathsQuestions.php' formmethod='post' name='prev' value='prev'>
                                  < </button>
                             <button type='submit' class='btn m-1' formaction='./mathsQuestions.php' formmethod='post' value='submit' name='submit'>Submit</button>
                        </form>";
                    }
                    else if(isset($_POST['submit'])){
                        session_destroy();
                        echo "Your Score";
                    }
                    else{
                        echo "
                        <button class='btn m-1' type='submit' formaction='./mathsQuestions.php' formmethod='post' name='prev' value='prev'>
                            < </button>
                        <button type='submit' class='btn m-1' formaction='./mathsQuestions.php' formmethod='post' value='submit' name='submit'>QUIT</button>
                        <button class='btn m-1' type='submit' formaction='./mathsQuestions.php' formmethod='post' name='next' value='next'> > </button>
                        ";
                    }
                    ?>
                </div>
            </form>
            
            <?php
            
        }
   }
?>

