<?php

namespace Drupal\webform_rules\Plugin\Action;

use Drupal\Core\Action\ActionBase;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides a 'OpenWebformsAction' action.
 *
 * @RulesAction(
 *  id = "open_webforms_action",
 *  label = @Translation("Open webforms"),
 *  category = @Translation("Webform Rules"),
 * )
 */

class OpenWebformsAction extends ActionBase {

  /**
   * {@inheritdoc}
   */
  public function execute($object = NULL) {
    // Insert code here.
  }

  /**
   * {@inheritdoc}
   */
  public function access($object, AccountInterface $account = NULL, $return_as_object = FALSE) {
    $access = $object->status->access('edit', $account, TRUE)
      ->andIf($object->access('update', $account, TRUE));

    return $return_as_object ? $access : $access->isAllowed();
  }

}
