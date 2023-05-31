<?php

function convertToBanglaNumber($number) {
    $englishNumbers = array('0','1','2','3','4','5','6','7','8','9');
    $banglaNumbers = array('০','১','২','৩','৪','৫','৬','৭','৮','৯');
    
    $banglaNumber = str_replace($englishNumbers, $banglaNumbers, $number);
    return $banglaNumber;
}
$banglaNumber='১';
// Initialige variable assign value from user input by post method 
$year = $_POST['year'];
// Initialige variable assign value from user input by post method
$month = $_POST['month'];
$previous_month = $month-1;
$current_month = $month;
$next_month = $month + 1 ;
$bangla_year = $year-593;
$bangla_year = convertToBanglaNumber($bangla_year);
$arbi_year = $year-579;
$arbi_year = convertToBanglaNumber($arbi_year);
// Create a DateTime object for the first day of the selected month
//built in class
$date = new DateTime("$year-$current_month-01");
//var_dump($date); 
//= 2023-05-01 00:00:00.000000
// Get the number of days in the month using datetime format where t is used for number of days in the given month 
$numDays = $date->format('t');
// var_dump($numDays);

// Get the weekday of the first day (0 - Sunday, 1 - Monday, etc.)
//Numeric representation of the day of the week	
$firstDayOfWeek = $date->format('w');
//var_dump($firstDayOfWeek); = 0-6

// Create an array of weekday names
$weekdays = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');

//num to string for month 
//-------------------------------------------.
//num to string for month 
$month_name='';
if($current_month == 1){
    //1 for january month 
    $month_name = 'January';
    //Initilize $month_name to January
}
else if($current_month == 2){
    $month_name = 'February';
    //Initilize $month_name to February
}
else if($current_month== 3){
    $month_name = 'March';
    //Initilize $month_name to March
}
else if($current_month == 4){
    $month_name = 'April';
    //Initilize $month_name to April
}
else if($current_month == 5){
    $month_name = 'May';
    //Initilize $month_name to May
}
else if($current_month == 6){
    $month_name = 'June';
    //Initilize $month_name to June
}
else if($current_month == 7){
    $month_name = 'July';
    //Initilize $month_name to July
}
else if($current_month == 8){
    $month_name = 'August';
    //Initilize $month_name to August
}
else if($current_month == 9){
    $month_name = 'September';
    //Initilize $month_name to September
}
else if($current_month == 10){
    $month_name = 'October';
    //Initilize $month_name to October
}
else if($current_month== 11){
    $month_name = 'November';
    //Initilize $month_name to November
}
else if($current_month== 12){
    $month_name = 'December';
    //Initilize $month_name to December
}

echo "<div class='sadi'>";
echo "<td>";
// Print the Month and year 
echo "<h2>" . $month_name. " " . $year . "<br>" ."</h2>";
echo "<h3>".$bangla_year. ' বঙ্গাব্দ '."</h3>";
echo "<h1>".$arbi_year.' হিজরি'."</h1>";
//Print calendar table 
echo "<table>";

echo "<tr>";
//Loop for print 7 days 
foreach ($weekdays as $day) {
    echo "<th>$day</th>";
}
echo "</tr>";


$date = new DateTime("$year-$current_month-01");
$firstDayOfWeek = $date->format('w');

// Fill in the calendar days
echo "<tr>";

