 <table border="1" align="center">
            <?php
			echo'<h1>TABLAS DE MULTIPLICAR<h1>';
            echo "<tr>";
            for ($cabecera="0";$cabecera<=10;$cabecera++){
                        echo "<th>";
                        echo $cabecera;
                        echo "</th>";
            }
            echo "</tr>";
            for ($x = 1; $x <=10; $x++){
                       echo "<tr>";
                       echo "<th>";
                       echo $x;
                       echo "</th>";
                            for ($y=1;$y<=10;$y++){                      
                                    $multiplicacion=$x*$y;                    
                                    echo "<td>";                      
                                    echo $multiplicacion;                      
                                    echo "</td>";              
                            }              
                    echo "</tr>";          
                    }      
    ?>      
    </table>
