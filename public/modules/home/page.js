yum.define([
    PI.Url.create('Home', '/page.html'),
    PI.Url.create('Home', '/page.css'),
    
    // components
    PI.Url.create('Pesquisa', '/input.js'),
    
    // engines
    PI.Url.create('Engine', '/painel/painel.js')
], function(html){

    Class('Home.Page').Extend(Mvc.Component).Body({

        instances: function(){
            this.view = new Mvc.View(html);
            
            this.pesquisa = new Pesquisa.Input();
            
            this.engine = new Engine.Painel();
        },
        
        viewDidLoad: function(){
            $('body').addClass('layout-full page-dark home-page');                    
            
            
            this.base.viewDidLoad();
        },
        
        events: {
        
            '@pesquisa.menu click': function(){
                alert('1');
            }
        }

    });

});