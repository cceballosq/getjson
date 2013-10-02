<div class="cuerpo">
	<div class="cabecera">
		<h1>base de datos json</h1>
	</div>
	<div class="botones">
		<input type="text" name="dato" id="valor">
		<button onclick='javascript:getUserData()'>buscar</button><br><br>
		<div id="buscar">
		
		</div>
		

	</div>
	<div class="info">
		<div class="informacion"> name  </div>
		<div class="informacion"> email  </div>
		<div class="informacion"> creacion </div>
		<div class="clear"></div>
		<?php foreach ($datos as $dato ) { ?>
			<div id="impresion_pic">
				<div class="informacion"> <?php echo $dato['name']; ?>  </div>
				<div class="informacion"> <?php echo $dato['email']; ?> </div>
				<div class="informacion"> <?php echo $dato['created']; ?>  </div>
				<div class="clear"></div>

	 		</div>
		<?php } ?>

	</div>



</div>







	<?php/*
			$vec = array("1"=>"uno","2"=>"uno","3"=>"tres","4"=>"dos","5"=>"tres","6"=>"uno","7"=>"uno","8"=>"dos","9"=>"tres","10"=>"uno","11"=>"tres","12"=>"tres","13"=>"dos","14"=>"tres");
			for ($i=0; $i < 14; $i++) { 
				$cont = rand(1,14);

				echo "-";
			}	*/
			  ?>
