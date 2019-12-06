<?php

namespace Statamic\Addons\SeoPro;

use Statamic\API\File;
use Statamic\API\Parse;
use Statamic\Extend\Tags;
use Statamic\Addons\SeoPro\Settings;

class SeoProTags extends Tags
{
    public function meta()
    {
        if (array_get($this->context, 'seo') === false) {
            return;
        }

        return $this->render('meta', $this->metaData());
    }

    public function metaData()
    {
        return (new TagData)
            ->with(Settings::load()->get('defaults'))
            ->with(array_get($this->context, 'seo', []))
            ->withCurrent(array_get($this->context, 'page_object'))
            ->get();
    }

    public function dumpMetaData()
    {
        return dd($this->metaData());
    }

    protected function render($template, $data = [])
    {
        $path = "{$this->getDirectory()}/resources/views/{$template}.html";

        $contents = File::get($path);

        return Parse::template($contents, $data);
    }
}
