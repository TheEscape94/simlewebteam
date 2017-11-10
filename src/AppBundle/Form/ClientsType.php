<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class ClientsType extends AbstractType
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
                    'class' => 'form-control half-control'
                )
            ))
            ->add('lastname', null, array(
                'label' => 'Prezime:',
                'attr' => array(
                    'class' => 'form-control half-control'
                )
            ))
            ->add('email', EmailType::class, array(
                'label' => 'Email:',
                'attr' => array(
                    'class' => 'form-control half-control'
                )
            ))
            ->add('phone', null, array(
                'label' => 'Telefon:',
                'attr' => array(
                    'class' => 'form-control half-control'
                )
            ))
            ->add('city', null, array(
                'label' => 'Grad:',
                'attr' => array(
                    'class' => 'form-control full-control'
                )
            ))
            ->add('domen', null, array(
                'label' => 'Domen:',
                'attr' => array(
                    'class' => 'form-control full-control'
                )
            ))
            ->add('packet', ChoiceType::class, array(
                'choices' => array(
                    'OSNOVNI' => '0',
                    'STANDARDNI' => '1',
                    'NAPREDNI' => '2',
                    'PROFESIONALNI' => '3',
                ),
                'label' => 'Paket:',
                'attr' => array(
                    'class' => 'form-control half-control'
                )
            ))
            ->add('price', null, array(
                'label' => 'Cena:',
                'attr' => array(
                    'class' => 'form-control half-control'
                )
            ))
            ->add('note', TextareaType::class, array(
                'label' => 'Beleska:',
                'attr' => array(
                    'class' => 'form-control full-control',
                    'style' => 'resize: none',
                )
            ))
            ->add('payingDate', DateTimeType::class, array(
                'label' => 'Datum placanja:',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd H:mm',
                'attr' => array(
                    'class' => 'form-control full-control',
                    'placeholder' => 'godina-mesec-dan sat:minut',
                )
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Clients'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_clients';
    }


}
