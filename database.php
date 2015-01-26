<?php

  define("HOST", "host=54.84.180.48 ");
  define("USER", "user=qflagg ");
  define("PASSWORD", "password=675775f14 ");
  define("PORT", "port=5432 ");
  define("DBNAME", "dbname=fashion ");

	function connect_to_pg_server() {
    $db = pg_connect(HOST . USER . PASSWORD . PORT . DBNAME) or die("Could not connect");
    if(!$db) {
      echo "Error: Cannot open database";
		}
		return $db;
	}

  function get_contacts() {
			$db = connect_to_pg_server();
      $query = "SELECT * FROM contact";
      $result = pg_query($db, $query);
      if(!$result) {
        echo "Something went wrong";
      } else {
        $contacts = array();
        while($myrow = pg_fetch_assoc($result)) {
          array_push($contacts, $myrow);
        }
				pg_close($db);
        return $contacts;
      }
  }

	function get_suppliers() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM supplier";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$suppliers = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($suppliers, $myrow);
			}
			pg_close($db);
			return $suppliers;
		}

	}



	function get_threads() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM thread";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$threads = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($threads, $myrow);
			}
			pg_close($db);
			return $threads;
		}

	}

	function get_dye_style() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM dye_style";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$dye_style = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($dye_style, $myrow);
			}
			pg_close($db);
			return $dye_style;
		}

	}


	function get_dye_style_dye() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM dye_style_dye";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$dye_style_dyes = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($dye_style_dyes, $myrow);
			}
			pg_close($db);
			return $dye_style_dyes;
		}

	}

	function get_dye_style_manufacturer() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM dye_style_manufacturer";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$dye_style_manufacturer = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($dye_style_manufacturer, $myrow);
			}
			pg_close($db);
			return $dye_style_manufacturer;
		}

	}

	function get_fob() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM fob";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$fob = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($fob, $myrow);
			}
			pg_close($db);
			return $fob;
		}

	}


	function get_material() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM material";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$materials = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($materials, $myrow);
			}
			pg_close($db);
			return $materials;
		}

	}

	function get_photo() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM photo";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$photos = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($photos, $myrow);
			}
			pg_close($db);
			return $photos;
		}

	}

	function get_notion_photo() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM material_notion_photo";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$notion_photos = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($notion_photos, $myrow);
			}
			pg_close($db);
			return $notion_photos;
		}

	}

	function get_material_photo() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM material_photo";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$material_photos = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($material_photos, $myrow);
			}
			pg_close($db);
			return $material_photos;
		}

	}

	function get_style_notion() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM Style_notion";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$style_notions = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($style_notions, $myrow);
			}
			pg_close($db);
			return $style_notions;
		}

	}

	function get_style_photo() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM Style_photo";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$style_photos = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($style_photos, $myrow);
			}
			pg_close($db);
			return $style_photos;
		}

	}

	function get_style_piece() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM Style_piece";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$style_piece = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($style_piece, $myrow);
			}
			pg_close($db);
			return $style_piece;
		}

	}


	function get_style_processing() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM Style_processing";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$style_processing = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($style_processing, $myrow);
			}
			pg_close($db);
			return $style_processing;
		}

	}

	function get_style_seam() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM Style_Seam";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$style_seam = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($style_seam, $myrow);
			}
			pg_close($db);
			return $style_seam;
		}

	}

	function get_supplier_dye() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM Supplier_dye";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$supplier_dye = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($supplier_dye, $myrow);
			}
			pg_close($db);
			return $supplier_dye;
		}

	}

	function get_supplier_notion() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM Supplier_notion";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$supplier_notion = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($supplier_notion, $myrow);
			}
			pg_close($db);
			return $supplier_notion;
		}

	}

	function get_thread_seams() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM Thread_Seam";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$thread_seam = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($thread_seam, $myrow);
			}
			pg_close($db);
			return $thread_seam;
		}

	}


	function get_thread_suppliers() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM Thread_Supplier";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$thread_supplier = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($thread_supplier, $myrow);
			}
			pg_close($db);
			return $thread_supplier;
		}

	}

  function get_garment_info($id) {
		$garment_info = array();

    $name = "SELECT name FROM style WHERE style_id = $id;";
		$garment_info = quick_query($name, $garment_info);

		$style_image = "select p.image "
									."from style_photo sp, photo p "
									."where sp.style_id = $id "
									."and sp.photo_id = p.photo_id" ;
		$garment_info = quick_query($style_image, $garment_info);

		$dye_image = "SELECT d.image FROM dye d, dye_style_dye dsd, dye_style ds, style_dye_style sds "
								."WHERE sds.style_id = $id "
								."AND sds.ds_id = ds.ds_id "
								."AND ds.ds_id = dsd.ds_id "
								."AND dsd.d_id = d.d_id";
		$garment_info = quick_query($dye_image, $garment_info);

		$dye_style_image = "select ds.image "
											."from dye_style ds, style_dye_style sds "
											."where sds.style_id = $id "
											."and sds.ds_id = ds.ds_id";
		$garment_info = quick_query($dye_style_image, $garment_info);


		$thread_image =  "select t.image "
										."from thread t, thread_seam ts, seam s, style_seam ss "
										."where ss.style_id = $id "
										."and ss.seam_id = s.seam_id "
										."and s.seam_id = ts.seam_id "
										."and ts.t_id = t.t_id ";
		$garment_info = quick_query($thread_image, $garment_info);

		$notion_image = "select n.image "
									 ."from notion n, style_notion sn "
									 ."where sn.style_id = $id "
									 ."and sn.n_id = n.n_id ";
		$garment_info = quick_query($notion_image, $garment_info);

		$material =  "select m.image, m.description "
								."from material m, piece_material pm, piece p, style_piece sp "
								."where sp.style_id = $id "
								."and sp.p_id = p.p_id "
								."and p.p_id = pm.p_id "
								."and pm.material_id = m.material_id";
		$garment_info = quick_query($material, $garment_info);

		$pattern_image = "select pa.image "
										."from pattern pa, piece_pattern ppa, piece p, style_piece sp "
										."where sp.style_id = $id "
										."and sp.p_id = p.p_id "
										."and p.p_id = ppa.p_id "
										."and ppa.pattern_id = pa.pattern_id";
		$garment_info = quick_query($pattern_image, $garment_info);

		$manufacturer_name = "select m.name "
												."from manufacturer m, style_manufacturer sm "
												."where sm.style_id = $id "
												."and sm.man_id = m.man_id";
		$garment_info = quick_query($manufacturer_name, $garment_info);

		$seam_description = "select s.description "
											 ."from seam s, style_seam ss "
											 ."where ss.style_id = $id "
											 ."and ss.seam_id = s.seam_id";
		$garment_info = quick_query($seam_description, $garment_info);

		return $garment_info;




  }

	function get_styles() {
		$db = connect_to_pg_server();
		$query =  "SELECT s.style_id, s.name, p.image "
						 ."FROM style s, style_photo sp, photo p "
						 ."WHERE s.style_id = sp.style_id "
						 ."AND sp.photo_id = p.photo_id";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$thread_supplier = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($thread_supplier, $myrow);
			}
			pg_close($db);
			return $thread_supplier;
		}

	}

	function quick_query($query, $info) {
		$db = connect_to_pg_server();
		$result = pg_query($db, $query);
		if(!$result){
      echo "Something went wrong";
    } else {
			$temp = array();
      while($myrow = pg_fetch_row($result)) {
        array_push($temp, $myrow[0]);
				if($myrow[1]) {
					array_push($temp, $myrow[1]);
				}
      }
      pg_close($db);
			array_push($info, $temp);
      return $info;
    }
	}


?>