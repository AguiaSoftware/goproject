yum.define([
    
], function () {

    Class('Engine.Camada.Model').Extend(Mvc.Model.Base).Body({

        instances: function () {

        },

        init: function () {
            this.base.init('/engine/camada');
        },

        validations: function () {
            return {
                //'': new Mvc.Model.Validator.Required('')
            };
        },

        initWithJson: function (json) {
            var model = new Engine.Camada.Model(json);

            return model;
        },

        actions: {
            
        }

    });
});