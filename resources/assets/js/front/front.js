/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

require('./now-front');

require('./switch');

$('#flash_modal').modal('toggle');
setTimeout(function () {
    $("#flash_modal").modal('hide');
}, 3000);