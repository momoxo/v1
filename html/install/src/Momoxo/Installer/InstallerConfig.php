<?php

namespace Momoxo\Installer;

class InstallerConfig
{
    /**
     * @var array
     */
    private $config;

    /**
     * @param  string                    $configFilename
     * @param  array                     $parameters
     * @throws \InvalidArgumentException
     */
    public function __construct($configFilename, array $parameters = array())
    {
        if (file_exists($configFilename) === false) {
            throw new \InvalidArgumentException(sprintf('Config file not found: %s', $configFilename));
        }

        $this->config = file_get_contents($configFilename);
        $this->config = json_decode($this->config, true);

        foreach ($parameters as $name => $value) {
            $this->set($name, $value);
        }
    }

    public function set($name, $value)
    {
        $this->config['parameters'][$name] = $value;
        $searches = array_keys($this->config['parameters']);
        $replaces = array_values($this->config['parameters']);
        array_walk($searches, function (&$search) {
            $search = '%'.$search.'%';
        });
        array_walk_recursive($this->config, function (&$item) use ($searches, $replaces) {
            if (is_string($item)) {
                $item = str_replace($searches, $replaces, $item);
            }
        });
    }

    /**
     * @param  string $name
     * @return mixed
     */
    public function get($name)
    {
        return $this->config['parameters'][$name];
    }

    /**
     * @return string[]
     */
    public function getRequirements()
    {
        return $this->config['requirement'];
    }
}
