<?php

namespace Participant\Form;

use Zend\Form\Form;

class ParticipantForm extends Form
{
    public function __construct($name = null)
    {

        parent::__construct('user');

        $this->setAttribute('class', 'form-horizontal');

        $this->add([
            'name' => 'id',
            'type' => 'Hidden',
        ]);

        $this->add([
            'name'    => 'firstname',
            'type'    => 'Text',
            'options' => [
                'label' => 'Prénom',
            ],
        ]);

        $this->add([
            'name'    => 'lastname',
            'type'    => 'Text',
            'options' => [
                'label' => 'Nom',
            ],
        ]);

        $this->add([
            'name'    => 'event',
            'type'    => 'Select',
            'options'    => [
                'label'            => 'Evenement',
                'label_attributes' => ['class' => 'select'],
                'value_options'    => [
                    [
                        'value'      => '1',
                        'label'      => 'Course de 12 km',
                    ],
                    [
                        'value'      => '2',
                        'label'      => 'Semi Marathon',
                    ]
                ]
            ],
        ]);
        $this->add([
            'name'    => 'transitTime',
            'type'    => 'text',
            'options' => [
                'label' => 'Tps de passage'
            ],
        ]);

        $this->add([
            'name'    => 'sex',
            'type'    => 'Radio',
            'options'    => [
                'label'            => 'Sexe',
                'label_attributes' => ['class' => 'checkbox-inline'],
                'value_options'    => [
                    [
                        'value'      => 'male',
                        'label'      => 'Homme',
                    ],
                    [
                        'value'      => 'female',
                        'label'      => 'Femme',
                    ]
                ]
            ],
        ]);

        $this->add([
            'name'       => 'submit',
            'type'       => 'submit',
            'attributes' => [
                'class' => 'btn btn-primary',
                'value' => 'Sauvegarder'
            ],
        ]);
    }
}