<?php
    namespace src;

    abstract class HtmlElement{
        abstract public function render() : string;
    }