<!DOCTYPE html>
<html>
<head>
    <title>Pagination Example</title>
</head>
<body>
    <h1>Paginated Results</h1>
    <ul>
    <?php foreach ($results as $result): ?>
        <li><?php echo $result['column_name']; ?></li>
    <?php endforeach; ?>
    </ul>

    <div class="pagination">
        <?php echo $pagination_links; ?>
    </div>
</body>
</html>
