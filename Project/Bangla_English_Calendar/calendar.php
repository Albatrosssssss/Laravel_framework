<?php

function convertToBanglaNumber($number)
{
    $englishNumbers = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    $banglaNumbers = array('০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯');

    $banglaNumber = str_replace($englishNumbers, $banglaNumbers, $number);
    return $banglaNumber;
}
$banglaNumber = '১';
// Initialige variable assign value from user input by post method 
$year = $_POST['year'];
// Initialige variable assign value from user input by post method
$month = $_POST['month'];
$previous_month = $month - 1;
$current_month = $month;
$next_month = $month + 1;
$bangla_year = $year - 593;
$bangla_year = convertToBanglaNumber($bangla_year);
$arbi_year = $year - 579;
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

//Bangla Month Name Calcluation

//num to string for month 
//-------------------------------------------.
//num to string for month 
$month_name = '';
if ($current_month == 1) {
    //1 for january month 
    $month_name = 'JANUARY';
    //Initilize $month_name to January
} else if ($current_month == 2) {
    $month_name = 'FEBRUARY';
    //Initilize $month_name to February
} else if ($current_month == 3) {
    $month_name = 'MARCH';
    //Initilize $month_name to March
} else if ($current_month == 4) {
    $month_name = 'APRIL';
    //Initilize $month_name to April
} else if ($current_month == 5) {
    $month_name = 'MAY';
    //Initilize $month_name to May
} else if ($current_month == 6) {
    $month_name = 'JUNE';
    //Initilize $month_name to June
} else if ($current_month == 7) {
    $month_name = 'JULY';
    //Initilize $month_name to July
} else if ($current_month == 8) {
    $month_name = 'AUGUST';
    //Initilize $month_name to August
} else if ($current_month == 9) {
    $month_name = 'SEPTEMBER';
    //Initilize $month_name to September
} else if ($current_month == 10) {
    $month_name = 'OCTOBER';
    //Initilize $month_name to October
} else if ($current_month == 11) {
    $month_name = 'NOVEMBER';
    //Initilize $month_name to November
} else if ($current_month == 12) {
    $month_name = 'DECEMBER';
    //Initilize $month_name to December
}

echo "<div class='sadi'>";
echo "<td>";
// Print the Month and year 
echo "<h2>" . $month_name . "-" . $year . "<br>" . "</h2>";
echo "<h3>" . $bangla_year . ' বঙ্গাব্দ ' . "</h3>";
echo "<h1>" . $arbi_year . ' হিজরি' . "</h1>";

//Print calendar table 
echo "<table>";

// echo "</tr>";
echo "<tr id = 'black'>";
echo "<th>SUN</th>";
echo "<th>MON</th>";
echo "<th>TUE</th>";
echo "<th>WED</th>";
echo "<th>THU</th>";
echo "<th id = 'a'>FRI</th>";
echo "<th id = 'b'>SAT</th>";
echo "</tr>";





$date = new DateTime("$year-$current_month-01");
$firstDayOfWeek = $date->format('w');
//var_dump($firstDayOfWeek);
// Fill in the calendar days
echo "<tr >";

//Fill the previos days empty 
for ($i = 1; $i <= $firstDayOfWeek; $i++) {
    echo "<td></td>";
    //var_dump($i);
    //int(0) int(1) int(2) int(3) int(4) int(5)
}

$day = 1;
$bangla_month = 0;
$count1 = 0;
$count2 = 0;


//Bangla Month 
$bangla_month_name_select = '';

