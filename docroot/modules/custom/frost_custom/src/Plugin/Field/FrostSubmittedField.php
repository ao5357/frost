<?php

namespace Drupal\frost_custom\Plugin\Field\FrostSubmittedField;

use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\TypedData\DataDefinition;

/**
 * Plugin implementation of the 'frost_submitted' field type.
 *
 * @FieldType(
 *   id = "frost_submitted",
 *   label = @Translation("Submitted"),
 *   description = @Translation("Author attribution for the content."),
 *   default_widget = "text",
 *   default_formatter = "string"
 * )
 */
class FrostSubmittedField extends FieldItemBase {

  /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $field_definition) {
    return [
      'columns' => [
        'value' => [
          'type' => 'varchar',
          'length' => 256,
          'not null' => FALSE,
        ],
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {
    $property_definitions['value'] = DataDefinition::create('string')
      ->setLabel(t('Telephone number'));
    return $property_definitions;
  }

}
