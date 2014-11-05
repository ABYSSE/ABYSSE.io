<?php namespace App\Libraries;

class Tree {

    public function toArray($elements, $parentId = 0, $exclude = [])
    {
        $branch = [];

        foreach($elements as $element)
        {
            if (in_array($element['id'], $exclude))
                continue;

            if ($element['parent_id'] == $parentId)
            {
                $children = $this->toArray($elements, $element['id'], $exclude);
                if ($children)
                    $element['children'] = $children;

                $branch[] = $element;
            }
        }

        return $branch;
    }

    public function toHTMLSelect($children, $selected = '0', $default = '<option value="0">-</option>')
    {
        $html = '<select name="parent_id" class="form-control">' . PHP_EOL;
        $html .= $default . PHP_EOL;
        $html .= $this->buildHTMLSelect($children, [], $selected);
        $html .= '</select>' . PHP_EOL;
        return $html;
    }

    public function buildHTMLSelect($children, $parents = [], $selected)
    {
        $html = '';

        foreach ($children as $child)
        {
            if (!empty($child['children']))
            {
                $html .= $this->buildHTMLSelectOption($child['id'], $child['name'], $parents, ($child['id'] == $selected));
                $html .= $this->buildHTMLSelect($child['children'], array_merge($parents, [$child['name']]), $selected);
            }
            else
                $html .= $this->buildHTMLSelectOption($child['id'], $child['name'], $parents, ($child['id'] == $selected));
        }

        return $html;
    }

    public function buildHTMLSelectOption($value, $name, $parents, $selected)
    {
        return '<option value="' . $value . '" ' . (!empty($selected) ? 'selected="selected"' : '') . '>' . (!empty($parents) ? implode(' » ', $parents) . ' » ' : '') . $name . '</option>' . PHP_EOL;
    }

} 