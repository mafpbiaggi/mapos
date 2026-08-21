# Deploy no Kubernetes

Este documento descreve como implantar o MapOS em um cluster Kubernetes usando os manifests do diretório `k8s/`.

## Requisitos

- Um cluster Kubernetes disponível
- `kubectl` instalado e configurado para acessar o cluster
- Um StorageClass padrão ou PersistentVolumes compatíveis com os PVCs
- Permissão para criar Secrets, ConfigMaps, Deployments, StatefulSets, Services e PersistentVolumeClaims

## Recursos implantados

Os manifests criam os seguintes recursos:

- MariaDB em um StatefulSet com o nome `mapos-db-stateful`
- MapOS em um Deployment com duas réplicas, chamado `mapos-app-deployment`
- Serviço interno do banco de dados chamado `svc-db`
- Serviço `NodePort` da aplicação chamado `svc-app`, exposto na porta `30000`
- PVC `pvc-db` para os dados do MariaDB
- PVC `pvc-app` para os uploads da aplicação
- ConfigMap `mapos-configmap` com as configurações não sensíveis do banco
- Secret `mapos-secrets` com as credenciais do banco e a chave de criptografia

## Configuração dos Secrets

O Deployment e StatefulSet esperam um Secret chamado `mapos-secrets` com as chaves:

- `MYSQL_ROOT_PASSWORD`
- `MYSQL_PASSWORD`
- `ENCRYPTION_KEY`

Não coloque credenciais reais em arquivos versionados. Crie o Secret diretamente no cluster usando valores informados de forma segura:

```bash
kubectl create secret generic mapos-secrets \
	--from-literal=MYSQL_ROOT_PASSWORD='defina-uma-senha-root' \
	--from-literal=MYSQL_PASSWORD='defina-uma-senha-do-usuario' \
	--from-literal=ENCRYPTION_KEY='defina-uma-chave-aleatoria' \
	--dry-run=client \
	-o yaml | kubectl apply -f -
```

Substitua os valores de exemplo antes de executar o comando. Use uma chave de criptografia longa, aleatória e exclusiva para o ambiente.

> O Secret deve ser criado no mesmo namespace em que os manifests serão aplicados. Os comandos abaixo usam o namespace atual do `kubectl`.

## Implantação

Na raiz do repositório e aplique os recursos:

```bash
kubectl apply -f k8s/configmap.yaml
kubectl apply -f k8s/secrets.yaml
kubectl apply -f k8s/volumes.yaml
kubectl apply -f k8s/services.yaml
kubectl apply -f k8s/db.yaml
kubectl apply -f k8s/app.yaml
```

Se o Secret foi criado com `kubectl create secret`, não é necessário aplicar `k8s/secrets.yaml`. Também é possível aplicar os manifests restantes de uma vez:

```bash
kubectl apply -f k8s/
```

Não use essa opção se `k8s/secrets.yaml` contiver credenciais reais versionadas. Nesse caso, remova o arquivo do fluxo de aplicação e gerencie o Secret separadamente.

## Verificação

Confira o estado dos recursos:

```bash
kubectl get statefulsets
kubectl get deployments
kubectl get pods -l app=mapos-db
kubectl get pods -l app=mapos-app
kubectl get services svc-app svc-db
kubectl get pvc pvc-app pvc-db
```

Aguarde os pods ficarem prontos. Para acompanhar a inicialização:

```bash
kubectl rollout status statefulset/mapos-db-stateful
kubectl rollout status deployment/mapos-app-deployment
```

Consulte os logs se algum pod não iniciar:

```bash
kubectl logs statefulset/mapos-db-stateful
kubectl logs deployment/mapos-app-deployment
```

## Acesso à aplicação

O serviço `svc-app` usa `NodePort` e publica a aplicação na porta `30000` de cada nó do cluster. Obtenha os endereços dos nós:

```bash
kubectl get nodes -o wide
```

Acesse a aplicação pelo endereço:

```text
http://IP_DO_NODE:30000
```

O banco de dados não é exposto externamente. A aplicação acessa o MariaDB pelo serviço interno `svc-db`.

## Atualização da aplicação

Após publicar uma nova imagem, atualize a referência em `k8s/app.yaml` e aplique o manifest novamente:

```bash
kubectl apply -f k8s/app.yaml
kubectl rollout status deployments/mapos-app-deployment
```

Evite usar a tag `latest` em ambientes controlados. Prefira tags imutáveis, como `v1.1.0`, para permitir rastreabilidade e rollback.

## Remoção

Para remover os workloads e serviços:

```bash
kubectl delete -f k8s/app.yaml
kubectl delete -f k8s/db.yaml
kubectl delete -f k8s/services.yaml
kubectl delete -f k8s/configmap.yaml
kubectl delete secret mapos-secrets
```

Os PVCs não são removidos pelos comandos acima. Para removê-los e apagar os dados persistidos, execute explicitamente:

```bash
kubectl delete -f k8s/volumes.yaml
```

Essa operação pode ser destrutiva, dependendo da política de retenção do StorageClass.

## Limitações conhecidas

- O MariaDB está configurado com uma única réplica.
- Os PVCs usam `ReadWriteOnce`. Em clusters single-node, múltiplas réplicas no mesmo nó conseguem montar o mesmo volume normalmente. Em clusters multi-node de produção, réplicas agendadas em nodes diferentes falharão ao montar o PVC — este manifesto não oferece alta disponibilidade real de node, apenas escala de processamento em ambiente de nó único. Para HA de fato, seria necessário `ReadWriteMany` ou storage externo (ex: object storage).
- O serviço da aplicação usa `NodePort`, sem Ingress ou TLS configurados nos manifests atuais.
- O schema inicial do banco deve estar disponível na imagem ou ser importado conforme o processo de inicialização do ambiente.
