<?php

/*
 * This file is part of Sulu.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\FormBundle\Dynamic;

use Sulu\Bundle\FormBundle\Entity\FormField;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Defines the form type implementation.
 */
interface FormFieldTypeInterface
{
    /**
     * Returns configuration ob backend form type.
     *
     * @return FormFieldTypeConfiguration
     */
    public function getConfiguration();

    /**
     * Builds the form input for frontend.
     *
     * @param FormBuilderInterface $builder
     * @param FormField $field
     * @param string $locale
     * @param array $options
     */
    public function build(FormBuilderInterface $builder, FormField $field, $locale, $options);

    /**
     * Return the default value.
     *
     * @param FormField $field
     * @param string $locale
     *
     * @return mixed
     */
    public function getDefaultValue(FormField $field, $locale);
}
