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
            input, select {
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
                    Nom : <input type="text" name="nom" placeholder="le nom de l'utilisateur" required> 
                </p>
                <p>
                    prenom : <input type="text" name="prenom" placeholder="le prenom de l'utilisateur" required>
                </p>
                <p>
                    login : <input type="email" name="email" placeholder="l'email de l'utilisateur" required> 
                </p>
                <p>
                    Password :<input type="password" name="password" placeholder="le password de l'utilisateur"
                    minlength="8" required>
                </p>
                <p>
                    role : <select name="role" required>
                        <option value="administrateur">administrateur</option>
                        <option value="editeur">editeur</option>
                        <option value="visiteur">visiteur</option>
                    </select>
                </p>
                <button type="submit">enregistrer</button><br>
            </div>
        </form>
    </body>
</html>