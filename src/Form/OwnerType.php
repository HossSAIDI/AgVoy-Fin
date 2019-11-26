<?php

namespace App\Form;

use App\Entity\Owner;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OwnerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname',TextType::class, ['label' => "Prénom"])
            ->add('familyName',TextType::class, ['label' => "Nom de famille"])
            ->add('address',TextType::class, ['label' => "Adresse"])
            ->add('country',TextType::class, ['label' => "Code pays"])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Owner::class,
        ]);
    }
}
