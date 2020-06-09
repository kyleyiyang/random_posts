Theme editor: home.php (includes/home.php) to edit function: load_new_homepages().
Added in function block_3()
$query_args = array(
        'post_type' => 'place',
        'showposts' => 8, (changed from 4 -> 8)
        'post_status' => 'publish',
        'meta_query' => $array_meta,
        'orderby' => 'rand', (changed from “meta_value” -> ‘rand’)
);
$query_args_no_meta = array(
        'post_type' => 'place',
        'post_status' => 'publish',
		'orderby' => 'rand', (added this)
    );
//$count_query2 = 4 - $count_query1;
		$count_query2 = 8 - $count_query1;
$query = $place_obj->query(array(
            'post_type' => 'place',
            //'showposts' => 4,
			'showposts' => 8,
            'post_status' => 'publish',
			'orderby' => 'rand', (added this)
        ));
