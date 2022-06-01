{"clients":<?php
							$file = file_get_contents('http://15.235.128.46:30120/dynamic.json');
							$decode = json_decode($file, false);
							$clients = $decode->clients;
							$svmaxclients = $decode->sv_maxclients;
							echo $clients;

							?>,"gametype":"Freeroam","hostname":"^1[VIETNAM] ^2XĂ“M TUI ROLEPLAY | ^3FREE | ^4Thá»i Trang | ^5Giáº£i TrĂ­ | ^6Há»— Trá»£ Newbie","iv":"322656731","mapname":"fivem-map-hipster","sv_maxclients":"<?php
							$file = file_get_contents('http://15.235.128.46:30120/dynamic.json');
							$decode = json_decode($file, false);
							$clients = $decode->clients;
							$svmaxclients = $decode->sv_maxclients;
							echo $svmaxclients;

							?>"}
