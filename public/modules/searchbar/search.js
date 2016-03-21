yum.define([
    PI.Url.create('SearchBar', '/search.html'),
    PI.Url.create('SearchBar', '/search.css')
], function(html){

    Class('SearchBar.Search').Extend(Mvc.Component).Body({

        instances: function(){
            this.view = new Mvc.View(html);            
        },

        viewDidLoad: function(){

            this.base.viewDidLoad();
        }
        
    
    });

});