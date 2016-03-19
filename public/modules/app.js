yum.define([
    PI.Url.create('Home', '/page.js')
], function(html){

    Class('App').Extend(Mvc.Component).Body({

        instances: function(){
            
        },
        
        viewDidLoad: function(){
            this.page = new Home.Page();
            
            this.page.render( this.view.homepage );
            
            Breakpoints();
            Site.run();
            
            this.base.viewDidLoad();
        }

    });

});