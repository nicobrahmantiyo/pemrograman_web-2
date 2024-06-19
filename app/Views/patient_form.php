<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Form</title>
</head>

<body>
    <h1>Patient Form</h1>
    <form action="/patient/store" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="address">Address:</label><br>
        <input id="address" name="address" required></><br><br>
        <label for="phone">Phone:</label><br>
        <input id="phone" name="phone" required></><br><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>