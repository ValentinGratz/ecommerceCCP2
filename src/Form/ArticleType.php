<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class)
            ->add('contenu', CKEditorType::class) // Ce champ sera remplacé par un éditeur WYSIWIG
            ->add('featured_image', FileType::class, [
                'label' => 'Image'
            ])
            ->add('categories', EntityType::class, [
                'class' => Categories::class,
                'multiple' => true,
                'expanded' => true
            ])
            ->add('mots_cles', EntityType::class, [
                'class' => MotsCles::class,
                'multiple' => true,
                'expanded' => true
            ])
            ->add('Publier', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
