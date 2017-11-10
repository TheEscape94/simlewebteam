<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ContactType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, array(
                'label' => 'Ime i prezime:',
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('email', EmailType::class, array(
                'label' => 'Email:',
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('phone', null, array(
                'label' => 'Telefon:',
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('massege', TextareaType::class, array(
                'label' => 'Poruka:',
                'attr' => array(
                    'class' => 'form-control',
                    'style' => "resize: none; padding: 10px; border-radius:4px;font-size: 12px; height: 100px;",
                )
            ))
            ->setAction('/admin/contact/new')
            ->setMethod('GET');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Contact'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_contact';
    }


}
