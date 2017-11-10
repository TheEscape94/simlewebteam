<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddressType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, array(
                'label' => 'Ime:',
                'attr' => array(
                    'class' => 'form-control',
                )
            ))
            ->add('email', EmailType::class, array(
                'label' => 'Email:',
                'attr' => array(
                    'class' => 'form-control',
                )
            ))
            ->add('phone', null, array(
                'label' => 'Telefon:',
                'attr' => array(
                    'class' => 'form-control',
                )
            ))
            ->add('city', null, array(
                'label' => 'Grad:',
                'attr' => array(
                    'class' => 'form-control',
                )
            ))
            ->add('note', TextareaType::class, array(
                'label' => 'Beleska:',
                'attr' => array(
                    'class' => 'form-control',
                    'style' => 'resize:none; height: 125px;',
                )
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Address'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_address';
    }


}
