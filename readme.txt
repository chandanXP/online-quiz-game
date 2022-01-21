1. save responses in datdabase
2. show the result.




<div class="quizQuit  rounded m-1 mx-auto absolute-bottom">
                         <?php
                              $temp = $_SESSION['rownum'];
                              if(  $temp == 0 ){
                                   echo"
                                   <form class='mx-auto'>
                                        <button type='submit ' class='btn m-1' formaction='./mathsQuestions.php' formmethod='post' name='next' value='next'>Confirm</button>   
                                   </form>
                                   ";
                              }
                              else if ($temp == 1){
                                   echo "
                                   <form class='mx-auto'>
                                        <button type='submit' class='btn m-1' formaction='./mathsQuestions.php' formmethod='post' value='submit' name='submit'>QUIT</button>
                                        <button class='btn m-1' type='submit' formaction='./mathsQuestions.php' formmethod='post' name='next' value='next'> > </button>
                                   </form>
                                   ";
                              }
                              else if(isset($_POST['submit'])){
                                   echo "Your Score";
                              }
                              else if ($temp == 10 ){
                                   echo "
                                   <form class='mx-auto'>
                                        <button class='btn m-1' type='submit' formaction='./mathsQuestions.php' formmethod='post' name='prev' value='prev'>
                                             < </button>
                                        <button type='submit' class='btn m-1' formaction='./mathsQuestions.php' formmethod='post' value='submit' name='submit'>Submit</button>
                                   </form>
                                   ";
                              }
                              
                              else{
                                   echo"
                                   <form class='mx-auto'>
                                        <button class='btn m-1' type='submit' formaction='./mathsQuestions.php' formmethod='post' name='prev' value='prev'>
                                             < </button>
                                        <button type='submit' class='btn m-1' formaction='./mathsQuestions.php' formmethod='post' value='submit' name='submit'>QUIT</button>
                                        <button class='btn m-1' type='submit' formaction='./mathsQuestions.php' formmethod='post' name='next' value='next'> > </button>
                                   </form>
                                   ";
                              }       
                         ?>    
                    </div>