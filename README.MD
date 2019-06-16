# MVC com CMS

 - <a href="https://www.asolucoesweb.com.br/curso/criando-mvc-do-zero">Criando MVC e CMS do zero</a> - Alexandre Cardoso da ASW

## Tecnologias utilizadas:

 - PHP >= 7.1
 - Docker

## Instalação
Realizar o git clone do projeto
```bash
git clone git@github.com:viniciusmattosrj/mvc-cms.git
```

Entre pelo terminal na pasta do projeto e rode:
```
cp ./docker-compose-example.php  ./docker-compose.php
```

Agora suba o servidor:
```
docker-compose up -d
```

Em outra aba do terminal se conecte no container do php e inicie um servidor built in do PHP
```
docker exec -it php bash
php -S 10.11.0.2:8008 -t public
```

No browser digite http://10.11.0.2:8008


## Contribuições
Caso identifique pontos
que possam ser aprimorados envie o seu PR. ;-)


## License
[MIT](https://choosealicense.com/licenses/mit/)
