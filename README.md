# WP Ion Template #

Template para desenvolvimento de sites enxutos com WordPres, sem a necessidade de utilizar o elemntor, apenas o Guttenberg

## Testado com as seguintes versões: ##

Pacote    | Versão
:-------- | :--------:
PHP       | 7.4.21
WordPress | 6.6.2
Bootstrap | 5.3.3
BS Icons  | 1.11.3

## Documentação do template ##

Todos os frameworks CSS e Js necessários para rodar 100% o template são importados via CDN de cada projeto, sendo assim, é aconselhado a utilização de uma CDN própria para criar uma cópia em Cache destes, para que o uptime do seu site seja satisfatório.

Utilizamos os nomes de classes e ids padrão do Bootstrap, dessa forma, o tempo de desenvolvimento é mais rápido, tendo em vista que já está tudo padronizado e devidamente documentado no próprio site do Bootstrap

### Lista de Funções utilizadas ###

* wp_ion_request_part: Faz a request de elementos contidos na pasta part do template
* wp_ion_request_snippet: faz a request de elementos contidos na pasta snippets do template
