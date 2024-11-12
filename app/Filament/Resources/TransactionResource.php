<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransactionResource\Pages;
use App\Filament\Resources\TransactionResource\RelationManagers;
use App\Models\Transaction;
use Filament\Forms;
use Filament\Forms\Form;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransactionResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make("code")
                    ->required()
                    ->unique()
                    ->default(function (){
                        return 'TRXD-'. strtoupper(Str::random(6)) ;
                    }),
                Forms\Components\TextInput::make("name")
                    ->required(),
                Forms\Components\TextInput::make("email")
                    ->required(),
                Forms\Components\TextInput::make("phone")
                    ->required(),
                Forms\Components\TextInput::make("address")
                    ->required(),
                Forms\Components\Select::make("promo_code_id")
                    ->relationship('promo', 'code'),
                Forms\Components\Repeater::make("details")
                    ->relationship('details')
                    ->schema([
                        Forms\Components\Select::make('product_id')
                            ->relationship('product', 'name'),
                        Forms\Components\TextInput::make('quantity')
                            ->numeric()
                            ->minValue(0)
                            ->required()
                    ])->columnSpanFull(),
                Forms\Components\TextInput::make("sub_total")
                    ->disabled()
                    ->required(),
                Forms\Components\TextInput::make("grand_total")
                    ->disabled()
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListTransactions::route('/'),
            'create' => Pages\CreateTransaction::route('/create'),
            'edit' => Pages\EditTransaction::route('/{record}/edit'),
        ];
    }
}
