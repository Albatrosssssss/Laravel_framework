<?php

// Initialige variable assign value from user input by post method 
$year = $_POST['year'];
// Initialige variable assign value from user input by post method
$month = $_POST['month'];
$previous_month = $month-1;
$current_month = $month;
$next_month = $month + 1 ;
// Create a DateTime object for the first day of the selected month
//built in class
$date = new DateTime("$year-$previous_month-01");
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

//----------------------------------------------------
if($previous_month == 1){
    //1 for january month 
    $month_name = 'January';
    //Initilize $month_name to January
}
else if($previous_month == 2){
    $month_name = 'February';
    //Initilize $month_name to February
}
else if($previous_month == 3){
    $month_name = 'March';
    //Initilize $month_name to March
}
else if($previous_month == 4){
    $month_name = 'April';
    //Initilize $month_name to April
}
else if($previous_month == 5){
    $month_name = 'May';
    //Initilize $month_name to May
}
else if($previous_month == 6){
    $month_name = 'June';
    //Initilize $month_name to June
}
else if($previous_month == 7){
    $month_name = 'July';
    //Initilize $month_name to July
}
else if($previous_month== 8){
    $month_name = 'August';
    //Initilize $month_name to August
}
else if($previous_month == 9){
    $month_name = 'September';
    //Initilize $month_name to September
}
else if($previous_month == 10){
    $month_name = 'October';
    //Initilize $month_name to October
}
else if($previous_month == 11){
    $month_name = 'November';
    //Initilize $month_name to November
}
else if($previous_month == 12){
    $month_name = 'December';
    //Initilize $month_name to December
}
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
//num to string for month 
$month_name='';
if($next_month == 1){
    //1 for january month 
    $month_name = 'January';
    //Initilize $month_name to January
}
else if($next_month == 2){
    $month_name = 'February';
    //Initilize $month_name to February
}
else if($next_month == 3){
    $month_name = 'March';
    //Initilize $month_name to March
}
else if($next_month == 4){
    $month_name = 'April';
    //Initilize $month_name to April
}
else if($next_month == 5){
    $month_name = 'May';
    //Initilize $month_name to May
}
else if($next_month == 6){
    $month_name = 'June';
    //Initilize $month_name to June
}
else if($next_month == 7){
    $month_name = 'July';
    //Initilize $month_name to July
}
else if($next_month == 8){
    $month_name = 'August';
    //Initilize $month_name to August
}
else if($next_month == 9){
    $month_name = 'September';
    //Initilize $month_name to September
}
else if($next_month == 10){
    $month_name = 'October';
    //Initilize $month_name to October
}
else if($next_month == 11){
    $month_name = 'November';
    //Initilize $month_name to November
}
else if($next_month == 12){
    $month_name = 'December';
    //Initilize $month_name to December
}
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

$date = new DateTime("$year-$next_month-01");
$firstDayOfWeek = $date->format('w');
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
