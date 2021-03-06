<?php

/**
 * Upgrade Universal Viewer to Omeka S.
 *
 * @package UpgradeToOmekaS
 */
class UpgradeToOmekaS_Processor_UniversalViewer extends UpgradeToOmekaS_Processor_Abstract
{

    public $pluginName = 'UniversalViewer';
    public $minVersion = '2.4.2';
    public $maxVersion = '2.4.2';

    public $multipleModules = true;
    public $module = array(
        array(
            'name' => 'IiifServer',
            'version' => '3.5.0',
            'url' => 'https://github.com/Daniel-KM/Omeka-S-module-IiifServer/archive/%s.zip',
            'size' => 204970,
            'sha1' => 'c8f7bc2c222425a69b39fcfc07b8832332b83f27',
            'type' => 'port',
            'install' => array(),
        ),
        array(
            'name' => 'UniversalViewer',
            'version' => '3.5.0',
            'url' => 'https://github.com/Daniel-KM/Omeka-S-module-UniversalViewer/archive/%s.zip',
            'size' => 2143872,
            'sha1' => 'bf12f776dc622af464e6583cec0150327bc2ed9d',
            'type' => 'port',
            'install' => array(),
        ),
    );

    public $processMethods = array(
        '_installModule',
    );

    protected function _upgradeSettings()
    {
        $target = $this->getTarget();

        $mapping = $this->getProcessor('Core/Elements')
            ->getMappingElementsToProperties();

        $mapOptions = array(
            'universalviewer_manifest_description_element' => 'iiifserver_manifest_description_property',
            'universalviewer_manifest_description_default' => '',
            'universalviewer_manifest_attribution_element' => 'iiifserver_manifest_attribution_property',
            'universalviewer_manifest_attribution_default' => 'iiifserver_manifest_attribution_default',
            'universalviewer_manifest_license_element' => 'iiifserver_manifest_license_property',
            'universalviewer_manifest_license_default' => 'iiifserver_manifest_license_default',
            'universalviewer_manifest_logo_default' => 'iiifserver_manifest_logo_default',
            'universalviewer_alternative_manifest_element' => 'universalviewer_manifest_property',
            'universalviewer_append_collections_show' => 'universalviewer_append_item_set_show',
            'universalviewer_append_items_show' => 'universalviewer_append_item_show',
            'universalviewer_append_collections_browse' => 'universalviewer_append_item_set_browse',
            'universalviewer_append_items_browse' => 'universalviewer_append_item_browse',
            'universalviewer_class' => 'universalviewer_class',
            'universalviewer_style' => 'universalviewer_style',
            'universalviewer_locale' => 'universalviewer_locale',
            'universalviewer_iiif_creator' => 'iiifserver_image_creator',
            'universalviewer_max_dynamic_size' => 'iiifserver_image_max_size',
            'universalviewer_force_https' => 'iiifserver_manifest_force_https',
        );
        foreach ($mapOptions as $option => $setting) {
            if (empty($setting)) {
                continue;
            }
            $value = get_option($option);
            // Manage exceptions.
            switch ($option) {
                case 'universalviewer_manifest_description_element':
                case 'universalviewer_manifest_attribution_element':
                case 'universalviewer_manifest_license_element':
                case 'universalviewer_alternative_manifest_element':
                    $element = json_decode($value, true);
                    if ($element && count($element) == 2) {
                        $element = $element[0] . ':' . $element[1];
                        if (isset($mapping[$element])) {
                            $value = $mapping[$element];
                        }
                    }
                    break;
            }
            $target->saveSetting($setting, $value);
        }

        $this->_log('[' . __FUNCTION__ . ']: ' . __('All urls of the Universal Viewer are maintained, except the player: items/play/:id was replaced by item/:id/play.')
                . ' ' . __('To keep old urls, uncomment the specified lines in the config of the module.'),
            Zend_Log::NOTICE);
    }
}
