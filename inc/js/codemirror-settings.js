/*
 * CodeMirror editor settings
 *
 * @package     All Meta Tags
 * @author      Arthur Gareginyan
 * @link        https://www.spacexchimp.com
 * @copyright   Copyright (c) 2016-2020 Space X-Chimp. All Rights Reserved.
 */


jQuery(document).ready(function($) {

    "use strict";

    // Find textareas on page and replace them with the CodeMirror editor
    $('textarea.control-textarea').each(function(index, element){
        var editor = CodeMirror.fromTextArea(element, {
            lineNumbers: true,
            firstLineNumber: 1,
            matchBrackets: true,
            indentUnit: 4,
            mode: 'text/html',
            autoRefresh: true,
            styleActiveLine: true
        });
    });

    // Replace the preview textarea with the CodeMirror editor
    $('#preview textarea').each(function(index, element){
        var editor = CodeMirror.fromTextArea(element, {
            lineNumbers: false,
            indentUnit: 4,
            mode: 'text/html',
            autoRefresh: true,
            readOnly: true
        });
    });

    // Replace the WooCommerce preview textarea with the CodeMirror editor
    $('#woocommerce textarea').each(function(index, element){
        var editor = CodeMirror.fromTextArea(element, {
            lineNumbers: false,
            indentUnit: 4,
            mode: 'text/html',
            autoRefresh: true,
            readOnly: true
        });
    });

});
