<?php

    namespace src;

    class InputPass extends InputBase {

        protected function specifyType(): string
        {
            return sprintf('<input type="password" name="%s" value="%s" class="form-control"/>', $this->name, $this->value);

        }
    }