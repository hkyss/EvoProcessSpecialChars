# ProcessSpecialChars

## Install
- Copy this repo into your site folder
- Create a plugin with code
```php
/**
 * ProcessSpecialChars
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

include_once MODX_BASE_PATH.'assets/plugins/ProcessSpecialChars/plugin.ProcessSpecialChars.php';
```
- Set fields in configuration tab (comma separator)