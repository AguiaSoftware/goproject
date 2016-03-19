/**
 * Configuration Globais
 */
Application.config({

    environment: {
        type: 'develop'  
    },    

    viewcontroller:{

        react: {
            enable: false
        }

    },

    resources: {
        cache: false
    }
});

PI.Url.add('BaseUrl',   PI.Url.create(window.location.toString()).href());
PI.Url.add('Public',    'BaseUrl');

/**
 * Libs
 */
PI.Url.add('Modules',   'Public', '/modules');
PI.Url.add('Pages',     'Public', '/modules');

/**
 * Url Alias Modules
 */
PI.Url.add('Home',          'Pages', '/home');
PI.Url.add('Pesquisa',      'Pages', '/pesquisa');
PI.Url.add('Engine',        'Pages', '/engines');

/**
* Services
*/
// PI.Service.add();