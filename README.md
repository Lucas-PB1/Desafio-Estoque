## Sobre o sistema

Este Sistema tem por fim amazernar os dados relacionados aos produtos fornecidos, foram usadas as seguintes tecnologias:

- [Laravel](https://laravel.com/docs/8.x).
- [Node.js](https://nodejs.org/en/).
- [CSS](https://developer.mozilla.org/pt-BR/docs/Web/CSS).
- [HTML](https://developer.mozilla.org/pt-BR/docs/Web/HTML).
- [LESS](https://lesscss.org/).
- [Composer](https://getcomposer.org/).
- [PHP](https://www.php.net/).
- [Mysql](https://www.mysql.com/).

## Como configurar e rodar

Primeiro é necessario ter a instalação de um servidor feito de maneira direta através da configuração do Apache e de um banco de dados, ou através do uso do Xampp e Wamp, onde ambos fornecem os requisitos minimos, também é necessario observar que em caso de necessidade de edição o node.js também se tornará necessario tendo em vista os pacotes necessarios.

### Passo 1 - Clonando o repositorio

Realize o clone deste repositorio via git usando no seu cmd o seguinte comando:

**git clone https://github.com/Lucas-PB1/Desafio-Estoque.git**

### Passo 2 - Arquivo .env

Observe que na pasta principal existe o arquivo .env.example copie o mesmo e mude para .env, na parte referente aos dados do seu banco de dados preencha com os dados do seu banco de dados e na linha 3 do .env.example insira a chave da api.

**base64:p4Cmb4Wn+NUg9sa3Mo7gZgxBR1sinqMz779TH9QhkaM=**

 ### Passo 3 - Npm, Composer e php

 Agora será necessario que vc realize alguns comandos para iniciar o funcionamento

 Dentro do cmd navegue até a pasta de destino do seu projeto, iniciaremos com o composer, para inicializar sua pasta vendor use o comando:
 
 **composer install**
 
 Desta forma ele pegará todos os pacotes PHP necessarios, logo em seguida use:

 **npm install**

 Assim que o finalizar todos os pacotes JS necessarios também estaram instalados na sua maquina, em seguida use:

 **php artisan migrate**

Para instalar o banco de dados, que se você ja configurou no seu .env sera iniciado, logo em seguida rode:

**php artisan db:seed**

Que estará inserindo alguns registros dinamicos que possam servir de guia, agora por fim use:

**npm run dev**

Que ira compilar os arquivos necessarios para rodar o projeto, para executar o projeto use

**php artisan serve**

Basta acessar agora o endereço http://127.0.0.1:8000 e lá vc encontrará o projeto em funcionamento


## Observações

1 - Lembre que para executar o processos acima é necessario ter as ferramentas citadas instaladas, qualquer falta de uma delas resultará num mal funcionamento do projeto

2 - Em caso de perca do banco de dados também é possivel usar **php artisan migrate:fresh** para restaurar ao formato original

3 - Para que os demais comandos do php funcionem deve-se estar executando seu servidor
