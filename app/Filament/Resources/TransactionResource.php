<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransactionResource\Pages;
use App\Filament\Resources\TransactionResource\RelationManagers;
use App\Models\Transaction;
use App\Models\Product;
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
                Forms\Components\Select::make('product_id')
                    ->relationship('product', 'name')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(
                        function(callable $set, $state){
                            $product = Product::where('id', $state)->first();
                            if ($product){
                                $price = $product->price;
                                $set('sub_total', $price);
                                $set('grand_total', $price);
                            }
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
                    ->relationship('promoCode', 'code'),
                Forms\Components\TextInput::make("sub_total")
                    ->readOnly()
                    ->required(),
                Forms\Components\TextInput::make("grand_total")
                    ->readOnly()
                    ->required(),
                Forms\Components\Select::make('payment_status')
                    ->required()
                    ->options([
                        'unpaid' => 'belum dibayar',
                        'paid' => 'sudah dibayar'
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product.name'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('grand_total'),
                Tables\Columns\TextColumn::make('payment_status'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
