<?php

	/**
	 * @return data array []
	 */
	function ud()
	{
        $CI =& get_instance();

        $ud = (array)$CI->session->userdata('data_user');
        return $ud;
    }

    /**
	 * @return data array []
	 */
	function ud_n()
	{
        $CI =& get_instance();

        $ud = $CI->session->userdata('data_user');
        return $ud;
    }