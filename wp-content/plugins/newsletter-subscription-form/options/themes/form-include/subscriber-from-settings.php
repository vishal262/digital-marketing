<?php // add new user subscription via wp mail setting ON
if ( ! defined( 'ABSPATH' ) ) exit;
require(dirname(__FILE__).'/mailchimp/MailChimp.php');
use \DrewM\MailChimp\MailChimp;
if(isset($_POST['submit_subscriber']) && isset($_POST['security'])) {
	if ( ! wp_verify_nonce( $_POST['security'], 'subscriber_nonce_field' ) ) {
		die();}
	global $wpdb;	
	$blog_name= get_bloginfo();
	$table_name = $table_name = $wpdb->prefix . "nls_subscribers";
	$wl_nls_options = get_option('weblizar_nls_options');
	if($wl_nls_options['subscriber_form']=='on') {
		$f_name = sanitize_text_field($_POST['f_name']);
		$l_name = sanitize_text_field($_POST['l_name']);
	}

	$visitor_email = sanitize_email($_POST['subscribe_email']);
	if(!isset($_POST['terms'])) { $terms ='no';} else { $terms =$_POST['terms']; }
	$email_check =$wpdb->get_results( "SELECT * FROM $table_name WHERE email = '$visitor_email'" );
	$num_email = $wpdb->num_rows;
	if($email_check)  {
	   $_SESSION['subscribe_msg'] = $wl_nls_options['sub_form_subscribe_invalid_message'];
	} else {
		if($wl_nls_options['confirm_email_subscribe'] == 'on'){
			$visitor_email = sanitize_email($_POST['subscribe_email']);
		if(!isset($_POST['terms'])) { $terms ='no';} else { $terms =$_POST['terms']; }
			$wl_nls_options = get_option('weblizar_nls_options');
			if($wl_nls_options['subscriber_form']=='on') {
				$f_name = sanitize_text_field($_POST['f_name']);
				$l_name = sanitize_text_field($_POST['l_name']);
			}

			$current_time = current_time( 'Y-m-d h:i:s' );
			$act_code = rand(0,10000); // md5(date("d-m-y h:i:s"));
			$adminemail = $wl_nls_options['wp_mail_email_id'];
			if($adminemail==""){
				$_SESSION['subscribe_msg'] = 'WP Mail : Mailer Error: Could not execute';
			}elseif($adminemail!=""){
				
				$plugin_url = site_url();             
				//$headers = array('From: '.$adminemail);
				$headers = 'Content-type: text/html'."\r\n"."From:$plugin_url <$adminemail>"."\r\n".'Reply-To: '.$adminemail . "\r\n".'X-Mailer: PHP/' . phpversion();			
				
				$subject =  $blog_name.': Confirmation Subscription';
				$wl_nls_options = get_option('weblizar_nls_options');
				if($wl_nls_options['subscriber_form']=='on') {
					$message = 'Hi '.$f_name.' '.$l_name.', <br/>';
				}else{
					$message = 'Hi, <br/>';
				}				
				global $current_user;
				wp_get_current_user();
				$plugin_site_url = site_url();  
				$message .= '<p>'.esc_html__('Thanks for subscribing!', 'NLS_TEXT_DOMAIN').'</p><br><p>'.esc_html__('Click the link below to get confirmed.','NLS_TEXT_DOMAIN').'<br><a href="'.$plugin_site_url.'?act_code='.$act_code.'&'.'email='.$visitor_email.'">'.esc_html__('Confirm Subscriptions', 'NLS_TEXT_DOMAIN').'</a></p><br><p>'.esc_html__('Regards', 'NLS_TEXT_DOMAIN').'</p><p><a href="'.$plugin_site_url.'">'.$blog_name.'</a></p>';
				$mail= wp_mail( $visitor_email, $subject, $message, $headers);

				if($mail){
					$_SESSION['mail_sent_msg'] = $wl_nls_options['sub_form_subscribe_seuccess_message'];
					global $wpdb;
					$table_name = $wpdb->prefix . 'nls_subscribers';
					$wl_nls_options = get_option('weblizar_nls_options');
					if($wl_nls_options['subscriber_form']=='on') {
					$query= $wpdb->insert( $table_name, array( 'email' => $visitor_email ,'f_name' => $f_name ,'l_name' => $l_name ,'terms' => $terms , 'date' => $current_time, 'act_code' => $act_code, 'flag' => 0 ) );
				}else{
					if ( ! $terms ) {
						$terms = 'no';
					}
					$query= $wpdb->insert( $table_name, array( 'email' => $visitor_email, 'terms' => $terms,  'date' => $current_time, 'act_code' => $act_code, 'flag' => 0 ) );
				}					
				} elseif(is_bool($mail == false)) {
					$_SESSION['subscribe_msg'] = "WP-Mail : Connection Error!";
				} else{
					$_SESSION['subscribe_msg'] = "hello ".$wl_nls_options['sub_form_subscribe_invalid_message'];
				}
			}
		} else {
			$visitor_email = sanitize_email($_POST['subscribe_email']);
			if(!isset($_POST['terms'])) { $terms ='no';} else { $terms =$_POST['terms']; }
			$current_time = current_time( 'Y-m-d h:i:s' );
			global $wpdb;
			$table_name = $wpdb->prefix . 'nls_subscribers';
			$wl_nls_options = get_option('weblizar_nls_options');
			if ( ! $terms ) {
				$terms = 'no';
			}
			if($wl_nls_options['subscriber_form']=='on') {
				$query= $wpdb->insert( $table_name, array( 'email' => $visitor_email , 'f_name' => $f_name ,'l_name' => $l_name ,'terms' => $terms , 'date' => $current_time, 'flag' => 1 ) );
			}else{
				$query= $wpdb->insert( $table_name, array( 'email' => $visitor_email ,'terms' => $terms , 'date' => $current_time, 'flag' => 1 ) );
			}
			if($query){
				$_SESSION['subscribe_msg'] = $wl_nls_options['sub_form_subscribe_seuccess_message'];
			} else {
				$_SESSION['subscribe_msg'] = $wl_nls_options['sub_form_subscribe_invalid_message'];
			}
		}
	}
}		   					
if(isset($_POST['php_submit_subscriber']) && isset($_POST['security'])){	
	if ( ! wp_verify_nonce( $_POST['security'], 'php_subscriber_nonce_field' ) ) {
		die();}
	global $wpdb;
	$table_name = $table_name = $wpdb->prefix . "nls_subscribers";
	$visitor_email = sanitize_email($_POST['subscribe_email']);
	
	$email_check =$wpdb->get_results( "SELECT * FROM $table_name WHERE email = '$visitor_email'" );
	$num_email = $wpdb->num_rows;

	if($email_check){
	  $_SESSION['subscribe_msg'] = esc_html__('You have already subscribed', 'NLS_TEXT_DOMAIN');	
	}
	else{ 
		if($wl_nls_options['confirm_email_subscribe'] == 'on'){		
			$select_process = $wl_nls_options['subscribe_select'];
			if($select_process == 'madmimi') {	
				require_once('madmimi/MadMimi.class.php');
				$adminemailid = $wl_nls_options['madmimi_username'];
				$adminapi = $wl_nls_options['madmimi_api_key'];
				$mail = new MadMimi($adminemailid, $adminapi);
				$response = $mail->Lists();
				$recived_email = sanitize_email($_POST['subscribe_email']);
				$plugin_site_url = site_url();
				$wl_nls_options = get_option('weblizar_nls_options');
				if($wl_nls_options['subscriber_form']=='on'){
					$f_name = sanitize_text_field($_POST['f_name']);
					$l_name = sanitize_text_field($_POST['l_name']);
					$options = array(
						   'promotion_name' => $plugin_site_url.' Name: '.$f_name.' '.$l_name,
						   'recipients' => $recived_email,
						   'subject' => 'Signup Confirmation',
						   'from' => 'Mad Mimi <'.$adminemailid.'>'
					);
				}else{
					$options = array(
						   'promotion_name' => $plugin_site_url,
						   'recipients' => $recived_email,
						   'subject' => 'Signup Confirmation',
						   'from' => 'Mad Mimi <'.$adminemailid.'>'
					);	
				}
				
				$html_body = "<html><head><title>".esc_html__("Thanks for Subscribing!", 'NLS_TEXT_DOMAIN' )."</title></head>
				<body>Body content[[tracking_beacon]]</body></html>";
				$mail->SendHTML($options, $html_body);			
			}
			elseif($select_process == 'mailchimp') {	
				$api_key =  $wl_nls_options['mailchimp_api_key'] ;    
				$api = new MailChimp($api_key);

				$list=$wl_nls_options['mailchimp_list_id'];
				$recived_email = sanitize_email($_POST['subscribe_email']);
				$wl_nls_options = get_option('weblizar_nls_options');
				if($wl_nls_options['subscriber_form']=='on'){
					$f_name = sanitize_text_field($_POST['f_name']);
					$l_name = sanitize_text_field($_POST['l_name']);
					$merge_vars = array('FNAME'=>$f_name, 'LNAME'=>$l_name);
					$retval = $api->post("lists/$list/members", array(
						'merge_fields'  => $merge_vars,
						'email_address' => $recived_email,
						'status'        => 'subscribed',
					));
				}else{
					$merge_vars = array('FNAME'=>$recived_email, 'LNAME'=>'');
					$retval = $api->post("lists/$list/members", array(
						'merge_fields'  => $merge_vars,
						'email_address' => $recived_email,
						'status'        => 'subscribed',
					));
				}
			}

			if ($select_process == 'madmimi' && $response == 'Unable to authenticate'){
					$_SESSION['subscribe_msg']= "Unable to authenticate, Please check API Key and User name";
			}
			elseif ($select_process == 'madmimi' && is_bool($response == false)){
					$_SESSION['subscribe_msg']= "Curl error : Could not resolve </br>Host : api.madmimi.com </br>Connection Error : Host not found";
			}
			elseif ($select_process == 'mailchimp' && $api->errorCode){
				$_SESSION['subscribe_msg']= "MailChimp :".$api->errorMessage;
			}
			else{
				$select_mailer = $wl_nls_options['subscribe_select'];
				if ($select_mailer == 'madmimi'){
					$selected_mimi_list = $wl_nls_options['madmimi_list_option'];
					$wl_nls_options = get_option('weblizar_nls_options');
					if($wl_nls_options['subscriber_form']=='on') {
						$user = array('email' => $recived_email, 'firstName' => $f_name, 'lastName' => $l_name,'add_list' => $selected_mimi_list);
					}else{
						$user = array('email' => $recived_email,'add_list' => $selected_mimi_list);
					}	
					$mail->AddUser($user);
					global $wpdb;
							$table_name = $wpdb->prefix . 'nls_subscribers';
							$recived_email = sanitize_email($_POST['subscribe_email']);
							$current_time = current_time( 'Y-m-d h:i:s' );
							$wl_nls_options = get_option('weblizar_nls_options');
							if ( ! $terms ) {
								$terms = 'no';
							}
							if($wl_nls_options['subscriber_form']=='on') {
							$f_name = sanitize_text_field($_POST['f_name']);
							$l_name = sanitize_text_field($_POST['l_name']);
								$query= $wpdb->insert( $table_name, array( 'email' => $recived_email ,'f_name' => $f_name ,'l_name' => $l_name ,'terms' => $terms , 'date' => $current_time, 'flag' => 1 ) );
							}else{
								$query= $wpdb->insert( $table_name, array( 'email' => $recived_email,'terms' => $terms , 'date' => $current_time, 'flag' => 1 ) );
							}
							$_SESSION['subscribe_msg']= $wl_nls_options['sub_form_subscribe_seuccess_message'];
				}
				
				else{
					$_SESSION['subscribe_msg']= $wl_nls_options['sub_form_subscribe_seuccess_message'];
					global $wpdb;
					$table_name = $wpdb->prefix . 'nls_subscribers';
					$recived_email = sanitize_email($_POST['subscribe_email']);			
					$current_time = current_time( 'Y-m-d h:i:s' );
					$wl_nls_options = get_option('weblizar_nls_options');
					if ( !isset($terms) ) {
						$terms = 'no';
					}
					if($wl_nls_options['subscriber_form']=='on') {
						$f_name = sanitize_text_field($_POST['f_name']);
						$l_name = sanitize_text_field($_POST['l_name']);
						$query= $wpdb->insert( $table_name, array( 'email' => $recived_email ,'f_name' => $f_name ,'l_name' => $l_name ,'terms' => $terms ,'date' => $current_time, 'flag' => 1 ) );
					}else{
					$query= $wpdb->insert( $table_name, array( 'email' => $recived_email ,'terms' => $terms ,'date' => $current_time, 'flag' => 1 ) );
					}
				}
			}
		}
		else{
			$visitor_email = sanitize_email($_POST['subscribe_email']);
			$current_time = current_time( 'Y-m-d h:i:s' );
			global $wpdb;
			$table_name = $wpdb->prefix . 'nls_subscribers';
			$wl_nls_options = get_option('weblizar_nls_options');
			if ( ! $terms ) {
				$terms = 'no';
			}
			if($wl_nls_options['subscriber_form']=='on') {
				$query= $wpdb->insert( $table_name, array( 'email' => $visitor_email ,'f_name' => $f_name ,'l_name' => $l_name ,'terms' => $terms , 'date' => $current_time, 'flag' => 1 ) );
			}else{
				if(!isset($_POST['terms'])) { $terms ='no';} else { $terms =$_POST['terms']; }
			$query= $wpdb->insert( $table_name, array( 'email' => $visitor_email ,'terms' => $terms ,'date' => $current_time, 'flag' => 1 ) );
			}
			
			if($query){
				$_SESSION['subscribe_msg'] = $wl_nls_options['sub_form_subscribe_seuccess_message'];
			}else{
				$_SESSION['subscribe_msg'] = $wl_nls_options['sub_form_subscribe_invalid_message'];
			}
		}
	}
}	 
?>
