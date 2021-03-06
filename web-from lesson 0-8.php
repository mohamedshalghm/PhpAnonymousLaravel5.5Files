<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//get route
Route::get('test',function (){
    return

        '
            <form action="anyRoute" method="post">
            
                <input type="hidden" name="_token" value="'.csrf_token().'">
                <input type="text" name="name">
                <input type="submit">
                <!-- Put Route 
                <input type="hidden" name="_method" value="put">
                -->
                <!-- Delete Route 
                <input type="hidden" name="_method" value="delete">
                -->
                <!-- Patch Route 
                <input type="hidden" name="_method" value="patch">
                -->                
                
            </form>
        '

        ;
});

Route::any('anyRoute',function (){
    echo 'Value To Any Route From Any Requet Is  :- '.request()->input('name');
});
/*
//post route
Route::post('test',function (){
    echo 'Value To Post Route From Get Request Is  :- '.request()->input('name');
});
//put route
Route::put('test',function (){
    echo 'Value To Put Route From Get Request Is  :- '.request()->input('name');
});
//delete route
Route::delete('test',function (){
    echo 'Value To Delete Route From Get Request Is  :- '.request()->input('name');
});
//patch route
Route::patch('test',function (){
    echo 'Value To Patch Route From Get Request Is  :- '.request()->input('name');
});
*/



// route parameter


Route::get('user/{id}',function (){
    echo 'Welcome User';
});

Route::get('user/{id}/{name}',function (){
    echo 'Welcome User';
});

Route::get('user/{id?}/{name?}',function ($id=null,$userName=null){
    echo 'Welcome User '.$userName .'  , ID Is  => '.$id;
});


//regular expression
/*
 *
 just number
Route::get('user/{id?}/{name?}',function ($id=null,$userName=null){
    echo 'Welcome User '.$userName .'  , ID Is  => '.$id;
})->where('id','[0-9]+');
*/
/*
 * Number And Chars
 *
 *
 * Route::get('user/{id?}/{name?}',function ($id=null,$userName=null){
    echo 'Welcome User '.$userName .'  , ID Is  => '.$id;
    })->where('id','[0-9A-Za-z]+');
 *
 * */
/*
//validate more than one params
Route::get('user/{id?}/{name?}',function ($id=null,$userName=null){
    echo 'Welcome User '.$userName .'  , ID Is  => '.$id;
})->where(['id'=>'[0-9A-Za-z]+','name'=>'[A-Za-z]+']);

*/

//public pattern applied for all route that have this parameter

Route::pattern('id','[0-9A-Za-z]+');

Route::get('test/{id?}',function ($id=''){
    return $id;
});
Route::get('test/{id?}/{name?}',function ($id='',$name=null){
    return $id .'  , Name Is  :- '.$name ;
});

