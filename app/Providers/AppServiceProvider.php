<?php

namespace App\Providers;

use App\Http\Resources\ChannelResource;
use Illuminate\Support\ServiceProvider;
use App\Core\ForumInterface;
use App\Http\Controllers\Discussions\DiscussionsController;
use App\Services\Discussion\DiscussionService;
use App\Services\Reply\ReplyService;
use App\Services\ChannelService\ChannelService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(ForumInterface::class,ChannelService::class);
        $this->app->bind(ForumInterface::class,ReplyServic::class);
        $this->app->bind(ForumInterface::class,DiscussionService::class);
    }
}
