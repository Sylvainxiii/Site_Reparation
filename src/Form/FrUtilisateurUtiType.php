<?php

namespace App\Form;

use App\Entity\FrUtilisateurUti;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FrUtilisateurUtiType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('uti_email')
            ->add('uti_password')
            ->add('uti_nom')
            ->add('uti_prenom')
            ->add('uti_naissance_date')
            ->add('uti_avatar')
            ->add('uti_date_add')
            ->add('uti_date_edit')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FrUtilisateurUti::class,
        ]);
    }
}
