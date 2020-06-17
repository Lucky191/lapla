'use strict';
 
// Модуль каталога
var catalog = (function($) {
 
    // Инициализация модуля
    function init() {
        _render();
    }
 
    // Рендерим каталог
    function _render() {
        var template = _.template($('#catalog-template').html()),
            $goods = $('#goods');
 
        $.getJSON('goods4.json', function(data) {
            $goods.html(template({goods: data}));
        });
    }
 
    // Экспортируем наружу
    return {
        init: init
    }
     
})(jQuery);// JavaScript Document