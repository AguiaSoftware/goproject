yum.define([
    PI.Url.create('Project', '/page/page.js'),
    PI.Url.create('SearchBar', '/search.js')
], function(html){

    Class('App').Extend(Mvc.Component).Body({

        instances: function(){
            
        },
        
        viewDidLoad: function(){

            this.page = new Project.Page();
            this.page.render( this.view.page );

            this.searchbar = new SearchBar.Search();
            this.searchbar.render( this.view.searchbar );

            this.base.viewDidLoad();
        }

    });

});