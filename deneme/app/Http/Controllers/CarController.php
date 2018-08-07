<?php

namespace App\Http\Controllers;
use JWTAuth;
use Illuminate\Http\Request;
use App\Car;
class CarController extends Controller
{
    //
    public function postCar(Request $request){
        /* if(! $user = JWTAuth::parseToken()->authenticate()){
             return response()->json(['message'=>'user not found'],404);
         }
         */
         $user=JWTAuth::parseToken()->toUser();
         $car=new Car();
         $car->content=$request->input('userId','brand','model','modelDetail','plate','km');
         $car->save();
         return response()->json(['car'=>$car,'user'=>$user],201);
     }
     public function getCar(Request $request){
         $car=Car::all();
         $response=[
             'car' => $car
         ];
         return response()->json($response,200);
     }
     public function putCar(Request $request,$id){
         $car=Car::find($id);
         if(!$car){
             return response()->json(['message'=>'Document not found'],404);
         }
         $car->content=$request->input('content');
         $quote->save();
         return response()->json(['quote'=>$quote],200);
     }
     public function deleteCar($id){
         $car=Car::find($id);
         $car->delete();
         return response()->json(['message'=>'Car deleted'],200);
     }
}
