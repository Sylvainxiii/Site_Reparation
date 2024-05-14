<?php

namespace App\Form;

use App\Entity\FrEtapeInterventionEti;
use App\Entity\FrPiecesDetacheesPid;
use App\Entity\FrRemplacementRem;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FrRemplacementRemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('rem_qte')
            ->add('rem_cause')
            ->add('rem_date_add')
            ->add('rem_date_edit')
            ->add('fk_pid_id', EntityType::class, [
                'class' => FrPiecesDetacheesPid::class,
'choice_label' => 'id',
            ])
            ->add('fk_eti_id', EntityType::class, [
                'class' => FrEtapeInterventionEti::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FrRemplacementRem::class,
        ]);
    }
}
