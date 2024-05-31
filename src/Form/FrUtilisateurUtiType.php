<?php

namespace App\Form;

use App\Entity\FrUtilisateurUti;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class FrUtilisateurUtiType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            // ->add('roles',ChoiceType::class, [
            //     'choices' => [
            //         'Utilisateur' => 'ROLE_USER',
            //         // 'Employé' => 'ROLE_EMPLOYEE',
            //         'Admin' => 'ROLE_ADMIN'
            //     ],
            //     'placeholder' => 'Sélectionner un rôle',
            //     'multiple' => false,
            //     'mapped' => false,
            // ])
            ->add('password', TextType::class, [
                'label' => 'Mot de Passe'
            ])
            ->add('uti_nom', TextType::class, [
                'label' => 'Nom'
            ])
            ->add('uti_prenom', TextType::class, [
                'label' => 'Prénom'
            ])
            ->add('uti_naissance_date', DateType::class, [
                'data' => new \DateTime(),
                'widget' => 'single_text',
                'label'=>'Date de Naissance'
            ])
            // ->add('uti_avatar')
            // ->add('uti_date_add', DateType::class, [
            //     'data' => new \DateTime(),
            //     'widget' => 'single_text'
            // ])
            // ->add('uti_date_edit', DateType::class, [
            //     'data' => new \DateTime(),
            //     'widget' => 'single_text'
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FrUtilisateurUti::class,
        ]);
    }
}
