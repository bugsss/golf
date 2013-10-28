<?php foreach ($this->configuration->getValue('list.display') as $name => $field): ?>
[?php slot('sf_admin.current_header') ?]
<th class="sf_admin_<?php echo strtolower($field->getType()) ?> sf_admin_list_th_<?php echo $name ?>">
<?php if (($field->isReal() && $field->getConfig('is_sortable', true, false)) || $field->getConfig('is_sortable', false, false)): ?>
  [?php if ('<?php echo $name ?>' == $sort[0]): ?]
    [?php echo link_to(__('<?php echo $field->getConfig('label', '', true) ?>', array(), '<?php echo $this->getI18nCatalogue() ?>'), '@<?php echo $this->getUrlForAction('list') ?>', array('title' => __('sort '.($sort[1] == 'asc' ? 'descending' : 'ascending'), array(), 'sf_admin'), 'query_string' => 'sort=<?php echo $name ?>&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?]
    [?php echo image_tag('icons/arrow_'.$sort[1].'.png', array('alt_title' => __('sorted '.($sort[1] == 'asc' ? 'ascending' : 'descending'), array(), 'sf_admin'))) ?]
  [?php else: ?]
    [?php echo link_to(__('<?php echo $field->getConfig('label', '', true) ?>', array(), '<?php echo $this->getI18nCatalogue() ?>'), '@<?php echo $this->getUrlForAction('list') ?>', array('title' => __('sort ascending', array(), 'sf_admin'), 'query_string' => 'sort=<?php echo $name ?>&sort_type=asc')) ?]
  [?php endif; ?]
<?php else: ?>
  [?php echo __('<?php echo $field->getConfig('label', '', true) ?>', array(), '<?php echo $this->getI18nCatalogue() ?>') ?]
<?php endif; ?>
</th>
[?php end_slot(); ?]
<?php echo $this->addCredentialCondition("[?php include_slot('sf_admin.current_header') ?]", $field->getConfig()) ?>
<?php endforeach; ?>