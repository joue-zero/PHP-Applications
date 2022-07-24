<?php
    namespace src;

    class InputText extends InputBase{

        protected function specifyType(): string
        {
            return sprintf('<input type="text" name="%s" value="%s" class="form-control"/>', $this->name, $this->value);
        }
    }