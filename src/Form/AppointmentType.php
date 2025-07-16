<?php

namespace App\Form;

use App\Entity\Appointment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class AppointmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
/*************  ✨ Windsurf Command ⭐  *************/
    /**
     * Configures the options for this form type.
     *
     * @param OptionsResolver $resolver The resolver for the options.
     *
     * This method sets the default data class to Appointment::class.
     */

/*******  b8a13184-1049-453f-87de-968b7aed1776  *******/    {
        $builder
            ->add('client', TextType::class, [
                'label' => 'Client',
            ])
            ->add('date', DateTimeType::class, [
                'label' => 'Date',
                'widget' => 'single_text',
            ])
            ->add('heure', TimeType::class, [
                'label' => 'Heure',
                'widget' => 'single_text',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Appointment::class,
        ]);
    }
}