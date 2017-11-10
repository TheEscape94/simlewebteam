<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ThemesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, array(
                'label' => 'Naziv teme:',
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('previewlink', null, array(
                'label' => 'Link za pregled:',
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('description', TextareaType::class, array(
                'label' => 'Kratak opis:',
                'attr' => array(
                    'class' => 'form-control',
                    'style' => "resize: none; padding: 10px; border-radius:4px;font-size: 12px; height: 100px;",
                )
            ))
            ->add('previewImg', FileType::class, array(
                'data_class' => null,
                'label' => 'Screenshoot',
                'attr' => array(
                    'class' => 'form-control'
                )
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Themes'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_themes';
    }


}
