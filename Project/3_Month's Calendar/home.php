<!DOCTYPE html>
<!-- It ensure,the page parse same way by different web page-->
<html>
<head>
    <title>Calendar</title>
    <link rel="stylesheet" href="style.css">
    <!--the page show the tittle -->
</head>
<body>
    <h1>Three Month's Calendar</h1>
    <!--Heading tag -->
    <form method="post" action="calendar.php">
        <!--use a form to get user's input-->
        <label for="year">Year:</label>
        <!-- Labeling -->
        <input type="number" id="year" name="year" required><br>
        <!-- browser level validation on -->
        <label for="month">Month:</label>
        <!-- Labeling -->
        <input type="number" id="month" name="month" min="1" max="12" required><br><br>&nbsp;&nbsp;
        <!-- we got input 1 to 12 -->
        <button type="submit">Show Calendar</button>
        <!-- button for an action -->
    </form>
</body>
</html>
