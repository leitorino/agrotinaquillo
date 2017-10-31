          <?php 

            include("bd/conexion.php");

                if(isset($_POST['usuario'])){
                 $usuario =$_POST["usuario"];
                }else{
                    $usuario="";
                }

                if(isset($_POST['clave'])){
                 $pass =$_POST['clave'];
                }else{
                    $pass="";
                }   

            $sql= "SELECT * FROM `persona` WHERE `usuario` = '$usuario'";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_array($result);
            $comp=$row[2];

            if ($pass == $comp){
                session_start();
                $_SESSION["usuarioc"]= $_POST["usuario"];
                header('Location: usuario/usuario.php');

            }else{ 
                header('Location: index.php?el=1');
            }
        ?>