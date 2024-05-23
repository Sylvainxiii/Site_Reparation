<?php

namespace App\Form;

use App\Entity\FrUtilisateurUti;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class FrUtilisateurUtiType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->add('roles',ChoiceType::class, [
                'choices' => [
                    'Utilisateur' => 'ROLE_USER',
                    // 'Employé' => 'ROLE_EMPLOYEE',
                    'Admin' => 'ROLE_ADMIN'
                ],
                'help' => 'Sélectionner un rôle',
                'multiple' => false,
                'mapped' => false,
            ])
            ->add('password')
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
