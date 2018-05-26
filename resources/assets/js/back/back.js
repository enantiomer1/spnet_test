
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import SimpleMDE from 'simplemde';

let editors = document.getElementsByClassName('markdown-editor');

if (editors.length) {
    new SimpleMDE({
        element: editors[0],
        placeholder: "Type here...",
        spellChecker: true,
        autosave: {
            enabled: true,
            uniqueId: window.location,
        },
    });
}