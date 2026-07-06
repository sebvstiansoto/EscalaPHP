<?php



declare(strict_types=1);



use App\Controllers\AdminController;

use App\Controllers\ApiController;

use App\Controllers\AuthController;

use App\Controllers\AuthExtendedController;

use App\Controllers\BillingController;

use App\Controllers\CertificateController;

use App\Controllers\ChatController;

use App\Controllers\CourseController;

use App\Controllers\DeveloperGuideController;
use App\Controllers\GlossaryController;

use App\Controllers\HealthController;

use App\Controllers\HomeController;

use App\Controllers\InterviewController;

use App\Controllers\LegalController;
use App\Controllers\LeaderboardController;

use App\Controllers\LessonController;

use App\Controllers\NotificationController;

use App\Controllers\OnboardingController;

use App\Controllers\PathController;

use App\Controllers\PlaygroundController;

use App\Controllers\ProfileController;

use App\Controllers\ProfileDashboardController;

use App\Controllers\ProjectsController;

use App\Controllers\PublicApiController;

use App\Controllers\ReviewController;

use App\Controllers\SearchController;

use App\Controllers\SeoController;

use App\Controllers\SettingsController;

use App\Controllers\TeamController;

use App\Controllers\CapstoneController;
use App\Controllers\CommentController;
use App\Controllers\CronController;
use App\Controllers\DashboardController;
use App\Controllers\ExamController;
use App\Controllers\FaqController;
use App\Controllers\PublicCertController;
use App\Controllers\SecurityController;



/** @var App\Application $app */



$app->router->get('/health', fn () => (new HealthController($app->database))->check());

$seo = fn () => new SeoController($app->config);
$app->router->get('/robots.txt', fn () => $seo()->robots());
$app->router->get('/sitemap.xml', fn () => $seo()->sitemap());

$legal = fn () => new LegalController($app->config);
$app->router->get('/privacidad', fn () => $legal()->privacy());

$app->router->get('/cron', fn () => (new CronController($app->config))->run());



$app->router->get('/', fn () => (new HomeController(

    $app->progress,

    $app->gamification,

    $app->achievements,

    $app->auth,

    $app->learningPaths,

    $app->missions,

    $app->context,

    $app->config,

))->index());

$app->router->get('/curso', fn () => (new CourseController($app->progress, $app->gamification, $app->auth, $app->entitlements, $app->config))->show());



$lessonController = fn () => new LessonController(

    $app->progress,

    $app->validator,

    $app->mentor,

    $app->feedback,

    $app->gamification,

    $app->achievements,

    $app->projects,

    $app->entitlements,

    $app->spacedRepetition,

    $app->missions,

    $app->lessonCms,

    $app->insights,

    $app->config,

);



$app->router->get('/leccion', fn () => $lessonController()->show());

$app->router->post('/leccion', fn () => $lessonController()->submit());

$app->router->post('/leccion/avanzar', fn () => $lessonController()->advance());

$app->router->post('/leccion/retroceder', fn () => $lessonController()->retreat());



$auth = fn () => new AuthController($app->auth, $app->authExtended, $app->rateLimiter, $app->mailer, $app->notifications, $app->security, $app->config);

$app->router->get('/login', fn () => $auth()->loginForm());

$app->router->post('/login', fn () => $auth()->login());

$app->router->get('/registro', fn () => $auth()->registerForm());

$app->router->post('/registro', fn () => $auth()->register());

$app->router->post('/logout', fn () => $auth()->logout());



$authExt = fn () => new AuthExtendedController($app->authExtended, $app->auth, $app->oauth, $app->config);

$app->router->get('/recuperar', fn () => $authExt()->forgotForm());

$app->router->post('/recuperar', fn () => $authExt()->forgot());

$app->router->get('/recuperar/{token}', fn (string $token) => $authExt()->resetForm($token));

$app->router->post('/recuperar/reset', fn () => $authExt()->reset());

$app->router->get('/verificar/{token}', fn (string $token) => $authExt()->verify($token));

$app->router->get('/perfil/2fa', fn () => $authExt()->totpSetup());

$app->router->post('/perfil/2fa', fn () => $authExt()->totpEnable());

$app->router->get('/login/2fa', fn () => $authExt()->totpChallenge());

$app->router->post('/login/2fa', fn () => $authExt()->totpVerify());

