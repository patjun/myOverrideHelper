<?php
/**
 * @package     myOverrideHelper
 *
 * @copyright   Patrick Jungbluth
 * @license     GPL-3.0 License
 */


/**
 * Class EntityFieldsHelper
 */
class EntityFieldsHelper
{

    private $fields;
    private $namedFields;


    /**
     * EntityFieldsHelper constructor.
     * @param $fields
     */
    function __construct($jcfields)
    {
        $this->fields = $jcfields;
        foreach ($this->fields as $field) {
            $this->namedFields[$field->name] = $field;
        }
    }


    /**
     * @param $name
     *
     * @return false|string
     */
    public function getFieldIdByName($name)
    {
        foreach ($this->fields as $key => $value) {
            if ($value->name == $name) {
                return $key;
            }
        }
        return false;
    }


    /**
     * @param $name
     *
     * @return mixed
     */
    public function getFieldValueByName($name)
    {

        $key1 = $this->getFieldIdByName($name);
        $value = $this->fields[$key1]->value;

        return $value;
    }


    /**
     * @param $name
     *
     * @return mixed
     */
    public function getFieldByName($name)
    {
        $key1 = $this->getFieldIdByName($name);

        return $this->fields[$key1];
    }


    /**
     * @param $name
     *
     * @return mixed
     */
    public function getFieldRawValuesByName($name)
    {
        return $this->namedFields[$name]->rawvalue;
    }


    /**
     * @param $name
     *
     * @return mixed
     */
    public function getFieldLabelByName($name)
    {
        return $this->namedFields[$name]->label;
    }


    /**
     * @param $name
     *
     * @return mixed
     */
    public function getFieldOptionsByName($name)
    {
        if(is_null($this->namedFields[$name]->fieldparams->get('options'))) return false;

        foreach ($this->namedFields[$name]->fieldparams->get('options') as $option) {
            $katOptions[$option->value] = $option->name;
        }

        return $katOptions;
    }

}