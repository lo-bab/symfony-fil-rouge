<?php

namespace App\Form;

use App\Entity\Equipement;
use App\Entity\GiteSearch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class GiteSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('minSurface', IntegerType::class, [
                "required" => false,
                "label" => false,
                "attr" => ["placeholder" => "Surface minimum"]
            ])
            ->add('minChambre', IntegerType::class, [
                "required" => false,
                "label" => false,
                "attr" => ["placeholder" => "Nbre de chambre minimum"]
            ])
            ->add('minCouchage', IntegerType::class, [
                "required" => false,
                "label" => false,
                "attr" => ["placeholder" => "Nbre de couchage minimum"]
            ])
            ->add('submit', SubmitType::class, [
                "label" => "Rechercher",
                "attr" => ["class" => "btn-success"]
            ])
            // problème ici "can't get a way to read the property"
            ->add('equipements', EntityType::class, [
                'required' => false,
                'label' => false,
                'mapped' => false, // solution provisoire permettant d'afficher la page sans blocage
                'class' => Equipement::class,
                'choice_label' =>'name',
                'multiple' => true,
                "expanded" => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => GiteSearch::class,
        ]);
    }
}