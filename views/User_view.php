<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Record</title>
    <link rel="stylesheet" href="css/view_one.css">
</head>
<body>
    <div class="container">
    <h2 style="text-align:center;">User Information for ID: <?= htmlspecialchars($id) ?></h2>
    <table>
        <?php foreach ($data as $key => $value): ?>
            <tr>
                <th><?= htmlspecialchars($key) ?></th>
                <td><?= htmlspecialchars($value) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div class="button-container">
        <a href="<?= isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : 'index.php'; ?>" class="back-button">Table Details</a>
        <form action="index.php" method="get">
            <button type="submit">Form Register</button>
        </form>    
    </div>
    </div>
</body>
</html>