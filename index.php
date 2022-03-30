<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


        // QUESTION NO 1==========================================================================================



        // Let’s make a result grade calculator…

        // Rishita’s subject marks: SubjectA = 75, SubjectB = 80, SubjectC = 65, SubjectD = 90.

        // Result Calculation formula: Sum all subjects marks and divided by total subject quantity. 

        // From this given formula, you will get a mark. Show the Grade message by the mark.

        // A+ = 80 - 100 

        // A   = 70 - 79

        // A-  = 60 - 69

        // B   = 50 - 59

        // C   = 40 - 49

        // F   = 01 - 39 

        // Firstly you have to calculate the average mark of Rishita.

        // Secondly you have to show the grade message (Like as: “You got A+”) by following this grading range.

        // // 

        // defining variable 
        $SubjectA = 75;
        $SubjectB = 80;
        $SubjectC = 65;
        $SubjectD = 90;

    
        // calculating sum of all subjects 
        $totalMarks= $SubjectA + $SubjectB + $SubjectC + $SubjectD;
        echo "<h1>Total Marks: {$totalMarks}</h1> <br>";

        // average number of subject 
        $averageMarks=$totalMarks / 4;
        echo "<h1>Average Marks: {$averageMarks}</h1>";


        // cheking grades
        if($averageMarks >= 80 && $averageMarks <= 100){
            echo "<h1> Your average number of subjects is {$averageMarks}.You number is between 80 to 100 and You Have got <span style='color:green'>A+</span> </h1>";
        }
        elseif($averageMarks >= 70 && $averageMarks <= 79){
            echo "<h1> Your average number of subjects is {$averageMarks}.You number is between 70 to 79 and You Have got <span style='color:green'>A</span> </h1>";
        }

        elseif($averageMarks >= 60 && $averageMarks <= 69){
            echo "<h1> Your average number of subjects is {$averageMarks}.You number is between 60 to 69 and You Have got <span style='color:green'>A-</span> </h1>";
        }


        elseif($averageMarks >= 50 && $averageMarks <= 59){
            echo "<h1> Your average number of subjects is {$averageMarks}.You number is between 50 to 59 and You Have got <span style='color:green'>B</span> </h1>";
        }

        elseif($averageMarks >= 40 && $averageMarks <= 49){
            echo "<h1> Your average number of subjects is {$averageMarks}.You number is between 40 to 49 and You Have got <span style='color:green'>C</span> </h1>";
        }


        else{
            echo "<h1 style='color:red'>You Failed in exam.Start Reading From Now. </h1>";
        }
    



    // QUESTION NO 2==========================================================================================




        //     Let’s make a game with your bike… You are riding a bike, your bike has some functionalities, these are… start, stop, break, gear, signal, headlight. 

        // When you click on the power/start button, your bike takes a start, 

        // When you click stop, your bike takes a stop, 

        // When you press the break, your bike take break, 

        // when you give the gear, your bike move faster and faster, 

        // when you press the signal button, your bike shows a signal light.

        // When you press the headlight button, your bike’s headlight will start.

        
        // defining variable conditon of bike 
        $button = "break";


        // checking present situation of bike
        
        switch($button){
            case ("start"):
                echo "Bike Started";
                break;

            case ("stop"):
                echo "Bike Stoped";
                break;

            case ("break"):
                echo "Bike Break";
                break;

            case ("gear"):
                echo "Bike is faster and faster";
                break;

            case ("signal"):
                echo "Bike is showing a signal";
                break;
                
            case ("headlight"):
                echo "Bike's headlight has started";
                break;
            
                default:
                    echo "your have inputed wrong input";
                
            }
        








    ?>
</body>
</html>