while ($day <= $numDays) { // 1 to total days 
    if ($firstDayOfWeek == 7) {
        //Row enter 
        echo "<tr></tr>";
        $firstDayOfWeek = 0;
        //then initialige first day is 0
    }
    // Condition for bangla month 
    if (isset($day)) {
        if ($count1 == 0) {
            if ($current_month == 1) {
                $bangla_month = (31 - $day) - 14 + $day;
                $count1 = 1;
            } elseif ($current_month == 2) {
                if ($current_month % 4 == 0 || $current_month % 100 == 0 || $current_month % 400 == 0) {
                    $bangla_month = (29 - $day) - 10 + $day;
                    $count1 = 1;
                } else {
                    $bangla_month = (28 - $day) - 10 + $day;
                    $count1 = 1;
                }
            } elseif ($current_month == 3) {
                $bangla_month = (31 - $day) - 15 + $day;
                $count1 = 1;
            } elseif ($current_month == 4) {
                $bangla_month = (31 - $day) - 13 + $day;
                $count1 = 1;
            } elseif ($current_month == 5) {
                $bangla_month = (31 - $day) - 13 + $day;
                $count1 = 1;
            } elseif ($current_month == 6) {
                $bangla_month = (31 - $day) - 13 + $day;
                $count1 = 1;
            } elseif ($current_month == 7) {
                $bangla_month = (31 - $day) - 14 + $day;
                $count1 = 1;
            } elseif ($current_month == 8) {
                $bangla_month = (31 - $day) - 14 + $day;
                $count1 = 1;
            } elseif ($current_month == 9) {
                $bangla_month = (31 - $day) - 14 + $day;
                $count1 = 1;
            } elseif ($current_month == 10) {
                $bangla_month = (31 - $day) - 15 + $day;
                $count1 = 1;
            } elseif ($current_month == 11) {
                $bangla_month = (31 - $day) - 15 + $day;
                $count1 = 1;
            } elseif ($current_month == 12) {
                $bangla_month = (31 - $day) - 15 + $day;
                $count1 = 1;
            }
        } else {
            if ($current_month == 1) {
                $bangla_month++;
                if ($bangla_month > 30) {
                    $bangla_month = 1;
                }
            } elseif ($current_month == 2) {
                $bangla_month++;
                if ($bangla_month > 30) {
                    $bangla_month = 1;
                }
            } elseif ($current_month == 3) {
                $bangla_month++;
                if ($bangla_month > 29) {
                    $bangla_month = 1;
                }
            } elseif ($current_month == 4) {
                $bangla_month++;
                if ($bangla_month > 30) {
                    $bangla_month = 1;
                }
            } elseif ($current_month == 5) {
                $bangla_month++;
                if ($bangla_month > 31) {
                    $bangla_month = 1;
                }
            } elseif ($current_month == 6) {
                $bangla_month++;
                if ($bangla_month > 31) {
                    $bangla_month = 1;
                }
            } elseif ($current_month == 7) {
                $bangla_month++;
                if ($bangla_month > 31) {
                    $bangla_month = 1;
                }
            } elseif ($current_month == 8) {
                $bangla_month++;
                if ($bangla_month > 31) {
                    $bangla_month = 1;
                }
            } elseif ($current_month == 9) {
                $bangla_month++;
                if ($bangla_month > 31) {
                    $bangla_month = 1;
                }
            } elseif ($current_month == 10) {
                $bangla_month++;
                if ($bangla_month > 31) {
                    $bangla_month = 1;
                }
            } elseif ($current_month == 11) {
                $bangla_month++;
                if ($bangla_month > 30) {
                    $bangla_month = 1;
                }
            } elseif ($current_month == 12) {
                $bangla_month++;
                if ($bangla_month > 30) {
                    $bangla_month = 1;
                }
            }
        }
    }

    //Condition for arabic month 
    if (isset($day)) {
        if ($count2 == 0) {
            if ($current_month == 1) {
                $arbi_month = (29 - $day) - 7 + $day;
                $count2 = 1;
            } elseif ($current_month == 2) {
                if ($current_month % 4 == 0 || $current_month % 100 == 0 || $current_month % 400 == 0) {
                    $arbi_month = (29 - $day) - 10 + $day;
                    $count2 = 1;
                } else {
                    $arbi_month = (28 - $day) - 10 + $day;
                    $count2 = 1;
                }
            } elseif ($current_month == 3) {
                $arbi_month = (31 - $day) - 15 + $day;
                $count2 = 1;
            } elseif ($current_month == 4) {
                $arbi_month = (31 - $day) - 13 + $day;
                $count2 = 1;
            } elseif ($current_month == 5) {
                $arbi_month = (30 - $day) + $day - 19;
                $count2 = 1;
            } elseif ($current_month == 6) {
                $arbi_month = (31 - $day) - 13 + $day;
                $count2 = 1;
            } elseif ($current_month == 7) {
                $arbi_month = (31 - $day) - 14 + $day;
                $count2 = 1;
            } elseif ($current_month == 8) {
                $arbi_month = (31 - $day) - 14 + $day;
                $count2 = 1;
            } elseif ($current_month == 9) {
                $arbi_month = (31 - $day) - 14 + $day;
                $count2 = 1;
            } elseif ($current_month == 10) {
                $arbi_month = (31 - $day) - 15 + $day;
                $count2 = 1;
            } elseif ($current_month == 11) {
                $arbi_month = (31 - $day) - 15 + $day;
                $count2 = 1;
            } elseif ($current_month == 12) {
                $arbi_month = (31 - $day) - 15 + $day;
                $count2 = 1;
            }
        } else {
            if ($current_month == 1) {
                $arbi_month++;
                if ($arbi_month > 30) {
                    $arbi_month = 1;
                }
            } elseif ($current_month == 2) {
                $arbi_month++;
                if ($arbi_month > 30) {
                    $arbi_month = 1;
                }
            } elseif ($current_month == 3) {
                $arbi_month++;
                if ($arbi_month > 29) {
                    $arbi_month = 1;
                }
            } elseif ($current_month == 4) {
                $arbi_month++;
                if ($arbi_month > 30) {
                    $arbi_month = 1;
                }
            } elseif ($current_month == 5) {
                $arbi_month++;
                if ($arbi_month > 30) {
                    $arbi_month = 1;
                }
            } elseif ($current_month == 6) {
                $arbi_month++;
                if ($arbi_month > 31) {
                    $arbi_month = 1;
                }
            } elseif ($current_month == 7) {
                $arbi_month++;
                if ($arbi_month > 31) {
                    $arbi_month = 1;
                }
            } elseif ($current_month == 8) {
                $arbi_month++;
                if ($arbi_month > 31) {
                    $arbi_month = 1;
                }
            } elseif ($current_month == 9) {
                $arbi_month++;
                if ($arbi_month > 31) {
                    $arbi_month = 1;
                }
            } elseif ($current_month == 10) {
                $arbi_month++;
                if ($arbi_month > 31) {
                    $arbi_month = 1;
                }
            } elseif ($current_month == 11) {
                $arbi_month++;
                if ($arbi_month > 30) {
                    $arbi_month = 1;
                }
            } elseif ($current_month == 12) {
                $arbi_month++;
                if ($arbi_month > 30) {
                    $arbi_month = 1;
                }
            }
        }
    }
    $temp1 = convertToBanglaNumber($bangla_month);
    $temp2 = convertToBanglaNumber($arbi_month);
    
    //For Friday and Saturday Color 
    $bangla_month_name = '';
    if ($temp1 > 1 && $day == 1) {
        if ($month == 1) {
            $bangla_month_name = 'পৌষ - মাঘ';
            echo "<h3 id='bangla_month_name'>  $bangla_month_name </h3>";
        } else  if ($month == 2) {
            $bangla_month_name = 'মাঘ - ফাল্গুন';
            echo "<h3 id='bangla_month_name'>  $bangla_month_name </h3>";
        } else  if ($month == 3) {
            $bangla_month_name = 'ফাল্গুন - চৈত্র';
            echo "<h3 id='bangla_month_name'>  $bangla_month_name </h3>";
        } else  if ($month == 4) {
            $bangla_month_name = 'চৈত্র - বৈশাখ';
            echo "<h3 id='bangla_month_name'>  $bangla_month_name </h3>";
        } else  if ($month == 5) {
            $bangla_month_name = 'বৈশাখ - জ্যৈষ্ঠ';
            echo "<h3 id='bangla_month_name'>  $bangla_month_name </h3>";
        } else  if ($month == 6) {
            $bangla_month_name = 'জ্যৈষ্ঠ - আষাঢ়';
            echo "<h3 id='bangla_month_name'>  $bangla_month_name </h3>";
        } else  if ($month == 7) {
            $bangla_month_name = 'আষাঢ় - শ্রাবণ';
            echo "<h3 id='bangla_month_name'>  $bangla_month_name </h3>";
        } else  if ($month == 8) {
            $bangla_month_name = 'শ্রাবণ - ভাদ্র';
            echo "<h3 id='bangla_month_name'>  $bangla_month_name </h3>";
        } else  if ($month == 9) {
            $bangla_month_name = 'ভাদ্র - আশ্বিন';
            echo "<h3 id='bangla_month_name'>  $bangla_month_name </h3>";
        } else  if ($month == 10) {
            $bangla_month_name = 'আশ্বিন - কার্তিক';
            echo "<h3 id='bangla_month_name'>  $bangla_month_name </h3>";
        } else  if ($month == 11) {
            $bangla_month_name = 'কার্তিক - অগ্রহায়ণ';
            echo "<h3 id='bangla_month_name'>  $bangla_month_name </h3>";
        } else  if ($month == 12) {
            $bangla_month_name = 'অগ্রহায়ণ - পৌষ';
            echo "<h3 id='bangla_month_name'>  $bangla_month_name </h3>";
        }
    }

    if($firstDayOfWeek==5 || $firstDayOfWeek == 6){
        echo "<td><small id='bangla'; style='font-size:20px;'>$temp1</small> <small id='red';>$day</small></td>";
    }
    else{
        echo "<td><small id='bangla'; style='font-size:20px;'>$temp1  </small>$day</td>";
    }
    $day++;
    $firstDayOfWeek++;
}
echo "</tr>";
echo "</table>";
echo "</td>";
echo "<td id='subject'>";
echo "<h5>Subject to appearance of the Moon</h5>";
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
