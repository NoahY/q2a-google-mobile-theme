<?php
	class qa_html_theme extends qa_html_theme_base
	{
		function doctype()
		{
			
			$this->content['navigation']['footer']['feedback']['label'] = '<div class="feedback-image"></div>';
			
			$this->content['search']['button_label'] = '';
			$this->content['logo'] = '<A HREF="../" CLASS="qa-logo-link">'.qa_opt('site_title').'</A>';

			qa_html_theme_base::doctype();
		}
		function head_custom() {
			$this->output('<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />');
			qa_html_theme_base::head_custom();
		}
		
		function widgets($region, $place)
		{
			if($region != 'side')
				qa_html_theme_base::widgets($region, $place);
		}	
			
		function sidepanel()
		{

		}		
		function nav_user_search()
		{
			$this->search();
			$this->nav('user');
		}
	}
	