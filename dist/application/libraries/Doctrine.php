<?php
/**
 * Biblioteca que permite integração com o Doctrine.
 * @author  Daniel Ferreira
 * @author  Guilherme do Valle
 * @author  Lucas Santos
 * @since   1.0.0
 */

use Doctrine\Common\ClassLoader;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class Doctrine {

    /**
     * Gerenciador de entidades
     */
    private $entity_manager;

    public function __construct()
    {
        // Carrega e aplica as configurações de banco de dados
        require APPPATH . 'config/database.php';
        $connection_options = array(
            'driver'        => 'pdo_mysql',
            'user'          => $db['default']['username'],
            'password'      => $db['default']['password'],
            'host'          => $db['default']['hostname'],
            'dbname'        => $db['default']['database'],
            'charset'       => $db['default']['char_set'],
            'driverOptions' => array(
                'charset'   => $db['default']['char_set'],
            ),
        );

        // As linhas a seguir definem o namespace padrão para as entidades e os diretórios onde esses se encontram
        $models_namespace = 'Entity';
        $models_path = APPPATH . 'models';
        $metadata_paths = array(APPPATH . 'models');

        // Aplica as configurações com base nas informações definidas acima
        // Se $dev_mode for definido como TRUE o cache é desativado
        $config = Setup::createAnnotationMetadataConfiguration($metadata_paths, $dev_mode = true);
        $this->entity_manager = EntityManager::create($connection_options, $config);
        $loader = new ClassLoader($models_namespace, $models_path);
        $loader->register();
    }

    /**
     * Get gerenciador de entidades
     */ 
    public function get_entity_manager()
    {
        return $this->entity_manager;
    }

}
