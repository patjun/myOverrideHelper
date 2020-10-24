<?php
/**
 * @package     myOverrideHelper
 *
 * @copyright   Patrick Jungbluth
 * @license     GPL-3.0 License
 */

$app = JFactory::getApplication();
require_once(JPATH_THEMES . '/' . $app->getTemplate() . '/html/myOverrideHelper/EntityCustomFieldsHelper.php');

/**
 * Class UserFieldsHelper
 */
class UserFieldsHelper extends EntityCustomFieldsHelper
{

    private $user;

    /**
     * UserFieldsHelper constructor.
     *
     * @param $userId integer
     */
    function __construct($userId)
    {
        $this->user = JFactory::getUser($userId);

        JLoader::register('FieldsHelper', JPATH_ADMINISTRATOR . '/components/com_fields/helpers/fields.php');
        $jcfields = FieldsHelper::getFields('com_users.user', $this->user, true);

        parent::__construct($jcfields);
    }


    /**
     * @return string|null
     */
    public function name() {
        return $this->user->name;
    }

}