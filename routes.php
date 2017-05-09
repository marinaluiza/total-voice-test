<?php
function call($controller, $action)
{
    require_once('controllers/' . $controller . '_controller.php');
    switch ($controller) {
        case 'sms':
            $controller = new SmsController();
            break;
    }

    $controller->{$action}();
}

$controllers = array('sms' => ['relatorio_sms', 'get_relatorio_sms', 'error']);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('sms', 'error');
    }
} else {
    call('sms', 'error');
}
?>