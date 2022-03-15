## Descrição
Esta é uma aplicação desenvolvida para um teste de desenvolvimento para a empresa LEO Learning descrito no [Bitbucket](https://bitbucket.org/leolearningbrasil/desafio-leo/src/master/)

## Candidato
* Juan Carlos Silva Ferreira
* juancferreira.dev@gmail.com
* Desenvolvedor Backend


## Considerações
* Como se trata de uma vaga de Desenvolvedor Backend o foco foi totalmente no Backend, ainda sim foi desenvovida uma interface para testes.
* O Backend foi todo pensado para ser escalável, evitando a repetição de código principalmente em operações no banco de dados.

## Tecnologias
* PHP orientado a objetos
* PHP Data Objects
* MySQL
* HTML
* CSS
* Javascript
* Bootstrap

## Dependências
* PHP
* MySQL
* Composer (apenas para indexação das classes)


## Instalação
```
composer install
```

## Banco de dados
Foi ultizado o MySQL como DB, foram criadas duas tabelas, a `cursos` e `imagens` com o relacionamento `1:N`, segue as queries de criação das tabelas:

~~~sql
CREATE TABLE cursos (
    id int NOT NULL AUTO_INCREMENT,
    titulo varchar(100) NOT NULL,
    descricao text NOT NULL,
    link text NOT NULL,
    PRIMARY KEY (id)
);
~~~
~~~sql
CREATE TABLE imagens (
    id int NOT NULL AUTO_INCREMENT,
    curso_id int NOT NULL,
    path text,
    PRIMARY KEY (id),
    FOREIGN KEY (curso_id) REFERENCES cursos(id) ON DELETE CASCADE
);
~~~

Para definir as informações e credenciais de um banco MySQL basta atualizar as constantes encontradas nas primeiras linhas de `app/DB/Database.php`
