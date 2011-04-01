<pre><!--
	DB Profiling:
  -------------
	<?php
	$profiles= DB::get_profiles();
	$total_time_querying= 0;
	foreach ( $profiles as $profile ) {
		echo $profile->query_text . "\n";
    echo "Time to Execute: $profile->total_time\n";
		if ( !empty( $profile->backtrace ) ) { 
			echo "BACKTRACE:\n";
			print_r($profile->backtrace);
		}
    $total_time_querying+= $profile->total_time;
	}
	echo "Total Time Executing Queries: {$total_time_querying}";
	?>

-->
</pre>
