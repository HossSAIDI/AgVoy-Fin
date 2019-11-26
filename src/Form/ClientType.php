<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, ['label' => "Prénom"])
            ->add('familyName', TextType::class, ['label' => "Nom de famille"])
            ->add('email', TextType::class, ['label' => "Adresse e-mail"])
            ->add('gender', TextType::class, ['label' => "Genre (M ou F)"])
            ->add('country', TextType::class, ['label' => "Code pays"])
            ->add('phoneNumber', TextType::class, ['label' => "Numéro de téléphone"])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
