<?php

namespace myfrm;

class ValidatorTask
{
    protected $errors = [];
    protected $data_items;
    protected $rules_list = ['required', 'min', 'choose_date', 'choose_priority', 'choose_category'];
    protected $messages = [
        'required' => ":fieldname: обязательно для заполнения",
        'min' => ':fieldname: слишком короткое',
        'choose_date' => ':fieldname: не выбран',
        'choose_priority' => ':fieldname: не выбран',
        'choose_category' => ':fieldname: не выбрана',
    ];

    public function validate($data = [], $rules = [])
    {

        $this->data_items = $data;
        foreach ($data as $fieldname => $value) {
            if ($fieldname == 'due_date') {
                $after_key = $fieldname;
                $index = array_search($after_key, array_keys($this->data_items));
                $setup = ["create_date" => date("Y-m-d H:i:s")];
                $setup1 = ["update_date" => Null];
                $this->data_items = array_slice($this->data_items, 0, $index + 1) + $setup + $setup1 + $this->data_items;
            }
            if ($fieldname == 'category') {
                $after_key = $fieldname;
                $index = array_search($after_key, array_keys($this->data_items));
                $setup = ["status" => "Не выполнено"];
                $this->data_items = array_slice($this->data_items, 0, $index + 1) + $setup + $this->data_items;
            }
            if (isset($rules[$fieldname])) {
                $this->check([
                    'fieldname' => $fieldname,
                    'value' => $value,
                    'rules' => $rules[$fieldname],
                ]);
            }
        }
        return $this;
    }

    protected function check($field)
    {
        foreach ($field['rules'] as $rule => $rule_value) {
            if (in_array($rule, $this->rules_list)) {
                if (!call_user_func_array([$this, $rule], [$field['value'], $rule_value])) {
                    $this->addError(
                        $field['fieldname'],
                        str_replace(
                            [':fieldname:', ':rulevalue:'],
                            [$field['fieldname'], $rule_value],
                            $this->messages[$rule]
                        )
                    );
                }
            }
        }
    }


    public function addDataStatus()
    {
        return ($this->data_items);
    }


    protected function addError($fieldname, $error)
    {
        $this->errors[$fieldname][] = $error;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function hasErrors()
    {
        return !empty($this->errors);
    }

    public function listErrors($fieldname)
    {
        $output = '';
        if (isset($this->errors[$fieldname])) {
            $output .= "<div class='invalid-feedback d-block'><ul class='list-unstyled'>";
            foreach ($this->errors[$fieldname] as $error) {
                $output .= "<li>{$error}</li>";
            };
            $output .= "</ul></div>";
        }
        return $output;
    }

    protected function required($value, $rule_value)
    {
        return !empty(trim($value)); //trim обрезка пробелов
    }

    protected function min($value, $rule_value)
    {
        return mb_strlen($value, 'UTF-8') >= $rule_value;
    }

    protected function match($value, $rule_value)
    {
        return $value === $this->data_items[$rule_value];
    }
}
