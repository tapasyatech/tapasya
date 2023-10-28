<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Result</title>
</head>
<style>
        body{
            font-family: serif;
        }
        .result-container{
            max-width:600px;
            margin:0auto;
            padding: 20px;
            border:1px solid#ccc;
            border-radius:5px;
            background-color:#f7f7f7;
        }
        .reuslt{
            margin-bottom:10px;
        }
    </style>
<body>
    <div class="result-container">
        <h1>Quiz Results</h1>
        <?php
        $correctAnswers =['q1' =>'a','q2'=>'a'];//define correct answer herre $userAnswer =$_post
       
        $score=0;
        foreach($correctAnswers as $question =>$correctAnswers)
        {
            if
            (isset($userAnswers[$question])
            &&$userAnswers[$question]==$correctAnswers)
            {
                $score
            }
        }
        echo'<div class="result">';
        echo '<p>Your score:'.$score.'out of '.count($correctAnswers).'</p>';
        echo'</div>';

        if($score == count($correctAnswers)){
            echo '<div class="result">';
            echo '<p>Congratulations!/You got all the Question correct.</p>';
        }
        else{
            echo'<div class=>'
        }
        ?>
    </div>

</body>
</html>