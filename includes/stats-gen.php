<?php include "config.php"; ?>

<section id="lwinner">
  <div class="page-header">
    <h1>Latest winners</h1>
  </div>
     <table class="table table-striped table-hover">
      <tr style="font-weight: bold;">
        <td>#</td>
        <td>Username</td>
      </tr>
      <?php

		$result = mysql_query("SELECT REF_WINNER, NAME FROM GAMES JOIN PLAYERS on GAMES.REF_WINNER = PLAYERS.ID ORDER BY GAMES.id DESC LIMIT ".$limit);
		$num = 0;
		while($row = mysql_fetch_object($result)) {
			$num++;
			echo "<tr>";
			echo "<td>".$num."</td>";
		  	echo "<td>".$row->NAME."</td>";
			echo "</tr>";
		}
		?>
    </table>
</section>
<section id="twinner">
  <div class="page-header">
    <h1>Top10 winners</h1>
  </div>
<table class="table table-striped table-hover">
      <tr style="font-weight: bold;">
        <td>Rank</td>
        <td>Username</td>
        <td>Wins</td>
      </tr>
      <?php

		$result = mysql_query("SELECT REF_WINNER, NAME, COUNT(*) AS WinCount FROM GAMES JOIN PLAYERS on GAMES.REF_WINNER = PLAYERS.ID GROUP BY REF_WINNER ORDER BY WinCount DESC LIMIT ".$limit);
		
		while($row = mysql_fetch_object($result)) {
			$num++;
			echo "<tr>";
			echo "<td>".$num."</td>";
		  	echo "<td>".$row->NAME."</td>";
			echo "<td>".$row->WinCount."</td>";
			echo "</tr>";
		}
		?>
    </table>
</section>
<section id="ldeath">
  <div class="page-header">
    <h1>Latest deaths</h1>
  </div>
      <table class="table table-striped table-hover">
      <tr style="font-weight: bold;">
        <td>#</td>
        <td>Username</td>
      </tr>
      <?php

		//This is naive: WINNER means he won the game, NULL means he did not die (game stopped) 
		$result = mysql_query(
		"SELECT REF_PLAYER, NAME
		FROM PLAYS p
		JOIN PLAYERS pe 
		on p.REF_PLAYER = pe.ID 
		WHERE DEATH_REASON <> 'WINNER' AND DEATH_REASON IS NOT NULL
		ORDER BY DEATHTIME DESC LIMIT ".$limit) or die(mysql_error());
		$num = 0;
		while($row = mysql_fetch_object($result)) {
			$num++;
			echo "<tr>";
			echo "<td>".$num."</td>";
		  	echo "<td>".$row->NAME."</td>";
			echo "</tr>";
		}
		?>
    </table>
</section>
<section id="tdeath">
  <div class="page-header">
    <h1>Top10 deaths</h1>
  </div>
      <table class="table table-striped table-hover">
      <tr style="font-weight: bold;">
        <td>Rank</td>
        <td>Username</td>
        <td>Deaths</td>
      </tr>
      <?php
		$result = mysql_query(
		"SELECT SQL_NO_CACHE REF_PLAYER, NAME, COUNT(*) AS DeathCount 
		FROM PLAYS p
		JOIN PLAYERS pe 
		on p.REF_PLAYER = pe.ID 
		WHERE DEATH_REASON <> 'WINNER' AND DEATH_REASON IS NOT NULL
		GROUP BY p.REF_PLAYER
		ORDER BY DeathCount DESC LIMIT ".$limit) or die(mysql_error());
		$num = 0;
		while($row = mysql_fetch_object($result)) {
			$num++;
			echo "<tr>";
			echo "<td>".$num."</td>";
		  	echo "<td>".$row->NAME."</td>";
			echo "<td>".$row->DeathCount."</td>";
			echo "</tr>";
		}
		?>
    </table>
</section>
