<?php

/**
 * MyTheme is a custom Theme class for the Outpost theme.
 *
 */

// We must tell Habari to use Outpost as the custom theme class:
define( 'THEME_CLASS', 'Outpost' );

/**
 * A custom theme for Outpost output
 */
class Outpost extends Theme
{
	public function action_init_theme()
	{
		// Apply Format::autop() to post content...
		Format::apply( 'autop', 'post_content_out' );
		// Apply Format::autop() to post excerpt...
		Format::apply( 'autop', 'post_content_excerpt' );
		// Apply Format::autop() to comment content...
		Format::apply( 'autop', 'comment_content_out' );
		// Apply Format::tag_and_list() to post tags...
		Format::apply( 'tag_and_list', 'post_tags_out' );
		// Apply Format::nice_date() to post date...
		Format::apply( 'nice_date', 'post_pubdate_out', 'F j, Y g:ia' );
		// Apply Format::nice_date() to comment date...
		Format::apply( 'nice_date', 'comment_date_out', 'F jS, Y \a\t g:ia' );
	}

  /**
   * Add additional template variables to the template output.
   */
  public function action_template_header($theme)
  {
    Stack::add('template_stylesheet', array($this->get_url().'/style.css', 'screen,projection'), 'theme');
  }

}

?>
