<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Patient Form</title>
</head>

<body>
    <h1>Edit Patient Form</h1>
    <form action="/patient/update/<?= $patient['id'] ?>" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?= $patient['name'] ?>" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?= $patient['email'] ?>" required><br><br>
        <label for="address">Address:</label><br>
        <textarea id="address" name="address" required><?= $patient['address'] ?></textarea><br><br>
        <label for="phone">Phone:</label><br>
        <input type="phone" id="phone" name="phone" value="<?= $patient['phone'] ?>" required><br><br>
        <button type="submit">Update</button>
    </form>
</body>

</html>