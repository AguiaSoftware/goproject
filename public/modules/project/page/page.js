yum.define([
    PI.Url.create('Project', '/page/page.html'),
    PI.Url.create('Project', '/page/page.css')

], function(html){

    Class('Project.Page').Extend(Mvc.Component).Body({

        instances: function(){
            this.view = new Mvc.View(html);
        },
        
        viewDidLoad: function(){

            this.base.viewDidLoad();
        },
        
        events: {
        
            '@pesquisa.menu click': function(){
                alert('1');
            }
        }

    });

});