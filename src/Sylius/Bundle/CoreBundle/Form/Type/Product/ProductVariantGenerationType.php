<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\CoreBundle\Form\Type\Product;

use Sylius\Bundle\ProductBundle\Form\Type\ProductVariantGenerationType as BaseProductVariantGenerationType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * @author Łukasz Chruściel <lukasz.chrusciel@lakion.com>
 */
class ProductVariantGenerationType extends BaseProductVariantGenerationType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
            ->add('price', 'sylius_money', [
                'label' => 'sylius.form.variant.price',
            ])
        ;
    }
}