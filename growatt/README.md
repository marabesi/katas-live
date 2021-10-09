# Growatt

## Story 1

Eu como usuário quero ter os seguintes dados do painel:

- [X] Quantidade de co2 não emitida
- [X] Quantidade de carvão não queimado
- [X] Total de energia gerada
- [X] Total de árvores não cortadas
- [X] Energia gerada no dia
- [X] Potência atual gerada
- [ ] Atualizar mensagem de error quando usuário e senha são inválidos
- [ ] Realizar testes caso não tenha usuário e senha no env

## Story 2

Eu como usuário quero coletar os dados da api a gerados na story 1 
cada 5 minutos, e enviar essa informação em uma base de dados.
- [ ] Jogar dados da api para a base (Mongo)

## Critério de aceitação

1. Ler os dados a cada 5 minutos através do terminal
2. Consultar a base de dados com a informação enviada (ambas devem corresponder)