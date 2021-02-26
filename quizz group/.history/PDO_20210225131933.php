<?php try {
            $pdo = new PDO("mysql:host=localhost;dbname=quizz", "root", ""); 

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    

        } catch(PDOException $e) {

            echo "Connection failed: " . $e->getMessage();
        }
        //Insertion

         $result = $pdo->exec("INSERT INTO question (content, id) VALUES ('question 1', 1)");

         echo $result . '<br>'; // renvoi le nombre de valeur qui on été ajoutées

        //Modification

        $result = $pdo->exec("UPDATE question SET content = 'Quelle est ......'");
        
        echo $result . '<br>';

        // //Suppression

        // $result = $pdo->exec("DELETE FROM question");

        // echo $result . '<br>';

        //Affichage

        $result = $pdo->query("SELECT * FROM question WHERE content = 'Question1'");

        $question = $result->fetch(PDO::FETCH_OBJ);

        var_dump($question);

        //Affichage multiple

        $result = $pdo->query("SELECT * FROM question");

        while($question = $result->fetch(PDO::FETCH_OBJ)) { ?>

            <p><?php echo $question->question; ?></p>

        <?php }