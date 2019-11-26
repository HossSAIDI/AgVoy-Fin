<?php

namespace App\Form;

use App\Entity\Room;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RoomType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('summary', TextType::class, ['label' => "Résumé"])
            ->add('description', TextType::class, ['label' => "Description"])
            ->add('capacity', IntegerType::class, ['label' => "Capacité"])
            ->add('superficy', NumberType::class, ['label' => "Superficie"])
            ->add('price', NumberType::class, ['label' => "Prix"])
            ->add('address', TextType::class, ['label' => "Adresse"])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Room::class,
        ]);
    }
}