$app->router->get('/oauth/github', fn () => $authExt()->githubRedirect());

$app->router->get('/oauth/google', fn () => $authExt()->googleRedirect());
$app->router->get('/oauth/google/callback', fn () => $authExt()->googleCallback());



$app->router->get('/laboratorio', fn () => (new PlaygroundController($app->gamification, $app->achievements, $app->config))->index());

$api = fn () => new ApiController($app->codeRunner, $app->pythonRunner, $app->dockerRunner, $app->achievements, $app->codeHistory, $app->rateLimiter, $app->config);
$app->router->post('/api/run', fn () => $api()->runCode());
$app->router->get('/api/code/history', fn () => $api()->history());
$app->router->post('/api/code/save', fn () => $api()->saveSnapshot());
$app->router->post('/api/chat', fn () => (new ChatController($app->ai, $app->mentorContext, $app->rateLimiter, $app->config))->ask());



$app->router->post('/perfil', fn () => (new ProfileController($app->gamification))->update());

$app->router->get('/perfil', fn () => (new ProfileDashboardController(

    $app->progress,

    $app->gamification,

    $app->achievements,

    $app->analytics,

    $app->notifications,

    $app->entitlements,

    $app->context,

    $app->journey,

    $app->mailer,

    $app->config,

))->index());



$settings = fn () => new SettingsController($app->context, $app->config);

$app->router->post('/ajustes/tema', fn () => $settings()->theme());

$app->router->post('/ajustes/idioma', fn () => $settings()->locale());

$app->router->get('/perfil/api', fn () => $settings()->apiKeys());

$app->router->post('/perfil/api', fn () => $settings()->createApiKey());

$app->router->post('/perfil/api/revocar', fn () => $settings()->revokeApiKey());



$projectsController = fn () => new ProjectsController($app->progress, $app->projects, $app->projectValidator, $app->achievements, $app->auth, $app->config);

$app->router->get('/proyectos', fn () => $projectsController()->index());

$app->router->post('/proyectos/completar', fn () => $projectsController()->complete());



$certController = fn () => new CertificateController($app->progress, $app->achievements, $app->gamification, $app->certificateVerify, $app->learningPaths, $app->config);

$app->router->get('/certificado', fn () => $certController()->show());

$app->router->get('/certificado/pdf', fn () => $certController()->download());



$app->router->get('/mentor', fn () => (new ChatController($app->ai, $app->mentorContext, $app->rateLimiter, $app->config))->index());

$app->router->get('/ranking', fn () => (new LeaderboardController($app->gamification, $app->config))->index());

$app->router->get('/revision', fn () => (new ReviewController($app->spacedRepetition, $app->config))->index());

$app->router->post('/revision', fn () => (new ReviewController($app->spacedRepetition, $app->config))->rate());

$app->router->get('/glosario', fn () => (new GlossaryController($app->config))->index());

$devGuide = fn () => new DeveloperGuideController($app->config);
$app->router->get('/developer', fn () => $devGuide()->index());
$app->router->get('/mapa-developer', fn () => $devGuide()->mapa());
$app->router->get('/checklist-developer', fn () => $devGuide()->checklist());
$app->router->get('/conexiones', fn () => $devGuide()->conexiones());
$app->router->get('/troubleshooting', fn () => $devGuide()->troubleshooting());
$app->router->get('/dia-developer', fn () => $devGuide()->diaADia());



$search = fn () => new SearchController($app->search, $app->config, $app->context);

$app->router->get('/buscar', fn () => $search()->index());

$app->router->get('/api/search', fn () => $search()->api());



$billing = fn () => new BillingController($app->entitlements, $app->context, $app->notifications, $app->mailer, $app->config);

$app->router->get('/precios', fn () => $billing()->pricing());

$app->router->post('/facturacion/checkout', fn () => $billing()->checkout());

$app->router->get('/facturacion/exito', fn () => $billing()->success());

$app->router->post('/webhooks/stripe', fn () => $billing()->webhook());



$admin = fn () => new AdminController($app->admin, $app->cms, $app->lessonCms, $app->jobs, $app->backup, $app->config, $app->context);

$app->router->get('/admin/login', fn () => $admin()->loginForm());

$app->router->post('/admin/login', fn () => $admin()->login());

$app->router->post('/admin/logout', fn () => $admin()->logout());

$app->router->get('/admin', fn () => $admin()->dashboard());

