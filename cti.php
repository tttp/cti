<?php

require_once 'cti.civix.php';

function cti_civicrm_summary ( $contactID, &$content) {
  CRM_Core_Region::instance('page-body')->add(array(
    'template' => 'adial.tpl'
  ));
}



/**
 * Implementation of hook_civicrm_config
 */
function cti_civicrm_config(&$config) {
  _cti_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 */
function cti_civicrm_xmlMenu(&$files) {
  _cti_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 */
function cti_civicrm_install() {
  return _cti_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 */
function cti_civicrm_uninstall() {
  return _cti_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 */
function cti_civicrm_enable() {
  return _cti_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 */
function cti_civicrm_disable() {
  return _cti_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 */
function cti_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _cti_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 */
function cti_civicrm_managed(&$entities) {
  return _cti_civix_civicrm_managed($entities);
}

/**
 * Implementation of hook_civicrm_caseTypes
 *
 * Generate a list of case-types
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 */
function cti_civicrm_caseTypes(&$caseTypes) {
  _cti_civix_civicrm_caseTypes($caseTypes);
}
