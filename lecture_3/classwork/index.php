<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 800px;
        }
        table, th, td {
            border-collapse: collapse;
            width: 700px;
            border-collapse: collapse;
            border: 1px solid black;
        }
        .buttons {
            text-align: center;
        }

    </style>
</head>
<body style="text-align:center;">
    <form action="">
        
        <table>
            <tr>
                <td>Question</td>
                <td>Answers</td>
                <td>Max Point</td>
            </tr>
            <tr>
                <td>what is JS?</td>
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
            </tr>
            <tr class="buttons">
                <td colspan="3">student <input type="text" placeholder="name"> <input type="text" placeholder="last name"> <button> send</button></td>
                
            </tr>



        </table>

    </form>
</body>
</html>