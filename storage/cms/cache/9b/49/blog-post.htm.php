<?php 
class Cms59cbc32b93b3a584385817_c0130d1cc1c0998f6549368139eac321Class extends \Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if (isset($this->post))
    $this->page->title = $this->post->title;
    $this->page->description = str_limit($this->post->summary, 60, "...");
}
}
