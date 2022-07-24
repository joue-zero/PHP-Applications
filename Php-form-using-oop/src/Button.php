<?php
    namespace src;
    class Button extends HtmlElement{

        private string $name;

        public function __construct($name){
            $this->name = $name;
        }
        public function render(): string
        {
            return sprintf("<button type='submit' class='btn btn-success display-block'>%s</button>", $this->name);
        }
    }