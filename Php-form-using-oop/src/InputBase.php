<?php
    namespace src;

    abstract class InputBase extends HtmlElement {
        protected string $name;
        protected string $label;
        protected string $value;

        public function __construct($name, $label = '', $value = '')
        {
            $this->name  = $name;
            $this->label = $label;
            $this->value = $value;
        }

        public function render(): string
        {
            return sprintf('<div class="mb-3">
                   <label class="form-label">%s</label>
                   %s
                   </div>', $this->label, $this->specifyType());
        }

        abstract protected function specifyType(): string;
    }