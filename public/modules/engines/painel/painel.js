yum.define([
    PI.Url.create('Engine', '/painel/painel.html'),    
    
    PI.Url.create('Engine', '/camada/ui.js')
], function(html){

    Class('Engine.Painel').Extend(Mvc.Component).Body({

        instances: function(){
            this.view = new Mvc.View(html);
        },
        
        show: function(){
            this.view.element.addClass('open');
        },
        
        hide: function(){
            this.view.element.removeClass('open');            
        }

    });

});