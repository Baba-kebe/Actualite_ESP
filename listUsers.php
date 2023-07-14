<html>
    <head>
        <meta charset="utf-8">
        <meta author="ousmane kebe">
        <style type="text/css">
            h2{
                text-align: center;
                background-color: #F2F2F2;
                text-transform:uppercase;
                font-style: italic;
                margin-top: 2%;
            }
            table{
                background-color : #F2F2F2;
                width : 90%;
                margin-left : 5%;
                margin-top : 2%;
            }
            tr{
                background-color : white;
                margin-top : 30px;
            }
            td{
                margin-left: 50px
            }
            button{
                background-color: red;
                height : 30px;
                color: white;
                text-transform : capitalize;
                border : none;
            }
            .btn-baba{
                background-color: #4CAF50;
                height: 30px;
                color: white;
                border: none;
                margin-top: 10px;
                width : 200px;
                margin-left : 10px;
            }
            a{
                text-decoration: none;
                color: white;
            }
        </style>
    </head>
    <body>
    <button class="btn-baba"><a href="addUser.php">Ajouter un Utilisateur </a></button><br>
        <h2>Listes des utilisateurs</h2>
        <div class="container">
            <table>
                <header>
                    <tr>
                        <td style= "text-align : center; text-transform: capitalize;font-weight:bold;
                           font-size: 17px">nom</td>
                        <td style= "text-align : center; text-transform: capitalize;font-weight:bold;
                           font-size: 17px">prenom</td>
                        <td style= "text-align : center; text-transform: capitalize;font-weight:bold;
                           font-size: 17px">email</td>
                        <td style= "text-align : center; text-transform: capitalize;font-weight:bold;
                           font-size: 17px">password</td>
                           <td style= "text-align : center; text-transform: capitalize;font-weight:bold;
                           font-size: 17px">role</td>
                        <td style= "text-align : center; text-transform: capitalize;font-weight:bold;
                           font-size: 17px">supprimer</td>
                    </tr>
                </header>
                <tbody>
                    <?php
                        require "service.php";
                        $categorie = 0;
                        $result = getUsers();
                        foreach($result as $data){
                            echo "<tr>";
                            echo "<td>".$data['nom']."</td>"; 
                            echo "<td>".$data['prenom']."</td>";   
                            echo "<td>".$data['email']."</td>";   
                            echo "<td>".$data['password']."</td>";
                            echo "<td>".$data['role']."</td>";
                            echo "<td>";
                                echo "<form method='post'>";
                                    echo "<input type='hidden' value=".$data['email']." name='email'>" ;
                                    echo "<button type='submit'>supprimer</button>";
                                echo "</form>"; 
                            echo "</td>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        
    </body>
</html>