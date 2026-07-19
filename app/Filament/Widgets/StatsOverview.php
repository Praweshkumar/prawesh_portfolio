<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Projects', \App\Models\Project::count())
                ->description('All uploaded projects')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('success'),
            Stat::make('Total Skills', \App\Models\Skill::count())
                ->description('All listed skills')
                ->descriptionIcon('heroicon-m-sparkles')
                ->color('primary'),
            Stat::make('Total Experience', \App\Models\Experience::count())
                ->description('All experiences added')
                ->descriptionIcon('heroicon-m-academic-cap')
                ->color('warning'),
        ];
    }
}
