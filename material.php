<?php require "database.php" ?>

<?php $materials = get_material(); ?>

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
        <th>Material ID</th>
        <th>Manufacturer ID</th>
        <th>Description</th>
        <th>Color Number</th>
        <th>Bolt Size</th>
        <th>Bolt Weight</th>
        <th>Cost Per Yard</th>
        <th>Dyeable?</th>
        <th>Lead Time</th>
        <th>Image</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php for($i = 0; $i < sizeof($materials); $i++) { ?>
        <tr>
          <td><?php echo $materials[$i]['material_id']; ?></td>
          <td><?php echo $materials[$i]['man_id']; ?></td>
          <td><?php echo $materials[$i]['description']; ?></td>
          <td><?php echo $materials[$i]['color_number']; ?></td>
          <td><?php echo $materials[$i]['bolt_size']; ?></td>
          <td><?php echo $materials[$i]['bolt_weight']; ?></td>
          <td><?php echo $materials[$i]['cost_per_yard']; ?></td>
          <td><?php echo $materials[$i]['is_dyeable'] == 't' ? 'true' : 'false'; ?></td>
          <td><?php echo $materials[$i]['lead_time']; ?></td>
          <td><img src="<?php echo $materials[$i]['image']; ?>" style="width: 30px;" /></td>
          <td></td>
        </tr>
      <?php } ?>
       <tr>
        <form action="material_add.php" method="post">
          <td>
            <div class="input-group">
              <input type="text" class="form-control" name="material_id" placeholder="material_id">
            </div>
          </td>
          <td>
            <div class="input-group">
              <input type="text" class="form-control" name="man_id" placeholder="man_id">
            </div>
          </td>
          <td>
            <div class="input-group">
              <input type="text"  class="form-control" name="description" placeholder="description" />
            </div>
          </td>
          <td>
            <div class="input-group">
              <input type="text" class="form-control" name="color_number" placeholder="color_number" />
            </div>
          </td>
          <td>
            <div class="input-group">
              <input type="text" class="form-control" name="bolt_size" placeholder="bolt_size">
            </div>
          </td>
          <td>
            <div class="input-group">
              <input type="text" class="form-control" name="bolt_weight" placeholder="bolt_weight">
            </div>
          </td>
          <td>
            <div class="input-group">
              <input type="text" class="form-control" name="cost_per_yard" placeholder="cost_per_yard">
            </div>
          </td>
          <td>
            <div class="input-group">
              <input type="text" class="form-control" name="is_dyeable" placeholder="is_dyeable">
            </div>
          </td>
          <td>
            <div class="input-group">
              <input type="text" class="form-control" name="lead_time" placeholder="lead_time">
            </div>
          </td>
          <td>
            <div class="input-group">
              <input type="text" class="form-control" name="image" placeholder="image url">
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


