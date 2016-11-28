<?php

	class Users extends BaseController 
	{

		public function AllList(){
            return User::all()->toJson();
        }

	    public function Insert()
	    {
			try {				
				$new = Input::all();
				$model = new User();

				if ($model->validate($new)) {
					$model = $model->inputer($model,$new);
				    $model->password = Hash::make($model->password."soko");
				    $model->save();
				    return array('error'=>false,'message'=>'Usuario creado con exito.','data'=>$model->usuario_id);
				} else {
					$errors = $model->errors();
				    return array('error'=>true,'message'=>'Error al crear el usuario.','data'=>$errors);
				}
			} catch(Exception $e) {
				return array('error'=>true,'message'=>'Error en la petición.','data'=>$e);
			}
	    }

	    public function Update()
	    {
	    	try {				
				$rules = array(
			        'name' => 'max:100',
			        'weight' => 'numeric',
			        'height' => 'integer',
			        'gender' => 'regex:/^[FfmM]{1}$/'
		    	);


		    	$new = Input::all();
		    	$validator = Validator::make($new,$rules);

		    	if ($validator->fails()) {
					$errors = $validator->errors();
				    return array('error'=>true,'message'=>'Error al crear el usuario.','data'=>$errors);
				} else {
					$usuario = new User(Input::all());
					$usuario->user_id = Auth::id();
					$usuario->save();
				    return array('error'=>false,'message'=>'Usuario creado con exito.','data'=>$usuario->user_id);
				}
			} catch(Exception $e) {
				return array('error'=>true,'message'=>'Error en la petición.','data'=>$e);
			}
	    }

	    public function UpdatePassword(){
	    	try {
		        if(Input::has('nuevaContrasena') && Input::has('nuevaContrasenaConfirmar') && Input::has('anteriorContrasena')) {
		            $nuevaContrasena = Input::get('nuevaContrasena');
		            $nuevaContrasenaConfirmar = Input::get('nuevaContrasenaConfirmar');
		            $anteriorContrasena = Input::get('anteriorContrasena');
		            
		            if($nuevaContrasena == $nuevaContrasenaConfirmar) {
		                if(Hash::check($anteriorContrasena."soko",User::find(Auth::id())->password)) {
		                    $newPassword = $nuevaContrasena;
		                    $hashPassword = Hash::make($newPassword."soko");
		                    $user = User::find(Auth::id());
		                    $user->password = $hashPassword;
		                    $user->save();

		                    return array('message'=>'Actualizado','error'=>false);
		                } else {
		                    return array('error'=>true,'message'=>'La contraseña anterior no concuerda.','data'=>null);
		                }
		            } else {
		                return array('error'=>true,'message'=>'La nueva contraseña no concuerda con la confirmación.','data'=>null);   
		            }
		        } else {
	                return array('error'=>true,'message'=>'Faltan campos.','data'=>null);   
	            }
		    } catch (Exception $e) {
		        return array('error'=>true,'message'=>'Algo fallo al intentar actualizar la contraseña.','data'=>$e->getMessage());
		    } 
	    }

	    public function ChangePassword()
	    {
	    	try {
		        $correo = ''.Input::get('email');
		        $newPassword = str_random(10);
		        $hashPassword = Hash::make($newPassword."soko");
		        $user = User::where('correo','like',$correo)->firstOrFail();
		        $user->password = $hashPassword;
		        $user->save();

		        Mail::send('emails.welcome', array('newPassword' => $newPassword ), function($message)
		        {
		            $correo = ''.Input::get('email');
		            $message->to($correo, '')->subject('Solicitud de cambio de contraseña');
		        });
		        return array('error'=>false,'message'=>'Correo Enviado','data'=>null);    
		    } catch (Exception $e) {
		        return array('error'=>true,'message'=>'Algo fallo al intentar cambiar la contraseña.','data'=>$e->getMessage());
		    }
	    }

	    public function LogOut()
	    {
	    	try {
				Auth::logout();
	    		//return View::make('Login/LoginTemplate');
	    		return 'Adios';
			} catch(Exception $e) {
				return array('error'=>true,'message'=>'Error en la petición.','data'=>null);
			}
	    }
	}
?>