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
            .btn2{
                background-color: #4CAF50;
                height : 30px;
                color: white;
                text-transform : capitalize;
                border : none;
            }

        </style>
    </head>
    <body>
        <h2>Listes des articles</h2>
        <div class="container">
            <table>
                <header>
                    <tr>
                        <td style= "text-align : center; text-transform: capitalize;font-weight:bold;
                           font-size: 17px">Id</td>
                        <td style= "text-align : center; text-transform: capitalize;font-weight:bold;
                           font-size: 17px">titre</td>
                        <td style= "text-align : center; text-transform: capitalize;font-weight:bold;
                           font-size: 17px">contenu</td>
                        <td style= "text-align : center; text-transform: capitalize;font-weight:bold;
                           font-size: 17px">date de modification</td>
                        <td style= "text-align : center; text-transform: capitalize;font-weight:bold;
                           font-size: 17px">supprimer</td>
                        <td style= "text-align : center; text-transform: capitalize;font-weight:bold;
                           font-size: 17px">modifier</td>
                        
                    </tr>
                </header>
                <tbody>
                    <?php
                        require "service.php";
                        $categorie = 0;
                        $result = getArticles($categorie);
                        foreach($result as $data){
                            echo "<tr>";
                            echo "<td>".$data['id']."</td>"; 
                            echo "<td>".$data['titre']."</td>";   
                            echo "<td>".$data['contenu']."</td>";   
                            echo "<td>".$data['dateModification']."</td>";
                            echo "<td>";
                                echo "<form method='post'><br>";
                                    echo "<input type='hidden' value=".$data['id']." name='id'>" ;
                                    echo "<button type='submit'>supprimer</button>";
                                echo "</form>"; 
                            echo "</td>";
                            echo "<td>";
                                    echo "<button type='submit'class='btn2'>reediter</button>";
                            echo "</td>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        
    </body>
</html>