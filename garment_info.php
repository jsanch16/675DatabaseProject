<?php require "database.php" ?>
<?php $garment_info = get_garment_info($_GET['style']); ?>

<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/`emes/smoothness/jquery-ui.css" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="./stylesheets/index.css" type="text/css" rel="stylesheet" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="./javascripts/holder.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse" role="navigation">
    <a class="navbar-brand helvetica" href="index.php">Fashion CSC 675</a>

    <ul class="nav navbar-nav helvetica nav-links">
        <li><a href="contact.php"></a></li>
    </ul>
  </nav>

  <div class="row">
    <div class="col-md-4">
      <div class="style-name">
        <b><?= $garment_info[0][0] ?></b><br />
        <img src="<?= $garment_info[1][0] ?>" style="width: 150px;" />
      </div>
      <div class="dye">
        <b>Dye</b><br />
        <?php for($i = 0; $i < sizeof($garment_info[2]); $i++) { ?>
          <img src="<?= $garment_info[2][$i] ?>" style="width: 50px;"/>
        <?php } ?>
      </div>
      <div class="dye-style">
        <b>Dye Style</b> <br/>
        <?php for($i = 0; $i < sizeof($garment_info[3]); $i++) { ?>
          <img src="<?= $garment_info[3][$i] ?>" style="width: 100px;"/>
        <?php } ?>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thread">
        <b>Thread</b> <br />
        <?php for($i = 0; $i < sizeof($garment_info[4]); $i++) { ?>
          <img src="<?= $garment_info[4][$i] ?>" style="width: 100px;"/>
        <?php } ?>
      </div>
      <div class="notion">
        <b>Notion</b> <br />
        <?php for($i = 0; $i < sizeof($garment_info[5]); $i++) { ?>
          <img src="<?= $garment_info[5][$i] ?>" style="width: 100px;"/>
        <?php } ?>
      </div>
      <div class="material">
        <b>Material</b> <br />
        <?php for($i = 0; $i < sizeof($garment_info[6]); $i++) { ?>
          <img src="<?= $garment_info[6][$i] ?>" style="width: 100px;" title="<?= $garment_info[6][++$i] ?>"/>
        <?php } ?>
      </div>
    </div>
    <div class="col-md-4">
      <div class="manufacturer-name">
        <dl>
          <dt>Manufacture(s)</dt>
          <?php for($i = 0; $i < sizeof($garment_info[8]); $i++) { ?>
            <dd><?= $garment_info[8][$i] ?></dd>
          <?php } ?>
        </dl>
      </div>
      <div class="seam-description">
        <dl>
          <dt>Seam Description(s)</dt>
          <?php for($i = 0; $i < sizeof($garment_info[9]); $i++) { ?>
            <dd><?= $garment_info[9][$i] ?></dd>
          <?php } ?>
        </dl>
      </div>
      <div class="pattern">
        <b>Pattern</b> <br />
        <?php for($i = 0; $i < sizeof($garment_info[7]); $i++) { ?>
          <img src="<?= $garment_info[7][$i] ?>" style="width: 100px;"/>
        <?php } ?>
      </div>
    </div>
  </div>
</body>