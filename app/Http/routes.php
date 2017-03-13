<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('test', function () {
    return view('test');
});//this is an example url used for developement

/*--------------------- ASSETS -----------------------------------------------*/
Route::get('lockscreen', function () {
    return view('assets.lockscreen');
});
Route::get('404', function () {
    return view('assets.404');
});
/*--------------------- ASSETS -----------------------------------------------*/


/*--------------------- CMS -----------------------------------------------*/
Route::get('/', function () {
    return view('dashboard.content');
});
Route::get('push-notifications', function () {
    return view('push-notifications.content');
});
Route::get('slides', function () {
    return view('slides.content');
});
Route::get('news', function () {
    return view('news.content');
});
Route::get('gallery', function () {
    return view('gallery.content');
});
Route::get('contact-details', function () {
    return view('contact-details.content');
});


Route::get('social-buttons', function () {
    return view('social-buttons.content');
});
Route::get('seo', function () {
    return view('seo.seo');
});
/*--------------------- CMS -----------------------------------------------*/



/*--------------------- BLOG -----------------------------------------------*/
Route::get('all-blogs', function () {
    return view('blog.all-blogs');
});
Route::get('blog-single-page', function () {
    return view('blog.blogpost-single-page');
});
Route::get('create-blog', function () {
    return view('blog.create-blog');
});
Route::get('publish-blog', function () {
    return view('blog.publish-blog');
});
/*--------------------- BLOG -----------------------------------------------*/


/*--------------------- MAILBOX -----------------------------------------------*/
Route::get('mailbox-compose', function () {
    return view('mailbox.compose');
});
Route::get('mailbox-inbox', function () {
    return view('mailbox.inbox');
});
Route::get('mailbox-outbox', function () {
    return view('mailbox.outbox');
});
Route::get('mailbox-drafts', function () {
    return view('mailbox.drafts');
});
Route::get('preview', function () {
    return view('mailbox.mail-single-page');
});
/*--------------------- MAILBOX -----------------------------------------------*/


/*--------------------- CRM -----------------------------------------------*/
Route::get('contacts', function () {
    return view('crm.contacts');
});
Route::get('oppertunities', function () {
    return view('crm.oppertunities');
});
Route::get('leads', function () {
    return view('crm.leads');
});
Route::get('profile', function () {
    return view('crm.profile');
});
Route::get('groups', function () {
    return view('crm.groups');
});
Route::get('group-members', function () {
    return view('crm.members');
});
/*--------------------- CRM -----------------------------------------------*/


/*--------------------- CAMPAIGNS -----------------------------------------------*/
Route::get('campaigns-home', function () {
    return view('campaigns.home');
});
Route::get('templates', function () {
    return view('campaigns.templates');
});
Route::get('campaign-editor', function () {
    return view('campaigns.editor');
});
Route::get('campaign-recipients', function () {
    return view('campaigns.recipients');
});
Route::get('campaign-finalize', function () {
    return view('campaigns.finalize');
});
Route::get('campaign-preview', function () {
    return view('campaigns.campaign-preview');
});
Route::get('campaigns-report', function () {
    return view('campaigns.reports');
});
Route::get('campaigns-report-individual', function () {
    return view('campaigns.reports-individual');
});
/*--------------------- CAMPAIGNS -----------------------------------------------*/


/*--------------------- EMAIL TEMPLATES -----------------------------------------------*/
Route::get('sample-template', function () {
    return view('templates.sample');
});
/*--------------------- EMAIL TEMPLATES -----------------------------------------------*/


/*--------------------- EBOOK -----------------------------------------------*/
Route::get('ebook', function () {
    return view('ebook.content');
});

Route::get('ebook-reports', function () {
    return view('ebook.reports');
});
/*--------------------- EBOOK -----------------------------------------------*/


/*--------------------- POPUP -----------------------------------------------*/
Route::get('popup', function () {
    return view('popup.content');
});
/*--------------------- POPUP -----------------------------------------------*/


/*--------------------- SURVEYS -----------------------------------------------*/
Route::get('survey', function () {
    return view('surveys.home');
});
Route::get('new-survey', function () {
    return view('surveys.new-survey');
});
/*--------------------- SURVEYS -----------------------------------------------*/

/*--------------------- TRASH -----------------------------------------------*/
Route::get('trash', function () {
    return view('trash.content');
});
/*--------------------- TRASH -----------------------------------------------*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
