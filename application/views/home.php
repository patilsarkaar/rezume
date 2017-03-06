<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="" id="container">
      <p>my view has been loaded</p>
      <?php foreach ($rows as $r) : ?>
      <h1><?php echo $r->title; ?></h1>
      <div><?php echo $r->contents; ?></div>
      <?php endforeach; ?>
    </div>
  </body>
</html>
