<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Ramirogenda
> Projeto com intuito de disseminar os conhecimentos referentes a desenvolvimento com Laravel

### Requisitos
Sistema de agendamentos, pelo qual teremos empresas, cada empresa tem seus profissionais, cada profissional terá seus serviços e o cliente pode agendar um horário com um profissional para realizar um serviço.

___
#### Requisitos funcionais
* Um mesmo serviço pode ser feito por vários profissionais e cada profissional pode realizar vários serviços.
* Cada serviço tem uma duração.
* O profissional pode especificar um tempo de intervalo entre a execução de cada serviço.
* O profissional pode definir quais horários ele trabalha, podendo por exemplo fazer um turno de manhã e outro à noite, ou somente um turno único a tarde, e também turnos diferentes a cada dia da semana.
* Um profissional pode trabalhar em mais de uma empresa.
* Um cliente pode ver os seus agendamentos.
* Cancelamento:
  * Tempo limite para cancelamento

___
#### DER (Diagrama de Entidade Relacionamento)
<img src="ramirogenda.png">

___
#### TODO
- [ ] Revisar as migrations já criadas e (estudar seguindo a documentação)[https://laravel.com/docs/10.x/migrations]
- [ ] Abrir o model de sua responsabilidade e completar sua implementação

___
#### Responsabilidades
* Company - Marcos
* Worker - Joseph
* Service - Gabriel
* Customer - Patrick
* Schedules Status - Ryan
* Schedules
* Work Shift

___
#### Dúvidas
> Enviem suas dúvidas para o email [veseeutolanaesquina@se.vira](mailto:veseeutolanaesquina@se.vira)
