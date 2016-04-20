<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Documents\Form;

use Zend\InputFilter\InputFilter;

/**
 * Description of StudentBgConfigFilter
 *
 * @author Gabriel Pereira <rickardch@gmail.com>
 */
class StudentBgConfigFilter extends InputFilter
{
    
    public function __construct()
    {
        $this->add(array(
                    'name' => 'bg_phrase',
                    'required' => true,
                    'filters' => array(
                        array('name' => 'StringTrim'),
                        array('name' => 'StripTags'),
                    ),
                    'validators' => array(
                        array(
                            'name' => 'Zend\Validator\StringLength',
                            'options' => array(
                                'min' => '5',
                                'max' => '300',
                            ),
                        ),
                    ),
                ))
                ->add(array(
                    'name' => 'bg_author',
                    'required' => true,
                    'filters' => array(
                        array('name' => 'StringTrim'),
                        array('name' => 'StripTags'),
                    ),
                    'validators' => array(
                        array(
                            'name' => 'Zend\Validator\StringLength',
                            'options' => array(
                                'min' => '5',
                                'max' => '100',
                            ),
                        ),
                    ),
                ))
                ->add(array(
                    'name' => 'bg_img',
                    'required' => true,
                    'validators' => array(
                        array(
                            'name' => 'Zend\Validator\File\Extension',
                            'options' => array(
                                'extension' => array(
                                    'png',
                                ),
                            ),
                        ),
                        array(
                            'name' => 'Zend\Validator\File\Size',
                            'options' => array(
                                'min' => '1000',
                                'max' => '5000000',
                            )
                        )
                ),
        ));
    }
    
}
