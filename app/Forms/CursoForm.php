<?php

namespace tenda\Forms;

use Kris\LaravelFormBuilder\Form;

class CursoForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('nome', 'text')
            ->add('descricao', 'textarea');
    }
}
