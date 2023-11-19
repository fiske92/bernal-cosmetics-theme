<?php

namespace VanjaBeautyTheme\Shortcodes;

class TableOfContent
{   
    public function __construct()
    {   
        add_action('the_content', [$this, 'addIDOnHeadings']);
        add_shortcode('table_of_content', [$this, 'generateTableOfContents']);
    }

    public function getHeadings() {
        global $post;
        $content = $post->post_content;

        preg_match_all('/<h([2])[^>]*>(.*?)<\/h\1>/', $content, $matches, PREG_SET_ORDER);

        $headings = array();

        foreach ($matches as $match) {
            $level = $match[1];
            $text = strip_tags($match[2]);
            $id = sanitize_title($text);
            $headings[] = array('level' => $level, 'text' => $text, 'id' => $id);
        }
        return $headings;
    }

    public function addIDOnHeadings($content) {
        preg_match_all('/<h2[^>]*>(.*?)<\/h2>/', $content, $matches, PREG_SET_ORDER);

        foreach ($matches as $match) {
            $id = sanitize_title($match[1]);
            $new_heading = "<h2 id='$id'>" . $match[1] . "</h2>";
            $content = str_replace($match[0], $new_heading, $content);
        }

        return $content;
    }

    public function generateTableOfContents() {
        $headings = $this->getHeadings();
        $output = '';

        ob_start();

        include CHILD_THEME_PATH . '/view/table-of-content.php';

        return ob_get_clean();
    }
}