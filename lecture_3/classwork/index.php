<?php
    include "questions.php";

    // echo "<pre>";
    // print_r($questions);
    // echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student's Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="lecturer.php" method="post">
        <table>
            <tr>
                <td>Question</td>
                <td>Answers</td>
                <td>Max Point</td>
            </tr>
            <tr>
                <?php
                foreach($questions as $question){
                    echo "<tr>";
                    echo "<td>".$question['question']."</td>";
                    echo "<td><input type='text'></td>";
                    echo "<td>".$question['max_point']."</td>";
                    echo "</tr>";
                }

                ?>
                <!-- <td>what is JS?</td>
                <td><input type="text"></td>
                <td>8</td>
            </tr>
            <tr>
                <td>what is react?</td>
                <td><input type="text"></td>
                <td>9</td>
            </tr>
            <tr>
                <td>what is angular</td>
                <td><input type="text"></td>
                <td>10</td>
            </tr>
            <tr>
                <td>what is html</td>
                <td><input type="text"></td>
                <td>8</td>
            </tr>
            <tr>
                <td>what is PHP</td>
                <td><input type="text"></td>
                <td>10</td>
            </tr>
            <tr>
                <td>what is css</td>
                <td><input type="text"></td>
                <td>10</td>
            </tr> -->
            <tr class="buttons">
                <td colspan="3">student <input type="text" placeholder="name" name="firstname"> <input type="text" placeholder="last name" name="lastname"> <button> send</button></td>
                
            </tr>



        </table>
    </form>
</body>
</html>