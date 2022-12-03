<?php

namespace App\Form;

use App\Entity\Events;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType as TypeTextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('event_name', TypeTextType::class, ["attr" => ['class' => 'form-control my-2 w-25', 'placeholder' => "Enter the events name."]])
            ->add('event_date')
            ->add('event_time')
            ->add('event_description', TypeTextType::class, ["attr" => ['class' => 'form-control my-2 w-25', 'placeholder' => "Enter the events description."]])
            ->add('event_image', TypeTextType::class, ["attr" => ['class' => 'form-control my-2 w-25', 'placeholder' => "Enter the events image link."]])
            ->add('event_capacity', TypeTextType::class, ["attr" => ['class' => 'form-control my-2 w-25', 'placeholder' => "Enter the capacity of the event."]])
            ->add('event_email', TypeTextType::class, ["attr" => ['class' => 'form-control my-2 w-25', 'placeholder' => "Enter email of the responsible person."]])
            ->add('event_phone', TypeTextType::class, ["attr" => ['class' => 'form-control my-2 w-25', 'placeholder' => "Enter phone of the responsible person."]])
            ->add('event_address', TypeTextType::class, ["attr" => ['class' => 'form-control my-2 w-25', 'placeholder' => "Enter the events address."]])
            ->add('event_url', TypeTextType::class, ["attr" => ['class' => 'form-control my-2 w-25', 'placeholder' => "Enter the events URL."]]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Events::class,
        ]);
    }
}
