<?php namespace App\Libraries;

use HTML;
use Illuminate\Support\Facades\Request;

class Breadcrumb {

    public function build()
    {
        $request = Request::path();
        $pieces = explode('/', $request);

        $html = $this->addCrumb('/', 'home');

        if (sizeof($pieces) < 2)
            return $html;

        array_pop($pieces);
        $index = $pieces[0];

        foreach ($pieces as $piece)
        {
            if (!empty($piece) && !is_numeric($piece))
            {
                if ($piece != reset($pieces))
                    $index .= '_' . $piece;

                $html .= $this->addCrumb($piece, $index);
            }
        }

        return $html;
    }

    public function addCrumb($piece, $name)
    {
        return HTML::link($piece, trans('abysse.breadcrumb_' . $name), ['class' => 'simple']) . ' / ';
    }

}