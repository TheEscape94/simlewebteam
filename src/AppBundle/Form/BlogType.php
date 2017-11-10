<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BlogType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, array(
                'label' => 'Naslov',
                'attr' => array(
                    'class' => 'form-control',
                )
            ))
            ->add('category', ChoiceType::class, array(
                'choices' => array(
                    'Programiraje' => '0',
                    'Dizajn' => '1',
                    'Seo & Social Network' => '2',
                ),
                'label' => 'Kategorija',
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('blogImg', FileType::class, array(
                'label' => 'Naslovna slika',
                'data_class' => null,
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('ytLink', null, array(
                'label' => 'YouTube link',
                'attr' => array(
                    'class' => 'form-control',
                )
            ))
            ->add('link', null, array(
                'label' => 'Link',
                'attr' => array(
                    'class' => 'form-control',
                )
            ))
            ->add('blogTxt', TextareaType::class, array(
                'label' => 'Tekst:',
                'attr' => array(
                    'class' => 'form-control',
                    'style' => 'resize: none; height: 220px;',
                )
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Blog'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_blog';
    }


}
