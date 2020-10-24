# myOverrideHelper

## Installation

- Clone the myOverrideHelper Repo in the html directory of your template
- Add the following lines near after 'defined('_JEXEC') or die;'

'$app = JFactory::getApplication();
 require_once(JPATH_THEMES . '/' . $app->getTemplate() . '/html/myOverrideHelper/EntityFieldsHelper.php');
 $fields = new EntityFieldsHelper($this->item->jcfields);'

## Usage


