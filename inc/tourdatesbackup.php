<?php
	$today = date("Ymd",time());
	$yesterday = $today-1;
	$tourdates = array(
				'20230318'	=>	'<li><span class="date">Thu 16 – <br>Sat 18 Mar </span>
				<span class="venue">BROMLEY Churchill Theatre</span>
				<span class="phone">0343 310 0020</span>
				<span class="tt1"></span>
				<span class="book"></span>
				<span class="tt2"></span></li>',

				'20230401'	=>	'<li><span class="date">Mon 27 Mar – <br>Sat 1 Apr</span>
				<span class="venue">NEWCASTLE Theatre Royal</span>
				<span class="phone">0191 232 7010</span>
				<span class="tt1"></span>
				<span class="book">ON SALE SOON</span>
				<span class="tt2"></span></li>',

				'20230408'	=>	'<li><span class="date">Tue 4 – <br>Sat 8 Apr</span>
				<span class="venue">BELFAST Grand Opera House</span>
				<span class="phone">ON SALE SOON</span>
				<span class="tt1"></span>
				<span class="book"></span>
				<span class="tt2"></span></li>',

				'20230415'	=>	'<li><span class="date">Tue 11 – <br>Sat 15 Apr</span>
				<span class="venue">SOUTHAMPTON Mayflower Theatre</span>
				<span class="phone">02380 711811</span>
				<span class="tt1"></span>
				<span class="book"></span>
				<span class="tt2"></span></li>',

				'20230422'	=>	'<li><span class="date">Tue 18 – <br>Sat 22 Apr</span>
				<span class="venue">BIRMINGHAM Hippodrome</span>
				<span class="phone">ON SALE SOON</span>
				<span class="tt1"></span>
				<span class="book"></span>
				<span class="tt2"></span></li>',

				'20230506'	=>	'<li><span class="date">Tue 2 – <br>Sat 6 May</span>
				<span class="venue">NORWICH Theatre Royal</span>
				<span class="phone">ON SALE SOON</span>
				<span class="tt1"></span>
				<span class="book"></span>
				<span class="tt2"></span></li>',

				'20230513'	=>	'<li><span class="date">Tue 9 – <br>Sat 13 May</span>
				<span class="venue">CARDIFF New Theatre</span>
				<span class="phone">ON SALE SOON</span>
				<span class="tt1"></span>
				<span class="book"></span>
				<span class="tt2"></span></li>',

				'20230520'	=>	'<li><span class="date">Mon 15 – <br>Sat 20 May</span>
				<span class="venue">NOTTINGHAM Theatre Royal</span>
				<span class="phone">0115 989 5555</span>
				<span class="tt1"></span>
				<span class="book"></span>
				<span class="tt2"></span></li>',

				'20230527'	=>	'<li><span class="date">Mon 22 – <br>Sat 27 May</span>
				<span class="venue">HIGH WYCOMBE Wycombe Swan</span>
				<span class="phone">0343 310 0060 </span>
				<span class="tt1"></span>
				<span class="book"></span>
				<span class="tt2"></span></li>',

				'20230603'	=>	'<li><span class="date">Tue 30 May – <br>Sat 3 Jun</span>
				<span class="venue">HULL New Theatre</span>
				<span class="phone">ON SALE SOON </span>
				<span class="tt1"></span>
				<span class="book"></span>
				<span class="tt2"></span></li>',

				'20230617'	=>	'<li><span class="date">Tue 13 – <br>Sat 17 Jun</span>
				<span class="venue">CHELTENHAM Everyman</span>
				<span class="phone">01242 572573</span>
				<span class="tt1"></span>
				<span class="book"></span>
				<span class="tt2"></span></li>',

				'20230624'	=>	'<li><span class="date">Tue 20 – <br>Sat 24 Jun</span>
				<span class="venue">EDINBURGH Festival Theatre</span>
				<span class="phone">0131 529 6000</span>
				<span class="tt1"></span>
				<span class="book"></span>
				<span class="tt2"></span></li>',

				'202300701'	=>	'<li><span class="date">Mon 26 Jun – <br>Sat 1 Jul</span>
				<span class="venue">DARTFORD The Orchard Theatre</span>
				<span class="phone">0343 3100033</span>
				<span class="tt1"></span>
				<span class="book"></span>
				<span class="tt2"></span></li>',

				'202300808'	=>	'<li><span class="date">Tue 4 – <br>Sat 8 Jul</span>
				<span class="venue">SALFORD The Lowry</span>
				<span class="phone">0343 208 6000</span>
				<span class="tt1"></span>
				<span class="book"></span>
				<span class="tt2"></span></li>',

				'202300822'	=>	'<li><span class="date">Tue 18 – <br>Sat 22 Jul</span>
				<span class="venue">SHEFFIELD Lyceum</span>
				<span class="phone">ON SALE SOON</span>
				<span class="tt1"></span>
				<span class="book"></span>
				<span class="tt2"></span></li>',


	);
	if($tourdates){
		$i = -1;
		echo '<ul class="dates">';
		foreach($tourdates as $lastdate => $tourdate){
			if($lastdate > $yesterday){
				echo $tourdate;
			}
		}
		echo '</ul>';
	}
?>
