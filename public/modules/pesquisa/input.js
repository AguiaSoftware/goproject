yum.define([
    PI.Url.create('Pesquisa', '/input.html'),
    // PI.Url.create('Pesquisa', '/input.css')
], function(html){

    Class('Pesquisa.Input').Extend(Mvc.Component).Body({

        instances: function(){
            this.view = new Mvc.View(html);
        }

    });

});