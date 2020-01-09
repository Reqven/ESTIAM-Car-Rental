<?php

namespace App\Form;

use Symfony\Component\OptionsResolver\Exception\UndefinedOptionsException;
use Symfony\Component\OptionsResolver\Exception\MissingOptionsException;
use Symfony\Component\OptionsResolver\Exception\InvalidOptionsException;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface; 
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use App\Form\DataTransformer\DatePickerTransformer;
use App\Validator\Constraints\DatePicker;

class DatePickerType extends AbstractType
{
    private $defaultOptions;
    private $transformer;

    public function __construct(DatePickerTransformer $transformer)
    {
        $this->transformer = $transformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->resetViewTransformers()
            ->resetModelTransformers()
            ->addViewTransformer($this->transformer);
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        if (($options['attr']) !== $this->defaultOptions['attr']) {
            if (!isset($options['attr']['placeholder'])) {
                $options['attr']['placeholder'] = $this->defaultOptions['attr']['placeholder'];
            }
            if (!isset($options['attr']['class']) || !$options['attr']['class']) {
                $options['attr']['class'] = $this->defaultOptions['attr']['class'];
            }
        }
        $view->vars['attr'] = $options['attr'];
        $view->vars['constraints'] = $options['constraints'];
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $this->defaultOptions = array(
            'attr' => array(
                'placeholder' => 'dd/mm/yyyy',
                'class' => 'datepicker',
                'maxlength' => 10,
                'pattern' => '^(\d{1,2})\/(\d{1,2})\/([0-9]{4})$',
                'autocomplete' => 'off'
            ),
            //'constraints' => [new DatePicker],
            'translation_domain' => 'system',
            'widget' => 'single_text',
            'format' => 'dd/mm/yyyy',
            'input' => 'string',
            'html5' => false,
        );
        $resolver->setDefaults($this->defaultOptions);
    }

    public function getParent()
    {
        return DateType::class;
    }
}