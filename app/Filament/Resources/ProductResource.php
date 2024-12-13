<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Forms\Set;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('product_category_id')
                //dari table mana ke kolomnya apa
                    ->relationship('productCategory', 'name')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->required(),
                Forms\Components\TextInput::make('slug')
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->integer()
                    ->required(),
                Forms\Components\RichEditor::make('description')
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\Toggle::make('is_new')
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\Toggle::make('is_popular')
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\Repeater::make('images')
                    ->relationship('images')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->directory('products')
                            ->required(),
                        Forms\Components\Toggle::make('is_thumbnail')
                            ->required(),
                    ])
                    ->columnSpanFull()
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('productCategory.name'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('description')
                    ->html(),
                Tables\Columns\TextColumn::make('price')
                    ->formatStateUsing(fn(string $state): string => 'Rp. ' . number_format($state, 0, ',', '.')),
                Tables\Columns\ToggleColumn::make('is_new'),
                Tables\Columns\ToggleColumn::make('is_popular'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('product_category_id')
                    ->relationship('productCategory', 'name')
                    ->multiple()
                    ->label('Category'),
                Tables\Filters\SelectFilter::make('is_popular')
                    ->options([
                        true => 'Popular',
                        false => 'Tidak Popular'
                    ])
                    ->label('Is Popular')
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
