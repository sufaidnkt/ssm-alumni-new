<?php

/**
 * @file
 * Default simple view template to display a rows in a grid.
 *
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 *
 * @ingroup views_templates
 */
?>
<div class="panel panel-default">
  <?php if (!empty($title) || !empty($caption)) : ?>
    <div class="panel-heading"><?php print $caption . $title; ?></div>
  <?php endif; ?>
  <div class="table-responsive">
    <table class="table <?php print $class; ?>"<?php print $attributes; ?>>
      <tbody>
        <?php foreach ($rows as $row_number => $columns): ?>
          <tr <?php if ($row_classes[$row_number]) { print 'class="' . $row_classes[$row_number] .'"';  } ?>>
            <?php foreach ($columns as $column_number => $item): ?>
              <td <?php if ($column_classes[$row_number][$column_number]) { print 'class="' . $column_classes[$row_number][$column_number] .'"';  } ?>>
                <?php print $item; ?>
              </td>
            <?php endforeach; ?>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
