<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient List</title>
</head>

<body>
    <h1>Patient List</h1>
    <a href="/patient/create">Create New Patient</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($patient as $patient): ?>
            <tr>
                <td><?= $patient['id'] ?></td>
                <td><?= $patient['name'] ?></td>
                <td><?= $patient['email'] ?></td>
                <td><?= $patient['address'] ?></td>
                <td><?= $patient['phone'] ?></td>
                <td>
                    <a href="/patient/edit/<?= $patient['id'] ?>">Edit</a>
                    <a href="/patient/delete/<?= $patient['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>