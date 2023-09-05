<?php

namespace Bagaaz\LaravelCrudHelper\Contracts;

interface TableBuilderInterface
{
    public function setOptions($options);
    public function addField($type, $label, $options);
    public function addAction($name, $url, $icon);
    public function build();
}
