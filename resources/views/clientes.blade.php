<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>asw</title>
  </head>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<style>
		body, .bckf8{
			background-color:#f8f8f8;	
		}.bckfff{
			background-color:#fff;	
		}
	</style>
	<div class="container mt-4 text-center bckfff">
		<div class="row">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="home-tabClientes" data-toggle="tab" href="#homeClientes" role="tab" aria-controls="home" aria-selected="true">Clientes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tabCiudades" data-toggle="tab" href="#profileCiudades" role="tab" aria-controls="profile" aria-selected="false">Ciudades</a>
				</li>
			</ul>
		</div>
		
		
		
		<div class="tab-content mt-4" id="myTabContent">
			<div class="tab-pane fade show active" id="homeClientes" role="tabpanel" aria-labelledby="home-tab">
				<div class="row">
					<div class="col-12">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="home-tabCrear" data-toggle="tab" href="#crear" role="tab" aria-controls="home" aria-selected="true">Crear</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="profile-tabConsultar" data-toggle="tab" href="#profileConsultar" role="tab" aria-controls="profile" aria-selected="false">Consultar</a>
							</li>
						</ul>
					</div>
					<div class="col-12">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="crear" role="tabpanel" aria-labelledby="home-tabCrear">
								<div class="row mt-2">
									<div class="col-12">
										<form action="/oscarch/controller/crearcliente.php" name="editarcliente" method="POST"">
											<div class="row mt-2">
												<div class="col-3">
													<b>* Nombres:</b>
												</div>
												<div class="col-9">
													<input type="text" name="nombres" class="form-control" required />
												</div>
											</div>
											<div class="row mt-2">
												<div class="col-3">
													<b>* Apellidos:</b>
												</div>
												<div class="col-9">
													<input type="text" name="apellidos" class="form-control" required />
												</div>
											</div>
											<div class="row mt-2">
												<div class="col-3">
													<b>* Cédula:</b>
												</div>
												<div class="col-9">
													<input type="number" name="cedula" class="form-control" required />
												</div>
											</div>
											<div class="row mt-2">
												<div class="col-3">
													<b>* E-mail:</b>
												</div>
												<div class="col-9">
													<input type="email" name="email" class="form-control" required />
												</div>
											</div>
											<div class="row mt-2">
												<div class="col-3">
													<b>* Teléfono:</b>
												</div>
												<div class="col-9">
													<input type="number" name="telefono" class="form-control" required />
												</div>
											</div>
											<div class="row mt-2">
												<div class="col-3">
													<b>* Ciudad:</b>
												</div>
												<div class="col-9">
													<select name="ciudad" class="form-control" required >
														<?php
														$resultsciudadselect = DB::table('ciudad')->select('id', 'nombre')->get();
														foreach($resultsciudadselect as $ciudadsel){
															echo '<option value="'.$ciudadsel->id.'">'.ucwords($ciudadsel->nombre).'</option>';
														}
														?>
													</select>
												</div>
											</div>
											<div class="row mt-2">
												<div class="col-12">
													<input type="submit" class="btn btn-success" value="Crear" />
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="profileConsultar" role="tabpanel" aria-labelledby="profile-tabConsultar">
								<table class="table table-striped table-bordered">
									<tr>
										<td>
											<b>NOMBRES</b>
										</td>
										<td>
											<b>APELLIDOS</b>
										</td>
										<td>
											<b>CÉDULA</b>
										</td>
										<td>
											<b>EMAIL</b>
										</td>
										<td>
											<b>TELÉFONO</b>
										</td>
										<td>
											<b>CIUDAD</b>
										</td>
										<td>
											<b>ACTUALIZAR</b>
										</td>
										<td>
											<b>BORRAR</b>
										</td>
									</tr>
									<?php
										$results = DB::table('clientes')->select('id', 'nombres', 'apellidos', 'cedula', 'email', 'telefono', 'ciudad_id')->get();
										foreach($results as $result){
											$resultsciudad = DB::table('ciudad')->select('nombre')->where('id', $result->ciudad_id)->get();
											foreach($resultsciudad as $ciudad){
												$ciudadcliente = $ciudad;
											}
											?>
											<tr>
												<td>
													<?php echo ucwords($result->nombres);?>
												</td>
												<td>
													<?php echo ucwords($result->apellidos);?>
												</td>
												<td>
													<?php echo $result->cedula;?>
												</td>
												<td>
													<?php echo $result->email;?>
												</td>
												<td>
													<?php echo $result->telefono;?>
												</td>
												<td>
													<?php echo ucwords($ciudadcliente->nombre);?>
												</td>
												<td>
													<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $result->id;?>">
														Editar
													</button>
													<div class="modal" id="myModal<?php echo $result->id;?>">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<h4 class="modal-title">Editar Cliente <?php echo ucwords($result->nombres.' '.$result->apellidos);?> </h4>
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																</div>
																<div class="modal-body">
																	<form action="/oscarch/controller/editarcliente.php" name="editarcliente" method="POST" id="editarcliente<?php echo $result->id;?>">
																		<div class="row mt-2">
																			<div class="col-3">
																				<b>* Nombres:</b>
																			</div>
																			<div class="col-9">
																				<input type="text" name="nombres" class="form-control" value="<?php echo ucwords($result->nombres);?>" id="nombres<?php echo $result->id;?>">
																			</div>
																		</div>
																		<div class="row mt-2">
																			<div class="col-3">
																				<b>* Apellidos:</b>
																			</div>
																			<div class="col-9">
																				<input type="text" name="apellidos" class="form-control" value="<?php echo ucwords($result->apellidos);?>" id="apellidos<?php echo $result->id;?>">
																			</div>
																		</div>
																		<div class="row mt-2">
																			<div class="col-3">
																				<b>* Cédula:</b>
																			</div>
																			<div class="col-9">
																				<input type="number" name="cedula" class="form-control" value="<?php echo ucwords($result->cedula);?>" id="cedula<?php echo $result->id;?>">
																			</div>
																		</div>
																		<div class="row mt-2">
																			<div class="col-3">
																				<b>* E-mail:</b>
																			</div>
																			<div class="col-9">
																				<input type="email" name="email" class="form-control" value="<?php echo ucwords($result->email);?>" id="email<?php echo $result->id;?>">
																			</div>
																		</div>
																		<div class="row mt-2">
																			<div class="col-3">
																				<b>* Teléfono:</b>
																			</div>
																			<div class="col-9">
																				<input type="number" name="telefono" class="form-control" value="<?php echo ucwords($result->telefono);?>" id="telefono<?php echo $result->id;?>">
																			</div>
																		</div>
																		<div class="row mt-2">
																			<div class="col-3">
																				<b>* Ciudad:</b>
																			</div>
																			<div class="col-9">
																				<select name="ciudad" class="form-control" id="ciudad<?php echo $result->id;?>">
																					<?php
																					$selected='';
																					$resultsciudadselect = DB::table('ciudad')->select('id', 'nombre')->get();
																					foreach($resultsciudadselect as $ciudadsel){
																						if($ciudadsel->id == $result->ciudad_id){
																							$selected='selected';
																						}else{
																							$selected='';
																						}
																						echo '<option value="'.$ciudadsel->id.'">'.ucwords($ciudadsel->nombre).'</option>';
																					}
																					?>
																				</select>
																			</div>
																		</div>
																		<div class="row mt-2">
																			<div class="col-12">
																				<input type="hidden" name="clienteid" value="<?php echo $result->id;?>" />
																				<input type="submit" class="btn btn-success" value="Actualizar" />
																			</div>
																		</div>
																	</form>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
																</div>
															</div>
														</div>
													</div>
												</td>
												<td>
													<form action="/oscarch/controller/borrarcliente.php" name="borrarcliente" method="POST">
														<input type="hidden" name="clienteid" value="<?php echo $result->id;?>" />
														<input type="submit" class="btn btn-danger" value="Eliminar">
													</form>
												</td>
											</tr>
											<script>
												$("#editarcliente<?php echo $result->id;?>").submit(function () {  
													if($("#nombres<?php echo $result->id;?>").val().length < 1) {  
														alert("Campo nombres obligatorio");  
														return false;  
													}
													if($("#apellidos<?php echo $result->id;?>").val().length < 1) {  
														alert("Campo apellidos obligatorio");  
														return false;  
													}
													if($("#apellidos<?php echo $result->id;?>").val().length < 1) {  
														alert("Campo apellidos obligatorio");  
														return false;  
													}
													if($("#cedula<?php echo $result->id;?>").val().length < 1) {  
														alert("Campo cedula obligatorio");  
														return false;  
													}
													if($("#email<?php echo $result->id;?>").val().length < 1) {  
														alert("Campo email obligatorio");  
														return false;  
													}
													if($("#telefono<?php echo $result->id;?>").val().length < 1) {  
														alert("Campo telefono obligatorio");  
														return false;  
													}
													if($("#ciudad<?php echo $result->id;?>").val().length < 1) {  
														alert("Campo ciudad obligatorio");  
														return false;  
													}
												});  
											</script>
											<?php
											
										}
									?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="profileCiudades" role="tabpanel" aria-labelledby="profile-tab">
				<div class="row">
					<div class="col-12">
						<ul class="nav nav-tabs" id="myTabCiudad" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="home-tabCiudadCrear" data-toggle="tab" href="#homeCiudadCrear" role="tab" aria-controls="home" aria-selected="true">Crear</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="profile-tabCiudadConsultar" data-toggle="tab" href="#profileCiudadConsultar" role="tab" aria-controls="profile" aria-selected="false">Consultar Ciudades</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="profile-tabCiudadConsultarCliente" data-toggle="tab" href="#profileCiudadConsultarCliente" role="tab" aria-controls="profile" aria-selected="false">Clientes Por Ciudad</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-12">
						<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="homeCiudadCrear" role="tabpanel" aria-labelledby="home-tab">
							<div class="row mt-2 mb-3">
								<div class="col-12">
									<form action="/oscarch/controller/crearciudad.php" name="crearciudad" method="POST"">
										<div class="row mt-2">
											<div class="col-3">
												<b>* Nombre ciudad:</b>
											</div>
											<div class="col-6">
												<input type="text" name="ciudad" class="form-control" required />
											</div>
											<div class="col-3">
												<input type="submit" class="btn btn-success" value="Crear" />
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="profileCiudadConsultar" role="tabpanel" aria-labelledby="profile-tab">
							<div class="row mt-2 mb-3">
								<div class="col-12">
									<table class="table table-striped table-bordered">
										<tr>
											<td>
												<b>NOMBRE</b>
											</td>
											<td>
												<b>ACTUALIZAR</b>
											</td>
											<td>
												<b>BORRAR</b>
											</td>
										</tr>
										<?php
											$resultciudad = DB::table('ciudad')->select('id', 'nombre')->get();
											foreach($resultciudad as $resultciudad){
												?>
												<tr>
													<td>
														<?php echo ucwords($resultciudad->nombre);?>
													</td>
													<td>
														<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalCiudad<?php echo $resultciudad->id;?>">
															Editar
														</button>
														<div class="modal" id="myModalCiudad<?php echo $resultciudad->id;?>">
															<div class="modal-dialog">
																<div class="modal-content">
																	<div class="modal-header">
																		<h4 class="modal-title">Editar Ciudad <?php echo ucwords($resultciudad->nombre);?> </h4>
																		<button type="button" class="close" data-dismiss="modal">&times;</button>
																	</div>
																	<div class="modal-body">
																		<form action="/oscarch/controller/editarciudad.php" name="editarcliente" method="POST" id="editarcliente<?php echo $result->id;?>">
																			<div class="row mt-2">
																				<div class="col-3">
																					<b>* Nombre:</b>
																				</div>
																				<div class="col-9">
																					<input type="text" name="nombre" class="form-control" value="<?php echo ucwords($resultciudad->nombre);?>" id="nombre<?php echo $resultciudad->id;?>">
																				</div>
																			</div>
																			<div class="row mt-2">
																				<div class="col-12">
																					<input type="hidden" name="ciudadid" value="<?php echo $resultciudad->id;?>" />
																					<input type="submit" class="btn btn-success" value="Actualizar" />
																				</div>
																			</div>
																		</form>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
																	</div>
																</div>
															</div>
														</div>
													</td>
													<td>
														<form action="/oscarch/controller/borrarciudad.php" name="borrarcliente" method="POST">
															<input type="hidden" name="ciudadid" value="<?php echo $resultciudad->id;?>" />
															<input type="submit" class="btn btn-danger" value="Eliminar">
														</form>
													</td>
												</tr>
												<?php
												}
										?>
									</table>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="profileCiudadConsultarCliente" role="tabpanel" aria-labelledby="profile-tab">
						
							<table class="table table-striped table-bordered">
								<tr>
									<td>
										<b>CLIENTE</b>
									</td>
									<td>
										<b>CIUDAD</b>
									</td>
								</tr>
								<?php
									$results = DB::table('clientes')->select('nombres', 'apellidos', 'ciudad_id')->get();
									foreach($results as $result){
										$resultsciudad = DB::table('ciudad')->select('nombre')->where('id', $result->ciudad_id)->get();
										foreach($resultsciudad as $ciudad){
											$ciudadcliente = $ciudad;
										}
										?>
										<tr>
											<td>
												<?php echo ucwords($result->nombres).' '.ucwords($result->apellidos);?>
											</td>
											<td>
												<?php echo ucwords($ciudadcliente->nombre);?>
											</td>
										</tr>
										<?php
									}
								?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  </body>
</html>