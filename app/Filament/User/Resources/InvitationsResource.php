<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\InvitationsResource\Pages;
use App\Filament\User\Resources\InvitationsResource\RelationManagers;
use App\Models\Invitations;
use App\Models\Templates;
use App\Models\WeddingDetails;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use IbrahimBougaoua\RadioButtonImage\Actions\RadioButtonImage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InvitationsResource extends Resource
{
    protected static ?string $model = Invitations::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make(
                    [
                        Step::make("Invitations Details")->schema([
                            TextInput::make("title")->placeholder("Yunus & Anggi")->required(),
                            // TextInput::make("template_id")->label("Template")->placeholder("Yunus & Anggi")->required(),
                            RadioButtonImage::make('template_id')
                                ->label('Templates')
                                ->options(
                                    Templates::where("status", "show")->get()->pluck('thumbnail', 'id')->toArray()
                                ),
                        ]),
                        Step::make("wedding_details")
                            ->label('Bride and Groom Information')
                            ->schema([
                                Fieldset::make("wedding_details")
                                    ->relationship("wedding_details")
                                    ->schema([
                                        TextInput::make("groom_name")->placeholder("Yunus Agung Hamsah")->required(),
                                        TextInput::make("bride_name")->placeholder("Anggi Rustianti")->required(),
                                        TextInput::make("parent_groom")->placeholder("Putra dari bapak Suyantu dan Ibu Surtini")->required(),
                                        TextInput::make("parent_bride")->placeholder("Putri dari bapak Sucipto dan ibu Rini")->required(),
                                    ])
                            ])->columns(2),
                        Step::make("Event Information")
                            ->schema([
                                Repeater::make("events")
                                    ->relationship('events')
                                    ->schema([
                                        TextInput::make("title")
                                            ->placeholder("Akad")
                                            ->required(),
                                        DateTimePicker::make("event_date_start")
                                            ->required(),
                                        DateTimePicker::make("event_date_end")
                                            ->required(),
                                        Textarea::make("address")
                                            ->placeholder("Jl di Ponogoro No 20, Bataan, Bondowoso, Jawa Timur")
                                            ->required()
                                            ->columnSpan(2),
                                        TextInput::make("map_address")
                                            ->required()
                                            ->placeholder('Enter Google Maps link or coordinates')
                                            ->helperText('Example: https://maps.google.com/?q=latitude,longitude')
                                            ->columnSpan(2),
                                        TextInput::make("map_address_preview")
                                            ->required()
                                            ->placeholder('Enter Google Maps embed')
                                            ->helperText('Example: https://maps.google.com/?q=latitude,longitude')
                                            ->columnSpan(2),
                                        Toggle::make("isPrimary")
                                            ->label("Main Event")
                                            ->helperText('countdown will be taken from the main event')
                                            ->columnSpan(2),
                                    ])->columns(2)
                            ]),
                        Step::make("Payments")->schema([])->columns(2),
                    ]
                )->columnSpan(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('No')->getStateUsing(
                    static function ($rowLoop,  $livewire): string {
                        return (string) (
                            $rowLoop->iteration +
                            ($livewire->tableRecordsPerPage * (
                                $livewire->getPage() - 1
                            ))
                        );
                    }
                ),
                ImageColumn::make("template.thumbnail")
                    ->label("Theme"),
                TextColumn::make("title"),
                TextColumn::make("primaryEvents.title")
                    ->label("Main Event"),
                TextColumn::make("primaryEvents.event_date")
                    ->label("Event Date")
                    ->since(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInvitations::route('/'),
            'create' => Pages\CreateInvitations::route('/create'),
            'edit' => Pages\EditInvitations::route('/{record}/edit'),
        ];
    }
}
