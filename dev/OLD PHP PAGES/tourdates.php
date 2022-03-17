<?php
	$today = date("Ymd",time());
	$yesterday = $today-1;
	$tourdates = array(
		'20220421'	=>	'<li><span class="date">12-22 April</span>
				<span class="venue">SOUTHAMPTON Mayflower Theatre</span>
				<span class="phone">02380 711811</span>
				<span class="tt1"></span>
				<span class="book"><a href="https://www.mayflower.org.uk/whats-on/titanic-the-musical-2018/" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',
		'20180428'	=>	'<li><span class="date">24-28 April</span>
				<span class="venue">BELFAST Grand Opera House</span>
				<span class="phone">028 9024 1919</span>
				<span class="tt1"></span>
				<span class="book"><a href="https://www.goh.co.uk/titanic18" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',
		'20180505'	=>	'<li><span class="date">30 Apr-5 May</span>
				<span class="venue">CARDIFF Wales Millennium Centre</span>
				<span class="phone">029 2063 6464</span>
				<span class="tt1"></span>
				<span class="book"><a href="https://www.wmc.org.uk/Productions/2018-2019/DonaldGordonTheatre/Titanic/" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',

		'20180512'	=>	'<li><span class="date">7-12 May</span>
				<span class="venue">SALFORD The Lowry</span>
				<span class="phone">0843 208 6000</span>
				<span class="tt1"></span>
				<span class="book"><a href="https://www.thelowry.com/events/titanic" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',

		'20180519'	=>	'<li><span class="date">15-19 May</span>
				<span class="venue">DUBLIN Bord Gais Energy Theatre</span>
				<span class="phone">ROI: 0818 719 377<br />
				UK & NI: 0844 847 2455</span>
				<span class="tt1"></span>
				<span class="book"><a href="http://bordgaisenergytheatre.ie/index.php/artist/titanic-the-musical" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',

		'20180526'	=>	'<li><span class="date">21-26 May</span>
				<span class="venue">SHEFFIELD Lyceum</span>
				<span class="phone">0114 249 6000</span>
				<span class="tt1"></span>
				<span class="book"><a href="https://www.sheffieldtheatres.co.uk/whats-on/titanic-the-musical" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',

		'20180602'	=>	'<li><span class="date">28 May-2 Jun</span>
				<span class="venue">GLASGOW King\'s Theatre</span>
				<span class="phone">0844 871 7648</span>
				<span class="tt1"></span>
				<span class="book"><a href="http://www.atgtickets.com/shows/titanic-the-musical/kings-theatre/" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',

		'20180609'	=>	'<li><span class="date">4-9 Jun</span>
				<span class="venue">BIRMINGHAM Hippodrome</span>
				<span class="phone">0844 338 5000</span>
				<span class="tt1"></span>
				<span class="book"><a href="https://www.birminghamhippodrome.com/calendar/titanic-the-musical/" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',

		'20180616'	=>	'<li><span class="date">12-16 Jun</span>
				<span class="venue">EDINBURGH Playhouse</span>
				<span class="phone">0844 871 3014</span>
				<span class="tt1"></span>
				<span class="book"><a href="http://www.atgtickets.com/shows/titanic-the-musical/edinburgh-playhouse/" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',

		'20180623'	=>	'<li><span class="date">18-23 Jun</span>
				<span class="venue">PLYMOUTH Theatre Royal</span>
				<span class="phone">01752 267222</span>
				<span class="tt1"></span>
				<span class="book"><a href="https://www.theatreroyal.com/whats-on/2018/titanic/" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',

		'20180630'	=>	'<li><span class="date">25-30 Jun</span>
				<span class="venue">NORTHAMPTON Derngate</span>
				<span class="phone">01604 624811</span>
				<span class="tt1"></span>
				<span class="book"><a href="https://www.royalandderngate.co.uk/whats-on/titanic-the-musical/" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',

		'20180707'	=>	'<li><span class="date">2-7 Jul</span>
				<span class="venue">NOTTINGHAM Theatre Royal</span>
				<span class="phone">0115 989 5555</span>
				<span class="tt1"></span>
				<span class="book"><a href="https://trch.co.uk/whats-on/titanic-the-musical/" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',

		'20180714'	=>	'<li><span class="date">9-14 Jul</span>
				<span class="venue">BLACKPOOL Winter Gardens</span>
				<span class="phone">0844 856 1111</span>
				<span class="tt1"></span>
				<span class="book"><a href="http://www.wintergardensblackpool.co.uk/events/titanic/" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',

		'20180721'	=>	'<li><span class="date">16-21 Jul</span>
				<span class="venue">BROMLEY Churchill Theatre</span>
				<span class="phone">020 3285 6000</span>
				<span class="tt1"></span>
				<span class="book"><a href="https://churchilltheatre.co.uk/Online/tickets-titanic-bromley-2018" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',

		'20180728'	=>	'<li><span class="date">24-28 Jul</span>
				<span class="venue">BRADFORD Alhambra Theatre</span>
				<span class="phone">01274 432000</span>
				<span class="tt1"></span>
				<span class="book"><a href="https://www.bradford-theatres.co.uk/whats-on/titanic-the-musical" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',

		'20180804'	=>	'<li><span class="date">30 Jul-4 Aug</span>
				<span class="venue">LIVERPOOL Empire</span>
				<span class="phone">0844 871 3017</span>
				<span class="tt1"></span>
				<span class="book"><a href="http://www.atgtickets.com/shows/titanic-the-musical/liverpool-empire/" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',

		'20180819'	=>	'<li><span class="date">7-19 August</span>
				<span class="venue">HAMBURG Staatsoper Hamburg</span>
				<span class="phone">01806 570070</span>
				<span class="tt1"></span>
				<span class="book"><a href="http://www.eventim.de/tickets.html?affiliate=EVE&doc=artistPages%2Ftickets&fun=artist&action=tickets&erid=2123560&includeOnlybookable=true&x10=1&x11=titanic" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',


		'20190711'	=>	'<li><span class="date">Thu 11 - Sat 13 July</span>
				<span class="venue">WOKING New Victoria Theatre</span>
				<span class="phone">0844 871 7645</span>
				<span class="tt1"></span>
				<span class="book"><a href="https://www.atgtickets.com/shows/titanic-the-musical/new-victoria-theatre/" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',



	// Jamie dec 2018
		'20190721'	=>	'<li><span class="date">Tue 16 – Sun 21 July</span>
				<span class="venue">MUNICH Deutsches Theater</span>
				<span class="phone">089 54 81 81 81</span>
				<span class="tt1"></span>
				<span class="book"><a href="https://dttickets.deutsches-theater.de/?actioncode=&campaign=&shopagent=LP-9097#event-9097" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',

		'20190728'	=>	'<li><span class="date">Tue 23 – Sun 28 July</span>
				<span class="venue">COLOGNE Philharmonie Köln</span>
				<span class="phone">0221 280 280</span>
				<span class="tt1"></span>
				<span class="book"><a href="https://www.koelner-philharmonie.de/en/search/event/titanic" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',

		'20190804'	=>	'<li><span class="date">Tue 30 Jul – Sun 4 August</span>
				<span class="venue">MANNHEIM Nationaltheater</span>
				<span class="phone">0621 1680 150</span>
				<span class="tt1"></span>
				<span class="book"><a href="https://www.nationaltheater-mannheim.de/de/spartenuebergreifend/stueck_details.php?SID=3328" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',

		'20190831'	=>	'<li><span class="date">Tue 27 – Sat 31 August</span>
				<span class="venue">MOSCOW Palace of Youth</span>
				<span class="phone">0495 937 77 37</span>
				<span class="tt1"></span>
				<span class="book"><a href="https://www.ticketland.ru/koncertnye-zaly/moskovskiy-dvorec-molodezhi/titanik-titanic-the-musical" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',
		// Jamie dec 2018
		
		// China
		
		'20191124'	=>	'<li><span class="date">Tue 12 – Sun 24 Nov 2019</span>
				<span class="venue">BEIJING Tianqiao Performing Arts Center</span>
				<span class="phone"></span>
				<span class="tt1"></span>
				<span class="book"><a href="http://www.tartscenter.com/goods-492.html" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',
		
		'20191201'	=>	'<li><span class="date">Wed 27 Nov – Sun 1 Dec 2019</span>
				<span class="venue">SHANGHAI Culture Square</span>
				<span class="phone"></span>
				<span class="tt1"></span>
				<span class="book"><a href="https://www.shcstheatre.com/Program/ProgramDetails.aspx?headtype=YanChu&ARTICLE_ID=33282&id=33282" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',
		
		'20191208'	=>	'<li><span class="date">Wed 4 – Sun 8 Dec 2019</span>
				<span class="venue">JIANGSU Grand Theatre</span>
				<span class="phone"></span>
				<span class="tt1"></span>
				<span class="book"><a href="http://www.jsartcentre.org/new_ticket_del2.html?id=4084" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>',
		
		'20191215'	=>	'<li><span class="date">Thu 12 - Sun 15 Dec 2019</span>
				<span class="venue">GUANGZHOU Opera House</span>
				<span class="phone"></span>
				<span class="tt1"></span>
				<span class="book"><a href="https://www.gzdjy.org/piao/4/4339.html" target="_blank">Book now</a></span>
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
<ul class="dates">
<li><span class="date">Thu 12 - Sun 15 Dec 2019</span>
				<span class="venue">GUANGZHOU Opera House</span>
				<span class="phone"></span>
				<span class="tt1"></span>
				<span class="book"><a href="https://www.gzdjy.org/piao/4/4339.html" target="_blank">Book now</a></span>
				<span class="tt2"></span></li>
				</ul>