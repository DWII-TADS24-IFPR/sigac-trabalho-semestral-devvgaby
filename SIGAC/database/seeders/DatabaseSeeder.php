<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Níveis
        DB::table('niveis')->insert([
            ['id' => 1, 'nome' => 'Técnico'],
            ['id' => 2, 'nome' => 'Superior'],
        ]);

        // Eixos
        DB::table('eixos')->insert([
            ['id' => 1, 'nome' => 'Informática'],
            ['id' => 2, 'nome' => 'Saúde'],
        ]);

        // Cursos
        DB::table('cursos')->insert([
            [
                'id' => 1,
                'nome' => 'Informática para Internet',
                'sigla' => 'INFO',
                'total_horas' => 1200,
                'nivel_id' => 1,
                'eixo_id' => 1,
            ],
            [
                'id' => 2,
                'nome' => 'Enfermagem',
                'sigla' => 'ENF',
                'total_horas' => 1800,
                'nivel_id' => 2,
                'eixo_id' => 2,
            ],
        ]);

        // Turmas
        DB::table('turmas')->insert([
            ['id' => 1, 'curso_id' => 1, 'ano' => 2025],
            ['id' => 2, 'curso_id' => 2, 'ano' => 2025],
        ]);

        // Roles
        DB::table('roles')->insert([
            ['id' => 1, 'nome' => 'admin'],
            ['id' => 2, 'nome' => 'aluno'],
        ]);

        // Resources
        DB::table('resources')->insert([
            ['id' => 1, 'nome' => 'comprovantes'],
        ]);

        // Permissions
        DB::table('permissions')->insert([
            ['role_id' => 1, 'resource_id' => 1, 'permission' => true],
        ]);

        // Users
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@teste.com',
                'password' => Hash::make('senha123'),
                'role_id' => 1,
                'curso_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Aluno Teste',
                'email' => 'aluno@teste.com',
                'password' => Hash::make('senha123'),
                'role_id' => 2,
                'curso_id' => 1,
            ]
        ]);

        // Aluno
        DB::table('alunos')->insert([
            [
                'id' => 1,
                'nome' => 'Aluno Teste',
                'cpf' => '104.965.823-05',
                'email' => 'aluno@teste.com',
                'senha' => Hash::make('senha123'),
                'user_id' => 2,
                'curso_id' => 1,
                'turma_id' => 1,
            ]
        ]);

        // Categorias
        DB::table('categorias')->insert([
            [
                'id' => 1,
                'nome' => 'Atividade Complementar',
                'maximo_horas' => 100.0,
                'curso_id' => 1,
            ]
        ]);

        // Comprovantes
        DB::table('comprovantes')->insert([
            [
                'id' => 1,
                'horas' => 20.5,
                'atividade' => 'Palestra de Segurança da Informação',
                'categoria_id' => 1,
                'aluno_id' => 1,
                'user_id' => 2,
            ]
        ]);

        // Documentos
        DB::table('documentos')->insert([
            [
                'id' => 1,
                'url' => 'documentos/comprovante1.pdf',
                'descricao' => 'Comprovante de palestra',
                'horas_in' => 20.5,
                'status' => 'pendente',
                'comentario' => '',
                'horas_out' => 0,
                'categoria_id' => 1,
                'user_id' => 2,
            ]
        ]);

        // Declarações
        DB::table('declaracoes')->insert([
            [
                'id' => 1,
                'hash' => Str::random(40),
                'data' => Carbon::now(),
                'aluno_id' => 1,
                'comprovante_id' => 1,
            ]
        ]);
    }
}
