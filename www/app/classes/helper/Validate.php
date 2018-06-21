<?php
/**
 * Created by PhpStorm.
 * User: mstockenberg
 * Date: 14.06.18
 * Time: 10:38
 */

namespace classes\helper;

/**
 * Class Validate
 * @package classes
 */
class Validate
{
    /** @var array required Fields in Formular */
    private $requiredFields = ['agb', 'email', 'firstname'];

    /** @var $_GET $_POST merged */
    private $request;

    /**
     * Validate constructor.
     * @param $request
     */
    public function __construct($post)
    {
        $this->request = $post;
        $this->presetRequiredFields();
    }

    /**
     * Pre Populates Checkbox and Radio Keys
     * @return void
     */
    private function presetRequiredFields() : void
    {
        foreach ($this->requiredFields as $field){
            if(!in_array($field, $this->request)){
                $this->request[$field] = $this->request[$field] ?? '';
            }
        }
    }

    /**
     * @param $formField
     * @param $value
     * @return string
     */
    private function checkIfIssetAndEmpty($formField, $value)
    {
        if (isset($this->request[$formField])) {
            if(!empty($this->request[$formField])){
                return htmlentities(strip_tags($value));
            }else{
                StatusLog::group('contact', $formField, "Bitte fülle das Feld: " . $formField . "aus");
            }
        }
    }

    /**
     * @return array
     */
    public function clearInput(): array
    {
        $res = [];

        if (!empty($this->request)) {

            foreach ($this->request as $formField => $value) {
                if(in_array($formField, $this->requiredFields)){
                    $res[$formField] = $this->checkIfIssetAndEmpty($formField, $value);
                }
            }

        }

        return $res;
    }

}