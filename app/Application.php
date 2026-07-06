<?php



declare(strict_types=1);



namespace App;



use App\Http\RateLimiter;

use App\Services\AchievementService;

use App\Services\AdminService;

use App\Services\AIService;

use App\Services\AnalyticsService;

use App\Services\ApiKeyService;

use App\Services\AuthExtendedService;

use App\Services\AuthService;

use App\Services\BackupService;

use App\Services\CapstoneService;

use App\Services\CertificateVerifyService;

use App\Services\CodeHistoryService;

use App\Services\CodeRunner;

use App\Services\CommentService;

use App\Services\CourseCmsService;

use App\Services\DailyMissionService;

use App\Services\DockerRunner;

use App\Services\EntitlementService;

use App\Services\ExamService;

use App\Services\Gamification;

use App\Services\JobQueueService;

use App\Services\LearnerContext;

use App\Services\LearningInsightsService;
use App\Services\LearningJourneyService;

use App\Services\LearningPathService;

use App\Services\LessonCmsService;

use App\Services\Mailer;

use App\Services\MentorChatService;

use App\Services\MentorContextService;

use App\Services\MentorFeedback;

use App\Services\MentorService;

use App\Services\NotificationService;

use App\Services\OAuthService;

use App\Services\ProjectService;

use App\Services\ProjectValidator;

use App\Services\PythonCodeRunner;

use App\Services\SearchService;

use App\Services\SecurityService;

use App\Services\SpacedRepetitionService;

use App\Services\SqlRunner;

use App\Services\TeamService;

use App\Support\Logger;



class Application

{

    public readonly LearnerContext $context;

    public readonly ProgressRepository $progress;

    public readonly ExerciseValidator $validator;

    public readonly Gamification $gamification;

    public readonly AchievementService $achievements;

    public readonly MentorService $mentor;

    public readonly MentorFeedback $feedback;

    public readonly CodeRunner $codeRunner;

    public readonly PythonCodeRunner $pythonRunner;

    public readonly SqlRunner $sqlRunner;

    public readonly DockerRunner $dockerRunner;

    public readonly ProjectService $projects;

    public readonly ProjectValidator $projectValidator;

    public readonly AuthService $auth;

    public readonly AuthExtendedService $authExtended;

    public readonly OAuthService $oauth;

    public readonly MentorChatService $chat;

    public readonly AIService $ai;

    public readonly RateLimiter $rateLimiter;

    public readonly Logger $logger;

    public readonly Mailer $mailer;

    public readonly NotificationService $notifications;

    public readonly SearchService $search;

    public readonly AnalyticsService $analytics;

    public readonly EntitlementService $entitlements;

    public readonly AdminService $admin;

    public readonly SpacedRepetitionService $spacedRepetition;

    public readonly DailyMissionService $missions;

    public readonly LearningPathService $learningPaths;

    public readonly CertificateVerifyService $certificateVerify;

    public readonly CourseCmsService $cms;

    public readonly TeamService $teams;

    public readonly ApiKeyService $apiKeys;
    public readonly SecurityService $security;
    public readonly MentorContextService $mentorContext;
    public readonly CodeHistoryService $codeHistory;
    public readonly LearningInsightsService $insights;
    public readonly LearningJourneyService $journey;
    public readonly LessonCmsService $lessonCms;
    public readonly CommentService $comments;
    public readonly ExamService $exams;
    public readonly CapstoneService $capstones;
    public readonly JobQueueService $jobs;
    public readonly BackupService $backup;



    /** @param array<string, mixed> $config */

    public function __construct(

        public readonly array $config,

        public readonly Database $database,

        public readonly Router $router = new Router(),

    ) {

        $pdo = $database->pdo();

        $this->context = new LearnerContext($pdo);

        $this->progress = new ProgressRepository($pdo, $this->context);

        $this->codeRunner = new CodeRunner();

        $this->pythonRunner = new PythonCodeRunner();

        $this->sqlRunner = new SqlRunner();

        $this->dockerRunner = new DockerRunner((bool) ($config['docker_runner'] ?? false));

        $this->validator = new ExerciseValidator($this->codeRunner, $this->pythonRunner, $this->sqlRunner);

        $this->gamification = new Gamification($pdo, $this->context);

        $this->mentor = new MentorService();

        $this->feedback = new MentorFeedback();

        $this->achievements = new AchievementService($pdo, $this->progress, $this->gamification, $this->context);

        $this->projects = new ProjectService($pdo, $this->gamification, $this->context);

        $this->projectValidator = new ProjectValidator($this->validator);

        $this->auth = new AuthService($pdo, $this->context, $this->gamification);

        $this->chat = new MentorChatService();

        $this->ai = new AIService(

            $this->chat,

            $pdo,

            $this->context,

            (string) ($config['openai_api_key'] ?? ''),

            (string) ($config['openai_model'] ?? 'gpt-4o-mini'),

        );

        $this->authExtended = new AuthExtendedService(

            $pdo,

            $this->mailer = new Mailer(

                $pdo,

                (string) ($config['mail_driver'] ?? 'log'),

                (string) ($config['mail_from'] ?? 'noreply@escala.dev'),

                (string) ($config['mail_path'] ?? __DIR__ . '/../storage/mail'),

            ),

            (string) ($config['app_url'] ?? 'http://localhost:8000'),

        );

        $this->oauth = new OAuthService(

            $pdo,

            $this->context,

            $this->gamification,

            (string) ($config['github_client_id'] ?? ''),

            (string) ($config['github_client_secret'] ?? ''),

            (string) ($config['google_client_id'] ?? ''),

            (string) ($config['google_client_secret'] ?? ''),

            (string) ($config['app_url'] ?? 'http://localhost:8000'),

        );

        $this->rateLimiter = new RateLimiter((string) ($config['rate_limit_path'] ?? __DIR__ . '/../storage/rate'));

        $this->logger = new Logger((string) ($config['log_path'] ?? __DIR__ . '/../storage/logs/app.log'));

        $this->notifications = new NotificationService($pdo, $this->context);

        $this->search = new SearchService();

        $this->analytics = new AnalyticsService($pdo, $this->progress, $this->context);

        $this->entitlements = new EntitlementService($pdo, $this->context);

        $this->admin = new AdminService($pdo);

        $this->spacedRepetition = new SpacedRepetitionService($pdo, $this->context);

        $this->missions = new DailyMissionService($pdo, $this->context, $this->gamification);

        $this->learningPaths = new LearningPathService();

        $this->certificateVerify = new CertificateVerifyService($pdo, $this->context);

        $this->cms = new CourseCmsService($pdo);

        $this->teams = new TeamService($pdo);

        $this->apiKeys = new ApiKeyService($pdo);

        $this->security = new SecurityService($pdo, $this->context, $this->authExtended);
        $this->mentorContext = new MentorContextService($this->context, $this->progress, $this->gamification);
        $this->codeHistory = new CodeHistoryService($pdo, $this->context);
        $this->insights = new LearningInsightsService($pdo, $this->context, $this->progress, $this->learningPaths);
        $this->journey = new LearningJourneyService($this->progress, $this->learningPaths, $this->context, $this->insights);
        $this->lessonCms = new LessonCmsService($pdo);
        $this->comments = new CommentService($pdo, $this->context, $this->gamification);
        $this->exams = new ExamService();
        $this->capstones = new CapstoneService();
        $this->jobs = new JobQueueService($pdo, $this->mailer);
        $this->backup = new BackupService(
            (string) ($config['database'] ?? __DIR__ . '/../database/escala.sqlite'),
            __DIR__ . '/../storage/backups',
        );
    }
}

