<?php

class UserInfos extends BaseController {

    public function Insert() {
        try {
            $new = Input::all();
            $model = new UserInfo();
            if ($model->validate($new)) {
                $model = $model->inputer($model,$new);
                $model->user_id = Auth::id();
                $model->save();
                return array('error'=>false,'message'=>'Información del usuario guardaada con éxito.','data'=>$model->usuario_id);
            } else {
                $errors = $model->errors();
                return array('error'=>true,'message'=>'Error al guardar los datos del usuario.','data'=>$errors);
            }
        } catch(Exception $e) {
            return array('error'=>true,'message'=>'Error en la petición.','data'=>$e);
        }
    }


    public function Update() {
        try {
            $new = Input::all();
//            $validator = Validator::make($new,UserInfo::);
            $model = new UserInfo();

            if (!$model->validate($new)) {
                $errors = $model->errors();
                return array('error'=>true,'message'=>'Error al actualizar el usuario.','data'=>$errors);
            } else {
                $userInfo = new UserInfo(Input::all());
                $userInfo->user_id = Auth::id();
                $userInfo->exists = true;
                $userInfo->save();
                return array('error'=>false,'message'=>'Información del usuario guardada con éxito','data'=>$userInfo->user_id);
            }
        } catch(Exception $e) {
            return array('error'=>true,'message'=>'Error en la petición.','data'=>$e);
        }
    }

    public function delete() {
        try {
            $userid = Auth::id();
            $userInfoQuery = UserInfo::where('user_id', $userid);

            if($userInfoQuery->count() > 0){
                $userInfo = $userInfoQuery->first();
                $userInfo->delete();
            }
            return array('error' => false, 'message' => 'Información del usuario fue eliminada con éxito', 'data' => $userid);
        } catch (Exception $e) {
            return array('error' => true, 'message' => 'Ocurrió un error en la petición', 'data' => $e);
        }
    }


    public function getUserInfo(){
        try {
            $userInfoQuery = UserInfo::where('user_id', Auth::id())->get();
            return $userInfoQuery->toJson();
        } catch (Exception $e) {
            return array('error' => true, 'message' => 'Ocurrió un error en la petición', 'data' => "{}");
        }
    }


}