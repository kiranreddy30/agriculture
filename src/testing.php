<?php
             

             $connection=mysqli_connect('localhost','kiranreddy','Kiran@1804','dbms');
             if(isset($_POST['sent'])){
                $plantname=$_POST['plantname'];
                $symptomname=$_POST['symptomname'];
                // $plantname='banana';
                // $symptomname='curling of leaves';

                $req1="select treatment_desc from treatment where disease_id=(select disease_id from disease_ident where plant_id=(select plant_id from plant where plant_name='$plantname') and symptom_id=(select symptom_id from symptoms where symptom_name='$symptomname'))" ;
                $result=mysqli_query($connection, $req1);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo  $row["treatment_desc"]. "<br>";
                    }
                  } else {
                    echo "0 results";
                  }


             }


             ?>