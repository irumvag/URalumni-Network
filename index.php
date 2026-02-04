<?php

$request = $_SERVER['REQUEST_URI'];
$path = parse_url($request, PHP_URL_PATH);

// Remove base directory from path if the app is not in the root
$base_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
if ($base_dir != '/') {
    $path = str_replace($base_dir, '', $path);
}


switch ($path) {
    case '/':
    case '':
    case '/login':
        require __DIR__ . '/login.php';
        break;

    case '/about-us':
        require __DIR__ . '/about us.php';
        break;

    case '/aboutus':
        require __DIR__ . '/aboutus.php';
        break;

    case '/achievement':
        require __DIR__ . '/achievement.php';
        break;

    case '/alumni':
        require __DIR__ . '/alumni.php';
        break;

    case '/approveuser':
        require __DIR__ . '/approveuser.php';
        break;

    case '/contact-us':
        require __DIR__ . '/contact us.php';
        break;

    case '/creategroup':
        require __DIR__ . '/creategroup.php';
        break;

    case '/createuser':
        require __DIR__ . '/createuser.php';
        break;

    case '/deactivate':
        require __DIR__ . '/deactivate.php';
        break;

    case '/eventes':
        require __DIR__ . '/eventes.php';
        break;

    case '/events':
        require __DIR__ . '/events.php';
        break;

    case '/feedback':
        require __DIR__ . '/feedback.php';
        break;

    case '/groups':
        require __DIR__ . '/groups.php';
        break;

    case '/logout':
        require __DIR__ . '/logout.php';
        break;

    case '/message':
        require __DIR__ . '/message.php';
        break;

    case '/message1':
        require __DIR__ . '/message1.php';
        break;

    case '/newletter':
        require __DIR__ . '/newletter.php';
        break;

    case '/opportunity':
        require __DIR__ . '/opportunity.php';
        break;

    case '/other':
        require __DIR__ . '/other.php';
        break;

    case '/post':
        require __DIR__ . '/post.php';
        break;

    case '/profile':
        require __DIR__ . '/profile.php';
        break;

    case '/sign-up':
        require __DIR__ . '/sign up.php';
        break;

    case '/support':
        require __DIR__ . '/support.php';
        break;

    case '/user':
        require __DIR__ . '/user.php';
        break;

    case '/userdashboard':
        require __DIR__ . '/userdashboard.php';
        break;

    case '/userdata':
        require __DIR__ . '/userdata.php';
        break;

    case '/useredit':
        require __DIR__ . '/useredit.php';
        break;

    case '/userevent':
        require __DIR__ . '/userevent.php';
        break;

    case '/usergroup':
        require __DIR__ . '/usergroup.php';
        break;

    case '/userprofile':
        require __DIR__ . '/userprofile.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/404.php';
        break;
}
