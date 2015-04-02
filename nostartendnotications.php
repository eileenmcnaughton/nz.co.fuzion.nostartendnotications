<?php

require_once 'nostartendnotications.civix.php';

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function nostartendnotications_civicrm_config(&$config) {
  _nostartendnotications_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @param $files array(string)
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function nostartendnotications_civicrm_xmlMenu(&$files) {
  _nostartendnotications_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function nostartendnotications_civicrm_install() {
  _nostartendnotications_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function nostartendnotications_civicrm_uninstall() {
  _nostartendnotications_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function nostartendnotications_civicrm_enable() {
  _nostartendnotications_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function nostartendnotications_civicrm_disable() {
  _nostartendnotications_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed
 *   Based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function nostartendnotications_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _nostartendnotications_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function nostartendnotications_civicrm_managed(&$entities) {
  _nostartendnotications_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function nostartendnotications_civicrm_caseTypes(&$caseTypes) {
  _nostartendnotications_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function nostartendnotications_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _nostartendnotications_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Prevent recurring start stop notifications from going out.
 *
 * @param array $params
 * @param string $context
 *
 * @return bool
 */
function nostartendnotications_civicrm_alterMailParams(&$params, $context) {
  if (!empty($params['valueName']) && $params['valueName'] == 'contribution_recurring_notify') {
    $params['abortMailSend'] = TRUE;
  }

}

/**
 * Functions below this ship commented out. Uncomment as required.
 *

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *
function nostartendnotications_civicrm_preProcess($formName, &$form) {

}
*/


