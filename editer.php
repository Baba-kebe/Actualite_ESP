<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style type="text/css">
            form{
                background-color: #F2F2F2;
                width : 50%;
                margin-left: 25%;
                margin-top: 30px;
            }
            legend{
                text-align: center;
                text-transform: capitalize;
                margin-top: 5px;
                font-weight: bolder;
            }
            p{
                margin-left: 1%;
                text-transform: capitalize;
                height: 20px;
                font-weight: bold;
            }
            label{
                margin-left: 1%;
                text-transform: capitalize;
                height: 20px;
                font-weight: bold;
                text-align : center;
            }
            input, select, textarea {
                width: 85%;
                float: right;
                margin-right: 2%;
                height: 20px;
                border: none;
            }
            button{
                background-color: #4CAF50;
                height: 30px;
                color: white;
                border: none;
                text-transform: capitalize;
                margin-left: 13%;
            }
        </style>
    </head>
    <body>
        <form action="service.php" method="post">
            <legend>Ajouter un utilisateur</legend>
            <div>
                <p>
                    titre: <input type="text" name="titre" placeholder="titre de l'article" required> 
                </p>
                <div>
                    <label>contenu: </label><br>
                    <textarea type="text" name="contenu" placeholder="le contenu de l'article" required>
                    </textarea><br>
                </div>
                <p>
                    categorie : <select name="categorie" required>
                        <option value="1">sport</option>
                        <option value="2">sante</option>
                        <option value="3">education</option>
                        <option value="4">politique</option>
                    </select>
                </p>
                <button type="submit">enregistrer</button><br>
            </div>
        </form>
    </body>
</html>