$app->router->get('/admin/usuarios', fn () => $admin()->users());

$app->router->post('/admin/usuarios/plan', fn () => $admin()->setUserPlan());

$app->router->get('/admin/cursos', fn () => $admin()->courses());

$app->router->post('/admin/cursos', fn () => $admin()->saveCourse());

$app->router->get('/admin/analytics', fn () => $admin()->analytics());
$app->router->get('/admin/lecciones', fn () => $admin()->lessons());
$app->router->get('/admin/leccion/editar', fn () => $admin()->editLesson());
$app->router->post('/admin/leccion', fn () => $admin()->saveLesson());
$app->router->get('/admin/logs', fn () => $admin()->logs());
$app->router->post('/admin/jobs', fn () => $admin()->runJobs());
$app->router->post('/admin/backup', fn () => $admin()->backup());



$notif = fn () => new NotificationController($app->notifications);

$app->router->post('/notificaciones/leer', fn () => $notif()->markRead());

$app->router->post('/notificaciones/leer-todas', fn () => $notif()->markAllRead());



$app->router->get('/rutas', fn () => (new PathController($app->learningPaths, $app->context, $app->progress, $app->config))->index());

$app->router->post('/rutas', fn () => (new PathController($app->learningPaths, $app->context, $app->progress, $app->config))->select());

$app->router->get('/entrevista', fn () => (new InterviewController($app->context, $app->config))->index());
$app->router->post('/entrevista', fn () => (new InterviewController($app->context, $app->config))->submit());

$app->router->get('/verificar', fn () => (new VerifyController($app->certificateVerify, $app->config))->form());

$app->router->get('/verificar/check', fn () => (new VerifyController($app->certificateVerify, $app->config))->check());

$app->router->post('/verificar', fn () => (new VerifyController($app->certificateVerify, $app->config))->check());

$app->router->get('/onboarding', fn () => (new OnboardingController($app->config))->quiz());

$app->router->post('/onboarding', fn () => (new OnboardingController($app->config))->submit());



$teams = fn () => new TeamController($app->teams, $app->context, $app->entitlements, $app->config);

$app->router->get('/equipos', fn () => $teams()->index());

$app->router->post('/equipos', fn () => $teams()->create());

$app->router->post('/equipos/invitar', fn () => $teams()->invite());



$publicApi = fn () => new PublicApiController($app->apiKeys, $app->search, $app->context);

$app->router->get('/api/v1/courses', fn () => $publicApi()->courses());

$app->router->get('/api/v1/search', fn () => $publicApi()->search());

$app->router->get('/api/v1/progress', fn () => $publicApi()->progress());

$security = fn () => new SecurityController($app->security, $app->auth, $app->authExtended, $app->config);
$app->router->get('/perfil/seguridad', fn () => $security()->index());
$app->router->post('/perfil/seguridad/password', fn () => $security()->changePassword());
$app->router->post('/perfil/seguridad/revocar', fn () => $security()->revokeSession());
$app->router->post('/perfil/seguridad/2fa-off', fn () => $security()->disable2fa());

$dashboard = fn () => new DashboardController($app->journey, $app->insights, $app->config);
$app->router->get('/dashboard', fn () => $dashboard()->index());
$app->router->post('/dashboard/meta', fn () => $dashboard()->setGoal());
$app->router->post('/dashboard/estudio', fn () => $dashboard()->logStudy());

$exams = fn () => new ExamController($app->exams, $app->context, $app->achievements, $app->config);
$app->router->get('/examenes', fn () => $exams()->index());
$app->router->get('/examenes/{slug}', fn (string $slug) => $exams()->show($slug));
$app->router->post('/examenes', fn () => $exams()->submit());

$capstones = fn () => new CapstoneController($app->capstones, $app->context, $app->config);
$app->router->get('/capstones', fn () => $capstones()->index());
$app->router->get('/capstones/{slug}', fn (string $slug) => $capstones()->show($slug));
$app->router->post('/capstones', fn () => $capstones()->submit());

$comments = fn () => new CommentController($app->comments);
$app->router->get('/api/comments', fn () => $comments()->list());
$app->router->post('/api/comments', fn () => $comments()->post());

$app->router->get('/faq', fn () => (new FaqController())->index());
$app->router->get('/c/{code}', fn (string $code) => (new PublicCertController($app->certificateVerify))->show($code));

