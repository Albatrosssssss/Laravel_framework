<?php
// Function to get the number of days in a month
function getDaysInMonth($year, $month) {
    return cal_days_in_month(CAL_GREGORIAN, $month, $year);
}

// Function to get the name of the month
function getMonthName($month) {
    return date("F", mktime(0, 0, 0, $month, 1));
}

// Get user input for year and month
$year = isset($_POST['year']) ? $_POST['year'] : date('Y');
$month = isset($_POST['month']) ? $_POST['month'] : date('m');

// Calculate the previous and next month
$prevMonth = ($month == 1) ? 12 : ($month - 1);
$nextMonth = ($month == 12) ? 1 : ($month + 1);
$prevYear = ($prevMonth == 12) ? ($year - 1) : $year;
$nextYear = ($nextMonth == 1) ? ($year + 1) : $year;

// Get the number of days in the selected month
$daysInMonth = getDaysInMonth($year, $month);

// Get the day of the week for the first day of the month
$firstDay = date('N', mktime(0, 0, 0, $month, 1, $year));

// Create an array of the days in the week
$weekDays = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');

// Display the calendar
echo "<h2>".getMonthName($month)." ".$year."</h2>";
echo "<table>";
echo "<tr>";
echo "<th>".$weekDays[0]."</th>";
echo "<th>".$weekDays[1]."</th>";
echo "<th>".$weekDays[2]."</th>";
echo "<th>".$weekDays[3]."</th>";
echo "<th>".$weekDays[4]."</th>";
echo "<th>".$weekDays[5]."</th>";
echo "<th>".$weekDays[6]."</th>";
echo "</tr>";

// Start the calendar with empty cells for the previous month
echo "<tr>";
for ($i = 1; $i < $firstDay; $i++) {
    echo "<td></td>";
}

// Display the days of the selected month
$day = 1;
while ($day <= $daysInMonth) {
    if ($firstDay > 7) {
        echo "</tr><tr>";
        $firstDay = 1;
    }
    echo "<td>".$day."</td>";
    $day++;
    $firstDay++;
}

// End the calendar with empty cells for the next month
while ($firstDay <= 7) {
    echo "<td></td>";
    $firstDay++;
}

echo "</tr>";
echo "</table>";

// Display links to the previous and next month
echo "<h3><a href='?year=".$prevYear."&month=".$prevMonth."'>Previous Month</a> | <a href='?year=".$nextYear."&month=".$nextMonth."'>Next Month</a></h3>";
?>

<!-- HTML form to input year and month -->
<form method="POST" action="">
    <label for="year">Year:</label>
    <input type="text" id="year" name="year" value="<?php echo $year; ?>">
    <label for="month">Month:</label>
    <input type="text" id="month
