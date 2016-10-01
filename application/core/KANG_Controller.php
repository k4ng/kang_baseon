<?php
	class KANG_Controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		
		/**
		 * Berfungsi untuk merender element html header dan footer, mungkin nanti bisa bertambah jika ada ide.
		 * @param  string $element berisi nama element yang akan di render, header atau footer
		 * @param  array  $param   berisi parameter seperti meta tag, title, author name, css, js dan lainnya
		 * @return [type]          nilai kembali berupa string untuk header atau footer
		 */
		function render_html($element = 'no_part', $param = array() )
		{
			$element_check = (is_string($element) ? $element : 'no_part');

			$title = (isset($param['title'])) ? (!empty($param['title'])) ? $param['title'] : 'Title null' : 'Title not found';
			$author = (isset($param['author'])) ? (!empty($param['author'])) ? $param['author'] : 'Kang Cahya' : 'Kang Cahya';
			$description = (isset($param['description'])) ? (!empty($param['description'])) ? $param['description'] : 'Auth system for codeigniter' : 'Auth system for codeigniter';

			$tags = '';
			$css_loop = '';
			$js_loop = '';

			$cssi_loop = '';
			$jsi_loop = '';

	        $param_js = (isset($param['js']) ? count($param["js"]) : 0);
	        $param_css = (isset($param['css']) ? count($param["css"]) : 0);

	        $param_jsi = (isset($param['jsi']) ? count($param["jsi"]) : 0);
	        $param_cssi = (isset($param['cssi']) ? count($param["cssi"]) : 0);

	        $style_start = ($param_cssi != 0 ? "<style>" : "");
	        $style_end = ($param_cssi != 0 ? "</style>" : "");

	        $script_start = ($param_jsi != 0 ? "<script>" : "");
	        $script_end = ($param_jsi != 0 ? "</script>" : "");

			switch ($element_check) {
			    case "header":
					$tags .= '<!DOCTYPE html>';
					$tags .= '<html>';
					    $tags .= '<head>';
					        $tags .= '<meta charset="utf-8">';
					        $tags .= '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
					        $tags .= '<meta name="description" content="'.$description.'">';
					        $tags .= '<meta name="author" content="'.$author.'">';

					        $tags .= '<!-- App Favicon -->';
					        $tags .= '<link rel="shortcut icon" href="assets/images/favicon.ico">';

					        $tags .= '<!-- App title -->';
					        $tags .= '<title>'.$title.'</title>';

					        if($param_css != 0)
					        {
						        $cid = 0;
						        while($cid < $param_css) {
						        	$css_loop .= '<link href="'.PASSET_BACK.'/'.$param["css"][$cid].'?v=0000'.$cid.'" rel="stylesheet" type="text/css">';
						        	$cid++;
						        }
						        $tags .= $css_loop;
						    }

						    if($param_cssi != 0)
					        {
						        $ciid = 0;
						        while($ciid < $param_cssi) {
						        	$cssi_loop .= $param["cssi"][$ciid];
						        	$ciid++;
						        }
						        $tags .= $style_start;
						        $tags .= $cssi_loop;
						        $tags .= $style_end;
						    }

						    if($param_js != 0)
					        {
						        $jid = 0;
						        while($jid < $param_js) {
						        	$js_loop .= '<script src="'.PASSET_BACK.'/'.$param["js"][$jid].'"></script>';
						        	$jid++;
						        }
						        $tags .= $js_loop;
						    }

						    if($param_jsi != 0)
					        {
						        $jiid = 0;
						        while($jiid < $param_jsi) {
						        	$jsi_loop .= $param["js"][$jiid];
						        	$jiid++;
						        }
						        $tags .= $script_start;
						        $tags .= $jsi_loop;
						        $tags .= $script_end;
						    }

					    $tags .= '</head>';

					return $tags;

			        break;
			    case "footer":
				        if($param_css != 0)
				        {
					        $cid = 0;
					        while($cid < $param_css) {
					        	$css_loop .= '<link href="'.PASSET_BACK.'/'.$param["css"][$cid].'?v=0000'.$cid.'" rel="stylesheet" type="text/css">';
					        	$cid++;
					        }
					        $tags .= $css_loop;
					    }

					    if($param_cssi != 0)
				        {
					        $ciid = 0;
					        while($ciid < $param_cssi) {
					        	$cssi_loop .= $param["cssi"][$ciid];
					        	$ciid++;
					        }
					        $tags .= $style_start;
					        $tags .= $cssi_loop;
					        $tags .= $style_end;
					    }

					    if($param_js != 0)
				        {
					        $jid = 0;
					        while($jid < $param_js) {
					        	$js_loop .= '<script src="'.PASSET_BACK.'/'.$param["js"][$jid].'"></script>';
					        	$jid++;
					        }
					        $tags .= $js_loop;
					    }

					    if($param_jsi != 0)
				        {
					        $jiid = 0;
					        while($jiid < $param_jsi) {
					        	$jsi_loop .= $param["js"][$jiid];
					        	$jiid++;
					        }
					        $tags .= $script_start;
					        $tags .= $jsi_loop;
					        $tags .= $script_end;
					    }

				    	$tags .= '</body>';
				    $tags .= '</html>';

					return $tags;

			        break;
			    default:
			    	$message = $this->_messageError( array(
			    		"function" => "render_html('element', param = array());",
			    		"variabel" => "element",
			    		"message" => "has not been defined!"
			    	) );

			        return $message;
			}
		}

		function page_header()
		{
			$segment1 = $this->uri->segment(1);
			$segment2 = $this->uri->segment(2);
			$segment3 = $this->uri->segment(3);
			
			if($segment3 == "" || $segment3 == NULL)
			{
				$data['title'] = lang("navbar_title");
				$data['subtitle'] = lang("navbar_subtitle");
				$data['breadcrumb'] = array(
					lang("breadcrumb") => $segment1."/".$segment2
				);
			}
			else
			{
				$data['title'] = lang("navbar_title_".$segment3);
				$data['subtitle'] = lang("navbar_subtitle_".$segment3);
				$data['breadcrumb'] = array(
					lang("breadcrumb") => $segment1."/".$segment2, 
					lang("breadcrumb1_".$segment3) => $segment1."/".$segment2."/".$segment3
				);
			}
			return $data;
		}

		function array_merge( $param = array() )
		{
			$merge = array_merge($this->page_header(), $param);
			return $merge;
		}

		/**
		 * Fungsi untuk menampilkan pesan error
		 * @param  string $for   tipe pesan error apa yang akan di buat, class atau function.
		 * @param  array  $param berisi 3 parameter yaitu nama fungsi, param, dan pesan errornya.
		 * @return [type]        nilai kembalinya adalah string, berupa pesan error.
		 */
		function _messageError($param = array(), $for = 'function')
		{
			$for_check = (is_string($for) ? $for : 'no_for');
			$param_check = (count($param) != 0 ? $param : array('function' => '#not_function!', 'variabel' => '#not_variabel!', 'message' => '#not_message!'));
			$style = "
				width: 40%;
				max-height: 400px;
				color: #444;
				padding: 10px;
				background: #eee;
				border: 1px solid #ccc;
				border-radius: 5px;
				word-wrap: normal;
				overflow: auto;
			";

			switch ($for_check) {
				case 'function':
					$error = "
			        	<fieldset>
			        		<legend style='color:red;'><b>Message :</b></legend>
				        	Error Function <pre style='".$style."'>".$param_check['function']."</pre>
				        	<b>".$param_check['variabel']."</b> ".$param_check['message']."
				        	<hr>
				        	<div align='right'>".APP_NAME." ".APP_VERSION."</div>
				        </fieldset>
			        ";

			        return $error;
					break;
				case 'class':
					$error = "
			        	<fieldset>
			        		<legend style='color:red;'><b>Message :</b></legend>
				        	Error Function <pre style='".$style."'>".$param_check['function']."</pre>
				        	<b>".$param_check['variabel']."</b> ".$param_check['message']."
				        	<hr>
				        	<div align='right'>".APP_NAME." ".APP_VERSION."</div>
				        </fieldset>
			        ";

			        return $error;
					break;
				default:
					return "All is not yet defined!";
					break;
			}
		}
	}
?>