for ($i = 0; $i < $firstDayOfWeek; $i++) {
    echo "<td></td>";
    //Fill the previos days empty 
    //var_dump($i);
    //int(0) int(1) int(2) int(3) int(4) int(5)
}
echo "<br>";
$day = 1;
$bangla_month = 0;
$count1=0;
$count2=0;
//Initialige day = 1 
while ($day <= $numDays) { // 1 to total days 
    if ($firstDayOfWeek == 7) { 
        //Row enter 
        echo "</tr><tr>";
        $firstDayOfWeek = 0; 
        //then initialige first day is 0
    }

    // Condition for bangla month 
    if(isset($day)){
        if($count1==0){
            if($current_month==1){
                $bangla_month= (31-$day)-14+$day;
                $count1=1;
               }
            elseif($current_month==2){
                if($current_month%4==0 ||$current_month%100==0 || $current_month%400==0){
                    $bangla_month = (29-$day)-10+$day;
                    $count1=1;
                }
                else {
                    $bangla_month =(28-$day)-10+$day;
                    $count1=1;
                }
            }
            elseif($current_month==3){
                $bangla_month =(31-$day)-15+$day;
                $count1=1;
            }
            elseif($current_month==4){
                $bangla_month =(31-$day)-13+$day;
                $count1=1;
            }
            elseif($current_month==5){
                $bangla_month =(31-$day)-13+$day;
                $count1=1;
            }
            elseif($current_month==6){
                $bangla_month =(31-$day)-13+$day;
                $count1=1;
            }
            elseif($current_month==7){
                $bangla_month =(31-$day)-14+$day;
                $count1=1;
            }
            elseif($current_month==8){
                $bangla_month =(31-$day)-14+$day;
                $count1=1;
            }
            elseif($current_month==9){
                $bangla_month =(31-$day)-14+$day;
                $count1=1;
            }
            elseif($current_month==10){
                $bangla_month =(31-$day)-15+$day;
                $count1=1;
            }
            elseif($current_month==11){
                $bangla_month =(31-$day)-15+$day;
                $count1=1;
            }
            elseif($current_month==12){
                $bangla_month =(31-$day)-15+$day;
                $count1=1;
            }
        }
        else{
            if($current_month==1){
                $bangla_month++;
                if($bangla_month>30){
                    $bangla_month=1;
                }
            }
            elseif($current_month==2){
                $bangla_month++;
                if($bangla_month>30){
                    $bangla_month=1;
                }
            }
            elseif($current_month==3){
                $bangla_month++;
                if($bangla_month>29){
                    $bangla_month=1;
                }
            }
            elseif($current_month==4){
                $bangla_month++;
                if($bangla_month>30){
                    $bangla_month=1;
                }
            }
            elseif($current_month==5){
                $bangla_month++;
                if($bangla_month>31){
                    $bangla_month=1;
                }
            }
            elseif($current_month==6){
                $bangla_month++;
                if($bangla_month>31){
                    $bangla_month=1;
                }
            }
            elseif($current_month==7){
                $bangla_month++;
                if($bangla_month>31){
                    $bangla_month=1;
                }
            }
            elseif($current_month==8){
                $bangla_month++;
                if($bangla_month>31){
                    $bangla_month=1;
                }
            }
            elseif($current_month==9){
                $bangla_month++;
                if($bangla_month>31){
                    $bangla_month=1;
                }
            }
            elseif($current_month==10){
                $bangla_month++;
                if($bangla_month>31){
                    $bangla_month=1;
                }
            }
            elseif($current_month==11){
                $bangla_month++;
                if($bangla_month>30){
                    $bangla_month=1;
                }
            }
            elseif($current_month==12){
                $bangla_month++;
                if($bangla_month>30){
                    $bangla_month=1;
                }
            }
            
        }
        

    }

    //Condition for arabic month 
    if(isset($day)){
        if($count2==0){
            if($current_month==1){
                $arbi_month= (29-$day)-7+$day;
                $count2=1;
               }
            elseif($current_month==2){
                if($current_month%4==0 ||$current_month%100==0 || $current_month%400==0){
                    $arbi_month = (29-$day)-10+$day;
                    $count2=1;
                }
                else {
                    $arbi_month =(28-$day)-10+$day;
                    $count2=1;
                }
            }
            elseif($current_month==3){
                $arbi_month =(31-$day)-15+$day;
                $count2=1;
            }
            elseif($current_month==4){
                $arbi_month =(31-$day)-13+$day;
                $count2=1;
            }
            elseif($current_month==5){
                $arbi_month =(30-$day)+$day-19;
                $count2=1;
            }
            elseif($current_month==6){
                $arbi_month =(31-$day)-13+$day;
                $count2=1;
            }
            elseif($current_month==7){
                $arbi_month =(31-$day)-14+$day;
                $count2=1;
            }
            elseif($current_month==8){
                $arbi_month =(31-$day)-14+$day;
                $count2=1;
            }
            elseif($current_month==9){
                $arbi_month =(31-$day)-14+$day;
                $count2=1;
            }
            elseif($current_month==10){
                $arbi_month =(31-$day)-15+$day;
                $count2=1;
            }
            elseif($current_month==11){
                $arbi_month =(31-$day)-15+$day;
                $count2=1;
            }
            elseif($current_month==12){
                $arbi_month =(31-$day)-15+$day;
                $count2=1;
            }
        }
        else{
            if($current_month==1){
                $arbi_month++;
                if($arbi_month>30){
                    $arbi_month=1;
                }
            }
            elseif($current_month==2){
                $arbi_month++;
                if($arbi_month>30){
                    $arbi_month=1;
                }
            }
            elseif($current_month==3){
                $arbi_month++;
                if($arbi_month>29){
                    $arbi_month=1;
                }
            }
            elseif($current_month==4){
                $arbi_month++;
                if($arbi_month>30){
                    $arbi_month=1;
                }
            }
            elseif($current_month==5){
                $arbi_month++;
                if($arbi_month>30){
                    $arbi_month=1;
                }
            }
            elseif($current_month==6){
                $arbi_month++;
                if($arbi_month>31){
                    $arbi_month=1;
                }
            }
            elseif($current_month==7){
                $arbi_month++;
                if($arbi_month>31){
                    $arbi_month=1;
                }
            }
            elseif($current_month==8){
                $arbi_month++;
                if($arbi_month>31){
                    $arbi_month=1;
                }
            }
            elseif($current_month==9){
                $arbi_month++;
                if($arbi_month>31){
                    $arbi_month=1;
                }
            }
            elseif($current_month==10){
                $arbi_month++;
                if($arbi_month>31){
                    $arbi_month=1;
                }
            }
            elseif($current_month==11){
                $arbi_month++;
                if($arbi_month>30){
                    $arbi_month=1;
                }
            }
            elseif($current_month==12){
                $arbi_month++;
                if($arbi_month>30){
                    $arbi_month=1;
                }
            }
            
        }
        

    }
    $temp1=convertToBanglaNumber($bangla_month);
    $temp2=convertToBanglaNumber($arbi_month);

    echo "<td><small id='bangla'; style='font-size:20px;'>$temp1</small> $day</td>";
    $day++;
    $firstDayOfWeek++;
}
echo "</tr>";
echo "</table>";
echo "</td>";
echo "</div>";
//---------------------------------------
?>

<!DOCTYPE html>
<!-- It ensure,the page parse same way by different web page-->
<html>
<head>
    <title>Calendar</title>
    <link rel="stylesheet" href="style.css">
    <!--the page show the tittle -->
</head>
<body>
</body>
</html>
