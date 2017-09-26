# docker na prática

Este repositório contém exemplo de codigo que segue o padrão dos 12 fatores.

## Build

Para iniciar o exemplo use os comandos:

```bash
docker-compose build docker-na-pratica nginx-lb
docker-compose up -d
```

acesse http://localhost:8000

## escalando

Para o sistema escalar utilize o comando:
```bash
docker-compose scale docker-na-pratica=<num Instancias>
```


