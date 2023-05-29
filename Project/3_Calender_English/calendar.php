<?php

// Initialige variable assign value from user input by post method 
$year = $_POST['year'];
// Initialige variable assign value from user input by post method
$month = $_POST['month'];

// Create a DateTime object for the first day of the selected month
//built in class
$date = new DateTime("$year-$month-01");
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
$month_name='';
if($month == 1){
    //1 for january month 
    $month_name = 'January';
    //Initilize $month_name to January
}
else if($month == 2){
    $month_name = 'February';
    //Initilize $month_name to February
}
else if($month == 3){
    $month_name = 'March';
    //Initilize $month_name to March
}
else if($month == 4){
    $month_name = 'April';
    //Initilize $month_name to April
}
else if($month == 5){
    $month_name = 'May';
    //Initilize $month_name to May
}
else if($month == 6){
    $month_name = 'June';
    //Initilize $month_name to June
}
else if($month == 7){
    $month_name = 'July';
    //Initilize $month_name to July
}
else if($month == 8){
    $month_name = 'August';
    //Initilize $month_name to August
}
else if($month == 9){
    $month_name = 'September';
    //Initilize $month_name to September
}
else if($month == 10){
    $month_name = 'October';
    //Initilize $month_name to October
}
else if($month == 11){
    $month_name = 'November';
    //Initilize $month_name to November
}
else if($month == 12){
    $month_name = 'December';
    //Initilize $month_name to December
}

//----------------------------------------------------
echo "<table>";
echo "<td>";
// Print the Month and year 
echo "<h2>" . $month_name. " " . $year . "</h2>";


//Print calendar table 
echo "<table>";
echo "<tr>";


//Loop for print 7 days 
foreach ($weekdays as $day) {
    echo '<div class = "sadi" id = "1">';
    echo "<th>$day</th>";
    echo '</div>';
}

echo "</tr>";

// Fill in the calendar days
echo "<tr>";
for ($i = 0; $i < $firstDayOfWeek; $i++) {
    echo "<td></td>";
    //Fill the previos days empty 
    //var_dump($i);
    //int(0) int(1) int(2) int(3) int(4) int(5)
}

$day = 1;
//Initialige day = 1 
while ($day <= $numDays) { // 1 to total days 
    if ($firstDayOfWeek == 7) { 
        //Row enter 
        echo "</tr><tr>";
        $firstDayOfWeek = 0; 
        //then initialige first day is 0
    }
    echo "<td>$day</td>";
    $day++;
    $firstDayOfWeek++;
}
echo "</tr>";
echo "</table>";
echo "</td>";
//-------------------------------------------.

echo "<td>";
// Print the Month and year 
echo "<h2>" . $month_name. " " . $year . "</h2>";
//Print calendar table 
echo "<table>";
echo "<tr>";

//Loop for print 7 days 
foreach ($weekdays as $day) {
    echo "<th>$day</th>";
}
echo "</tr>";

// Fill in the calendar days
echo "<tr>";
for ($i = 0; $i < $firstDayOfWeek; $i++) {
    echo "<td></td>";
    //Fill the previos days empty 
    //var_dump($i);
    //int(0) int(1) int(2) int(3) int(4) int(5)
}

$day = 1;
//Initialige day = 1 
while ($day <= $numDays) { // 1 to total days 
    if ($firstDayOfWeek == 7) { 
        //Row enter 
        echo "</tr><tr>";
        $firstDayOfWeek = 0; 
        //then initialige first day is 0
    }
    echo "<td>$day</td>";
    $day++;
    $firstDayOfWeek++;
}
echo "</tr>";
echo "</table>";
echo "</td>";
//----------------------------------------
echo "<td>";
// Print the Month and year 
echo "<h2>" . $month_name. " " . $year . "</h2>";
//Print calendar table 
echo "<table>";
echo "<tr>";

//Loop for print 7 days 
foreach ($weekdays as $day) {
    echo "<th>$day</th>";
}
echo "</tr>";

// Fill in the calendar days
echo "<tr>";
for ($i = 0; $i < $firstDayOfWeek; $i++) {
    echo "<td></td>";
    //Fill the previos days empty 
    //var_dump($i);
    //int(0) int(1) int(2) int(3) int(4) int(5)
}

$day = 1;
//Initialige day = 1 
while ($day <= $numDays) { // 1 to total days 
    if ($firstDayOfWeek == 7) { 
        //Row enter 
        echo "</tr><tr>";
        $firstDayOfWeek = 0; 
        //then initialige first day is 0
    }
    echo "<td>$day</td>";
    $day++;
    $firstDayOfWeek++;
}
echo "</tr>";
echo "</table>";
echo "</td>";
echo "</table>";

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
