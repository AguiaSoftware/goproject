yum.define([
    PI.Url.create('Engine', '/camada/ui.html'),
    PI.Url.create('Engine', '/camada/model.js')
], function(html){

    Class('Engine.Camada.UI').Extend(Mvc.Component).Body({

        instances: function(){
            this.view = new Mvc.View(html);
        }

    });

});