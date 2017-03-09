<?php
include ('src/connect.php');
$bdd = mysqli_connect(SERVER, USER, PASS, DB);
$tomate = mysqli_query($bdd, "SELECT * FROM pizza WHERE type LIKE '%tomate'");


            while($pizzatomate = mysqli_fetch_assoc($tomate)) {
                echo '
                
                                             
                       <div class="col-xs-12 col-lg-4">	
                            <div class="thumbnail text-center">
                                                                    
                                 <div class="caption fichepizza">
                                      <h3>' . $pizzatomate['nom'] . '</h3>
                                      <p>' . $pizzatomate['ingredients'] . '</p>
                                      <p><span class="prix">29cm: ' . $pizzatomate['pv_taille1'] . '  33cm: ' . $pizzatomate['pv_taille2'] . '</span></p>
                                 </div>
                            </div>
                        </div>';
            }
                                        
                                  

?>