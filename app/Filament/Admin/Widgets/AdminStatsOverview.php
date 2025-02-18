<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Categories;
use App\Models\Invitations;
use App\Models\Templates;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AdminStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Profit', '200k')
                ->description('Total profit generated in the system')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),

            Stat::make('Total Users', User::count())
                ->description('Total users in the system')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),

            Stat::make('Total Invitations', Invitations::count())
                ->description('Total invitations sent')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),

            Stat::make('Total Categories', Categories::count())
                ->description('Total categories available')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),

        ];
    }
}
