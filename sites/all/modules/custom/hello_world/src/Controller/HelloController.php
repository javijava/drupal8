<?php
/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloController.
 */
namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase
{
	public function content()
	{
		$connection = \Drupal::database();
		$query = $connection->query("SELECT titulo, fecha FROM {tmp_content}");
		$result = $query->fetchAll();
	
		return array(
			'#theme' => 'articles_list',
			'#items' => $result,
			'#title' => 'titulo alternativo'
		);
	}
}
