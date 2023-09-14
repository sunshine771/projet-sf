<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName')
            ->add('name')
            ->add('phone')
            ->add('email')
            ->add('message')
            ->add('submit', SubmitType::class, array(
                'attr' => array(
                    'class' => 'btn btn-lg btn-primary mt-4 text-light smallBorderRadius text-center',
                ),
                'label' => 'Modifier le mot de passe',
                'row_attr' => [
                    'class' => 'text-center mb-0'
                ]
            ));
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
