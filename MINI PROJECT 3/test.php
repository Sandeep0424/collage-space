<?php
                $con = mysqli_connect("localhost","root","","annoucement");
                $query = "SELECT * FROM demo";
                $result = mysqli_query($con, $query);

                if ($result) {
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        print_r($row);
                    }
                  }
                  
            
            ?>
