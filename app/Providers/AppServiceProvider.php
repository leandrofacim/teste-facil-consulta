<?php

namespace App\Providers;

use App\Repositories\AbstractRepository;
use App\Repositories\Repository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(Repository::class, AbstractRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('cpf', function ($attribute, $value, $parameters, $validator) {
            // Remover caracteres não numéricos do CPF
            $cpf = preg_replace('/[^0-9]/', '', $value);

            // Verificar se o CPF tem 11 dígitos
            if (strlen($cpf) !== 11) {
                return false;
            }

            // Verificar se o CPF não contém todos os dígitos iguais (ex: 111.111.111-11)
            if (preg_match('/(\d)\1{10}/', $cpf)) {
                return false;
            }

            // Validar o CPF usando o algoritmo de verificação
            for ($i = 9; $i < 11; $i++) {
                $soma = 0;
                for ($j = 0; $j < $i; $j++) {
                    $soma += $cpf[$j] * (($i + 1) - $j);
                }
                $resto = $soma % 11;
                if ($resto < 2) {
                    $digito = 0;
                } else {
                    $digito = 11 - $resto;
                }
                if ($cpf[$i] != $digito) {
                    return false;
                }
            }

            return true;
        });
    }
}
