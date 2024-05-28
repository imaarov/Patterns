<?php

namespace Imaarov\Patterns\Creational\Singleton\Config;

class ConfigManager {
    
    private array $settings;
    private static ConfigManager $instance;

    /**
     * Make constructor private to prevent the get more instace
     */
    private function __construct()
    {
        if(!isset(self::$instance) || empty(self::$instance))
            self::$instance = new ConfigManager();
    }

    /**
     * Get the exsist instance
     * 
     * @return ConfigManager $instance 
     */
    public static function getInstance() : ConfigManager
    {
        return self::$instance;
        
    }

    /**
     * Set value for properties
     * 
     * @param string $Key
     * @param mixed $value
     * @return void
     */
    public function set(string $Key, mixed $value) : void
    {
        $this->settings[$Key] = $value;
    }

    /**
     * Get the property with this key
     * 
     * @param string $key
     * @return mixed
     */
    public function get(string $key) : mixed
    {
        return isset($this->settings[$key]) ? $this->settings[$key] : false;
    }
}