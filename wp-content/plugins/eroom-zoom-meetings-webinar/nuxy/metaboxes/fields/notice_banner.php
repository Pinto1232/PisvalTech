<?php

/**
 * Notice Banner field template.
 *
 * @var $field
 * @var $field_id
 * @var $field_value
 * @var $field_label
 * @var $field_name
 * @var $section_name
 *
 */

$field = "data['{$section_name}']['fields']['{$field_name}']";

?>

<wpcfto_notice_banner :field_label="<?php echo esc_attr($field_label); ?>"
					:field_name="'<?php echo esc_attr($field_name); ?>'">
</wpcfto_notice_banner>
