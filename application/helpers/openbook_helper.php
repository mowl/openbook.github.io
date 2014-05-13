<?php

function to_object($data) {
    return json_decode(json_encode($data));
}

function include_css($adit_css) {
    $ci = &get_instance();
    $css_files = $ci->config->item('css');

    if ($adit_css !== null) {
        
        foreach ($adit_css as $css_file) {
            array_push($css_files, array(
                'file' => $css_file,
                'version' => '1.0'
            ));
        }
       
    }
    
    foreach ($css_files as $css) {
        echo '<link rel="stylesheet" ';

        if (!array_key_exists('extern', $css)) {
            echo 'href="' . base_url('css/' . $css['file']) . '?v=' . $css['version'];
        } else {
            echo 'data-source="extern" href="' . $css['file'];
        }

        echo '">';
    }
}

function include_js($adit_js) {
    $ci = &get_instance();
    $js_files = $ci->config->item('js');

     if ($adit_js !== null) {

        foreach ($adit_js as $js_file) {
            array_push($js_files, array(
                'file' => $js_file,
                'version' => '1.0'
            ));
        }
        
    }
    
    foreach ($js_files as $js) {
        echo '<script src="';

        if (!array_key_exists('extern', $js)) {
            echo base_url('js/' . $js['file']) . '?v=' . $js['version'];
        } else {
            echo $js['file'];
        }

        echo '"></script>';
    }
}

function sanitize($buffer) {

    $search = array('/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s');
    $replace = array('>', '<', '\\1');
    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
}

function include_parts() {
    $ci = &get_instance();

    $parts = array(
        array('id' => 'card', 'view' => 'card_part_view'),
        array('id' => 'user', 'view' => 'user_status_part_view')
    );

    foreach ($parts as $part) {
        echo '<script id="' . $part['id'] . '" type="text/x-template" data-template="true" data-xhr="jq">';
        echo sanitize($ci->load->view('parts/' . $part['view'], null, true));
        echo '</script>';
    };
}