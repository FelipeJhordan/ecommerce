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
   
   
## Observações 
   A comunicação com o banco de dados é feita atravéis da classe Sql, utilizando dos recursos PDO (recurso nativo do php atual)
   
   
    
   
   
Template usado no projeto [Almsaeed Studio](https://almsaeedstudio.com)
                              
#                                      **Telas** 
###                                    Tela Principal
![image](https://user-images.githubusercontent.com/44248690/84577197-9ed6e200-ad90-11ea-8e8b-f52462db6525.png)
![Hcode](https://user-images.githubusercontent.com/44248690/84577173-53bccf00-ad90-11ea-914d-51fdf300cc36.PNG)

**OBS Slider com os produtos não implementado ** 

###                                   Login e Cadastrar
![login](https://user-images.githubusercontent.com/44248690/84577236-f83f1100-ad90-11ea-9a4a-4bcebe9ab25e.png)


###                                     Carrinho
![carrinho](https://user-images.githubusercontent.com/44248690/84577280-5c61d500-ad91-11ea-871c-b0d15985f4ff.png)
![image](https://user-images.githubusercontent.com/44248690/84577305-8e733700-ad91-11ea-8704-fd47ff2ace73.png)



###                                      Pagamento

![pagamento](https://user-images.githubusercontent.com/44248690/84577425-4c96c080-ad92-11ea-85f0-930cc39341a0.png)
