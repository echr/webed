<?php namespace WebEd\Plugins\CustomFields\Hook\Actions\Render;

use WebEd\Base\Core\Models\Contracts\BaseModelContract;
use WebEd\Base\Pages\Http\Controllers\PageController;

class Pages extends AbstractRenderer
{
    /**
     * @param BaseModelContract $item
     */
    /**
     * @param string $type
     * @param BaseModelContract $item
     */
    public function render($type, BaseModelContract $item)
    {
        if ($type !== 'page') {
            return;
        }

        add_custom_field_rules([
            'page_template' => isset($item->page_template) ? $item->page_template : '',
            'page' => isset($item->id) ? $item->id : '',
            'model_name' => 'Page',
        ]);

        parent::render($type, $item); // TODO: Change the autogenerated stub
    }
}
