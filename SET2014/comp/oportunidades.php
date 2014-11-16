<aside class="oportunidades">
			<h3 id="titulooportunidades">
				Oportunidades
			</h3>

			<?php

				$db_connection = new SETDB();
                  
                  $db_connection->forEachChanceCall(function($id,$title, $description, $oportunidade) {
                    echo '<h2>' . $title . '</h2>' . '<div class="textooportunidades"><p>' . $description . '</p>' . '<a href=oportunidade.php?id='.$id.'>Ver mais</a></div>';
                  });	
			?>
</aside>