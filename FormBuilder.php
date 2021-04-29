<?php

class FormBuilder
{

    private $form;

    public function __construct($method, $action)
    {
        $this->form = '<form method="'.$method.'" ';
        $this->form .= 'action="'.$action.'">';
    }
    public function get()
    {
        $this->form .= '</form>';
        return $this->form;
    }

    public function input($name, $type, $value, $placeholder, $id, $class, $label)
    {
        if($id != ''  && $label != ''){
            $this->form .= "<label for='$id'>$label</label>";
        }
        $this->form .= "<input id='$id' class='$class' name='$name' type='$type' ";
        $this->form .= "value='$value' placeholder='$placeholder' ><br>";
        return $this;
    }

    public function select($name , $id , $options , $label)
    {

        if($id != ''  && $label != ''){
            $this->form .= "<label for='$id'>$label</label>";
        }
        $this->form .= "<select id='$id' name='$name'>";
        $this->form .= "<option>-----</option>";
        foreach ($options as $key => $option) {
            $this->form .= "<option value='$key'>$option</option>";
        }


        $this->form.="</select><br>";

        return $this;
    }

    public  function  textarea($name, $id, $rows , $cols)
    {
        if($id != ''  && $label != ''){
            $this->form .= "<label for='$id'>$label</label>";
        }
        $this->form .="<textarea id='$id' name='$name' rows='4' cols ='50'>";
        
        $this->form .="</textarea><br>";
        return $this;
    }

}