<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TemplatesResource\Pages;
use App\Filament\Admin\Resources\TemplatesResource\RelationManagers;
use App\Models\Categories;
use App\Models\Templates;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class TemplatesResource extends Resource
{
    protected static ?string $model = Templates::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Master Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make("thumbnail")->required()
                    ->image()
                    ->imagePreviewHeight("150") // Menampilkan preview gambar
                    ->visibility('public')
                    ->disk("public")
                    ->directory("templates-thumbnail"),
                FileUpload::make("template")->required()
                    ->image()
                    ->imagePreviewHeight("150") // Menampilkan preview gambar
                    ->visibility('public')
                    ->disk("public")
                    ->acceptedFileTypes(["text/html"])
                    ->directory("templates"),
                TextInput::make("title")->required(),
                TextInput::make("price")->required()->numeric(),
                TextInput::make("discount")->default(0)->numeric(),
                Select::make("category_id")
                    ->relationship("category", 'title')
                    ->placeholder("Select a category")
                    ->required()

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
                ImageColumn::make("thumbnail"),
                TextColumn::make("title")->sortable()->searchable(),
                TextColumn::make("price")->money('IDR')->sortable(),
                TextColumn::make("discount")->sortable(),
                TextColumn::make("status")->badge()->getStateUsing(fn($record) => $record->status == "hide" ? "Non Active" : "Active")->sortable(),
            ])
            ->filters([
                SelectFilter::make('Status')
                    ->options([
                        'show' => 'Active',
                        'hide' => 'Non Active',
                    ]),
                SelectFilter::make('category_id')
                    ->label("Category")
                    ->searchable()
                    ->placeholder("Select a category")
                    ->options(Categories::all()->pluck('title', 'id')->toArray()),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
        ;
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
            'index' => Pages\ListTemplates::route('/'),
            'create' => Pages\CreateTemplates::route('/create'),
            'edit' => Pages\EditTemplates::route('/{record}/edit'),
        ];
    }
}
