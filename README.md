# myOverrideHelper

## Installation

- Clone the myOverrideHelper Repo in the html directory of your template
- Add the following lines near after `defined('_JEXEC') or die;` or `$app = JFactory::getApplication();
`. If `$app = JFactory::getApplication();` dont exist in your template-file you need to add the line. 

## EntityCustomFieldsHelper
```php
require_once(JPATH_THEMES . '/' . $app->getTemplate() . '/html/myOverrideHelper/EntityFieldsHelper.php');
$fields = new EntityFieldsHelper($this->item->jcfields);
```

### Methods to return the values
#### Entity custom fields 
```
<ul>
    <li>Value: <?php print $articleCustomFields->getFieldValueByName('field-name'); ?></li>
    <li>Label: <?php print $articleCustomFields->getFieldLabelByName('field-name') ?></li>
    <li>ID: <?php print $articleCustomFields->getFieldIdByName('field-name') ?></li>
    <li>RawValue: <?php print_r($articleCustomFields->getFieldRawValuesByName('field-name')) ?></li>
    <li>Options: <?php print_r($articleCustomFields->getFieldOptionsByName('field-name')) ?></li>
    <li>Field: <?php print_r($articleCustomFields->getFieldByName('field-name')) ?></li>
</ul>
```

## UserFieldsHelper
```php
require_once(JPATH_THEMES . '/' . $app->getTemplate() . '/html/myOverrideHelper/UserFieldsHelper.php');
$userFields = new UserFieldsHelper($this->item->created_by);
```

### Methods to return the values

#### User fields
```
<div>Name: <?php print $userFields->name(); ?></div>
```

#### User custom Fields 
```
<ul>
    <li>Value: <?php print $userFields->getFieldValueByName('field-name'); ?></li>
    <li>Label: <?php print $userFields->getFieldLabelByName('field-name') ?></li>
    <li>ID: <?php print $userFields->getFieldIdByName('field-name') ?></li>
    <li>RawValue: <?php print_r($userFields->getFieldRawValuesByName('field-name')) ?></li>
    <li>Options: <?php print_r($userFields->getFieldOptionsByName('field-name')) ?></li>
    <li>Field: <?php print_r($userFields->getFieldByName('field-name')) ?></li>
</ul>
```
