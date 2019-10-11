<?php
namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Definición de nuestro bloque
 *
 * @Block(
 *   id = "bloque_de_pruebas",
 *   admin_label = @Translation("Bloque de pruebas"),
 *   category = @Translation("Blocks")
 * )
 */
class PruebasBlock extends BlockBase
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        return [
            '#type' => 'markup',
            '#markup' => 'Esto es un bloque de pruebas!!',
        ];
    }
}
