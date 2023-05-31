<!DOCTYPE html>
<!-- It ensure,the page parse same way by different web page-->
<html>
<head>
    <title>Calendar</title>
    <link rel="stylesheet" href="style.css">
    <!--the page show the tittle -->
</head>
<body>
    <div class='home'>
    <h4>One Month's Bangla-English Calendar</h4><br>
    <!--Heading tag -->
    <form method="post" action="calendar.php">
        <!--use a form to get user's input-->
        <label for="year">Year:</label><br>
        <!-- Labeling -->
        <input type="number" id="year" name="year" required><br>
        <!-- browser level validation on -->
        <label for="month">Month:</label><br>
        <!-- Labeling -->
        <input type="number" id="month" name="month" min="1" max="12" required><br>
        <!-- we got input 1 to 12 -->
        <button type="submit">Show Calendar</button>
        <!-- button for an action -->
    </form>
    </div>
</body>
</html>
