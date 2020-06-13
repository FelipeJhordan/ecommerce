# Projeto E-commerce

Projeto desenvolvido do zero no [Curso de PHP 7](https://www.udemy.com/curso-completo-de-php-7/) disponível na plataforma da Udemy e no site do [HTML5dev.com.br](https://www.html5dev.com.br/curso/curso-completo-de-php-7).

## Blibiotecas usadas
   - PhpMailer (Envio de E-mails)
   - **Framework** Slim (rotas - criação de API RESTful)
   - RainTPL (Criação de template, para separar o html do código )

## Ferramentas usadas
   - Visual Studio Code && Sublime Text
   - Pacote XAMP
   - Mysql workbench 
   - Git
## APIs externas usadas 
   - ViaCep
   - Pagseguro
   - Paypal
   
## Organização dos diretórios 
   - O index.php está dentro da pasta principal do projeto, contendo referência as rotas e iniciando o App atravéis do Slim.
   - As Classes estão dentro da pasta Vendor\HcodeBr\php-classes.
   - As rotas estão contidas no diretório principal do projeto.
   - Os arquivos HTML estão contidos dentro da pasta VIEWS e o cache requisitado pelo Rain está contido no .\views-cache.
   - Os Estilos/Template usado na página de Admin estão contidos no .\res.
   
   
## Observação 
   A comunicação com o banco de dados é feita atravéis da classe Sql, utilizando dos recursos PDO (recurso nativo do php atual)
   
   
    
   
   
Template usado no projeto [Almsaeed Studio](https://almsaeedstudio.com)
