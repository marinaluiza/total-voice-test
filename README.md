#Teste Total Voice 
Teste por Marina Luiza Lardizábal Vieira

### Rodar aplicação localmente
* Clonar projeto do git: 
`git clone xxx`
* Mover para o diretório desejado
* No terminal (ou como desejar), entrar no diretório e rodar servidor PHP local: `php -S localhost:8000`
* Entrar na aplicação pelo navegador: http://localhost:8000

### Testes
* Intalar PHP Unit: https://phpunit.de/getting-started.html
* Rodar o comando no terminal: `phpunit --bootstrap service/sms_service.php test/serviceTest/SmsServiceTest`