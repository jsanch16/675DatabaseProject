<?php require "database.php" ?>

<?php $dye_styles = get_dye_style(); ?>

<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="./stylesheets/index.css" type="text/css" rel="stylesheet" />
  <link href="./stylesheets/reset.css" type="text/css" rel="stylesheet" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-inverse" role="navigation">
    <a class="navbar-brand helvetica" href="index.php">Fashion CSC 675</a>

    <ul class="nav navbar-nav helvetica">
     <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tables<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="contact.php">Contact</a></li>
          <li><a href="dye_style.php">Dye Style</a></li>
          <li><a href="dye_style_dye.php">Dye Style Dye</a></li>
          <li><a href="dye_style_manufacturer.php">Dye Style Manufacturer</a></li>
          <li><a href="fob.php">FOB</a></li>
          <li><a href="material.php">Material</a></li>
          <li><a href="material_photo.php">Material Photo</a></li>
          <li><a href="notion_photo.php">Notion Photo</a></li>
          <li><a href="photo.php">Photo</a></li>
          <li><a href="style_notion.php">Style Notion</a></li>
          <li><a href="style_photo.php">Style Photo</a></li>
          <li><a href="style_piece.php">Style Piece</a></li>
          <li><a href="style_processing.php">Style Processing</a></li>
          <li><a href="style_seam.php">Style Seam</a></li>
          <li><a href="supplier.php">Supplier</a></li>
          <li><a href="supplier_dye.php">Supplier Dye</a></li>
          <li><a href="supplier_notion.php">Supplier Notion</a></li>
          <li><a href="thread.php">Thread</a></li>
          <li><a href="thread_seam.php">Thread Seam</a></li>
          <li><a href="thread_supplier.php">Thread Supplier</a></li>
        </ul>
      </li>
    </ul>
  </nav>

  <table class="table">
    <thead>
      <tr>
        <th>ds_id</th>
        <th>Price/Dye Job</th>
        <th>Weight</th>
        <th>Image</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php for($i = 0; $i < sizeof($dye_styles); $i++) { ?>
        <tr>
          <td><?php echo $dye_styles[$i]['ds_id']; ?></td>
          <td><?php echo $dye_styles[$i]['price_per_dye_job']; ?></td>
          <td><?php echo $dye_styles[$i]['weight']; ?></td>
          <td><img src="<?php echo $dye_styles[$i]['image']; ?>" style="width: 50px;"></td>
          <td></td>
        </tr>
      <?php } ?>
      <tr>
        <form action="dye_style_add.php" method="post">
          <td>
          </td>
          <td>
            <div class="input-group">
              <input type="text" class="form-control" name="price_per_dye_job" placeholder="price per dye job">
            </div>
          </td>
          <td>
            <div class="input-group">
              <input type="text"  class="form-control" name="weight" placeholder="weight" />
            </div>
          </td>
          <td>
            <div class="input-group">
              <input type="text" class="form-control" name="image" placeholder="image url" />
            </div>
          </td>
          <td>
            <div class="input-group">
              <input type="submit" class="btn btn-primary" value=">>">
            </div>
          </td>
        </form>
      </tr>
    </tbody>
  </table>


</body>
