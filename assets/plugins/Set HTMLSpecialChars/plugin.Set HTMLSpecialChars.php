<?php
/**
 * Set HTMLSpecialChars
 *
 * plugin
 *
 * @category        plugin
 * @version         0.1
 * @author          hkyss
 * @documentation   empty
 * @lastupdate      05.11.2020
 * @internal    	@modx_category Resources
 * @internal    	@events OnDocFormSave
 * @internal    	@properties &fields=Поля для обработки через запятую;string;pagetitle,menutitle
 *
 */

if(!defined('MODX_BASE_PATH')) die('What are you doing? Get out of here!');

$fields = trim($fields);

if($modx->event->name == 'OnDocFormSave' && !empty($fields)) {
    include_once MODX_BASE_PATH.'assets/lib/MODxAPI/modResource.php';
    $modResource = new modResource($modx);

    $modResource->edit((int)$id);

    $fields = explode(',',$fields);
    foreach($fields as $item) {
        $value = $modResource->get($item);

        if(!empty($value)) {
            $value = html_entity_decode($value);
            $value = htmlspecialchars($value);
            $modResource->set($item, $value);

            unset($value);
        }
    }

    $modResource->save(false,false);
    $modResource->close();
}
?>