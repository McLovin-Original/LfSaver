
<!DOCTYPE html>
<html>
<head>
<title>Donación</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="views/assets/css/donacion.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
</head>
<body>
	<div class="main">
		<h1>Donación</h1>
		<div class="agile_main_grids">
			<div class="agileits_main_grid">
				<div class="agile_main_grid_left">
						<div class="agileits_main_grid_left_l_grids">
							<div class="agileits_main_grid_left_l">
								<h4>¿Padece o ha padecido de de alguna enfermdad física?</h4>
							</div>
							<div class="agileits_main_grid_left_r">
								<form class="" action="" id="frm_don" method="post">
									<div class="agileinfo_radio_button">
										<label class="radio"><input type="radio" id="enf_si" name="radio1" checked=""><i></i>Si</label>
									</div>
									<div class="agileinfo_radio_button">
										<label class="radio"><input type="radio" id="enf_no" name="radio1"><i></i>No</label>
									</div>
							</div>
						</div>
						<!--Si se elige que si se activa el siguiente dropdown sino queda desactivado-->
						<select id="agileits_select1" class="select">
							<option value="">Seleeccione una opción</option>
							<option value="HEPATITIS">Algún tipo de Hepatitis</option>
							<option value="ANEMIA">Anemia</option>
							<option value="ALERGIA">Sufro de alguna Alergia</option>
							<option value="CARDIACA">Enfermedades o alteraciones cardiacas</option>
							<option value="PARALISIS">Parálisis temporal o permanente de alguna parte del cuerpo</option>
							<option value="OTRO">Alguna otra que implica los organos a donar</option>
						</select>

						<div class="agileits_main_grid_left_l_grids">
							<div class="agileits_main_grid_left_l">
								<h4>¿Padece o ha padecido de de alguna enfermdad mental?</h4>
							</div>
							<div class="agileits_main_grid_left_r">

									<div class="agileinfo_radio_button">
										<label class="radio"><input type="radio" id="men_si" name="radio2" checked=""><i></i>Si</label>
									</div>
									<div class="agileinfo_radio_button">
										<label class="radio"><input type="radio" id="men_no" name="radio2"><i></i>No</label>
									</div>

							</div>
						</div>
						<!--Si se elige que si se activa el siguiente dropdown sino queda desactivado-->
						<select id="agileits_select2" class="select">
							<option value="">Seleccione una opción</option>
							<option value="Depresión">Depresión</option>
							<option value="Bipolaridad">Bipolaridad</option>
							<option value="Fobias">Fobias extremas (que afecten el proceso de donación)</option>
							<option value="Esquizofrenia">Esquizofrenia</option>
							<option value="Otras">Otras que afecten el proceso de donación</option>
						</select>


					</div>
					<div class="agile_main_grid_left">
						<div class="agileits_main_grid_left_l_grids">
							<div class="agileits_main_grid_left_l">
								<h4>¿Se ha realizado algún tatuaje en los últimos cuatro meses?</h4>
							</div>
							<div class="agileits_main_grid_left_r">

									<div class="agileinfo_radio_button">
										<label class="radio"><input type="radio" id="tat_si" name="radio3" checked=""><i></i>Si</label>
									</div>
									<div class="agileinfo_radio_button">
										<label class="radio"><input type="radio" id="tat_no"  name="radio3"><i></i>No</label>
									</div>

							</div>
						</div>
						<div class="agileits_main_grid_left_l_grids">
							<div class="agileits_main_grid_left_l">
								<h4>¿Ha realizado alguna donación durante el último año?</h4>
							</div>
							<div class="agileits_main_grid_left_r">

									<div class="agileinfo_radio_button">
										<label class="radio"><input type="radio" id="don_si" name="radio4" checked=""><i></i>Si</label>
									</div>
									<div class="agileinfo_radio_button">
										<label class="radio"><input type="radio" id="don_no" name="radio4"><i></i>No</label>
									</div>

							</div>
						</div>
						<!--Si se elige que si se activa el siguiente dropdown sino queda desactivado-->
						<select id="agileits_select3" class="select">
							<option value="">¿Qué tipo de donación?</option>
							<option value="Sangre">Sangre</option>
							<option value="Organos">Organos o tejidos</option>
						</select>
						<div class="agileits_main_grid_left_grid">
							<h3>Tu Donación :</h3>
						<div class="agileits_main_grid_left_l_grids">
							<div class="agileits_main_grid_left_l">
								<h4>¿Qué tipo de donación desea hacer?</h4>
							</div>
							<div class="agileits_main_grid_left_r">

									<div class="agileinfo_radio_button">
										<label class="radio"><input type="radio" id="tip_si" name="radio5" checked=""><i></i>Donación de Sangre</label>
									</div>
									<div class="agileinfo_radio_button">
										<label class="radio"><input type="radio" id="tip_no" name="radio5"><i></i>Donación de organos o tejidos</label>
									</div>

							</div>
						</div>
						<!--Si se elige que "organos" se activa el siguiente dropdown sino queda desactivado-->
						<select id="agileits_select4" class="select">
							<option value="">Seleccione un organo o tejido</option>
							<option value="Riñón">Riñón</option>
							<option value="Hígado">Hígado</option>
							<option value="Corazón">Corazón</option>
							<option value="Páncreas">Páncreas</option>
							<option value="Pulmón">Pulmón</option>
							<option value="Intestino">Intestino</option>
							<option value="Médula">Médula ósea</option>
							<option value="Hueso">Hueso</option>
							<option value="Tejido">Tejido ocular</option>
							<option value="Valvulas">Valvulas cardiacas</option>
							<option value="Segentos">Segentos vasculares</option>
							<option value="Ligamentos">Ligamentos</option>
						</select>
						<input type="submit" value="Enviar">
						</div>
					</div>
				</form>
					<div class="clear"> </div>

			</div>
		</div>
	</div>
