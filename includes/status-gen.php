<table class="table table-bordered table-striped">
<thead>
<tr> <th>Status</th> <th>IP</th> <th>Details</th>  <th>Players</th> </tr>
</thead>
<tbody>


			<?php
				include "mcserverstatus.php";
				include "config.php";
				$tonline = 0;
				foreach ($servers as $server) {
					if (strpos($server, ':') !== false) {
						$parts = explode(':', $server);
						$port = $parts[1];
					}
					else {
						$port = '25565';
					}
					$s = new MCServerStatus($server, $port);
					if($s->online) {
						if($s->motd == $server_motd_progress) {
							$status = '<span class="badge badge-warning"><i class="icon-play icon-white"></i></span>';
							$motd = "Game is in progress.";
						} else {
							$status = '<span class="badge badge-success"><i class="icon-ok icon-white"></i></span>';
							$motd = $s->motd;
						}
					} else {
						$status = '<span class="badge badge-important"><i class="icon-remove icon-white"></i></span>';
						$motd = 'Server currently offline.';
					}
					
					$players = ($s->online_players) ? $s->online_players : 0 ;
					$max_players = ($s->max_players) ? $s->max_players : 0 ;
					$tonline += $players;
					echo "<tr>";
					echo "<td style='vertical-align:central'>".$status."</td>";
					echo "<td><code>".$server."</code></td>";
					echo "<td class='motd'>".$motd."</td>";
					echo "<td>".$players."/".$max_players."</td>";
					echo "</tr>";
				}
			?>
</tbody>
</table>