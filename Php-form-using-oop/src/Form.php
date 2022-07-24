<?php
    namespace src;

    class Form extends HtmlElement {

        private array $elements;
        private string $action;
        private string $method;
        public function __construct($action = "", $method = "post") {
            $this->elements = [];
            $this->action = $action;
            $this->method = $method;
        }

        public function addElement($field){
            $this->elements[] = $field;
        }

        public function render() : string {
            $this->elements = array_map(fn($el) =>  $el->render(), $this->elements);
            $content = implode(PHP_EOL, $this->elements);
            return sprintf("<form action='%s' method='%s'>$content</form>", $this->action, $this->method);
        }
    };