<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>num1</th>
        <th>unm2</th>
        <th>plus</th>
        <th>minus</th>
        <th>multiply</th>
        <th>divide</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= $data['num1'] ?></td>
        <td><?= $data['num2'] ?></td>
        <td><?= $data['plus'] ?></td>
        <td><?= $data['minus'] ?></td>
        <td><?= $data['multiply'] ?></td>
        <td><?= $data['divide'] ?></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
