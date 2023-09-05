<?php

namespace Bagaaz\LaravelCrudHelper\Generators;

use Bagaaz\LaravelCrudHelper\Contracts\TableBuilderInterface;
use Illuminate\Database\Eloquent\Collection;

class TableBuilder implements TableBuilderInterface
{
    protected $data;
    protected $options = [];
    protected $fields = [];
    protected $actions = ['create', 'edit', 'delete'];

    // Recebe os dados que serão exibidos na tabela atraves de uma collection do eloquent
    public function __construct(Collection $data)
    {
        $this->data = $data;
    }

    // Permite definir configurações genericas para a tabela, como numero de registros por pagina, nome da tabela, etc
    public function setOptions($options) { /* ... */ }

    // Permite adicionar campos a tabela, como nome, email, etc
    public function addField($type, $name, $label, $options = [])
    {
        $this->fields[] = compact('type', 'name', 'label', 'options');
        return $this;
    }

    // Permite adicionar ações a tabela, além das ações padrões de criar, editar e excluir
    public function addAction($name, $url, $icon)
    {
        $this->actions[] = compact('name', 'url', 'icon');
        return $this;
    }

    public function build()
    {
        return view('laravel-crud-helper::table', [
            'data' => $this->data,
            'options' => $this->options,
            'fields' => $this->fields,
            'actions' => $this->actions,
        ]);
    }
}
