<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//web中间件从laravel 5.2.27版本以后默认全局加载，
//不需要自己手动载入，如果自己手动重复载入，
//会导致session无法加载的情况,项目路由配置时，所有路由是配置在一个总的路由分组中，
//对这个分组添加了web中间件['middleware' => ['web']]。删掉这个中间件或者去掉这个路由分组，问题得到解决
//Route::group(['middleware' => ['web']], function () {

    Route::get('/', 'Home\IndexController@index');
    Route::get('/news', 'Home\IndexController@news');
    Route::get('/achieve', 'Home\IndexController@achieve');
    Route::get('/declares', 'Home\IndexController@declares');
    Route::get('/policy', 'Home\IndexController@policy');
    Route::get('/innovate', 'Home\IndexController@innovate');
    Route::get('/cate/{cate_id}', 'Home\IndexController@cate');
    Route::get('home/article/{art_id}', 'Home\IndexController@article');
    Route::get('admin/user/close/{user_id}', 'Admin\UserController@jinyong');
    Route::get('admin/user/open/{user_id}', 'Admin\UserController@kaiqi');
    Route::post('admin/usercheck/checkif', 'Admin\UserController@checkif');

    Route::any('admin/login', 'Admin\LoginController@login');
    Route::get('admin/code', 'Admin\LoginController@code');
//});
/*由资源控制器处理的行为
动词 路径 行为 路由名称
GET /photo 索引 photo.index
GET /photo/create 创建 photo.create
POST /photo 保存 photo.store
GET /photo/{photo} 显示 photo.show
GET /photo/{photoid}/edit 编辑 photo.edit
PUT/PATCH /photo/{photoid} 更新 photo.update
DELETE /photo/{photoid} 删除 photo.destroy

同时form中要增加一个隐藏域，name="_method"*/

Route::group(['prefix'=>'admin','namespace'=>'Admin'], function () {
    Route::get('index', 'IndexController@index');
    Route::get('info', 'IndexController@info');
    Route::get('quit', 'LoginController@quit');
    Route::any('pass', 'IndexController@pass');
    Route::any('copydb', 'IndexController@copydb');

    Route::post('cate/changeorder', 'CategoryController@changeOrder');
    Route::resource('category', 'CategoryController');

    Route::resource('article', 'ArticleController');
    Route::resource('file', 'FileController');
    Route::resource('question', 'QuestionController');
    Route::resource('user', 'UserController');
    Route::resource('project', 'ProjectController');

    Route::post('links/changeorder', 'LinksController@changeOrder');
    Route::resource('links', 'LinksController');

    Route::post('navs/changeorder', 'NavsController@changeOrder');
    Route::resource('navs', 'NavsController');

    Route::get('config/putfile', 'ConfigController@putFile');
    Route::post('config/changecontent', 'ConfigController@changeContent');
    Route::post('config/changeorder', 'ConfigController@changeOrder');
    Route::resource('config', 'ConfigController');

    Route::any('upload', 'CommonController@upload');
    Route::any('uploads', 'CommonController@uploads');
    Route::any('uploadthefile', 'CommonController@uploadthefile');

});
