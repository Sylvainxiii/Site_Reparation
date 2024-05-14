<?php

namespace App\Form;

use App\Entity\FrInterventionInt;
use App\Entity\FrObjetObj;
use App\Entity\FrUtilisateurUti;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FrInterventionIntType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('int_type')
            ->add('int_date_debut')
            ->add('int_date_fin')
            ->add('int_numero_de_serie')
            ->add('int_difficulte')
            ->add('int_description')
            ->add('int_visibilite')
            ->add('int_date_add')
            ->add('int_date_edit')
            ->add('fk_obj_id', EntityType::class, [
                'class' => FrObjetObj::class,
'choice_label' => 'id',
            ])
            ->add('fk_uti_id', EntityType::class, [
                'class' => FrUtilisateurUti::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FrInterventionInt::class,
        ]);
    }
}
