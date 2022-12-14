<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Flasher'.\DIRECTORY_SEPARATOR.'FlashBagConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Flasher'.\DIRECTORY_SEPARATOR.'PresetsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FlasherConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $default;
    private $rootScript;
    private $autoTranslate;
    private $autoRender;
    private $searchCriteria;
    private $themes;
    private $flashBag;
    private $presets;
    private $_usedProperties = [];

    /**
     * @default 'flasher'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function default($value): static
    {
        $this->_usedProperties['default'] = true;
        $this->default = $value;

        return $this;
    }

    /**
     * @default 'https://cdn.jsdelivr.net/npm/@flasher/flasher@1.1.1/dist/flasher.min.js'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function rootScript($value): static
    {
        $this->_usedProperties['rootScript'] = true;
        $this->rootScript = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function autoTranslate($value): static
    {
        $this->_usedProperties['autoTranslate'] = true;
        $this->autoTranslate = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function autoRender($value): static
    {
        $this->_usedProperties['autoRender'] = true;
        $this->autoRender = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function searchCriteria(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['searchCriteria'] = true;
        $this->searchCriteria = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function themes(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['themes'] = true;
        $this->themes = $value;

        return $this;
    }

    /**
     * @default {"enabled":true,"mapping":{"success":["success"],"error":["error","danger"],"warning":["warning","alarm"],"info":["info","notice","alert"]}}
    */
    public function flashBag(array $value = []): \Symfony\Config\Flasher\FlashBagConfig
    {
        if (null === $this->flashBag) {
            $this->_usedProperties['flashBag'] = true;
            $this->flashBag = new \Symfony\Config\Flasher\FlashBagConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "flashBag()" has already been initialized. You cannot pass values the second time you call flashBag().');
        }

        return $this->flashBag;
    }

    public function presets(array $value = []): \Symfony\Config\Flasher\PresetsConfig
    {
        $this->_usedProperties['presets'] = true;

        return $this->presets[] = new \Symfony\Config\Flasher\PresetsConfig($value);
    }

    public function getExtensionAlias(): string
    {
        return 'flasher';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('default', $value)) {
            $this->_usedProperties['default'] = true;
            $this->default = $value['default'];
            unset($value['default']);
        }

        if (array_key_exists('root_script', $value)) {
            $this->_usedProperties['rootScript'] = true;
            $this->rootScript = $value['root_script'];
            unset($value['root_script']);
        }

        if (array_key_exists('auto_translate', $value)) {
            $this->_usedProperties['autoTranslate'] = true;
            $this->autoTranslate = $value['auto_translate'];
            unset($value['auto_translate']);
        }

        if (array_key_exists('auto_render', $value)) {
            $this->_usedProperties['autoRender'] = true;
            $this->autoRender = $value['auto_render'];
            unset($value['auto_render']);
        }

        if (array_key_exists('search_criteria', $value)) {
            $this->_usedProperties['searchCriteria'] = true;
            $this->searchCriteria = $value['search_criteria'];
            unset($value['search_criteria']);
        }

        if (array_key_exists('themes', $value)) {
            $this->_usedProperties['themes'] = true;
            $this->themes = $value['themes'];
            unset($value['themes']);
        }

        if (array_key_exists('flash_bag', $value)) {
            $this->_usedProperties['flashBag'] = true;
            $this->flashBag = new \Symfony\Config\Flasher\FlashBagConfig($value['flash_bag']);
            unset($value['flash_bag']);
        }

        if (array_key_exists('presets', $value)) {
            $this->_usedProperties['presets'] = true;
            $this->presets = array_map(function ($v) { return new \Symfony\Config\Flasher\PresetsConfig($v); }, $value['presets']);
            unset($value['presets']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['default'])) {
            $output['default'] = $this->default;
        }
        if (isset($this->_usedProperties['rootScript'])) {
            $output['root_script'] = $this->rootScript;
        }
        if (isset($this->_usedProperties['autoTranslate'])) {
            $output['auto_translate'] = $this->autoTranslate;
        }
        if (isset($this->_usedProperties['autoRender'])) {
            $output['auto_render'] = $this->autoRender;
        }
        if (isset($this->_usedProperties['searchCriteria'])) {
            $output['search_criteria'] = $this->searchCriteria;
        }
        if (isset($this->_usedProperties['themes'])) {
            $output['themes'] = $this->themes;
        }
        if (isset($this->_usedProperties['flashBag'])) {
            $output['flash_bag'] = $this->flashBag->toArray();
        }
        if (isset($this->_usedProperties['presets'])) {
            $output['presets'] = array_map(function ($v) { return $v->toArray(); }, $this->presets);
        }

        return $output;
    }

}
